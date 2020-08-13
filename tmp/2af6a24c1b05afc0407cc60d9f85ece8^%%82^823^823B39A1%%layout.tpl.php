<?php /* Smarty version 2.6.27, created on 2020-05-01 15:55:22
         compiled from layout.tpl */ ?>
<HTML>
	<HEAD>
		<title>KPM - Japanese</title>
		<META http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987">
		<LINK href="/japanese/include/main.css" type="text/css" rel="stylesheet">
		<script language="JavaScript" src="/japanese/include/main.js"></script>
		<script language="JavaScript" src="/js/admin.js"></script>
		<script language="JavaScript" src="/js/google_map.js"></script>
		<script>
			<?php echo '
			<!--
			(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

			ga(\'create\', \'UA-3890334-2\', \'dprkmedia.com\');
			ga(\'send\', \'pageview\');
			// -->
			'; ?>

		</script>
	</HEAD>
	<body bgColor="#ffffff" leftMargin="0" topMargin="0">
		<form id="Form1" name="Form1" method="get" runat="server">
			<table cellSpacing="0" cellPadding="0" width="963" bgColor="#ffffff" border="0" height="100%">
				<tr>
					<td colSpan="5">
						<!-- TOP menu -->
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'japanese/include/top.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</td>
					<td width="1" rowspan="4" bgcolor="#929292"></td>
				</tr>
				<tr>
					<td vAlign="top" align="center" width="148" height="100%">
						<!-- LEFT menu -->
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'japanese/include/left.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</td>
					<td width="1" rowspan="3" bgcolor="#929292"></td>
					<td vAlign="top" align="center" width="584">
						<!-- MAIN start -->
						<?php echo $this->_tpl_vars['content']; ?>

						<!-- MAIN end -->
					</td>
					<td width="1" rowspan="3" bgcolor="#929292"></td>
					<td vAlign="top" align="center" width="228">
						<!-- RIGHT manu -->
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'japanese/include/right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</td>
				</tr>
				<tr>
					<td colSpan="5" height="8"></td>
				</tr>
				<tr>
					<td colSpan="5">
						<!-- BOTTOM menu -->
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'japanese/include/bottom.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</td>
				</tr>
			</table>
		</form>
	</body>
</HTML>