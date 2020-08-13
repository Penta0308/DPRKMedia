<?php /* Smarty version 2.6.27, created on 2020-05-01 15:55:25
         compiled from include/bottom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'include/bottom.tpl', 19, false),)), $this); ?>
<table cellSpacing="0" cellPadding="0" width="962" bgColor="#ffffff" border="0">
	<tr>
		<td width="962" bgColor="#cbcbcb" height="1"></td>
	</tr>
	<tr>
		<td align="center" width="962" height="25" class="branch1">
			<a href="/about/introduction" class="branch_a">about KPM</a>
			 | <a href="/about/copyright" class="branch_a">저작권 공지</a>
			 | <a href="/about/terms" class="branch_a">리용약관</a>
			 | <a href="mailto:help@korea-m.com" class="branch_a">E-mail</a>
		</td>
	</tr>
	<tr>
		<td width="962" align="center" class="branch2">
			이 웹사이트 내에 게재된 기사, 사진 등의 무단게재를 금합니다. Copyright ⓒ
			<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%G") : smarty_modifier_date_format($_tmp, "%G")); ?>

			Koera Media Corp.
		</td>
	</tr>
	<tr>
		<td width="962" height="10"></td>
	</tr>
</table>