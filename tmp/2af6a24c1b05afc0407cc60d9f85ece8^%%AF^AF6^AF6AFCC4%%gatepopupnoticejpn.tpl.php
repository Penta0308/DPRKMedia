<?php /* Smarty version 2.6.27, created on 2020-05-01 18:32:31
         compiled from gate/gatepopupnoticejpn.tpl */ ?>
<!--
<%@ Page Language="vb" AutoEventWireup="false" Codebehind="gate_popup_notice_jpn.aspx.vb" Inherits="KPPress.gate_popup_notice_jpn"%>
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
	<HEAD>
		<title>お知らせ</title>
		<LINK href="include/gate.css" type="text/css" rel="stylesheet">
	</HEAD>
	<body bgColor="#ffffff" leftMargin="0" topMargin="0">
		<form id="Form1" method="post" runat="server">
			<table cellSpacing="0" cellPadding="0" width="300" border="0">
				<tr>
					<td vAlign="middle" align="center" height="54">
						<table cellSpacing="0" cellPadding="0" border="0">
							<tr>
								<td width="10" bgColor="#cdddd7" height="46"></td>
								<td width="270" bgColor="#cdddd7">
									<b>
										<?php echo $this->_tpl_vars['app']['noticeInfo']['subject']; ?>

									</b>
								</td>
								<td width="10" bgColor="#cdddd7"></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center">
						<table cellSpacing="2" cellPadding="0" bgColor="#dde4e4" border="0">
							<tr>
								<td bgcolor="#ffffff" width="286" align="center">
									<table cellSpacing="0" cellPadding="0" border="0">
										<tr>
											<td bgcolor="#ffffff" width="286" height="10" colspan="3"></td>
										</tr>
										<tr>
											<td bgcolor="#ffffff" width="12"></td>
											<td bgcolor="#ffffff" width="262" class="text">
												<?php echo $this->_tpl_vars['app']['noticeInfo']['text']; ?>

											</td>
											<td bgcolor="#ffffff" width="12"></td>
										</tr>
										<tr>
											<td bgcolor="#ffffff" height="10" colspan="3"></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td width="300"><img src="/images/bottom_notice2.gif" width="300" height="32" border="0" usemap="#close"></td>
				</tr>
				<map name="close">
					<area shape="RECT" coords="116,6,176,24" href="#" onclick="window.close()" onfocus="blur()">
				</map>
			</table>
		</form>
	</body>
</HTML>