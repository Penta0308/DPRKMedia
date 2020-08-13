						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" bgColor="#c8d0dc" height="26">
									&nbsp;&nbsp;
									<b>{$app.mediaName.MediaName}</b>
								</td>
								<td vAlign="middle" align="right" width="398" bgColor="#c8d0dc">
									저널 이동
									<select size="1" name="MediaID" onchange="location.href=this.options[this.selectedIndex].value" id="lbx_Journals" style="font-size:8pt;width:130px;">
										{foreach from=$app.journalList item=val}
										<option value="/listjournal?MediaID={$val.MediaID}" {if $form.MediaID eq $val.MediaID}selected="selected"{/if}>{$val.MediaName}</option>
										{/foreach}
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
										<option {if $form.year eq ""}selected="selected"{/if} value="/listjournal?MediaID={$form.MediaID}">전체</option>
										{foreach from=$app.yearList item=val}
										<option value="/listjournal?MediaID={$form.MediaID}&year={$val.balHengYear}" {if $form.year eq $val.balHengYear}selected="selected"{/if}>{$val.balHengYear}</option>
										{/foreach}
									</select>
									&nbsp;&nbsp; 
									호수
									<select size="1" name="num" onchange="location.href=this.options[this.selectedIndex].value">
										<option {if $form.num eq ""}selected="selected"{/if} value="/listjournal?MediaID={$form.MediaID}&year={$form.year}">전체</option>
										{foreach from=$app.numList item=val}
										<option value="/listjournal?MediaID={$form.MediaID}&year={$form.year}&num={$val.gwonho}" {if $form.num eq $val.gwonho}selected="selected"{/if}>{$val.gwonho}</option>
										{/foreach}
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
										{foreach from=$app.articleList.list item=val}
											<tr style="height:20px;">
												<td align="right" valign="top" style="width:10px;">
													ㆍ
												</td>
												<td align="left">
													<a href='/viewjournal?JArticleID={$val.JArticleID}'>
														{$val.Title} 
														{if $val.Writers}/ {$val.Writers}{/if} 
													</a>
													{if $val.FileName ne ""}
													<img src='/images/icon_pdf.gif' align='absmiddle'>
													{/if}
												</td>
												<td align="left" valign="top" style="width:75px;">
													{$val.BalHengYear}
													년
													{$val.GwonHo}
													호
												</td>
											</tr>
										{/foreach}

										<tr align="center" valign="bottom" style="color:#003296;height:30px;">
											<td colspan="3">
												{foreach from=$app.pager item=page}
													{if $page.offset == $app.current}
														<strong>{$page.index}</strong>
													{else}
														<a href="{$app.link}?MediaID={$form.MediaID}{if $form.year ne ""}&year={$form.year}{/if}{if $form.num ne ""}&num={$form.num}{/if}&offset={$page.offset}">{$page.index}</a>
													{/if}
													&nbsp;
												{/foreach}
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
