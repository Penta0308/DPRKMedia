<?php /* Smarty version 2.6.27, created on 2020-05-01 16:21:10
         compiled from viewarticle.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'google_highlight', 'viewarticle.tpl', 30, false),array('modifier', 'nl2br', 'viewarticle.tpl', 49, false),array('modifier', 'replace', 'viewarticle.tpl', 49, false),)), $this); ?>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#e2e2e2">
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['image'] == ""): ?>
										&nbsp;&nbsp;&nbsp;<b><?php echo $this->_tpl_vars['app_ne']['articleInfo']['MediaName']; ?>
</b>
									<?php else: ?>
										<IMG height="26" src="/images/<?php echo $this->_tpl_vars['app']['articleInfo']['media']; ?>
" width="170">
									<?php endif; ?>
								</td>
								<td align="right" width="398" bgColor="#e2e2e2">
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['SectionName'] != "" && $this->_tpl_vars['app_ne']['articleInfo']['SectionName'] != "없음"): ?><b><?php echo $this->_tpl_vars['app_ne']['articleInfo']['SectionName']; ?>
</b><?php endif; ?>
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['SectionName'] != "" && $this->_tpl_vars['app_ne']['articleInfo']['SectionName'] != "없음" && $this->_tpl_vars['app_ne']['articleInfo']['LocalName'] != "" && $this->_tpl_vars['app_ne']['articleInfo']['LocalName'] != "없음"): ?><b> | </b><?php endif; ?>
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['LocalName'] != "" && $this->_tpl_vars['app_ne']['articleInfo']['LocalName'] != "없음"): ?><b><?php echo $this->_tpl_vars['app_ne']['articleInfo']['LocalName']; ?>
</b><?php endif; ?>&nbsp;&nbsp;
								</td>
							</tr>
							<tr>
								<td colspan="2" align="right" height="26">
									<a href='/printarticle?ArticleID=<?php echo $this->_tpl_vars['form']['ArticleID']; ?>
' target="_blank"><img src="/images/icon_print.gif" align="absmiddle" border="0">
										기사프린트
									</a>
								</td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="530" bgColor="#ffffff" border="0">
							<tr>
								<td width="530" height="10"></td>
							</tr>
							<tr>
								<td>
									<span style="color:#003296;font-size:11pt;font-weight:bold;"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['app_ne']['articleInfo']['Title'])) ? $this->_run_mod_handler('google_highlight', true, $_tmp, $this->_tpl_vars['form']['txtKeyword']) : smarty_modifier_google_highlight($_tmp, $this->_tpl_vars['form']['txtKeyword'])); ?>
</b></span>
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['chkPhoto'] == '1'): ?>
									<img src='/images/icon_photo.gif' align='absmiddle'>
									<?php endif; ?>
								</td>
							</tr>
							<tr>
								<td height="5"></td>
							</tr>
							<tr>
								<td>
									<b><?php echo ((is_array($_tmp=$this->_tpl_vars['app_ne']['articleInfo']['SubTitle'])) ? $this->_run_mod_handler('google_highlight', true, $_tmp, $this->_tpl_vars['form']['txtKeyword']) : smarty_modifier_google_highlight($_tmp, $this->_tpl_vars['form']['txtKeyword'])); ?>
</b>
								</td>
							</tr>
							<tr>
								<td height="15"></td>
							</tr>
							<tr>
								<td class="text">
									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['app_ne']['articleInfo']['Nayong1'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "</div><br>", "<br>") : smarty_modifier_replace($_tmp, "</div><br>", "<br>")))) ? $this->_run_mod_handler('replace', true, $_tmp, '  ', "&nbsp;&nbsp;") : smarty_modifier_replace($_tmp, '  ', "&nbsp;&nbsp;")))) ? $this->_run_mod_handler('google_highlight', true, $_tmp, $this->_tpl_vars['form']['txtKeyword']) : smarty_modifier_google_highlight($_tmp, $this->_tpl_vars['form']['txtKeyword'])); ?>

									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['app_ne']['articleInfo']['Nayong2'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "</div><br>", "<br>") : smarty_modifier_replace($_tmp, "</div><br>", "<br>")))) ? $this->_run_mod_handler('replace', true, $_tmp, '  ', "&nbsp;&nbsp;") : smarty_modifier_replace($_tmp, '  ', "&nbsp;&nbsp;")))) ? $this->_run_mod_handler('google_highlight', true, $_tmp, $this->_tpl_vars['form']['txtKeyword']) : smarty_modifier_google_highlight($_tmp, $this->_tpl_vars['form']['txtKeyword'])); ?>

								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td>
									<?php $_from = $this->_tpl_vars['app']['relArticle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
										<a href='/viewarticle?ArticleID=<?php echo $this->_tpl_vars['val']['ArticleID']; ?>
'>
											<b>[관련기사]</b>
											<?php echo $this->_tpl_vars['val']['Title']; ?>

										</a>
										<br>
									<?php endforeach; endif; unset($_from); ?>
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="right" height="17">
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['WriterName'] != ""): ?><?php echo $this->_tpl_vars['app_ne']['articleInfo']['WriterName']; ?>
 <!-- 기자 --><?php endif; ?>
									<?php if ($this->_tpl_vars['app_ne']['articleInfo']['Email'] != ""): ?>(<?php echo $this->_tpl_vars['app_ne']['articleInfo']['Email']; ?>
)<?php endif; ?>
								</td>
							</tr>
							<tr>
								<td align="right">
									<?php echo $this->_tpl_vars['app_ne']['articleInfo']['JunsongDateTime']; ?>

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