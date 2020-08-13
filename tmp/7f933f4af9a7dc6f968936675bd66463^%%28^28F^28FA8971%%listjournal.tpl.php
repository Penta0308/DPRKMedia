<?php /* Smarty version 2.6.27, created on 2020-05-01 17:58:15
         compiled from listjournal.tpl */ ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" bgColor="#c8d0dc" height="26">
									&nbsp;&nbsp;
									<b><?php echo $this->_tpl_vars['app']['mediaName']['MediaName']; ?>
</b>
								</td>
								<td vAlign="middle" align="right" width="398" bgColor="#c8d0dc">
									저널 이동
									<select size="1" name="MediaID" onchange="location.href=this.options[this.selectedIndex].value" id="lbx_Journals" style="font-size:8pt;width:130px;">
										<?php $_from = $this->_tpl_vars['app']['journalList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
										<option value="/listjournal?MediaID=<?php echo $this->_tpl_vars['val']['MediaID']; ?>
" <?php if ($this->_tpl_vars['form']['MediaID'] == $this->_tpl_vars['val']['MediaID']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['val']['MediaName']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
									&nbsp;
								</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td colSpan="2" height="17" align="right">
									년도
									<select size="1" name="year" onchange="location.href=this.options[this.selectedIndex].value">
										<option <?php if ($this->_tpl_vars['form']['year'] == ""): ?>selected="selected"<?php endif; ?> value="/listjournal?MediaID=<?php echo $this->_tpl_vars['form']['MediaID']; ?>
">전체</option>
										<?php $_from = $this->_tpl_vars['app']['yearList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
										<option value="/listjournal?MediaID=<?php echo $this->_tpl_vars['form']['MediaID']; ?>
&year=<?php echo $this->_tpl_vars['val']['balHengYear']; ?>
" <?php if ($this->_tpl_vars['form']['year'] == $this->_tpl_vars['val']['balHengYear']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['val']['balHengYear']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
									&nbsp;&nbsp; 
									호수
									<select size="1" name="num" onchange="location.href=this.options[this.selectedIndex].value">
										<option <?php if ($this->_tpl_vars['form']['num'] == ""): ?>selected="selected"<?php endif; ?> value="/listjournal?MediaID=<?php echo $this->_tpl_vars['form']['MediaID']; ?>
&year=<?php echo $this->_tpl_vars['form']['year']; ?>
">전체</option>
										<?php $_from = $this->_tpl_vars['app']['numList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
										<option value="/listjournal?MediaID=<?php echo $this->_tpl_vars['form']['MediaID']; ?>
&year=<?php echo $this->_tpl_vars['form']['year']; ?>
&num=<?php echo $this->_tpl_vars['val']['gwonho']; ?>
" <?php if ($this->_tpl_vars['form']['num'] == $this->_tpl_vars['val']['gwonho']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['val']['gwonho']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
									&nbsp;
								</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="20"></td>
							</tr>
							<tr>
								<td align="center" width="568" colSpan="2">
									<table cellspacing="0" cellpadding="1" border="0" id="DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:558px;border-collapse:collapse;">
										<?php $_from = $this->_tpl_vars['app']['articleList']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
											<tr style="height:20px;">
												<td align="right" valign="top" style="width:10px;">
													ㆍ
												</td>
												<td align="left">
													<a href='/viewjournal?JArticleID=<?php echo $this->_tpl_vars['val']['JArticleID']; ?>
'>
														<?php echo $this->_tpl_vars['val']['Title']; ?>
 
														<?php if ($this->_tpl_vars['val']['Writers']): ?>/ <?php echo $this->_tpl_vars['val']['Writers']; ?>
<?php endif; ?> 
													</a>
													<?php if ($this->_tpl_vars['val']['FileName'] != ""): ?>
													<img src='/images/icon_pdf.gif' align='absmiddle'>
													<?php endif; ?>
												</td>
												<td align="left" valign="top" style="width:75px;">
													<?php echo $this->_tpl_vars['val']['BalHengYear']; ?>

													년
													<?php echo $this->_tpl_vars['val']['GwonHo']; ?>

													호
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
<?php if ($this->_tpl_vars['form']['year'] != ""): ?>&year=<?php echo $this->_tpl_vars['form']['year']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['form']['num'] != ""): ?>&num=<?php echo $this->_tpl_vars['form']['num']; ?>
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