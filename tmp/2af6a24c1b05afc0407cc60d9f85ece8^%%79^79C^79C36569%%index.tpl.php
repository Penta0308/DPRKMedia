<?php /* Smarty version 2.6.27, created on 2020-05-01 16:09:28
         compiled from japanese/index.tpl */ ?>
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
								<td width="170" height="26" bgColor="#c9c9c9">&nbsp;&nbsp; <b>KPM Today</b></td>
								<td width="328" bgColor="#c9c9c9"></td>
								<td width="70"><A href="/japanese/listall?lvl=0" onfocus="this.blur()"><IMG height="26" src="/images/btn_main_more2.gif" width="70" border="0"></A></td>
							</tr>
							<tr>
								<td width="568" height="7" colspan="3"></td>
							</tr>
						</table>
						<!-- Contents -->
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'japanese/include/articles2_main.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#c9c9c9">&nbsp;&nbsp; <b>平壌支局記事</b></td>
								<td width="328" bgColor="#c9c9c9"></td>
								<td width="70"  bgColor="#c9c9c9"><A href="/japanese/listsrc?MediaID=1007" onfocus="this.blur()"><IMG height="26" src="/images/btn_main_more2.gif" width="70" border="0"></A></td>
							</tr>
							<tr>
								<td width="568" height="7" colspan="3"></td>
							</tr>
						</table>
						<!-- Contents -->
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'japanese/include/articles1_main.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" height="7"></td>
							</tr>
						</table>
						<!-- NOTICE --><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'japanese/include/articles8_main.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>