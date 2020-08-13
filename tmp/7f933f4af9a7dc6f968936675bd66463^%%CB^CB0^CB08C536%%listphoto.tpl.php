<?php /* Smarty version 2.6.27, created on 2020-05-02 07:53:54
         compiled from listphoto.tpl */ ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0"> 
							<tr>
								<td width="170" bgColor="#ffe0e0" height="26">&nbsp;&nbsp; <b>PHOTO</b></td>
								<td align="right" width="398" bgColor="#ffe0e0">
									<select name="ddlSelectSection" onchange="location.href=this.options[this.selectedIndex].value"" id="ddlSelectSection" style="font-size:9pt;">
										<option <?php if ($this->_tpl_vars['form']['ddlSelectSection'] == 0): ?>selected="selected"<?php endif; ?> value="0">전체</option>
										<?php $_from = $this->_tpl_vars['app']['sectionList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
											<option value="/listphoto?ddlSectionSection=<?php echo $this->_tpl_vars['val']['SectionId']; ?>
<?php if ($this->_tpl_vars['form']['ddlSelectSection'] != ''): ?>&ddlSelectSection=<?php echo $this->_tpl_vars['form']['ddlSelectSection']; ?>
<?php endif; ?>" <?php if ($this->_tpl_vars['form']['ddlSelectSection'] == $this->_tpl_vars['val']['SectionId']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['val']['SectionName']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
								</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td align="center" width="568" colSpan="2">

									<table cellspacing="0" cellpadding="3" border="0" id="DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:540px;border-collapse:collapse;">
										<?php $_from = $this->_tpl_vars['app']['photoAllList']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['photolist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['photolist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['val']):
        $this->_foreach['photolist']['iteration']++;
?>
											<?php if (($this->_foreach['photolist']['iteration']-1) % 2 == 0): ?>
											<tr valign="top">
											<?php endif; ?>
												<td align="left" valign="middle" style="height:120px;width:110px;">
													<table width="102" height="102" cellSpacing="0" cellPadding="0" border="0">
														<tr>
															<td height="1" colspan="3" bgColor="#A3A3A3"></td>
														</tr>
														<tr>
															<td width="1" height="100" bgColor="#A3A3A3"></td>
															<td width="100" height="100" bgColor="#FFFFFF" align="center" valign="middle">
																<a href="#" onclick='popup_photo(<?php echo $this->_tpl_vars['val']['mmFileID']; ?>
)'><img src='<?php echo $this->_tpl_vars['val']['Location_Thumb']; ?>
' border="0"></a>
															</td>
															<td width="1" height="100" bgColor="#A3A3A3"></td>
														</tr>
														<tr>
															<td height="1" colspan="3" bgColor="#A3A3A3"></td>
														</tr>
													</table>
													<br>
													<a href="#" class="branch_a" onclick='popup_photo(<?php echo $this->_tpl_vars['val']['mmFileID']; ?>
)'>
														<b>
															<?php echo $this->_tpl_vars['val']['Title']; ?>

														</b>
													</a>
													<br>
													<a href="#" onclick='popup_photo(<?php echo $this->_tpl_vars['val']['mmFileID']; ?>
)'><img src="/images/btn_photo_big.gif" width="80" height="28" border="0"></a><br>
													<a href='<?php echo $this->_tpl_vars['val']['Location_Large']; ?>
' target="_blank"><img src="/images/btn_download.gif" width="80" height="16" border="0"></a><br>
													<br>
												</td>
											<?php if (($this->_foreach['photolist']['iteration']-1) % 2 != 0 || ($this->_foreach['photolist']['iteration'] == $this->_foreach['photolist']['total'])): ?>
											</tr>
											<?php endif; ?>
										<?php endforeach; endif; unset($_from); ?>

										<tr align="center" valign="bottom" style="color:#003296;height:30px;">
											<td colspan="3">
												<?php $_from = $this->_tpl_vars['app']['pager']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
													<?php if ($this->_tpl_vars['page']['offset'] == $this->_tpl_vars['app']['current']): ?>
														<strong><?php echo $this->_tpl_vars['page']['index']; ?>
</strong>
													<?php else: ?>
														<a href="<?php echo $this->_tpl_vars['app']['link']; ?>
?MediaID=<?php echo $this->_tpl_vars['form']['MediaID']; ?>
&offset=<?php echo $this->_tpl_vars['page']['offset']; ?>
"><?php echo $this->_tpl_vars['page']['index']; ?>
</a>
													<?php endif; ?>
													&nbsp;
												<?php endforeach; endif; unset($_from); ?>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td>&nbsp;&nbsp;<A class="branch_a" href="javascript:history.back();">← 이전 페지</A></td>
								<td align="right"><A class="branch_a" href="#t">↑ 화면 우로</A>&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
						</table>