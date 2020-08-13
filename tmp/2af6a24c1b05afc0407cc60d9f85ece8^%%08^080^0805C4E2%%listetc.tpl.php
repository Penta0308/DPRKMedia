<?php /* Smarty version 2.6.27, created on 2020-05-02 16:15:50
         compiled from japanese/listetc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'japanese/listetc.tpl', 26, false),)), $this); ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#e2e2e2">&nbsp;&nbsp;
									<?php if ($this->_tpl_vars['form']['lvl'] == 1): ?><b>主要</b> <?php endif; ?>
									<b><?php echo $this->_tpl_vars['app']['lbl_bar']; ?>
</b>
								</td>
								<td align="right" width="398" bgColor="#e2e2e2">最近一週間のニュースリストです。&nbsp;</td>
							</tr>
							<tr>
								<td colSpan="2" width="568" height="15"></td>
							</tr>
							<tr>
								<td colSpan="2" width="568" align="center">
									<table cellspacing="0" cellpadding="1" border="0" id="DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:558px;border-collapse:collapse;">
										<?php $_from = $this->_tpl_vars['app']['articleList']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
										<tr style="height:20px;">
											<td align="left">
												ㆍ <a href='/japanese//viewarticle?ArticleID=<?php echo $this->_tpl_vars['val']['ArticleID']; ?>
'>
													<?php echo $this->_tpl_vars['val']['Title']; ?>

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
?ID=<?php echo $this->_tpl_vars['form']['ID']; ?>
&chk_etc=<?php echo $this->_tpl_vars['form']['chk_etc']; ?>
<?php if ($this->_tpl_vars['form']['lvl'] != ""): ?>&lvl=<?php echo $this->_tpl_vars['form']['lvl']; ?>
<?php endif; ?>&offset=<?php echo $this->_tpl_vars['page']['offset']; ?>
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
								<td>&nbsp;&nbsp;<a href="javascript:history.back();" class="branch_a">← Back</a></td>
								<td align="right"><a href="#t" class="branch_a">↑ Top</a>&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td colSpan="2" width="568" height="15"></td>
							</tr>
						</table>