<!--
<%@ Page Language="vb" AutoEventWireup="false" Codebehind="popup_view_photo.aspx.vb" Inherits="KPPress.popup_view_photo"%>
-->
<HTML>
	<HEAD>
		<title>KPM - 사진 보기</title>
		<META http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987">
		<LINK href="/include/main.css" type="text/css" rel="stylesheet">
	</HEAD>
	<body bgColor="#ffffff" leftMargin="0" topMargin="0">
		<form id="Form1" method="post" runat="server">
			<table cellSpacing="0" cellPadding="0" width="340" align="center" bgColor="#ffffff" border="0">
				<tr>
					<td vAlign="bottom" align="center" width="340" height="40">
						<font color="#003296"><b>{$app.mediaInfo.Title}</b></font>
					</td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
				<tr>
					<td vAlign="middle" align="center">
						<img border="1" src="{$app.mediaInfo.Location_Small}">
					</td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
				<tr>
					<td class="branch3">
						{$app.mediaInfo.Caption|nl2br}
					</td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
				<tr>
					<td class="branch3">
						[파일 용량]
						{$app.mediaInfo.FileSize}
						<br>
						[파일 형식] JPEG<br>
						[원본 해상도]
						{$app.mediaInfo.width}
						×
						{$app.mediaInfo.height}
						(pixel) /
						{$app.mediaInfo.dpi}
						dpi
					</td>
				</tr>
				<tr>
					<td height="15"></td>
				</tr>
				<tr>
					<td align="center"><a href="{$app.mediaInfo.Location_Large}" target="_blank"><img src="/images/btn_download.gif" border="0"></a></td>
				</tr>
				<tr>
					<td height="15"></td>
				</tr>
				<tr>
					<td height="10" align="center"><input type="button" value="창닫기" onclick="window.close()"></td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
			</table>
		</form>
	</body>
</HTML>
