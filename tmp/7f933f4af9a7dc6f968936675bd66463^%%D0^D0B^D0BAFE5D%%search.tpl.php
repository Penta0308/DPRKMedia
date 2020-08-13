<?php /* Smarty version 2.6.27, created on 2020-05-01 17:58:44
         compiled from search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'google_highlight', 'search.tpl', 113, false),array('modifier', 'date_format', 'search.tpl', 117, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
<!--
document.onkeypress = function(e) {
 e = e ? e : event;
 var key_code = e.charCode ? e.charCode : ((e.wihich) ? e.witch : e.keyCode);
 var ele = e.target ? e.target : e.srcElement;
 if (key_code == \'13\') {
 	if (ele.name == \'txtKeyword\') {
 	  document.Form1.submit();
 	}
 }
}
//-->
</script>
'; ?>

						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" bgColor="#e2e2e2" height="26">&nbsp;&nbsp;<b>검색</b></td>
								<td align="right" width="398" bgColor="#e2e2e2"></td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="558" bgColor="#ffffff" border="0">
							<tr>
								<td align="center" height="40">
									<?php if ($this->_tpl_vars['app']['dateerr'] == true): ?>
									<font color="red">
									날짜가 잘못 입력되어 있습니다. (기간은 31 일 이내까지)<br><br>
									</font>
									<?php endif; ?>
									<select name="search_year_from">
										<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)2005;
$this->_sections['i']['loop'] = is_array($_loop=2021) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
										<option <?php if ($this->_tpl_vars['form']['search_year_from'] == $this->_sections['i']['index'] || ( $this->_tpl_vars['form']['search_year_from'] == "" && date ( 'Y' ) == $this->_sections['i']['index'] )): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"><?php echo $this->_sections['i']['index']; ?>
</option>
										<?php endfor; endif; ?>/
									</select>
									<select name="search_month_from">
										<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
										<option <?php if ($this->_tpl_vars['form']['search_month_from'] == $this->_sections['i']['index'] || ( $this->_tpl_vars['form']['search_month_from'] == "" && date ( 'm' ) == $this->_sections['i']['index'] )): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"><?php echo $this->_sections['i']['index']; ?>
</option>
										<?php endfor; endif; ?>
									</select>/
									<select name="search_day_from">
										<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
										<option <?php if ($this->_tpl_vars['form']['search_day_from'] == $this->_sections['i']['index'] || ( $this->_tpl_vars['form']['search_day_from'] == "" && date ( 'd' ) == $this->_sections['i']['index'] )): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"><?php echo $this->_sections['i']['index']; ?>
</option>
										<?php endfor; endif; ?>
									</select> ～ 
									<select name="search_year_to">
										<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)2005;
$this->_sections['i']['loop'] = is_array($_loop=2021) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
										<option <?php if ($this->_tpl_vars['form']['search_year_to'] == $this->_sections['i']['index'] || ( $this->_tpl_vars['form']['search_year_to'] == "" && date ( 'Y' ) == $this->_sections['i']['index'] )): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"><?php echo $this->_sections['i']['index']; ?>
</option>
										<?php endfor; endif; ?>/
									</select>
									<select name="search_month_to">
										<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
										<option <?php if ($this->_tpl_vars['form']['search_month_to'] == $this->_sections['i']['index'] || ( $this->_tpl_vars['form']['search_month_to'] == "" && date ( 'm' ) == $this->_sections['i']['index'] )): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"><?php echo $this->_sections['i']['index']; ?>
</option>
										<?php endfor; endif; ?>
									</select>/
									<select name="search_day_to">
										<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
										<option <?php if ($this->_tpl_vars['form']['search_day_to'] == $this->_sections['i']['index'] || ( $this->_tpl_vars['form']['search_day_to'] == "" && date ( 'd' ) == $this->_sections['i']['index'] )): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"><?php echo $this->_sections['i']['index']; ?>
</option>
										<?php endfor; endif; ?>
									</select><br>
								
								
									<select name="ddlWhere" id="ddlWhere">
										<option <?php if ($this->_tpl_vars['form']['ddlWhere'] == 'news'): ?>selected="selected"<?php endif; ?> value="news">뉴스</option>
										<option <?php if ($this->_tpl_vars['form']['ddlWhere'] == 'journal'): ?>selected="selected"<?php endif; ?> value="journal">저널</option>
										<option <?php if ($this->_tpl_vars['form']['ddlWhere'] == 'photo'): ?>selected="selected"<?php endif; ?> value="photo">사진</option>
									</select>
									&nbsp;
									<input name="txtKeyword" type="text" id="txtKeyword" style="height:20px;width:268px;" value="<?php echo $this->_tpl_vars['form']['txtKeyword']; ?>
" />
									&nbsp;
									<input type="image" name="imgbtnSearch" id="imgbtnSearch" align="absmiddle" src="/images/btn_search.gif" style="border-width:0px;" />
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td>
									<?php if ($this->_tpl_vars['form']['txtKeyword'] != ""): ?>
										※ 검색결과 : 총
										<FONT color="#cc0000">
											<?php echo $this->_tpl_vars['app']['articleList']['allListCnt']; ?>

										</FONT>
										건의 기사를 찾았습니다.
									<?php endif; ?>
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>

							<?php if ($this->_tpl_vars['form']['ddlWhere'] == 'news'): ?>
								<TR>
									<TD bgColor="#c6c6c6" height="1"></TD>
								</TR>
								<TR>
									<TD height="7"></TD>
								</TR>
								<TR>
									<TD>
										<B>뉴스</B><BR>
										<BR>
										<table class="box" cellspacing="0" border="0" id="dgNews" style="width:100%;border-collapse:collapse;">
											<tbody>
												<?php $_from = $this->_tpl_vars['app']['articleList']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
												<tr>
													<td align="left">
														<a href="/viewarticle?ArticleID=<?php echo $this->_tpl_vars['val']['ArticleID']; ?>
&txtKeyword=<?php echo $this->_tpl_vars['app']['searchKeyword']; ?>
">
															[<?php echo $this->_tpl_vars['val']['MediaName']; ?>
]
															<?php echo ((is_array($_tmp=$this->_tpl_vars['val']['Title'])) ? $this->_run_mod_handler('google_highlight', true, $_tmp, $this->_tpl_vars['app']['searchKeyword']) : smarty_modifier_google_highlight($_tmp, $this->_tpl_vars['app']['searchKeyword'])); ?>

														</a>
													</td>
													<td align="right" valign="top" style="width:150px;">
														<?php echo ((is_array($_tmp=$this->_tpl_vars['val']['JunSongDateTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%G-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%G-%m-%d %H:%M")); ?>

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
?ddlWhere=<?php echo $this->_tpl_vars['form']['ddlWhere']; ?>
&txtKeyword=<?php echo $this->_tpl_vars['form']['txtKeyword']; ?>
&offset=<?php echo $this->_tpl_vars['page']['offset']; ?>
&search_year_from=<?php echo $this->_tpl_vars['form']['search_year_from']; ?>
&search_month_from=<?php echo $this->_tpl_vars['form']['search_month_from']; ?>
&search_day_from=<?php echo $this->_tpl_vars['form']['search_day_from']; ?>
&search_year_to=<?php echo $this->_tpl_vars['form']['search_year_to']; ?>
&search_month_to=<?php echo $this->_tpl_vars['form']['search_month_to']; ?>
&search_day_to=<?php echo $this->_tpl_vars['form']['search_day_to']; ?>
"><?php echo $this->_tpl_vars['page']['index']; ?>
</a>
															<?php endif; ?>
															&nbsp;
														<?php endforeach; endif; unset($_from); ?>
													</td>
												</tr>
											</tbody>
										</table>
									</TD>
								</TR>
							<?php endif; ?>

							<?php if ($this->_tpl_vars['form']['ddlWhere'] == 'journal'): ?>
								<TR>
									<TD bgColor="#c6c6c6" height="1"></TD>
								</TR>
								<TR>
									<TD height="7"></TD>
								</TR>
								<TR>
									<TD>
										<B>저널</B><BR>
										<BR>
										<table class="box" cellspacing="0" border="0" id="dgJournal" style="width:100%;border-collapse:collapse;">
											<tbody>
												<?php $_from = $this->_tpl_vars['app']['articleList']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
												<tr>
													<td align="left">
														<a href="/viewjournal?JArticleID=<?php echo $this->_tpl_vars['val']['JArticleID']; ?>
">
															[<?php echo $this->_tpl_vars['val']['MediaName']; ?>
]
															<?php echo $this->_tpl_vars['val']['Title']; ?>

														</a>
													</td>
													<td align="left" valign="top" style="width:90px;">
														<?php echo $this->_tpl_vars['val']['BalHengYear']; ?>
년 <?php echo $this->_tpl_vars['val']['GwonHo']; ?>
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
?ddlWhere=<?php echo $this->_tpl_vars['form']['ddlWhere']; ?>
&txtKeyword=<?php echo $this->_tpl_vars['form']['txtKeyword']; ?>
&offset=<?php echo $this->_tpl_vars['page']['offset']; ?>
&search_year_from=<?php echo $this->_tpl_vars['form']['search_year_from']; ?>
&search_month_from=<?php echo $this->_tpl_vars['form']['search_month_from']; ?>
&search_day_from=<?php echo $this->_tpl_vars['form']['search_day_from']; ?>
&search_year_to=<?php echo $this->_tpl_vars['form']['search_year_to']; ?>
&search_month_to=<?php echo $this->_tpl_vars['form']['search_month_to']; ?>
&search_day_to=<?php echo $this->_tpl_vars['form']['search_day_to']; ?>
"><?php echo $this->_tpl_vars['page']['index']; ?>
</a>
															<?php endif; ?>
															&nbsp;
														<?php endforeach; endif; unset($_from); ?>
													</td>
												</tr>
											</tbody>
										</table>
									</TD>
								</TR>
							<?php endif; ?>

							<?php if ($this->_tpl_vars['form']['ddlWhere'] == 'photo'): ?>
								<TR>
									<TD bgColor="#c6c6c6" height="1"></TD>
								</TR>
								<TR>
									<TD height="7"></TD>
								</TR>
								<TR>
									<TD><B>사진</B><BR>
										<center>
										<table id="dlPhoto" cellspacing="0" cellpadding="10" designtimedragdrop="124" border="0" style="border-collapse:collapse;">
											<tbody>
												<?php unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($_loop=$this->_tpl_vars['app']['articleList']['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['idx']['show'] = true;
$this->_sections['idx']['max'] = $this->_sections['idx']['loop'];
$this->_sections['idx']['step'] = 1;
$this->_sections['idx']['start'] = $this->_sections['idx']['step'] > 0 ? 0 : $this->_sections['idx']['loop']-1;
if ($this->_sections['idx']['show']) {
    $this->_sections['idx']['total'] = $this->_sections['idx']['loop'];
    if ($this->_sections['idx']['total'] == 0)
        $this->_sections['idx']['show'] = false;
} else
    $this->_sections['idx']['total'] = 0;
if ($this->_sections['idx']['show']):

            for ($this->_sections['idx']['index'] = $this->_sections['idx']['start'], $this->_sections['idx']['iteration'] = 1;
                 $this->_sections['idx']['iteration'] <= $this->_sections['idx']['total'];
                 $this->_sections['idx']['index'] += $this->_sections['idx']['step'], $this->_sections['idx']['iteration']++):
$this->_sections['idx']['rownum'] = $this->_sections['idx']['iteration'];
$this->_sections['idx']['index_prev'] = $this->_sections['idx']['index'] - $this->_sections['idx']['step'];
$this->_sections['idx']['index_next'] = $this->_sections['idx']['index'] + $this->_sections['idx']['step'];
$this->_sections['idx']['first']      = ($this->_sections['idx']['iteration'] == 1);
$this->_sections['idx']['last']       = ($this->_sections['idx']['iteration'] == $this->_sections['idx']['total']);
?>
												<?php if ($this->_sections['idx']['index'] % 2 == 0): ?>
												<tr>
												<?php endif; ?>
													<td>
														<table height="100%" cellspacing="0" cellpadding="0" width="100" align="center" border="0">
															<tbody>
																<tr>
																	<td style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" valign="middle" align="center" width="100" height="100">
																		<a href="javascript:MMPhotoView(<?php echo $this->_tpl_vars['app']['articleList']['list'][$this->_sections['idx']['index']]['mmFileID']; ?>
);">
																			<img src="<?php echo $this->_tpl_vars['app']['articleList']['list'][$this->_sections['idx']['index']]['Location_Thumb']; ?>
" border="0">
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<?php echo $this->_tpl_vars['app']['articleList']['list'][$this->_sections['idx']['index']]['Title']; ?>

																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												<?php if ($this->_sections['idx']['index'] % 2 != 0): ?>
												</tr>
												<?php endif; ?>
												<?php endfor; endif; ?>
												
												<tr align="center" valign="bottom" style="color:#003296;height:30px;">
													<td colspan="2">
														<?php $_from = $this->_tpl_vars['app']['pager']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
															<?php if ($this->_tpl_vars['page']['offset'] == $this->_tpl_vars['app']['current']): ?>
																<strong><?php echo $this->_tpl_vars['page']['index']; ?>
</strong>
															<?php else: ?>
																<a href="<?php echo $this->_tpl_vars['app']['link']; ?>
?ddlWhere=<?php echo $this->_tpl_vars['form']['ddlWhere']; ?>
&txtKeyword=<?php echo $this->_tpl_vars['form']['txtKeyword']; ?>
&offset=<?php echo $this->_tpl_vars['page']['offset']; ?>
&search_year_from=<?php echo $this->_tpl_vars['form']['search_year_from']; ?>
&search_month_from=<?php echo $this->_tpl_vars['form']['search_month_from']; ?>
&search_day_from=<?php echo $this->_tpl_vars['form']['search_day_from']; ?>
&search_year_to=<?php echo $this->_tpl_vars['form']['search_year_to']; ?>
&search_month_to=<?php echo $this->_tpl_vars['form']['search_month_to']; ?>
&search_day_to=<?php echo $this->_tpl_vars['form']['search_day_to']; ?>
"><?php echo $this->_tpl_vars['page']['index']; ?>
</a>
															<?php endif; ?>
															&nbsp;
														<?php endforeach; endif; unset($_from); ?>
													</td>
												</tr>
											</tbody>
										</table>
										</center>
									</TD>
								</TR>
							<?php endif; ?>


							<?php if ($this->_tpl_vars['app']['articleList']['allListCnt'] == 0 && $this->_tpl_vars['form']['ddlWhere'] != ""): ?>
								<TR>
									<TD vAlign="middle" align="center" height="100">
										<B><?php echo $this->_tpl_vars['form']['txtKeyword']; ?>
</B> 에 대한 검색결과가 없습니다.
									</TD>
								</TR>
							<?php endif; ?>


							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td align="right" colSpan="2"><A class="branch_a" href="#t">↑ 화면 우로</A>&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
						</table>