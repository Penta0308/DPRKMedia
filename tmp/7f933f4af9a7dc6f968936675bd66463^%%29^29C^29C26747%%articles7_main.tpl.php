<?php /* Smarty version 2.6.27, created on 2020-05-01 15:55:29
         compiled from include/articles7_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'include/articles7_main.tpl', 14, false),)), $this); ?>
<!--
<%@ Control Language="vb" AutoEventWireup="false" Codebehind="Articles_main.ascx.vb" Inherits="KPPress.Articles_main" TargetSchema="http://schemas.microsoft.com/intellisense/ie5" %>
-->
<table cellspacing="0" cellpadding="1" border="0" id="Article2_DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:558px;border-collapse:collapse;">
<?php $_from = $this->_tpl_vars['app']['article7List']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
	<tr>
		<td align="left" style="height:20px;">
			<a href="/viewarticle?ArticleID=<?php echo $this->_tpl_vars['val']['ArticleID']; ?>
">[Pyongyang Times] <?php echo $this->_tpl_vars['val']['Title']; ?>
</a>
			<?php if ($this->_tpl_vars['val']['chkphoto'] == '1'): ?>
			<img src='/images/icon_photo.gif' align='absmiddle'>
			<?php endif; ?>
		</td>
		<td align="right" valign="top" style="width:80px;">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['val']['JunsongDateTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%m-%d %H:%M")); ?>

		</td>
	</tr>
<?php endforeach; endif; unset($_from); ?>
</table>