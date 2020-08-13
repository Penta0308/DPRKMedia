<?php /* Smarty version 2.6.27, created on 2020-05-02 07:55:53
         compiled from listvideo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'listvideo.tpl', 44, false),)), $this); ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#ffe0e0">&nbsp;&nbsp; <b>VIDEO</b></td>
								<td align="right" width="398" bgColor="#ffe0e0"></td>
							</tr>
							<tr>
								<td colSpan="2" width="568" height="15"></td>
							</tr>
							<tr>
								<td colSpan="2" width="568" align="center">
									<table cellspacing="0" cellpadding="3" border="0" id="DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:548px;border-collapse:collapse;">
										<?php $_from = $this->_tpl_vars['app']['videoAllList']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
										<tr valign="top">
											<td align="left" style="height:160px;width:110px;">
												<table width="102" height="102" cellSpacing="0" cellPadding="0" border="0">
													<tr>
														<td height="1" colspan="3" bgColor="#A3A3A3"></td>
													</tr>
													<tr>
														<td width="1" height="100" bgColor="#A3A3A3"></td>
														<td width="100" height="100" bgColor="#FFFFFF" align="center" valign="middle">
															<a href="#" onclick='popup_video(<?php echo $this->_tpl_vars['val']['mmFileID']; ?>
, 300)'><img src='<?php echo $this->_tpl_vars['val']['Location_Thumb']; ?>
' border="0"></a>
														</td>
														<td width="1" height="100" bgColor="#A3A3A3"></td>
													</tr>
													<tr>
														<td height="1" colspan="3" bgColor="#A3A3A3"></td>
													</tr>
												</table>
												<table width="102" cellSpacing="0" cellPadding="0" border="0">
													<tr>
														<td align="center" height="40">
															<a href="#" onclick='popup_video(<?php echo $this->_tpl_vars['val']['mmFileID']; ?>
, 56)'><img src="/images/btn_56k.gif" width="48" height="22" border="0"></a>
															<a href="#" onclick='popup_video(<?php echo $this->_tpl_vars['val']['mmFileID']; ?>
, 300)'><img src="/images/btn_300k.gif" width="48" height="22" border="0"></a>
														</td>
													</tr>
												</table>
											</td><td class="Text">
												<a href="#" onclick='popup_video(<?php echo $this->_tpl_vars['val']['mmFileID']; ?>
, 300)' class="branch_a">
													<b>
														<?php echo $this->_tpl_vars['val']['Title']; ?>

													</b></a><a href='<?php echo $this->_tpl_vars['val']['Location_Large']; ?>
'><img src="/images/btn_download.gif" width="80" height="16" border="0" align="absmiddle"></a><br>
												<br>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['val']['Caption'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

											</td>
										</tr>
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
								<td colSpan="2" width="568" height="15"></td>
							</tr>
							<tr>
								<td>&nbsp;&nbsp;<a href="javascript:history.back();" class="branch_a">← 이전 페지</a></td>
								<td align="right"><a href="#t" class="branch_a">↑ 화면 우로</a>&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td colSpan="2" width="568" height="15"></td>
							</tr>
						</table>