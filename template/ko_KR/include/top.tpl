{* <!--
<%@ Control Language="vb" AutoEventWireup="false" Codebehind="Top.ascx.vb" Inherits="KPPress.Top" TargetSchema="http://schemas.microsoft.com/intellisense/ie5" %>
--> *}
<script language="JavaScript" type="text/JavaScript">
{literal}
<!--
function tmp() {
	alert("준비중입니다")
}
//-->
{/literal}
</script>
<a name="t"></a>
<table cellSpacing="0" cellPadding="0" width="962" bgColor="#ffffff" border="0">
	<tr>
		<td width="148" height="68"><a href="/" onfocus="this.blur()"><IMG height="68" src="/images/logo_main.gif" width="148" border="0"></a></td>
		<td colSpan="3" width="586" align="center" bgColor="#000000">
			<table cellSpacing="0" cellPadding="0" border="0">
			<tr>
				<td width="568" height="50" align="center" bgColor="#C9C9C9">
					<table cellSpacing="0" cellPadding="0" width="530" border="0" bgColor="#FFFFFF">
						<tr>
							<td height="1" bgColor="#575757" colspan="5"></td>
						</tr>
						<tr>
							<td width="1" bgColor="#575757" height="5"></td>
							<td width="140" bgColor="#575757"></td>
							<td width="388" colspan="2"></td>
							<td width="1" bgColor="#575757"></td>
						</tr>
						<tr>
							<td width="1" bgColor="#575757" height="18"></td>
							<td width="140" align="center" valign="middle" bgColor="#575757"><font color="#FFFFFF"><b>DPRKMEDIA.COM</b></font></td>
							<td width="40" align="center" valign="middle">
								<font color="#930400">속보</font></td>
							<td width="348">
								<marquee id="mq_Latest" WIDTH="340" HEIGHT="18" scrollAmount="3" direction="left">
									{foreach from=$app_ne.lastestNews item=val}
									ㆍ<a href='/viewarticle?ArticleID={$val.ArticleID}' onmouseover="mq_Latest.stop()" onmouseout="mq_Latest.start()">{$val.Title}</a>
									{/foreach}
								</marquee>
							</td>
							<td width="1" bgColor="#575757"></td>
						</tr>
						<tr>
							<td width="1" bgColor="#575757" height="3"></td>
							<td width="140" bgColor="#575757"></td>
							<td width="388" colspan="2"></td>
							<td width="1" bgColor="#575757"></td>
						</tr>
						<tr>
							<td height="1" bgColor="#575757" colspan="5"></td>
						</tr>
					</table>
				</td>
			</tr>
			</table>
		</td>
		<td colspan="2" width="228" align="center" bgColor="#000000">
			<table cellSpacing="0" cellPadding="0" border="0">
			<tr>
			<td width="212" height="50" bgcolor="c9c9c9"><img src="/images/banner_kpm.gif" width="212" height="50" border="0"></td>
			</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td width="962" bgColor="#c9c9c9" colSpan="6" height="1"></td>
	</tr>
	<tr>
		<td class="time_e" width="148" bgColor="#930400" height="26" align="center">
			{$app.lbl_LastEdit}
		</td>
		<td bgColor="#930400" colSpan="4" class="paper">&nbsp;&nbsp;
			<a id="TOP1_hl_1001" class="paper_a" href="/listsrc?MediaID=1001">로동신문</a>
			|<a id="TOP1_hl_1002" class="paper_a" href="/listsrc?MediaID=1002">민주조선</a>
			|<a id="TOP1_hl_1003" class="paper_a" href="/listsrc?MediaID=1003">조선신보 평양지국</a>
			|<a id="TOP1_hl_1004" class="paper_a" href="/listsrc?MediaID=1004">통일신보</a>
			|<a id="TOP1_hl_1005" class="paper_a" href="/listsrc?MediaID=1005">문학신문</a>
			|<a id="TOP1_hl_1006" class="paper_a" href="/listsrc?MediaID=1006">Pyongyang Times</a>
			|<a id="TOP1_hl_photo" class="paper_a" href="/listphoto">사진</a>
			|<a id="TOP1_hl_video" class="paper_a" href="/listvideo">동영상</a>
		</td>
		<td width="140" bgColor="#930400" align="right" class="paper"><a href="/japanese/index" class="paper_a">日本語/일본어</a>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="962" bgColor="#929292" colSpan="6" height="1"></td>
	</tr>
	<tr>
		<td width="962" colSpan="6" height="8"></td>
	</tr>
	<tr>
		<td width="962" bgColor="#929292" colSpan="6" height="1"></td>
	</tr>
	<tr>
		<td width="148" height="5"></td>
		<td width="1" bgcolor="#929292"></td>
		<td width="584"></td>
		<td width="1" bgcolor="#929292"></td>
		<td width="88"></td>
		<td width="140"></td>
	</tr>
</table>
