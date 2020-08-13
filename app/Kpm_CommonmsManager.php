<?php
/**
 *  Kpm_CommonmsManager.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: a17b62fb78834da3c636228f401e740cd5bfdb64 $
 */

/**
 *  Kpm_CommonmsManager
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_CommonmsManager extends Ethna_AppManager
{
	private function getDB()
	{
		$serverName = "localhost\\SQLEXPRESS";
		$connectionInfo = array("UID"=>"sa",
						"PWD"=>"0ulBTrIb",
						"Database"=>"KPPress",
						"CharacterSet"=>"UTF-8");

		$msdb = sqlsrv_connect($serverName, $connectionInfo);
		if ($msdb === FALSE){
			print "failed to connect to sql server\n";
			print var_export(sqlsrv_errors(), true);
			exit;
		}
		return $msdb;
	}

	private function closeDB($msdb)
	{
		sqlsrv_close($msdb);
	}
	
	public function getLastestDate($lvl = null, $authID = null)
	{
		$sql = <<< 'SQL'
			SELECT
				MAX(JunsongDateTime) AS datetime,
				DATE_FORMAT(MAX(JunsongDateTime), '%Y,%m,%d ') AS date,
				TIME_FORMAT(MAX(JunsongDateTime), '%H:%i') AS time,
				DAYOFWEEK(MAX(JunsongDateTime)) AS week
			FROM
				articles
SQL;
		$where = array();
		$param = array();
		if ($lvl != null) {
			$where[] = "importance > ?";
			$param[] = $lvl;
		}
		if ($authID != null){
			$where[] = "AuthID >= ?";
			$param[] = $authID;
		}
		if (count($where) > 0){
			$sql .= (" WHERE " . implode(" AND ", $where));
		}

		$db =& $this->backend->getDB();
		if (count($param) > 0) {
			$result =& $db->query($sql, $param);
		} else {
			$result =& $db->query($sql);
		}
		$val = $result->fetchRow();

		return $val;
	}
	
	public function getLastEdit()
	{
		$val = $this->getLastestDate();

		$str = "";
		$str .= _et('編集');
		$str .= " ";
		$str .= $val['date'];
		$str .= " ";

		switch($val['week']) {
			case '1':
				$str .= _et("(日)");
				break;
			case '2':
				$str .= _et("(月)");
				break;
			case '3':
				$str .= _et("(火)");
				break;
			case '4':
				$str .= _et("(水)");
				break;
			case '5':
				$str .= _et("(木)");
				break;
			case '6':
				$str .= _et("(金)");
				break;
			case '7':
				$str .= _et("(土)");
				break;
		}

		$str .= " ";
		$str .= $val['time'];

		return $str;
	}

	public function getJournalList()
	{
		$sql = <<< 'SQL'
			SELECT
				MediaID,
				MediaName,
				MediaNameJpn,
				MediaNameEng
			FROM
				media
			WHERE
				MediaParentID = 201
			ORDER BY
				sequence
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql);
		while($val = $result->fetchRow()){
			$list[] = $val;
		}
	
		return $list;
	}

	public function getMediaList()
	{
		$sql = <<< 'SQL'
			SELECT
				MediaID,
				MediaName
			FROM
				media
			WHERE
				MediaParentID = 101
			ORDER BY
				sequence
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql);
		while($val = $result->fetchRow()){
			$list[] = $val;
		}
	
		return $list;
	}
	
	public function getLatestNews($limit = 5)
	{
		$lastestDate = $this->getLastestDate();

		$sql = <<< 'SQL'
			SELECT
				MediaName,
				ArticleID,
				Title,
				LanguageID,
				SectionID,
				articles.MediaID,
				LocalID,
				JunsongDateTime
			FROM
				articles
			INNER JOIN 
				media
					ON articles.MediaID = media.MediaID
			WHERE
				AuthID >= 303
				AND LanguageID = 101
				AND importance > 0
				AND InputDateTime >= date_add(?, interval -7 day)
			ORDER BY
				JunsongDateTime DESC
			LIMIT ?
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($lastestDate['datetime'], $limit));
		while($val = $result->fetchRow()){
			$list[] = $val;
		}
	
		return $list;
	}

	public function getLatestNotice($limit = 5)
	{
		$sql = <<< 'SQL'
			SELECT
				*
			FROM
				bbs
			WHERE
				bbsid = 'notice'
			ORDER BY
				number DESC
			LIMIT ?
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($limit));
		while($val = $result->fetchRow()){
			$list[] = $val;
		}
	
		return $list;
	}

	public function getLatestNoticeFromMSSQL($limit = 5)
	{
		$serverName = "localhost\\SQLEXPRESS";
		$connectionInfo = array("UID"=>"sa",
						"PWD"=>"0ulBTrIb",
						"Database"=>"KPPress",
						"CharacterSet"=>"UTF-8");

		$msdb = sqlsrv_connect($serverName, $connectionInfo);
		if ($msdb === FALSE){
			print "failed to connect to sql server\n";
			print var_export(sqlsrv_errors(), true);
			exit;
		} 

		$sql = <<< 'SQL'
			SELECT TOP 5
				BbsID,
				Category,
				Number,
				Subject,
				Text,
				FileName,
				FileSize,
				DownLoad,
				WriteUserID,
				WriteUserName,
				WriteCustomerName,
				Password,
				WriterIP,
				convert(VARCHAR, RegDate, 120) as RegDate,
				hit,
				ref,
				lev,
				pos
			FROM
				bbs
			WHERE
				bbsid = 'notice'
			ORDER BY
				number DESC
SQL;
		
		$result = sqlsrv_query($msdb, $sql);
		if ($result === false) return null;

		$list = array();
		while ($row = sqlsrv_fetch_array($result)){
//var_dump($row);
			$list[] = $row;
		}

		return $list;
	}

	public function getArticleAllList($cnt, $day)
	{
		$lastestDate = $this->getLastestDate();

		$sql = <<< 'SQL'
			SELECT
				MediaName,
				ArticleID,
				Title,
				LanguageID,
				SectionID,
				articles.MediaID,
				LocalID,
				JunsongDateTime,
				chkphoto
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
			WHERE
				AuthID >= 303
				AND LanguageID = 101
				AND importance > 1
				AND InputDateTime >= date_add(?, interval ? day)
			ORDER BY
				JunsongDateTime DESC
			LIMIT ?
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($lastestDate['datetime'], $day, $cnt));
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);			
			$list[] = $val;
		}
	
		return $list;
	}

	public function getArticleListByMediaID($id, $cnt, $day)
	{
		$lastestDate = $this->getLastestDate();

		$sql = <<< 'SQL'
			SELECT
				ArticleID,
				Title,
				LanguageID,
				SectionID,
				MediaID,
				LocalID,
				JunsongDateTime,
				chkphoto
			FROM
				articles
			WHERE
				MediaID = ?
				AND AuthID >= 303
				AND LanguageID = 101
				AND importance = 1
				AND InputDateTime >= date_add(?, interval ? day)
			ORDER BY
				JunsongDateTime DESC
			LIMIT ?
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($id, $lastestDate['datetime'], $day, $cnt));
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);			
			$list[] = $val;
		}
	
		return $list;
	}

	public function getPhotoList()
	{
		$sql = <<< 'SQL'
			SELECT
				mmFileID,
				Title,
				TitleJpn,
				TitleEng,
				Caption,
				CaptionJpn,
				CaptionEng,
				Location_Thumb,
				Location_Large,
				inputDateTime,
				InputDateTime
			FROM
				mmfiles
			WHERE
				AuthID = 201
				AND Status > 1
			ORDER BY
				InputDateTime DESC
			LIMIT 5
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql);
		while($val = $result->fetchRow()){
			$list[] = $val;
		}
	
		return $list;
	}

	public function getVideoList()
	{
		$sql = <<< 'SQL'
			SELECT
				mmFileID,
				Title,
				TitleJpn,
				TitleEng,
				Caption,
				CaptionJpn,
				CaptionEng,
				Location_Thumb,
				Location_Large,
				inputDateTime,
				InputDateTime
			FROM
				mmfiles
			WHERE
				AuthID = 202
				AND Status > 1
			ORDER BY
				InputDateTime DESC
			LIMIT 2
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql);
		while($val = $result->fetchRow()){
			$list[] = $val;
		}
	
		return $list;
	}

	public function getEditorialList()
	{
		$lastestDate = $this->getLastestDate();

		$sql = <<< 'SQL'
			SELECT
				ArticleID,
				Title
			FROM
				articles
			WHERE
				SectionID = 108
				AND importance > 1
				AND LanguageID = 101
				AND InputDateTime >= date_add(?, interval -30 day)
			ORDER BY
				JunsongDateTime DESC
			LIMIT 2
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($lastestDate['datetime']));
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}
	
		return $list;
	}

	public function getInterviewList()
	{
		$lastestDate = $this->getLastestDate();

		$sql = <<< 'SQL'
			SELECT
				ArticleID,
				Title
			FROM
				articles
			WHERE
				SectionID = 109
				AND LanguageID = 101
				AND InputDateTime >= date_add(?, interval -500 day)
			ORDER BY
				JunsongDateTime DESC
			LIMIT 2
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($lastestDate['datetime']));
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}
	
		return $list;
	}

	public function getContributionList()
	{
		$sql = <<< 'SQL'
			SELECT
				ArticleID,
				Title
			FROM
				articles
			WHERE
				Title like '&lt;기고&gt;%'
			ORDER BY
				JunsongDateTime DESC
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}
	
		return $list;
	}

	public function getMediaName($id)
	{
		$sql = <<< 'SQL'
			SELECT
				MediaName,
				MediaNameJpn,
				lim_number,
				lim_date,
				image
			FROM
				media
			WHERE MediaID = ?
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($id));
		$val = $result->fetchRow();

		return $val;
	}

	public function getArticleAllListCntByMediaID($id, $lvl, $lastestdate)
	{
		$sql = <<< 'SQL'
			SELECT
				COUNT(*) AS cnt
			FROM
				articles
			WHERE
				MediaID = ?
				AND AuthID >= 303
				AND LanguageID = 101
				AND importance > ?
				AND JunsongDateTime >= date_add(?, interval -7 day)
			ORDER BY
				JunsongDateTime DESC
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($id, $lastestdate, $lvl));
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function getArticleAllListByMediaID($id, $offset, $limit)
	{
		$mediaName   = $this->getMediaName($id);
		$lastestDate = $this->getLastestDate(0);
		$allListCnt  = $this->getArticleAllListCntByMediaID($id, $lastestDate['datetime'], 0);

		$sql = <<< 'SQL'
			SELECT
				ArticleID,
				Title,
				LanguageID,
				SectionID,
				MediaID,
				LocalID,
				JunsongDateTime,
				chkphoto
			FROM
				articles
			WHERE
				MediaID = ?
				AND AuthID >= 303
				AND LanguageID = 101
				AND importance > 0
				AND JunsongDateTime >= date_add(?, interval -14 day)
			ORDER BY
				JunsongDateTime DESC
			LIMIT ?
			OFFSET ?
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($id, $lastestDate['datetime'], $limit, $offset));
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		$ret = array(
			'allListCnt' => $allListCnt,
			'mediaName'  => $mediaName,
			'list'       => $list,
		);

		return $ret;
	}

	public function getArticleAllListCntSearch($mediaID, $lvl, $keyword, $lastestdate)
	{
		$sql = <<< 'SQL'
			SELECT
				COUNT(*) AS cnt
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
			WHERE
				AuthID >= 303
				AND LanguageID = 101
				AND importance > ?
				AND JunsongDateTime >= date_add(?, interval -7 day)
				%s
			ORDER BY
				JunsongDateTime DESC
SQL;

		$additionalWhere = array();
		$param = array();

		$param[] = $lvl;
		$param[] = $lastestdate;

		if ($mediaID != "" && $mediaID != "0"){
			$additionalWhere[] = "media.MediaID = ?";
			$param[] = (int)$mediaID;
		}
		if ($keyword != ""){
			$keyword = mb_convert_kana($keyword, 's');
			$keywordList = explode(" ", $keyword);

			/*foreach($keywordList as $idx => $val) {
				$additionalWhere[] = "(Title LIKE ? OR Nayong1 LIKE ? OR Nayong2 LIKE ?)";
				$param[] = '%'.$val.'%';
				$param[] = '%'.$val.'%';
				$param[] = '%'.$val.'%';
			}*/
			$additionalWhere[] = "MATCH(Title, Nayong1, Nayong2) AGAINST (? IN BOOLEAN MODE) ";
			$param[] = str_replace(" ", " +", trim($keyword));
		}

		if (count($additionalWhere) > 0){
			$sql = sprintf($sql, " AND " . implode(" AND ", $additionalWhere));
		}else{
			$sql = sprintf($sql, "");
		}

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function getArticleAllListSearch($mediaID, $lvl, $keyword, $offset, $limit)
	{
		$lastestDate = $this->getLastestDate($lvl, 303);
		$allListCnt  = $this->getArticleAllListCntSearch($mediaID, $lvl, $keyword, $lastestDate['datetime']);

		$sql = <<< 'SQL'
			SELECT
				ArticleID,
				Title,
				LanguageID,
				SectionID,
				articles.MediaID,
				MediaName,
				LocalID,
				JunsongDateTime,
				chkPhoto 
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
			WHERE
				AuthID >= 303
				AND LanguageID = 101
				AND importance > ?
				AND JunsongDateTime >= date_add(?, interval -7 day)
				%s
			ORDER BY
				JunsongDateTime DESC
			LIMIT ?
			OFFSET ?
SQL;

		$additionalWhere = array();
		$param = array();

		$param[] = $lvl;
		$param[] = $lastestDate['datetime'];

		if ($mediaID != "" && $mediaID != "0"){
			$additionalWhere[] = "media.MediaID = ?";
			$param[] = (int)$mediaID;
		} else {
			//$additionalWhere[] = "media.MediaID <> 1007";
			//$param[] = (int)$mediaID;
		}
		if ($keyword != ""){
			$keyword = mb_convert_kana($keyword, 's');
			$keywordList = explode(" ", $keyword);

			/*foreach($keywordList as $idx => $val) {
				$additionalWhere[] = "(Title LIKE ? OR Nayong1 LIKE ? OR Nayong2 LIKE ?)";
				$param[] = '%'.$val.'%';
				$param[] = '%'.$val.'%';
				$param[] = '%'.$val.'%';
			}*/
			$additionalWhere[] = "MATCH(Title, Nayong1, Nayong2) AGAINST (? IN BOOLEAN MODE) ";
			$param[] = str_replace(" ", " +", trim($keyword));
		}

		if (count($additionalWhere) > 0){
			$sql = sprintf($sql, " AND " . implode(" AND ", $additionalWhere));
		}else{
			$sql = sprintf($sql, "");
		}

		$param[] = $limit;
		$param[] = $offset;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		$ret = array(
			'allListCnt' => $allListCnt,
			'list'       => $list,
		);

		return $ret;
	}

	public function getArticleListCntByDate($mediaID, $date)
	{
		$sql = <<< 'SQL'
			SELECT
				COUNT(*) AS cnt
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
			WHERE
				JunsongDateTime BETWEEN ? AND ? 
				AND AuthID >= 303
				AND importance > 0
				AND LanguageID = ?
				%s
			ORDER BY
				JunsongDateTime DESC
SQL;

		$additionalWhere = array();
		$param = array();

		$param[] = $date . " 00:00:00";
		$param[] = $date . " 23:59:59";
		$param[] = 101;

		if ($mediaID != "" && $mediaID != "0"){
			$additionalWhere[] = "articles.MediaID = ?";
			$param[] = (int)$mediaID;
		}

		if (count($additionalWhere) > 0){
			$sql = sprintf($sql, " AND " . implode(" AND ", $additionalWhere));
		}else{
			$sql = sprintf($sql, "");
		}

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function getArticleListByDate($mediaID, $date, $offset, $limit)
	{
		$allListCnt  = $this->getArticleListCntByDate($mediaID, $date);

		$sql = <<< 'SQL'
			SELECT
				ArticleID,
				Title,
				JunsongDateTime,
				MediaName,
				MediaNameJpn,
				chkPhoto
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
			WHERE
				JunsongDateTime BETWEEN ? AND ? 
				AND AuthID >= 303
				AND importance > 0
				AND LanguageID = ?
				%s
			ORDER BY
				JunsongDateTime DESC
			LIMIT ?
			OFFSET ?
SQL;

		$additionalWhere = array();
		$param = array();

		$param[] = $date . " 00:00:00";
		$param[] = $date . " 23:59:59";
		$param[] = 101;

		if ($mediaID != "" && $mediaID != "0"){
			$additionalWhere[] = "articles.MediaID = ?";
			$param[] = (int)$mediaID;
		}

		if (count($additionalWhere) > 0){
			$sql = sprintf($sql, " AND " . implode(" AND ", $additionalWhere));
		}else{
			$sql = sprintf($sql, "");
		}

		$param[] = $limit;
		$param[] = $offset;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		$ret = array(
			'allListCnt' => $allListCnt,
			'list'       => $list,
		);

		return $ret;
	}

	public function getCategoryInfo($id, $category)
	{
		if (strtolower($category) == "section") {
			$sql = "SELECT SectionName AS name, lim_date from sections WHERE SectionID = ?";
		} else {
			$sql = "SELECT LocalName AS name, lim_date from locals WHERE LocalID = ?";
		}

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($id));
		$val = $result->fetchRow();

		$res = array(
			'name'     => $val['name'],
			'lim_date' => $val['lim_date']
		);

		return $res;
	}

	public function getSectionList()
	{
		$sql = "SELECT SectionId, SectionName from sections WHERE SectionID < 109 AND SectionID > 0";

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql);
		while($val = $result->fetchRow()){
			$list[] = $val;
		}

		return $list;
	}

	public function getArticleAllListCntBySectionID($id, $day, $lvl, $lang)
	{
		$lastestDate = $this->getLastestDate($lvl, 303);

		$sql = <<< 'SQL'
			SELECT
				COUNT(*) AS cnt
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
			WHERE
				SectionID = ?
				AND AuthID >= 303
				AND LanguageID = ?
				AND JunsongDateTime >= date_add(?, interval -7 day)
				AND importance > ?
			ORDER BY
				JunsongDateTime DESC
SQL;

		if (is_null($lvl) || $lvl == "") {
			$lvl = -1;
		}

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($id, $lang, $lastestDate['datetime'], $lvl));
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function getArticleAllListBySectionID($id, $day, $lvl, $lang, $offset, $limit)
	{
		$lastestDate = $this->getLastestDate($lvl, 303);
		$allListCnt  = $this->getArticleAllListCntBySectionID($id, $day, $lvl, $lang);

		$sql = <<< 'SQL'
			SELECT
				ArticleID,
				Title,
				LanguageID,
				SectionID,
				articles.MediaID,
				mediaName,
				LocalID,
				JunsongDateTime,
				chkPhoto
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
			WHERE
				SectionID = ?
				AND AuthID >= 303
				AND LanguageID = ?
				AND JunsongDateTime >= date_add(?, interval -7 day)
				AND importance > ?
			ORDER BY
				JunsongDateTime DESC
			LIMIT ?
			OFFSET ?
SQL;

		if (is_null($lvl) || $lvl == "") {
			$lvl = -1;
		}

		$param = array($id, $lang, $lastestDate['datetime'], $lvl, $limit, $offset);
		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		$ret = array(
			'allListCnt' => $allListCnt,
			'list'       => $list,
		);

		return $ret;
	}

	public function getArticleAllListCntByLocalID($id, $day, $lvl, $lang)
	{
		$lastestDate = $this->getLastestDate($lvl, 303);

		$sql = <<< 'SQL'
			SELECT
				COUNT(*) AS cnt
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
			WHERE
				LocalID = ?
				AND AuthID >= 303
				AND LanguageID = ?
				AND JunsongDateTime >= date_add(?, interval -7 day)
				AND importance > ?
			ORDER BY
				JunsongDateTime DESC
SQL;

		if (is_null($lvl) || $lvl == "") {
			$lvl = -1;
		}

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, array($id, $lang, $lastestDate['datetime'], $lvl));
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function getArticleAllListByLocalID($id, $day, $lvl, $lang, $offset, $limit)
	{
		$lastestDate = $this->getLastestDate($lvl, 303);
		$allListCnt  = $this->getArticleAllListCntBySectionID($id, $day, $lvl, $lang);

		$sql = <<< 'SQL'
			SELECT
				ArticleID,
				Title,
				LanguageID,
				SectionID,
				articles.MediaID,
				mediaName,
				LocalID,
				JunsongDateTime,
				chkPhoto
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
			WHERE
				LocalID = ?
				AND AuthID >= 303
				AND LanguageID = ?
				AND JunsongDateTime >= date_add(?, interval -7 day)
				AND importance > ?
			ORDER BY
				JunsongDateTime DESC
			LIMIT ?
			OFFSET ?
SQL;

		if (is_null($lvl) || $lvl == "") {
			$lvl = -1;
		}

		$param = array($id, $lang, $lastestDate['datetime'], $lvl, $limit, $offset);
		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		$ret = array(
			'allListCnt' => $allListCnt,
			'list'       => $list,
		);

		return $ret;
	}

	public function getJournalIssueYearList($id)
	{
		$sql = <<< 'SQL'
			SELECT
				balHengYear
			FROM
				journalsarticle
			WHERE
				JournalID = ?
			GROUP BY
				balHengYear
			ORDER BY
				balHengYear ASC
SQL;

		$param = array($id);
		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$list[] = $val;
		}

		return $list;
	}

	public function getJournalIssueNumList($id, $year)
	{
		$sql = <<< 'SQL'
			SELECT
				gwonho
			FROM
				journalsarticle
			WHERE
				JournalID = ?
				AND BalHengYear = ?
			GROUP BY
				gwonho
			ORDER BY
				balHengYear ASC
SQL;

		$param = array($id, $year);
		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$list[] = $val;
		}

		return $list;
	}

	public function getJournalListCntSearch($id, $year, $num)
	{
		$sql = <<< 'SQL'
			SELECT
				COUNT(*) AS cnt
			FROM
				journalsarticle
			WHERE
				JournalID = ?
				AND Status > 0
				%s
			ORDER BY
				BalHengYear DESC,
				GwonHo DESC
SQL;

		$where = array();
		$param = array();

		$param[] = $id;

		if ($year != ""){
			$where[] = "AND BalHengYear = ?";
			$param[] = $year;
		}
		if ($num != ""){
			$where[] = "AND Gwonho = ?";
			$param[] = $num;
		}

		if (count($where) > 0){
			$sql = sprintf($sql, implode(" ", $where));
		}else{
			$sql = sprintf($sql, "");
		}

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function getJournalListSearch($id, $year, $num, $offset, $limit)
	{
		$allListCnt  = $this->getJournalListCntSearch($id, $year, $num);
		
		$sql = <<< 'SQL'
			SELECT
				JArticleID,
				Title,
				Writers,
				BalHengYear,
				GwonHo,
				FileName,
				Status
			FROM
				journalsarticle
			WHERE
				JournalID = ?
				AND Status > 0
				%s
			ORDER BY
				BalHengYear DESC,
				GwonHo DESC,
				InputDateTime ASC
			LIMIT ?
			OFFSET ?
SQL;

		$where = array();
		$param = array();

		$param[] = $id;

		if ($year != ""){
			$where[] = "AND BalHengYear = ?";
			$param[] = $year;
		}
		if ($num != ""){
			$where[] = "AND Gwonho = ?";
			$param[] = $num;
		}

		if (count($where) > 0){
			$sql = sprintf($sql, implode(" ", $where));
		}else{
			$sql = sprintf($sql, "");
		}

		$param[] = $limit;
		$param[] = $offset;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		$ret = array(
			'allListCnt' => $allListCnt,
			'list'       => $list,
		);

		return $ret;
	}

	public function getMediaAllListCnt($authID, $status, $sectionId)
	{
		$sql = <<< 'SQL'
		SELECT
			COUNT(*) AS cnt
		FROM 
			mmfiles
		WHERE
			AuthID = ?
			AND Status > ?
			%s
		ORDER BY
			InputDateTime DESC
SQL;

		$where = array();
		$param = array();

		$param[] = $authID;
		$param[] = $status;

		if ($sectionId != "" && $sectionId != 0){
			$where[] = "AND SectionID = ?";
			$param[] = $sectionId;
		}

		if (count($where) > 0){
			$sql = sprintf($sql, implode(" ", $where));
		}else{
			$sql = sprintf($sql, "");
		}

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function getMediaAllList($authID, $status, $sectionId, $offset, $limit)
	{
		$allListCnt  = $this->getMediaAllListCnt($authID, $status, $sectionId);
		
		$sql = <<< 'SQL'
		SELECT
			mmFileID,
			Title,
			TitleJpn,
			TitleEng,
			Caption,
			CaptionJpn,
			CaptionEng,
			Location_Thumb,
			Location_Large,
			inputDateTime,
			InputDateTime
		FROM 
			mmfiles
		WHERE
			AuthID = ?
			AND Status > ?
			%s
		ORDER BY
			InputDateTime DESC
		LIMIT ?
		OFFSET ?
SQL;

		$where = array();
		$param = array();

		$param[] = $authID;
		$param[] = $status;

		if ($sectionId != "" && $sectionId != 0){
			$where[] = "AND SectionID = ?";
			$param[] = $sectionId;
		}

		if (count($where) > 0){
			$sql = sprintf($sql, implode(" ", $where));
		}else{
			$sql = sprintf($sql, "");
		}

		$param[] = $limit;
		$param[] = $offset;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		$ret = array(
			'allListCnt' => $allListCnt,
			'list'       => $list,
		);

		return $ret;
	}

	public function getMediaFileInfoByFileID($id, $chk = "")
	{
		$sql = <<< 'SQL'
		SELECT
			*
		FROM 
			mmfiles
		WHERE
			mmFileID = ?
SQL;

		$param = array();
		$param[] = $id;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		if ($chk == "") {
			$val['dpi'] = $this->read_JFIF_dpi($_SERVER['DOCUMENT_ROOT'] . $val['Location_Large']);
			$imageinfo     = getimagesize($_SERVER['DOCUMENT_ROOT'] . $val['Location_Large']);
			$val['width']  = $imageinfo[0];
			$val['height'] = $imageinfo[1];
		}

		if ($chk == "56"){
			$val['url_video'] = $val['Location_small'];
		} else {
			$val['url_video'] = $val['Location_Large'];
		}

		$fileSize = (int)$val['FileSize'];
		if ($fileSize < 1024) {
			$val['FileSize'] = sprintf("%d B", $fileSize);
		} else if ($fileSize < (1024 * 1024)) {
			$val['FileSize'] = sprintf("%d KB", $fileSize / 1024);
		} else {
			$val['FileSize'] = sprintf("%.1f MB", $fileSize / (1024 * 1024));
		}

		return $val;
	}

	function read_JFIF_dpi($filename)
	{
	    $dpi = 0;
	    $fp = @fopen($filename, r);
	    if ($fp) {
	        if (fseek($fp, 6) == 0) { // JFIF often (but not always) starts at offset 6.
	            if (($bytes = fread($fp, 16)) !== false) { // JFIF header is 16 bytes.
	                if (substr($bytes, 0, 4) == "JFIF") { // Make sure it is JFIF header.
	                    $JFIF_density_unit = ord($bytes[7]);
	                    $JFIF_X_density = ord($bytes[8])*256 + ord($bytes[9]); // Read big-endian unsigned short int.
	                    $JFIF_Y_density = ord($bytes[10])*256 + ord($bytes[11]); // Read big-endian unsigned short int.
	                    if ($JFIF_X_density == $JFIF_Y_density) { // Assuming we're only interested in JPEGs with square pixels.
	                        if ($JFIF_density_unit == 1) $dpi = $JFIF_X_density; // Inches.
	                        else if ($JFIF_density_unit == 2) $dpi = $JFIF_X_density * 2.54; // Centimeters.
	                    }
	                }
	            }
	        }
	        fclose($fp);
	    }
	    return ($dpi);
	}	

	public function getArticleInfoByArticleID($id)
	{
		$sql = <<< 'SQL'
			SELECT
				Title,
				SubTitle,
				articles.MediaID,
				MediaName,
				MediaNameJpn,
				image,
				articles.SectionID,
				SectionName,
				SectionNameJpn,
				articles.LocalID,
				LocalName,
				LocalNameJpn,
				SubNayong,
				SubNayongChk,
				Nayong1,
				Nayong2,
				JunsongDateTime,
				WriterName,
				Email,
				LinkArticles,
				MediaParentID,
				chkPhoto
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
			INNER JOIN
				sections
					ON articles.SectionID = sections.SectionID
			INNER JOIN
				locals
					ON articles.LocalID = locals.LocalID
			WHERE
				ArticleID = ?
SQL;

		$param = array();
		$param[] = $id;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();
		$val['Title'] = htmlspecialchars_decode($val['Title']);
		$val['Nayong1'] = htmlspecialchars_decode($val['Nayong1']);
		$val['Nayong2'] = htmlspecialchars_decode($val['Nayong2']);

		return $val;
	}

	public function getRelArticleList($id)
	{
		$idlist = explode(";", $id);
		
		$sql = <<< 'SQL'
			SELECT
				ArticleID,
				Title
			FROM
				articles
			WHERE
				%s
			ORDER BY
				JunsongDateTime DESC
SQL;

		$where = array();
		$param = array();
		foreach ($idlist as $idx => $val) {
			$where[] = "ArticleID = ?";
			$param[] = $val;
		}

		$sql = sprintf($sql, implode(" OR ", $where));

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		return $list;
	}

	public function getJouralInfoByArticleID($id)
	{
		$sql = <<< 'SQL'
			SELECT
				journalsarticle.JournalID,
				MediaName,
				BalHengJi,
				BalHengCher,
				BalHengJugi,
				SeoJiInfo,
				JungGiGanHengMulNo,
				ISSN,
				Title,
				TitleEng,
				Writers,
				Nayong1,
				Nayong2,
				BalHengYear,
				GwonHo,
				Rugye,
				Page,
				JunsongCher,
				FileName,
				Status
			FROM
				journalsarticle
			INNER JOIN
				journals
					ON journalsarticle.JournalID = journals.JournalID
			INNER JOIN
				media
					ON journalsarticle.JournalID = media.MediaID
			WHERE
				JArticleID = ?
SQL;

		$param = array();
		$param[] = $id;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();
		$val['Title'] = htmlspecialchars_decode($val['Title']);
		$val['Nayong1'] = htmlspecialchars_decode($val['Nayong1']);
		$val['Nayong2'] = htmlspecialchars_decode($val['Nayong2']);

		return $val;
	}

	public function searchNewsListCnt($keyword, $yf, $mf, $df, $yt, $mt, $dt)
	{
		$sql = <<< 'SQL'
			SELECT
				COUNT(*) AS cnt
			FROM
				articles
				%s
			ORDER BY
				junsongdateTime DESC
SQL;

		$wherestr = "";
		$where = array();
		$param = array();

		$keyword = mb_convert_kana($keyword, 's');
		$keywordList = explode(" ", $keyword);
		/*foreach ($keywordList as $idx => $val) {
			$where[] = "Nayong2 LIKE ?";
			$param[] = "%".$val."%";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		$where = array();
		foreach ($keywordList as $idx => $val) {
			$where[] = "Nayong1 LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		$where = array();
		foreach ($keywordList as $idx => $val) {
			$where[] = "Title LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}*/
		if (count($keywordList) > 0) {
			$wherestr .= "MATCH(Title, Nayong1, Nayong2) AGAINST (? IN BOOLEAN MODE) ";
			$param[] = str_replace(" ", " +", trim($keyword));
		}

		if ($yf != "" && $mf != "" && $df != "" && $yt != "" && $mt != "" && $dt != "") {
			if ($wherestr != ""){
				$wherestr = "(".$wherestr.") AND ";
			}
			$wherestr .= "(InputDateTime >= ? AND InputDateTime <= ?)";
			$param[] = sprintf("%s/%s/%s 00:00:00", $yf, $mf, $df);
			$param[] = sprintf("%s/%s/%s 23:59:59", $yt, $mt, $dt);
		}

		if ($wherestr != ""){
			$sql = sprintf($sql, " WHERE " . $wherestr);
		}
//var_dump($sql);
//var_dump($param);
		
		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function searchNewsList($keyword, $offset, $limit, $yf, $mf, $df, $yt, $mt, $dt)
	{
		$allListCnt  = $this->searchNewsListCnt($keyword, $yf, $mf, $df, $yt, $mt, $dt);

		$sql = <<< 'SQL'
			SELECT
				MediaName,
				ArticleID,
				Title,
				JunSongDateTime
			FROM
				articles
			INNER JOIN
				media
					ON articles.MediaID = media.MediaID
				%s
			ORDER BY
				junsongdateTime DESC
			LIMIT ?
			OFFSET ?
SQL;

		$wherestr = "";
		$where = array();
		$param = array();

		$keyword = mb_convert_kana($keyword, 's');
		$keywordList = explode(" ", $keyword);
		/*foreach ($keywordList as $idx => $val) {
			$where[] = "Nayong2 LIKE ?";
			$param[] = "%".$val."%";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		$where = array();
		foreach ($keywordList as $idx => $val) {
			$where[] = "Nayong1 LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		$where = array();
		foreach ($keywordList as $idx => $val) {
			$where[] = "Title LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}*/
		if (count($keywordList) > 0) {
			$wherestr .= "MATCH(Title, Nayong1, Nayong2) AGAINST (? IN BOOLEAN MODE) ";
			$param[] = str_replace(" ", " +", trim($keyword));
		}

		if ($yf != "" && $mf != "" && $df != "" && $yt != "" && $mt != "" && $dt != "") {
			if ($wherestr != ""){
				$wherestr = "(".$wherestr.") AND ";
			}
			$wherestr .= "(InputDateTime >= ? AND InputDateTime <= ?)";
			$param[] = sprintf("%s/%s/%s 00:00:00", $yf, $mf, $df);
			$param[] = sprintf("%s/%s/%s 23:59:59", $yt, $mt, $dt);
		}

		if ($wherestr != ""){
			$sql = sprintf($sql, " WHERE " . $wherestr);
		}

		$param[] = $limit;
		$param[] = $offset;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		$ret = array(
			'allListCnt' => $allListCnt,
			'list'       => $list,
		);

		return $ret;
	}

	public function searchJournalListCnt($keyword, $yf, $mf, $df, $yt, $mt, $dt)
	{
		$sql = <<< 'SQL'
			SELECT
				COUNT(*) AS cnt
			FROM
				journalsarticle
				%s
			ORDER BY
				BalHengYear DESC,
				gwonho DESC
SQL;

		$wherestr = "";
		$where = array();
		$param = array();

		$keyword = mb_convert_kana($keyword, 's');
		$keywordList = explode(" ", $keyword);
		/*foreach ($keywordList as $idx => $val) {
			$where[] = "Nayong2 LIKE ?";
			$param[] = "%".$val."%";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		$where = array();
		foreach ($keywordList as $idx => $val) {
			$where[] = "Nayong1 LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		$where = array();
		foreach ($keywordList as $idx => $val) {
			$where[] = "Title LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}*/
		if (count($keywordList) > 0) {
			$wherestr .= "MATCH(Title, Nayong1, Nayong2) AGAINST (? IN BOOLEAN MODE) ";
			$param[] = str_replace(" ", " +", trim($keyword));
		}

		if ($yf != "" && $mf != "" && $df != "" && $yt != "" && $mt != "" && $dt != "") {
			if ($wherestr != ""){
				$wherestr = "(".$wherestr.") AND ";
			}
			$wherestr .= "(InputDateTime >= ? AND InputDateTime <= ?)";
			$param[] = sprintf("%s/%s/%s 00:00:00", $yf, $mf, $df);
			$param[] = sprintf("%s/%s/%s 23:59:59", $yt, $mt, $dt);
		}

		if ($wherestr != ""){
			$sql = sprintf($sql, " WHERE " . $wherestr);
		}

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function searchJournalList($keyword, $offset, $limit, $yf, $mf, $df, $yt, $mt, $dt)
	{
		$allListCnt  = $this->searchJournalListCnt($keyword, $yf, $mf, $df, $yt, $mt, $dt);

		$sql = <<< 'SQL'
			SELECT
				MediaName,
				JArticleID,
				Title,
				BalHengYear,
				GwonHo
			FROM
				journalsarticle
			INNER JOIN
				media
					ON journalsarticle.JournalID = media.MediaID
				%s
			ORDER BY
				BalHengYear DESC,
				gwonho DESC
			LIMIT ?
			OFFSET ?
SQL;

		$wherestr = "";
		$where = array();
		$param = array();

		$keyword = mb_convert_kana($keyword, 's');
		$keywordList = explode(" ", $keyword);
		/*foreach ($keywordList as $idx => $val) {
			$where[] = "Nayong2 LIKE ?";
			$param[] = "%".$val."%";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		$where = array();
		foreach ($keywordList as $idx => $val) {
			$where[] = "Nayong1 LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		$where = array();
		foreach ($keywordList as $idx => $val) {
			$where[] = "Title LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}*/
		if (count($keywordList) > 0) {
			$wherestr .= "MATCH(Title, Nayong1, Nayong2) AGAINST (? IN BOOLEAN MODE) ";
			$param[] = str_replace(" ", " +", trim($keyword));
		}

		if ($yf != "" && $mf != "" && $df != "" && $yt != "" && $mt != "" && $dt != "") {
			if ($wherestr != ""){
				$wherestr = "(".$wherestr.") AND ";
			}
			$wherestr .= "(InputDateTime >= ? AND InputDateTime <= ?)";
			$param[] = sprintf("%s/%s/%s 00:00:00", $yf, $mf, $df);
			$param[] = sprintf("%s/%s/%s 23:59:59", $yt, $mt, $dt);
		}

		if ($wherestr != ""){
			$sql = sprintf($sql, " WHERE " . $wherestr);
		}

		$param[] = $limit;
		$param[] = $offset;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		$ret = array(
			'allListCnt' => $allListCnt,
			'list'       => $list,
		);

		return $ret;
	}

	public function searchPhotoListCnt($keyword, $yf, $mf, $df, $yt, $mt, $dt)
	{
		$sql = <<< 'SQL'
			SELECT
				COUNT(*) AS cnt
			FROM
				mmfiles
			WHERE
				authID = 201
				AND status > 0
				%s
			ORDER BY
				InputDateTime DESC
SQL;

		$wherestr = "";
		$where = array();
		$param = array();

		$keyword = mb_convert_kana($keyword, 's');
		$keywordList = explode(" ", $keyword);
		foreach ($keywordList as $idx => $val) {
			$where[] = "Caption LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		$where = array();
		foreach ($keywordList as $idx => $val) {
			$where[] = "Title LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		if ($yf != "" && $mf != "" && $df != "" && $yt != "" && $mt != "" && $dt != "") {
			if ($wherestr != ""){
				$wherestr = "(".$wherestr.") AND ";
			}
			$wherestr .= "(InputDateTime >= ? AND InputDateTime <= ?)";
			$param[] = sprintf("%s/%s/%s 00:00:00", $yf, $mf, $df);
			$param[] = sprintf("%s/%s/%s 23:59:59", $yt, $mt, $dt);
		}

		if ($wherestr != ""){
			$sql = sprintf($sql, " AND " . $wherestr);
		}

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function searchPhotoList($keyword, $offset, $limit, $yf, $mf, $df, $yt, $mt, $dt)
	{
		$allListCnt  = $this->searchPhotoListCnt($keyword, $yf, $mf, $df, $yt, $mt, $dt);

		$sql = <<< 'SQL'
			SELECT
				mmFileID,
				Title,
				InputDateTime,
				Location_Thumb
			FROM
				mmfiles
			WHERE
				authID = 201
				AND status > 0
				%s
			ORDER BY
				InputDateTime DESC
			LIMIT ?
			OFFSET ?
SQL;

		$wherestr = "";
		$where = array();
		$param = array();

		$keyword = mb_convert_kana($keyword, 's');
		$keywordList = explode(" ", $keyword);
		foreach ($keywordList as $idx => $val) {
			$where[] = "Caption LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		$where = array();
		foreach ($keywordList as $idx => $val) {
			$where[] = "Title LIKE ?";
			$param[] = "%".$val."%";
		}
		if ($wherestr != ""){
			$wherestr .= " OR ";
		}
		if (count($where) > 0) {
			$wherestr .= "(".implode(" AND ", $where).")";
		}

		if ($yf != "" && $mf != "" && $df != "" && $yt != "" && $mt != "" && $dt != "") {
			if ($wherestr != ""){
				$wherestr = "(".$wherestr.") AND ";
			}
			$wherestr .= "(InputDateTime >= ? AND InputDateTime <= ?)";
			$param[] = sprintf("%s/%s/%s 00:00:00", $yf, $mf, $df);
			$param[] = sprintf("%s/%s/%s 23:59:59", $yt, $mt, $dt);
		}

		if ($wherestr != ""){
			$sql = sprintf($sql, " AND " . $wherestr);
		}

		$param[] = $limit;
		$param[] = $offset;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$val['Title'] = htmlspecialchars_decode($val['Title']);
			$list[] = $val;
		}

		$ret = array(
			'allListCnt' => $allListCnt,
			'list'       => $list,
		);

		return $ret;
	}




































/*
SELECT TOP 1000 [CustomerIPRangeID]
      ,[CustomerID]
      ,[IPRangeBegin]
      ,[IPRangeEnd]
  FROM [KPPress].[dbo].[CustomerIPRanges]
  where [KPPress].[dbo].[IPAddressToInteger]('222.110.9.196') >=
          [KPPress].[dbo].[IPAddressToInteger]([IPRangeBegin]) AND
        [KPPress].[dbo].[IPAddressToInteger]('222.110.9.196') <=   
          [KPPress].[dbo].[IPAddressToInteger]([IPRangeEnd]) 
        */



	public function checkIPAddrRange($ipaddr)
	{
		$sql = <<< 'SQL'
			SELECT
				CustomerID
			FROM
				customeripranges
			WHERE
				INET_ATON(?) >= INET_ATON(iprangebegin)
				AND INET_ATON(?) <= INET_ATON(iprangeend);
SQL;

		$param = array();
		$param[] = $ipaddr;
		$param[] = $ipaddr;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$list[] = $val;
		}

		return $list;
	}

	public function checkLoginIDandPassword($userid, $password)
	{
		$sql = <<< 'SQL'
			SELECT
				CustomerID,
				CustomerName,
				License
			FROM
				customers
			WHERE
				CustomerLoginID = ?
				AND CustomerLoginPWD = ?
SQL;

		$param = array();
		$param[] = $userid;
		$param[] = $password;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		while($val = $result->fetchRow()){
			$list[] = $val;
		}

		return $list;
	}
	
	public function getActiveLoginUser($userid)
	{
		$sql = <<< 'SQL'
			SELECT
				count(SessionID) AS cnt
			FROM
				customerslogincount
			WHERE
				CustomerLoginID = ?
SQL;

		$param = array();
		$param[] = $userid;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		return $val['cnt'];
	}

	public function isExistLoginSession($userid, $sessionid)
	{
		$sql = <<< 'SQL'
			SELECT
				COUNT(*) AS cnt
			FROM
				customerslogincount
			WHERE
				SessionID = ?
				AND CustomerLoginID = ?
SQL;

		$param = array();
		$param[] = $sessionid;
		$param[] = $userid;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		return $val['cnt'] > 0 ? true : false;
	}

	public function insertLoginSession($userid, $sessionid)
	{
		if ($this->isExistLoginSession($userid, $sessionid)) {
			return true;
		}

		$sql = <<< 'SQL'
			INSERT INTO
				customerslogincount (
					SessionID,
					CustomerLoginID,
					LoginDate
				) VALUES (
					?,
					?,
					NOW()
				)
SQL;

		$param = array();
		$param[] = $sessionid;
		$param[] = $userid;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);

		return $result;
	}

	public function deleteLoginSession($sessionid)
	{
		$sql = <<< 'SQL'
			DELETE FROM
				customerslogincount
			WHERE
				SessionID = ?
SQL;

		$param = array();
		$param[] = $sessionid;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);

		return $result;
	}

	public function incrementNoticeHitNum($no)
	{
		$sql = <<< 'SQL'
			UPDATE
				bbs
			SET
				hit = hit + 1
			WHERE
				bbsID = 'notice'
				AND number = ?
SQL;

		$param = array();
		$param[] = $no;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);

		return $result;
	}

	public function getNoticeInfo($no)
	{
		$this->incrementNoticeHitNum($no);
		
		$sql = <<< 'SQL'
			SELECT
				subject,
				text,
				writeuserid,
				writeusername,
				regdate,
				hit
			FROM
				bbs
			WHERE
				bbsID = 'notice'
				AND number = ?
SQL;

		$param = array();
		$param[] = $no;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);
		$val = $result->fetchRow();

		return $val;
	}

	public function incrementNoticeHitNumFromMSSQL($msdb, $no)
	{
		$sql = <<< 'SQL'
			UPDATE
				bbs
			SET
				hit = hit + 1
			WHERE
				bbsID = 'notice'
				AND number = ?
SQL;

		$param = array();
		$param[] = $no;

		$result = sqlsrv_query($msdb, $sql, $param);

		return $result;
	}
	
	public function getNoticeInfoFromMSSQL($no)
	{
		$serverName = "localhost\\SQLEXPRESS";
		$connectionInfo = array("UID"=>"sa",
						"PWD"=>"0ulBTrIb",
						"Database"=>"KPPress",
						"CharacterSet"=>"UTF-8");

		$msdb = sqlsrv_connect($serverName, $connectionInfo);
		if ($msdb === FALSE){
			print "failed to connect to sql server\n";
			print var_export(sqlsrv_errors(), true);
			exit;
		}

		$this->incrementNoticeHitNumFromMSSQL($msdb, $no);
		
		$sql = <<< 'SQL'
			SELECT
				subject,
				text,
				writeuserid,
				writeusername,
				convert(VARCHAR, RegDate, 120) as RegDate,
				hit
			FROM
				bbs
			WHERE
				bbsID = 'notice'
				AND number = ?
SQL;

		$param = array();
		$param[] = $no;

		$result = sqlsrv_query($msdb, $sql, $param);
		$row = sqlsrv_fetch_array($result);

		return $row;
	}

	public function getNextContactNo()
	{
		$sql = <<< 'SQL'
			SELECT
				MAX(number) AS MaxNo
			FROM
				bbs
			WHERE
				bbsid = 'contact'
SQL;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql);
		$val = $result->fetchRow();

		return $val['MaxNo'] == "" ? 1 : $val['MaxNo'] + 1;
	}

	public function insertContact($no, $subject, $text, $writeusername, $writerip, $filename)
	{
		$sql = <<< 'SQL'
			INSERT INTO
				bbs
					(
						BbsID,
						Number,
						Subject,
						Text,
						WriteUserID,
						WriteUserName,
						WriterIP,
						FileName,
						regdate,
						hit
					) VALUES (
						'contact',
						?,
						?,
						?,
						"",
						?,
						?,
						?,
						NOW(),
						0
					)
SQL;

		$param = array();
		$param[] = $no;
		$param[] = $subject;
		$param[] = $text;
		$param[] = $writeusername;
		$param[] = $writerip;
		$param[] = $filename;

		$list = array();
		$db =& $this->backend->getDB();
		$db->query("SET NAMES utf8;");
		$result =& $db->query($sql, $param);

		return $result;
	}




}
