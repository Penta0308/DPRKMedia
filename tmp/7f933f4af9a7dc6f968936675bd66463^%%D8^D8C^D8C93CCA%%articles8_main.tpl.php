<?php /* Smarty version 2.6.27, created on 2020-05-01 15:55:29
         compiled from include/articles8_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'include/articles8_main.tpl', 24, false),)), $this); ?>
<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
	<tr>
		<td height="26" bgColor="#e2e2e2">&nbsp;&nbsp;&nbsp;<b>NOTICE</b></td>
		<td width="328" bgColor="#e2e2e2"></td>
		<td width="70" bgColor="#e2e2e2">&nbsp;</td>
	</tr>
	<tr>
		<td colSpan="3" height="7"></td>
	</tr>
</table>

<table cellspacing="0" cellpadding="1" border="0" id="Article2_DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:558px;border-collapse:collapse;">
<?php $_from = $this->_tpl_vars['app']['lastestNotice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
	<tr>
		<td align="right" valign="top" style="width:10px;">
			ㆍ
		</td>
		<td align="left" style="height:20px;">
			<A onclick="javascript:window.open('/gate/gatepopupnotice?no=<?php echo $this->_tpl_vars['val']['Number']; ?>
', 'notice', 'toolbar=0, directories=0, status=0, menubar=no, scrollbars=yes, resizable=no,width=316,height=300,top=100,left=300')" href="#">
				<?php echo $this->_tpl_vars['val']['Subject']; ?>
 
			</A>
		</td>
		<td align="right" valign="top" style="width:80px;">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['val']['RegDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m/%d') : smarty_modifier_date_format($_tmp, '%m/%d')); ?>

		</td>
	</tr>
<?php endforeach; else: ?>
	<tr>
		<td align="right" valign="top" style="width:10px;">
			ㆍ
		</td>
		<td align="left" style="height:20px;">
			공지 사항이 없습니다.
		</td>
		<td align="right" valign="top" style="width:80px;">
			&nbsp;
		</td>
	</tr>
<?php endif; unset($_from); ?>

</table>
<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
	<tr>
		<td width="568" height="7"></td>
	</tr>
</table>