<?php /* Smarty version 2.6.27, created on 2020-05-01 15:55:29
         compiled from include/articles1_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'include/articles1_main.tpl', 15, false),)), $this); ?>
<!--
<%@ Control Language="vb" AutoEventWireup="false" Codebehind="Articles3_main.ascx.vb" Inherits="KPPress.Articles3_main" TargetSchema="http://schemas.microsoft.com/intellisense/ie5" %>
-->
<?php $_from = $this->_tpl_vars['app']['article1List']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['article1List'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article1List']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['val']):
        $this->_foreach['article1List']['iteration']++;
?>
		<TABLE cellSpacing="0" cellPadding="0" width="558" bgColor="#ffffff" border="0">
			<TR>
				<TD width="5"></TD>
				<TD><A href='/viewarticle?ArticleID=<?php echo $this->_tpl_vars['val']['ArticleID']; ?>
'>[<?php echo $this->_tpl_vars['val']['MediaName']; ?>
]
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

		<?php if (( ($this->_foreach['article1List']['iteration']-1) + 1 ) % 5 == 0 && ! ($this->_foreach['article1List']['iteration'] == $this->_foreach['article1List']['total'])): ?>
		<img src=/images/line_main.gif>
		<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
	<tr>
		<td width="568" height="7"></td>
	</tr>
</table>