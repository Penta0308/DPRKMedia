{* <!--
<%@ Control Language="vb" AutoEventWireup="false" Codebehind="Left.ascx.vb" Inherits="KPPress.Left_jpn" TargetSchema="http://schemas.microsoft.com/intellisense/ie5" %>
--> *}
<table cellSpacing="0" cellPadding="0" width="132" bgColor="#ffffff" border="0">
	{if $session.LoginType eq "ID"}
	<tr>
		<td>
			<TABLE cellSpacing="0" cellPadding="0" width="132" bgColor="#ffffff" border="0">
				<TR>
					<TD height="26">
						<a href="/japanese/index?act=logout">
							<img src="/images/btn_logout.gif" alt="LGOOUT">
						</a>
					</TD>
				</TR>
				<TR>
					<TD height="3"></TD>
				</TR>
			</TABLE>
		</td>
	</tr>
	{/if}
	<tr>
		<td height="26"><IMG height="29" src="/images/bar_left_rodong.gif" width="132"></td>
	</tr>
	<tr>
		<td height="5"></td>
	</tr>
	<tr>
		<td bgcolor="#ededed" height="36" align="center">
			<a href="http://www.dprkmedia.net/" target="_blank">
			<img src="http://www.dprkmedia.com/images/rodong_title.jpg" width="132">
			</a>
		</td>
	</tr>
	<tr>
		<td class="branch2" bgcolor="#ededed" height="56">
			<a href="http://www.dprkmedia.net/" target="_blank"><b>労働新聞PDF<br>データサービス</b></a>
		</td>
	</tr>
	{* <!--tr>
		<td bgcolor="#ededed" height="36" align="center">
			<a href="http://www.korea-copy.com/" target="_blank">
			<img src="http://www.korea-copy.com/rodongpic.php" width="132">
			</a>
		</td>
	</tr--> *}
	


	<tr>
		<td height="10"></td>
	</tr>
	<tr>
		<td height="26"><IMG height="29" src="/images/bar_left_minju.gif" width="132"></td>
	</tr>
	<tr>
		<td height="5"></td>
	</tr>
	<tr>
		<td bgcolor="#ededed" height="36" align="center">
			<a href="http://www.korea-copy.com/minju/" target="_blank">
			<img src="http://www.dprkmedia.com/images/minju_title.jpg" width="132">
			</a>
		</td>
	</tr>
	<tr>
		<td class="branch2" bgcolor="#ededed" height="56">
			<a href="http://www.korea-copy.com/minju/" target="_blank"><b>民主朝鮮PDF<br>データサービス</b></a>
		</td>
	</tr>


	<tr>
		<td height="10"></td>
	</tr>
	<tr>
		<td height="26"><IMG height="29" src="/images/bar_left_munhak.gif" width="132"></td>
	</tr>
	<tr>
		<td height="5"></td>
	</tr>
	<tr>
		<td bgcolor="#ededed" height="36" align="center">
			<a href="http://www.korea-copy.com/munhak/" target="_blank">
			<img src="http://www.dprkmedia.com/images/munhak_title.jpg" width="132">
			</a>
		</td>
	</tr>
	<tr>
		<td class="branch2" bgcolor="#ededed" height="56">
			<a href="http://www.korea-copy.com/munhak/" target="_blank"><b>文学新聞PDF<br>データサービス</b></a>
		</td>
	</tr>


	
	<tr>
		<td height="10"></td>
	</tr>
	<tr>
		<td height="26"><IMG height="29" src="/images/bar_left_news.gif" width="132"></td>
	</tr>
	<tr>
		<td height="7" bgcolor="#ededed"></td>
	</tr>
	<tr>
		<td class="branch1" bgcolor="#ededed">
			<a id="Left1_hl_key" href="/japanese/listall?lvl=1">主要記事</a><br>
			<a id="Left1_hl_all" href="/japanese/listall?lvl=0">すべての記事</a><br>
			<a id="Left1_hl_past" href="/japanese/searchpast">過去の記事</a><br>
			<a id="Left1_hl_s_101" href="/japanese/listetc?ID=101&chk_etc=section">政治</a><br>
			<a id="Left1_hl_s_102" href="/japanese/listetc?ID=102&chk_etc=section">外交</a><br>
			<a id="Left1_hl_s_103" href="/japanese/listetc?ID=103&chk_etc=section">経済</a><br>
			<a id="Left1_hl_s_104" href="/japanese/listetc?ID=104&chk_etc=section">社会</a><br>
			<a id="Left1_hl_s_105" href="/japanese/listetc?ID=105&chk_etc=section">文化</a><br>
			<a id="Left1_hl_s_106" href="/japanese/listetc?ID=106&chk_etc=section">情報科学</a><br>
			<a id="Left1_hl_s_107" href="/japanese/listetc?ID=107&chk_etc=section">スポーツ</a><br>
			<a id="Left1_hl_s_108" href="/japanese/listetc?ID=108&chk_etc=section">社説/論評</a><br>
			<a id="Left1_hl_s_109" href="/japanese/listetc?ID=109&chk_etc=section">インタビュー</a><br>
		</td>
	</tr>
	<tr>
		<td height="7"></td>
	</tr>
	<tr>
		<td height="19" bgcolor="#c6c6c6" align="left" valign="bottom">&nbsp;&nbsp;地域別記事</td>
	</tr>
	<tr>
		<td height="2"></td>
	</tr>
	<tr>
		<td class="branch2" bgcolor="#ededed" height="56">
			<a id="Left1_hl_l_101" href="/japanese/listetc?ID=101&chk_etc=local">平壌</a>
			<a id="Left1_hl_l_102" href="/japanese/listetc?ID=102&chk_etc=local">開城</a>
			<a id="Left1_hl_l_103" href="/japanese/listetc?ID=103&chk_etc=local">南浦</a>
			<a id="Left1_hl_l_104" href="/japanese/listetc?ID=104&chk_etc=local">羅先</a><br>
			<a id="Left1_hl_l_105" href="/japanese/listetc?ID=105&chk_etc=local">平安道</a>
			<a id="Left1_hl_l_106" href="/japanese/listetc?ID=106&chk_etc=local">滋江道</a>
			<a id="Left1_hl_l_107" href="/japanese/listetc?ID=107&chk_etc=local">両江道</a><br>
			<a id="Left1_hl_l_108" href="/japanese/listetc?ID=108&chk_etc=local">咸鏡道</a>
			<a id="Left1_hl_l_109" href="/japanese/listetc?ID=109&chk_etc=local">黄海道</a>
			<a id="Left1_hl_l_110" href="/japanese/listetc?ID=110&chk_etc=local">江原道</a><br>
		</td>
	</tr>
	<tr>
		<td height="10"></td>
	</tr>
	<tr>
		<td height="26"><IMG height="29" src="/images/bar_left_journal.gif" width="132"></td>
	</tr>
	<tr>
		<td height="5"></td>
	</tr>
	<tr>
		<td class="branch2" bgcolor="#ededed" height="56" style="font-size: 7.5pt">
			{foreach from=$app.journalList item=val}
			<a href="/listjournal?MediaID={$val.MediaID}"><b>{$val.MediaNameJpn} {$val.issue}</b></a><br>
			{/foreach}
		</td>
	</tr>
	<tr>
		<td height="10"></td>
	</tr>
	<tr>
		<td>
			<table cellSpacing="1" cellPadding="0" border="0" bgcolor="#c6c6c6">
				<tr>
					<td width="132" bgcolor="#ffffff">
						<table cellSpacing="0" cellPadding="0" width="130" border="0">
							<tr>
								<td width="130"><IMG src="/images/bar_left_information.gif" width="130" height="24" border="0"></td>
							</tr>
							<tr>
								<td width="130" height="5"></td>
							</tr>
							<tr>
								<td width="130" class="branch3">
									<a id="Left1_hl_about" href="/japanese/about/introduction">KPM 紹介</a><br>
									<a id="Left1_hl_usage" href="/japanese/about/guide">利用案内</a><br>
									<a id="Left1_hl_media" href="/japanese/about/media">コンテンツ提供媒体 </a><br>
									<a id="Left1_hl_qna" href="/japanese/about/qna">質問と答</a><br>
									<a id="Left1_hl_ad" href="/japanese/about/advertisement">広告案内</a><br>
									<a id="Left1_hl_copyright" href="/japanese/about/copyright">著作権公示</a><br>
									<a id="Left1_hl_contact" href="/japanese/about/contact">連絡場所</a><br>
									<a id="Left1_hl_terms" href="/japanese/about/terms">利用約款</a>
								</td>
							</tr>
							<tr>
								<td width="130" height="5"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height="15"></td>
	</tr>
</table>
