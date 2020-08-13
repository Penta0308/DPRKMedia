<?php /* Smarty version 2.6.27, created on 2020-05-01 16:09:28
         compiled from japanese/include/articles2_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'japanese/include/articles2_main.tpl', 12, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['app']['article2List']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['article2List'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article2List']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['val']):
        $this->_foreach['article2List']['iteration']++;
?>
		<TABLE cellSpacing="0" cellPadding="0" width="558" bgColor="#ffffff" border="0">
			<TR>
				<TD width="5"></TD>
				<TD>ㆍ <A href='/japanese/viewarticle?ArticleID=<?php echo $this->_tpl_vars['val']['ArticleID']; ?>
'>
						<?php echo $this->_tpl_vars['val']['Title']; ?>

					</A>
					<?php if ($this->_tpl_vars['val']['chkphoto'] == '1'): ?>
					<img src='/images/icon_photo.gif' align='absmiddle'>
					<?php endif; ?>
				</TD>
				<TD width="80" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['val']['JunsongDateTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>
</TD>
			</TR>
		</TABLE>

		<?php if (( ($this->_foreach['article2List']['iteration']-1) + 1 ) % 5 == 0 && ! ($this->_foreach['article2List']['iteration'] == $this->_foreach['article2List']['total'])): ?>
		<img src=/images/line_main.gif>
		<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
	<tr>
		<td width="568" height="7"></td>
	</tr>
</table>