<?php /* Smarty version 2.6.27, created on 2020-05-01 16:21:06
         compiled from japanese/listall.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'japanese/listall.tpl', 42, false),)), $this); ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" bgColor="#e2e2e2" height="26">&nbsp;&nbsp;
									<asp:label id="lbl_bar" runat="server" ForeColor="Black" Font-Bold="True">すべての記事</asp:label></td>
								<td align="right" width="398" bgColor="#e2e2e2">最近一週間のニュースリストです。&nbsp;</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td align="center" width="568" colSpan="2" height="40">
									<select name="ddlMedia" id="ddlMedia">
										<option <?php if ($this->_tpl_vars['form']['ddlMedia'] == '0'): ?>selected="selected"<?php endif; ?> value="0">すべて</option>
										<?php $_from = $this->_tpl_vars['app']['mediaList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
											<option <?php if ($this->_tpl_vars['form']['ddlMedia'] == $this->_tpl_vars['val']['MediaID']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['val']['MediaID']; ?>
"><?php echo $this->_tpl_vars['val']['MediaNameJpn']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
									&nbsp;
									<input name="txtKeyword" type="text" id="txtKeyword" style="height:20px;width:200px;" value="<?php echo $this->_tpl_vars['form']['txtKeyword']; ?>
"/>
									&nbsp;
									<input type="image" name="imgbtnSearch" id="imgbtnSearch" align="absmiddle" src="/images/btn_search.gif" style="border-width:0px;" />
									<input type="hidden" name="lvl" value="<?php echo $this->_tpl_vars['form']['lvl']; ?>
" />
								</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td align="center" width="568" colSpan="2">
									<table cellspacing="0" cellpadding="1" border="0" id="DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:558px;border-collapse:collapse;">
										<?php $_from = $this->_tpl_vars['app']['articleList']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
										<tr style="height:20px;">
											<td align="left">
												ㆍ <a href='/japanese/viewarticle?ArticleID=<?php echo $this->_tpl_vars['val']['ArticleID']; ?>
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
?lvl=<?php echo $this->_tpl_vars['form']['lvl']; ?>
&ddlMedia=<?php echo $this->_tpl_vars['form']['ddlMedia']; ?>
&txtKeyword=<?php echo $this->_tpl_vars['form']['txtKeyword']; ?>
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
								<td>&nbsp;&nbsp;<A class="branch_a" href="javascript:history.back();">← Back</A></td>
								<td align="right"><A class="branch_a" href="#t">↑ Top</A>&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
						</table>