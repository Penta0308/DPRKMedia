<!--
<%@ Page Language="vb" AutoEventWireup="false" Codebehind="print_article.aspx.vb" Inherits="KPPress.print_article"%>
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
	<HEAD>
		<title>KPM - 기사 프린트</title>
		<LINK href="/include/main.css" type="text/css" rel="stylesheet">
	</HEAD>
	<body leftmargin="40" topmargin="0" onload="print();">
		<form id="Form1" method="post" runat="server">
			<table cellSpacing="0" cellPadding="0" width="580" bgColor="#ffffff" border="0">
				<tr>
					<td align="center">
						<table cellSpacing="0" cellPadding="0" width="580" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#e2e2e2">
									{if $app_ne.articleInfo.image == ""}
										&nbsp;&nbsp;&nbsp;<b>{$app_ne.articleInfo.MediaName}</b>
									{else}
										<IMG height="26" src="/images/{$app.articleInfo.media}" width="170">
									{/if}
								</td>
								<td align="right" width="410" bgColor="#e2e2e2">
									{if $app_ne.articleInfo.SectionName != "" && $app_ne.articleInfo.SectionName != "없음"}<b>{$app_ne.articleInfo.SectionName}</b>{/if}
									{if $app_ne.articleInfo.SectionName != "" && $app_ne.articleInfo.SectionName != "없음" && $app_ne.articleInfo.LocalName != "" && $app_ne.articleInfo.LocalName != "없음"}<b> | </b>{/if}
									{if $app_ne.articleInfo.LocalName != "" && $app_ne.articleInfo.LocalName != "없음"}<b>{$app_ne.articleInfo.LocalName}</b>{/if}&nbsp;&nbsp;
								</td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="530" bgColor="#ffffff" border="0">
							<tr>
								<td width="550" height="15"></td>
							</tr>
							<tr>
								<td>
									<span style="color:#003296;font-size:11pt;font-weight:bold;"><b>{$app_ne.articleInfo.Title}</b></span>
								</td>
							</tr>
							<tr>
								<td height="5"></td>
							</tr>
							<tr>
								<td>
									<b>{$app_ne.articleInfo.SubTitle}</b>
								</td>
							</tr>
							<tr>
								<td height="15"></td>
							</tr>
							<tr>
								<td class="text">
									{$app_ne.articleInfo.Nayong1|nl2br|replace:"</div><br>":"<br>"|replace:"  ":"&nbsp;&nbsp;"}
									{$app_ne.articleInfo.Nayong2|nl2br|replace:"</div><br>":"<br>"|replace:"  ":"&nbsp;&nbsp;"}
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td>
									{foreach from=$app.relArticle item=val}
										<a href='/viewarticle?ArticleID={$val.ArticleID}'>
											<b>[관련기사]</b>
											{$val.Title}
										</a>
										<br>
									{/foreach}
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="right" height="17">
									{if $app_ne.articleInfo.WriterName ne ""}{$app_ne.articleInfo.WriterName} 기자{/if}
									{if $app_ne.articleInfo.Email ne ""}({$app_ne.articleInfo.Email}){/if}
								</td>
							</tr>
							<tr>
								<td align="right">
									{$app_ne.articleInfo.JunsongDateTime}
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</body>
</HTML>
