<?php /* Smarty version 2.6.27, created on 2020-05-01 15:55:22
         compiled from japanese/include/top.tpl */ ?>
<a name="t"></a>
<table cellSpacing="0" cellPadding="0" width="962" bgColor="#ffffff" border="0">
	<tr>
		<td width="148" height="68"><a href="/japanese/index" onfocus="this.blur()"><IMG height="68" src="/images/logo_main_jpn.gif" width="148" border="0"></a></td>
		<td colSpan="3" width="586" align="center" bgColor="#000000">
			<table cellSpacing="0" cellPadding="0" border="0">
				<tr>
					<td width="568" height="50" align="center" bgColor="#c9c9c9">
						<table cellSpacing="0" cellPadding="0" width="530" border="0" bgColor="#ffffff">
							<tr>
								<td height="1" bgColor="#575757" colspan="5"></td>
							</tr>
							<tr>
								<td width="1" bgColor="#575757" height="5"></td>
								<td width="140" bgColor="#575757"></td>
								<td width="388" colspan="2"></td>
								<td width="1" bgColor="#575757"></td>
							</tr>
							<tr>
								<td width="1" bgColor="#575757" height="18"></td>
								<td width="140" align="center" valign="middle" bgColor="#575757"><font color="#ffffff"><b>DPRKMEDIA.COM</b></font></td>
								<td width="40" align="center" valign="middle">
									<font color="#930400">速報</font></td>
								<td width="348">
									<marquee id="mq_Latest" WIDTH="340" HEIGHT="18" scrollAmount="3" direction="left">
										<?php $_from = $this->_tpl_vars['app']['lastestNews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
										ㆍ<a href='/japanese/viewarticle?ArticleID=<?php echo $this->_tpl_vars['val']['ArticleID']; ?>
' onmouseover="mq_Latest.stop()" onmouseout="mq_Latest.start()"><?php echo $this->_tpl_vars['val']['Title']; ?>
</a>
										<?php endforeach; endif; unset($_from); ?>
									</marquee>
								</td>
								<td width="1" bgColor="#575757"></td>
							<tr>
								<td width="1" bgColor="#575757" height="3"></td>
								<td width="140" bgColor="#575757"></td>
								<td width="388" colspan="2"></td>
								<td width="1" bgColor="#575757"></td>
							</tr>
							<tr>
								<td height="1" bgColor="#575757" colspan="5"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td colspan="2" width="228" align="center" bgColor="#000000">
			<table cellSpacing="0" cellPadding="0" border="0">
				<tr>
					<td width="212" height="50" bgcolor="#c9c9c9"><img src="/images/banner_kpm_jpn.gif" width="212" height="50" border="0"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td width="962" bgColor="#c9c9c9" colSpan="6" height="1"></td>
	</tr>
	<tr>
		<td bgColor="#930400" height="26" colSpan="4">&nbsp;
			<span id="TOP1_lbl_LastEdit" class="time_e"><?php echo $this->_tpl_vars['app']['lbl_LastEdit']; ?>
 更新</span>
		</td>
		<td colSpan="2" bgColor="#930400" align="right" class="paper"><a href="/" class="paper_a">조선어/朝鮮語</a>&nbsp;</td>
	</tr>
	<tr>
		<td width="962" bgColor="#929292" colSpan="6" height="1"></td>
	</tr>
	<tr>
		<td width="962" colSpan="6" height="8"></td>
	</tr>
	<tr>
		<td width="962" bgColor="#929292" colSpan="6" height="1"></td>
	</tr>
	<tr>
		<td width="148" height="5"></td>
		<td width="1" bgcolor="#929292"></td>
		<td width="584"></td>
		<td width="1" bgcolor="#929292"></td>
		<td width="88"></td>
		<td width="140"></td>
	</tr>
</table>