<?php /* Smarty version 2.6.27, created on 2020-05-01 17:15:50
         compiled from gate/gatemainjpn.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'gate/gatemainjpn.tpl', 83, false),)), $this); ?>
<!--
<%@ Page Language="vb" AutoEventWireup="false" Codebehind="gate_main_jpn.aspx.vb" Inherits="KPPress.gate_main_jpn"%>
<%@ Register TagPrefix="uc1" TagName="Login" Src="include/gate_login.ascx" %>
<%@ Register TagPrefix="uc1" TagName="Bottom" Src="include/gate_bottom.ascx" %>
<%@ Register TagPrefix="uc1" TagName="TOP" Src="include/gate_top_jpn.ascx" %>
-->
<HTML>
	<HEAD>
		<title>KPM - Japanese</title>
		<META http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987">
		<LINK href="/css/gate_jpn.css" type="text/css" rel="stylesheet">
		<script language="JavaScript" src="/js/main.js"></script>
	</HEAD>
	<body bgColor="#ffffff" leftMargin="0" topMargin="0">
		<form id="Form1" method="post" runat="server">
			<table cellSpacing="0" cellPadding="0" width="801" bgColor="#ffffff" border="0" height="100%">
				<tr>
					<td width="200" height="70"><a href="/japanese/index"><IMG src="/images/logo_gate_jpn.gif" width="200" height="70" border="0"></a></td>
					<td width="600" colSpan="2">
						<!-- TOP menu -->
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'gate/include/top.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</td>
					<td width="1" rowspan="7" bgcolor="#C0C0C0"></td>
				</tr>
				<tr>
					<td width="200" height="345"><IMG src="/images/image01_main_gate.jpg" width="200" height="345"></td>
					<td width="600" colSpan="2">
					<table cellSpacing="0" cellPadding="0" width="600" background="/images/image05_main_gate.jpg" border="0">
					<tr>
						<td width="359" height="113"></td>
						<td width="186"></td>
						<td width="55"></td>
					</tr>
					<tr>
						<td width="359" height="106"></td>
						<td width="186" valign="middle" align="center" bgcolor="#BABABA">
							<!-- LOGIN -->
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'gate/include/login.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</td>
						<td width="55"></td>
					</tr>
					<tr>
						<td width="359" height="126"></td>
						<td width="186"></td>
						<td width="55"></td>
					</tr>
					</table>					
					</td>
				</tr>
				<tr>
					<td width="200" height="44"><IMG src="/images/image02_main_gate.jpg" width="200" height="44"></td>
					<td width="600" bgColor="#6E6E6E" colSpan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<IMG src="/images/bar_news_flow.gif" align="absMiddle">&nbsp;&nbsp;&nbsp;
						<marquee id="mq_Latest" scrollAmount="2" direction="left" width="465" height="20">
							<?php $_from = $this->_tpl_vars['app']['lastestNews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
								<font color="white">ㆍ<?php echo $this->_tpl_vars['val']['Title']; ?>
 「<?php echo $this->_tpl_vars['val']['MediaNameJpn']; ?>
」</font>&nbsp;&nbsp;&nbsp;
							<?php endforeach; endif; unset($_from); ?>
						</marquee>
					</td>
				</tr>
				<tr>
					<td rowspan="2" width="200" height="41"><IMG src="/images/image03_main_gate.jpg" width="200" height="41"></td>
					<td vAlign="bottom" width="400" height="40"><IMG src="/images/bar_notice_main_gate.gif"></td>
					<td vAlign="bottom" width="200"><IMG src="/images/bar_contact_main_gate.gif"></td>
				</tr>
				<tr>
					<td width="600" bgColor="#C0C0C0" colSpan="2" height="1"></td>
				</tr>
				<tr>
					<td align="center" width="200" height="117"><IMG src="/images/image04_main_gate.jpg" width="200" height="117"></td>
					<td align="center" width="400">
						<table cellSpacing="0" cellPadding="0" width="390" border="0">
							<tr>
								<td vAlign="top" width="70" height="84"><IMG src="/images/image_notice_gate.gif"width="70" height="67"></td>
								<td width="20"></td>
								<td vAlign="top" width="300" >
									<table cellSpacing="0" cellPadding="0" width="300" border="0">
										<?php $_from = $this->_tpl_vars['app']['lastestNotice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
											<tr>
												<td>
													<IMG src="/images/dot_notice_gate.gif" align="absMiddle">
													<A onclick="javascript:window.open('/gate/gatepopupnoticejpn?no=<?php echo $this->_tpl_vars['val']['Number']; ?>
', 'notice', 'toolbar=0, directories=0, status=0, menubar=no, scrollbars=yes, resizable=no,width=316,height=300,top=100,left=300')" href="#">
														<?php echo $this->_tpl_vars['val']['Subject']; ?>
 
														<?php echo ((is_array($_tmp=$this->_tpl_vars['val']['RegDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m/%d') : smarty_modifier_date_format($_tmp, '%m/%d')); ?>

													</A>
												</td>
											</tr>
											<tr>
												<td height="4"></td>
											</tr>
										<?php endforeach; endif; unset($_from); ?>
									</table>
								</td>
							</tr>
						</table>
					</td>
					<td width="200" align="center">
						<table cellSpacing="0" cellPadding="0" width="180" border="0">
							<tr>
								<td width="180" class="s_size" height="54" valign="top">
									<b>PHONE</b> 81-03-3814-4410<br>
									<b>FAX NUMBER</b> 81-03-3814-4420<br>
									<b>E-MAIL</b> <a href="mailto:help@korea-m.com">help@korea-m.com</a><br>
								</td>
							</tr>						
							<tr>
								<td align="center" width="180" height="40"><select style="WIDTH: 180px" onchange="javascript:window.open(this.value,'new')" name="link">
										<option value="/" selected>- Family Site -</option>
										<option value="http://www.korea-m.com">コリアメディア</option>
									</select>
								</td>
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