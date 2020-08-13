<!--
<%@ Page Language="vb" AutoEventWireup="false" Codebehind="popup_view_video.aspx.vb" Inherits="KPPress.popup_view_video_jpn" %>
-->
<HTML>
	<HEAD>
		<title>KPM - ビデオを見る</title>
		<META http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987">
		<LINK href="/japanese/include/main.css" type="text/css" rel="stylesheet">
	</HEAD>
	<body bgColor="#ffffff" leftMargin="0" topMargin="0">
		<form id="Form1" method="post" runat="server">
			<table cellSpacing="0" cellPadding="0" width="340" align="center" bgColor="#ffffff" border="0">
				<tr>
					<td vAlign="bottom" align="center" width="340" height="40">
						<font color="#003296"><b>{$app.mediaInfo.TitleJpn}</b></font>
					</td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
				<tr>
					<td vAlign="middle" align="center"><embed src="{$app.mediaInfo.url_video}" align="top" width="320" height="309" autostart="true" showstatusbar="true"></embed></ASP:IMAGE></td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
				<tr>
					<td class="branch3">
						{$app.mediaInfo.CaptionJpn|nl2br}
					</td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
				<tr>
					<td class="branch3">
						[300K File Size]
						{$app.mediaInfo.FileSize}
						<br>
						[File Format] WMV
					</td>
				</tr>
				<tr>
					<td height="15"></td>
				</tr>
				<tr>
					<td align="center"><a href="<%= url_video %>" target="_blank"><img src="/images/btn_download_j.gif" width="80" height="16" border="0"></a></td>
				</tr>
				<tr>
					<td height="15"></td>
				</tr>
				<tr>
					<td height="10" align="center"><input type="button" value="Close" onclick="window.close()"></td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
			</table>
		</form>
	</body>
</HTML>
