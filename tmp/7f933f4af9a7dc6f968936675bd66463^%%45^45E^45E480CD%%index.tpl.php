<?php /* Smarty version 2.6.27, created on 2020-05-01 15:55:29
         compiled from index.tpl */ ?>
<?php if (count ( $this->_tpl_vars['errors'] )): ?>
 <ul>
  <?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
   <li><?php echo $this->_tpl_vars['error']; ?>
</li>
  <?php endforeach; endif; unset($_from); ?>
 </ul>
<?php endif; ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#c9c9c9">&nbsp;&nbsp; <A href="/listall?lvl=1" onfocus="this.blur()">
										<b>주요기사</b></A></td>
								<td width="328" bgColor="#c9c9c9"></td>
								<td width="70"><A href="/listall?lvl=1" onfocus="this.blur()"><IMG height="26" src="/images/btn_main_more2.gif" width="70" border="0"></A></td>
							</tr>
							<tr>
								<td width="568" height="7" colspan="3"></td>
							</tr>
						</table>
						<!-- 主要記事 --><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/articles1_main.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" height="7"></td>
							</tr>
						</table>
						<!-- 労働新聞 --><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/articles2_main.tpl', 'smarty_include_vars' => array('MediaID' => '1001')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<!-- 民主朝鮮 --><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/articles3_main.tpl', 'smarty_include_vars' => array('MediaID' => '1002')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<!-- 平壌支局ニュース --><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/articles4_main.tpl', 'smarty_include_vars' => array('MediaID' => '1003')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="318" height="26" bgColor="#c9c9c9">&nbsp;&nbsp; <b>주간기사</b></td>
								<td width="250" bgColor="#c9c9c9" align="right">
									<font style="FONT-SIZE:8pt">▶ <A href="/listsrc?MediaID=1004" onfocus="this.blur()">
											통일신보</A> | <A href="/listsrc?MediaID=1005" onfocus="this.blur()">문학신문</A>
										| <A href="/listsrc?MediaID=1006" onfocus="this.blur()">Pyongyang Times</A>
									</font>&nbsp;
								</td>
							</tr>
							<tr>
								<td height="7" colspan="2"></td>
							</tr>
						</table>
						<!-- 統一新報 --><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/articles5_main.tpl', 'smarty_include_vars' => array('MediaID' => '1004')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" align="center"><img src=/images/line_main.gif></td>
							</tr>
						</table>
						<!-- 文学新聞 --><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/articles6_main.tpl', 'smarty_include_vars' => array('MediaID' => '1005')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" align="center"><img src=/images/line_main.gif></td>
							</tr>
						</table>
						<!-- Pyongyang Times --><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/articles7_main.tpl', 'smarty_include_vars' => array('MediaID' => '1006')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" height="7"></td>
							</tr>
						</table>
						<!-- NOTICE --><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/articles8_main.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>