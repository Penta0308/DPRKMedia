						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#e2e2e2">&nbsp;&nbsp;
									{if $form.lvl eq 1}<b>主要</b> {/if}
									<b>{$app.lbl_bar}</b>
								</td>
								<td align="right" width="398" bgColor="#e2e2e2">最近一週間のニュースリストです。&nbsp;</td>
							</tr>
							<tr>
								<td colSpan="2" width="568" height="15"></td>
							</tr>
							<tr>
								<td colSpan="2" width="568" align="center">
									<table cellspacing="0" cellpadding="1" border="0" id="DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:558px;border-collapse:collapse;">
										{foreach from=$app.articleList.list item=val}
										<tr style="height:20px;">
											<td align="left">
												ㆍ <a href='/japanese//viewarticle?ArticleID={$val.ArticleID}'>
													{$val.Title}
												</a>
												{if $val.chkphoto eq "1"}
												<img src='/images/icon_photo.gif' align='absmiddle'>
												{/if}
											</td>
											<td align="right" valign="top" style="width:80px;">
												{$val.JunsongDateTime|date_format:"%m-%d %H:%M"}
											</td>
										</tr>
										{/foreach}

										<tr align="center" valign="bottom" style="color:#003296;height:30px;">
											<td colspan="3">
												{foreach from=$app.pager item=page}
													{if $page.offset == $app.current}
														<strong>{$page.index}</strong>
													{else}
														<a href="{$app.link}?ID={$form.ID}&chk_etc={$form.chk_etc}{if $form.lvl ne ""}&lvl={$form.lvl}{/if}&offset={$page.offset}">{$page.index}</a>
													{/if}
													&nbsp;
												{/foreach}
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
