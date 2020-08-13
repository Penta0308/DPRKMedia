{* <!--
<%@ Control Language="vb" AutoEventWireup="false" Codebehind="Left.ascx.vb" Inherits="KPPress.Left" TargetSchema="http://schemas.microsoft.com/intellisense/ie5" %>
--> *}
<table cellSpacing="0" cellPadding="0" width="132" bgColor="#ffffff" border="0">
	{if $session.LoginType eq "ID"}
	<tr>
		<td>
			<TABLE cellSpacing="0" cellPadding="0" width="132" bgColor="#ffffff" border="0">
				<TR>
					<TD height="26">
						<a href="/?act=logout">
							<img src="/images/btn_logout.gif" alt="회원 로그아웃">
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
		<td class="branch2" bgcolor="#ededed" height="76">
			<a href="http://www.dprkmedia.net/" target="_blank"><b>로동신문PDF<br>RODONG PDF<br>労働新聞PDF<br>データサービス</b></a>
		</td>
	</tr>


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
		<td class="branch2" bgcolor="#ededed" height="76">
			<a href="http://www.korea-copy.com/minju/" target="_blank"><b>민주조선PDF<br>MINJU PDF<br>民主朝鮮PDF<br>データサービス</b></a>
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
		<td class="branch2" bgcolor="#ededed" height="76">
			<a href="http://www.korea-copy.com/munhak/" target="_blank"><b>문학신문PDF<br>MUNHAK PDF<br>文学新聞PDF<br>データサービス</b></a>
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
		<td height="26"><IMG height="29" src="/images/bar_left_news.gif" width="132"></td>
	</tr>
	<tr>
		<td height="7" bgcolor="#ededed"></td>
	</tr>
	<tr>
		<td class="branch1" bgcolor="#ededed">
			<a id="Left1_hl_key" href="/listall?lvl=1">주요기사</a><br>
			<a id="Left1_hl_all" href="/listall?lvl=0">전체기사</a><br>
			<a id="Left1_hl_past" href="/searchpast">지난기사</a><br>
			<a id="Left1_hl_s_101" href="/listetc?ID=101&chk_etc=section">정치</a><br>
			<a id="Left1_hl_s_102" href="/listetc?ID=102&chk_etc=section">외교</a><br>
			<a id="Left1_hl_s_103" href="/listetc?ID=103&chk_etc=section">경제</a><br>
			<a id="Left1_hl_s_104" href="/listetc?ID=104&chk_etc=section">사회</a><br>
			<a id="Left1_hl_s_105" href="/listetc?ID=105&chk_etc=section">문화</a><br>
			<a id="Left1_hl_s_106" href="/listetc?ID=106&chk_etc=section">정보과학</a><br>
			<a id="Left1_hl_s_107" href="/listetc?ID=107&chk_etc=section">스포츠</a><br>
			<a id="Left1_hl_s_108" href="/listetc?ID=108&chk_etc=section">사설/론평</a><br>
			<a id="Left1_hl_s_109" href="/listetc?ID=109&chk_etc=section">인터뷰</a><br>
		</td>
	</tr>
	<tr>
		<td height="7"></td>
	</tr>
	<tr>
		<td height="19" bgcolor="#c6c6c6" align="left" valign="bottom">&nbsp;&nbsp;<font style="FONT-WEIGHT:bold;FONT-SIZE:8pt">지역별 
				기사</font></td>
	</tr>
	<tr>
		<td height="2"></td>
	</tr>
	<tr>
		<td class="branch2" bgcolor="#ededed" height="56">
			<a id="Left1_hl_l_101" href="/listetc?ID=101&chk_etc=local">평양</a>
			<a id="Left1_hl_l_102" href="/listetc?ID=102&chk_etc=local">개성</a>
			<a id="Left1_hl_l_103" href="/listetc?ID=103&chk_etc=local">남포</a>
			<a id="Left1_hl_l_104" href="/listetc?ID=104&chk_etc=local">라선</a><br>
			<a id="Left1_hl_l_105" href="/listetc?ID=105&chk_etc=local">평안도</a>
			<a id="Left1_hl_l_106" href="/listetc?ID=106&chk_etc=local">자강도</a>
			<a id="Left1_hl_l_107" href="/listetc?ID=107&chk_etc=local">량강도</a><br>
			<a id="Left1_hl_l_108" href="/listetc?ID=108&chk_etc=local">함경도</a>
			<a id="Left1_hl_l_109" href="/listetc?ID=109&chk_etc=local">황해도</a>
			<a id="Left1_hl_l_110" href="/listetc?ID=110&chk_etc=local">강원도</a><br>
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
			
			<a href="/listjournal?MediaID={$val.MediaID}"><b>{$val.MediaName} {$val.issue}</b></a>
			<br>
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
									<a id="Left1_hl_about" href="/about/introduction">KPM 소개</a><br>
									<a id="Left1_hl_usage" href="/about/guide">리용 안내</a><br>
									<a id="Left1_hl_media" href="/about/media">기사제공매체</a><br>
									<a id="Left1_hl_qna" href="/about/qna">질문과 답</a><br>
									<a id="Left1_hl_ad" href="/about/advertisement">광고 안내</a><br>
									<a id="Left1_hl_copyright" href="/about/copyright">저작권 공지</a><br>
									<a id="Left1_hl_contact" href="/about/contact">련락처</a><br>
									<a id="Left1_hl_terms" href="/about/terms">리용약관</a>
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
