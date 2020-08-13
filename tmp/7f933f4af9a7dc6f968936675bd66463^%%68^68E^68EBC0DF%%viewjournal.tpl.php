<?php /* Smarty version 2.6.27, created on 2020-05-02 00:25:06
         compiled from viewjournal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'viewjournal.tpl', 70, false),array('modifier', 'replace', 'viewjournal.tpl', 70, false),)), $this); ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#c8d0dc">
									&nbsp;&nbsp;
									<b><?php echo $this->_tpl_vars['app_ne']['articleInfo']['MediaName']; ?>
</b>
								</td>
								<td align="right" width="398" bgColor="#c8d0dc">
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
						</table>
						<table cellSpacing="0" cellPadding="0" width="530" bgColor="#ffffff" border="0">
							<tr>
								<td width="530" height="15"></td>
							</tr>
							<tr>
								<td>
									<span id="lbl_Title" style="color:#003296;font-size:11pt;font-weight:bold;">
										<?php echo $this->_tpl_vars['app_ne']['articleInfo']['Title']; ?>

									</span>
								</td>
							</tr>
							<tr>
								<td height="15"></td>
							</tr>
							<tr>
								<td>
									<span style="font-size:8pt;">
									<b>저자</b> <?php echo $this->_tpl_vars['app_ne']['articleInfo']['Writers']; ?>

									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['TitleEng'] != ""): ?><b>영문제목</b> <?php echo $this->_tpl_vars['app_ne']['articleInfo']['TitleEng']; ?>
<?php endif; ?>
									| <b>출처</b> &lt;<?php echo $this->_tpl_vars['app_ne']['articleInfo']['MediaName']; ?>
&gt; 
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['BalHengYear'] != 0): ?>
										<?php echo $this->_tpl_vars['app_ne']['articleInfo']['BalHengYear']; ?>
년
										<?php if ($this->_tpl_vars['app_ne']['articleInfo']['GwonHo'] != 0): ?>
											&nbsp;<?php echo $this->_tpl_vars['app_ne']['articleInfo']['GwonHo']; ?>
호
											<?php if ($this->_tpl_vars['app_ne']['articleInfo']['Rugye'] != 0): ?>
												 (루계<?php echo $this->_tpl_vars['app_ne']['articleInfo']['Rugye']; ?>
호)
											<?php endif; ?>
											<?php if ($this->_tpl_vars['app_ne']['articleInfo']['Page'] != "-"): ?>
												<?php echo $this->_tpl_vars['app_ne']['articleInfo']['Page']; ?>
쪽
											<?php endif; ?>
										<?php endif; ?>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['BalHengJi'] != ""): ?>
										| <b>발행지</b> <?php echo $this->_tpl_vars['app_ne']['articleInfo']['BalHengJi']; ?>

									<?php endif; ?>
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['BalHengCher'] != ""): ?>
										| <b>발행처</b> <?php echo $this->_tpl_vars['app_ne']['articleInfo']['BalHengCher']; ?>

									<?php endif; ?>
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['JungGiGanHengMulNo'] != ""): ?>
										| <b>정기간행물번호</b> <?php echo $this->_tpl_vars['app_ne']['articleInfo']['JungGiGanHengMulNo']; ?>

									<?php endif; ?>
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['ISSN'] != ""): ?>
										| <b>ISSN</b> <?php echo $this->_tpl_vars['app_ne']['articleInfo']['ISSN']; ?>

									<?php endif; ?>
									</span>
								</td>
							</tr>
							<tr>
								<td height="15"></td>
							</tr>
							<tr>
								<td class="text">
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['FileName'] == ""): ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['app_ne']['articleInfo']['Nayong1'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "</div><br>", "<br>") : smarty_modifier_replace($_tmp, "</div><br>", "<br>")))) ? $this->_run_mod_handler('replace', true, $_tmp, '  ', "&nbsp;&nbsp;") : smarty_modifier_replace($_tmp, '  ', "&nbsp;&nbsp;")); ?>

										<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['app_ne']['articleInfo']['Nayong2'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "</div><br>", "<br>") : smarty_modifier_replace($_tmp, "</div><br>", "<br>")))) ? $this->_run_mod_handler('replace', true, $_tmp, '  ', "&nbsp;&nbsp;") : smarty_modifier_replace($_tmp, '  ', "&nbsp;&nbsp;")); ?>

									<?php else: ?>
										<center><a href="<?php echo $this->_tpl_vars['app_ne']['articleInfo']['FileName']; ?>
" target='_blank'><img src='/images/btn_orginal.gif' border='0'></a></center>
									<?php endif; ?>
								</td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
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