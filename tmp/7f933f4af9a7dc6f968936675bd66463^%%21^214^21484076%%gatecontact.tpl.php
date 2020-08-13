<?php /* Smarty version 2.6.27, created on 2020-05-01 18:02:02
         compiled from gate/gatecontact.tpl */ ?>
<!--
<%@ Page Language="vb" AutoEventWireup="false" Codebehind="gate_contact.aspx.vb" Inherits="KPPress.gate_contact"%>
<%@ Register TagPrefix="uc1" TagName="TOP" Src="include/gate_top.ascx" %>
<%@ Register TagPrefix="uc1" TagName="Bottom" Src="include/gate_bottom.ascx" %>
-->
<HTML>
	<HEAD>
		<title>KPM - 조선언론 정보기지</title>
		<META http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987">
		<LINK href="/css/gate.css" type="text/css" rel="stylesheet">
	</HEAD>
	<body bgColor="#ffffff" leftMargin="0" topMargin="0">
		<form id="Form1" method="post" runat="server">
			<table cellSpacing="0" cellPadding="0" width="801" bgColor="#ffffff" border="0" height="100%">
				<tr>
					<td width="200" height="70"><a href="/gate/gatemain"><img src="/images/logo2_gate.gif" width="200" height="70" border="0"></a></td>
					<td width="600" colspan="2">
						<!-- TOP menu -->
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'gate/include/top.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</td>
					<td width="1" rowspan="9" bgcolor="#C0C0C0"></td>
				</tr>
				<tr>
					<td width="200" height="142"><img src="/images/image_contact_gate.gif" width="200" height="142"></td>
					<td width="600" height="142" colspan="2"><img src="/images/image1_sub_gate.gif" width="600" height="142"></td>
				</tr>
				<tr>
					<td width="200" height="48" rowspan="2"><img src="/images/no_05_gate.gif" width="200" height="48"></td>
					<td width="1" bgcolor="#C0C0C0" rowspan="2"></td>
					<td width="599" height="20"><img src="/images/image2_sub_gate.gif" width="599" height="20"></td>
				</tr>
				<tr>
					<td width="599" height="28" align="right" valign="bottom">HOME &gt; 련락처&nbsp;&nbsp;</td>
				</tr>
				<tr>
					<td width="200" height="70" rowspan="3" valign="top"><img src="/images/title_contact_gate.gif" width="200" height="28"></td>
					<td width="1" bgcolor="#C0C0C0" rowspan="3"></td>
					<td width="599" height="10"></td>
				</tr>
				<tr>
					<td width="599" height="1" bgcolor="#C0C0C0"></td>
				</tr>
				<tr>
					<td width="599" height="59" align="center" valign="bottom"><img src="/images/bar_contact_gate.gif" width="580" height="48"></td>
				</tr>
				<tr>
					<td width="200" align="center" valign="top">
						<table cellSpacing="0" cellPadding="0" width="180" border="0">
							<tr>
								<td width="180" height="20"></td>
							</tr>
						</table>
					</td>
					<td width="1" bgcolor="#C0C0C0"></td>
					<td width="599" align="center">
									<table cellSpacing="0" cellPadding="0" width="538" bgColor="#ffffff" border="0">
										<tr>
											<td height="26"></td>
										</tr>
										<tr>
											<td class="text">
											
											<table cellSpacing="2" cellPadding="5" width="100%" bgColor="#ffffff" border="0">
											<tr bgcolor="#595959">
												<td align="center" colspan="2"><font color="#FFFFFF"><b>주식회사 조선메디아 (<a href="http://www.korea-m.com" target="_new" Class="paper_a">www.korea-m.com</a>)</b></font></td>
											</tr>
											<tr bgcolor="#E6E6E6">
												<td align="center" width="20%">전화/팍스</td>
												<td width="80%">TEL : 81-03-3814-4410 / FAX : 81-03-3814-4420</td>
											</tr>
											<tr bgcolor="#E6E6E6">
												<td align="center">전자우편</td>
												<td><a href="mailto:help@korea-m.com">help@korea-m.com</a></td>
											</tr>
											<tr bgcolor="#E6E6E6">
												<td align="center">주소</td>
												<td>우편번호 112-8603 / 東京都文京区白山4-33-14</td>
											</tr>
											<tr bgcolor="#E6E6E6">
												<td align="center">략도</td>
												<td>
												都營地下鉄三田線 白山駅下車 A1出口 (小石川植物園口方面)<br>
												徒步3分白山通り沿い<br><br>
												<img src="/images/map_contact.gif" width="380" height="220">
												</td>
											</tr>
											</table><a id="p"></a><br>
											KPM(조선언론정보기지)의 리용, 간판광고게재, 기타 조선메디아의 사업과 관련하여 상담을 원하는 기관은 아래 각 항목을 명기하여 조선메디아로 보내주십시요.<br><br>
											
											<table cellSpacing="0" cellPadding="0" width="100%" bgColor="#ffffff" border="0">
												<tr>
													<td>
														<iframe src='/gate/contactwrite?WritePage=KPM/Gate' scrolling=no width="538" height="370" frameborder=0></iframe>
													</td>
												</tr>
											</table><br>
											
											</td>
										</tr>
										<tr>
											<td height="26"></td>
										</tr>
									</table>
					</td>
				</tr>
				<tr>
					<td width="800" colSpan="3" height="100%" bgcolor="#C0C0C0" valign="top" align="right">
						<!-- FOOTER -->
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'gate/include/bottom.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</td>
				</tr>
			</table>
		</form>
	</body>
</HTML>