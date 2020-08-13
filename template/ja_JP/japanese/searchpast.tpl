						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" bgColor="#e2e2e2" height="26">&nbsp;&nbsp;<b>過去の記事</b></td>
								<td align="right" width="398" bgColor="#e2e2e2"></td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="558" bgColor="#ffffff" border="0">
							<tr>
								<td align="center" width="558" height="20">
									<font color="#818181">
										記事の種類、日付を選択してください。
									</font>
								</td>
							</tr>
							<tr>
								<td align="center" width="558" height="40">
									<select name="ddlMedia" id="ddlMedia">
										<option {if $form.ddlMedia eq "0"}selected="selected"{/if} value="0">すべて</option>
										{foreach from=$app.mediaList item=val}
											<option {if $form.ddlMedia eq $val.MediaID}selected="selected"{/if} value="{$val.MediaID}">{$val.MediaNameJpn}</option>
										{/foreach}
									</select>
									&nbsp;
									{html_select_date prefix="ddl" field_order="Y" start_year="+0" end_year="1953" time=$app.selectedDate reverse_years=true year_extra='style="height:24px;width:70px;"'}年
									{html_select_date prefix="ddl" field_order="M" start_year="+0" end_year="+0"   time=$app.selectedDate month_format="%m" month_extra='style="height:24px;width:48px;"'}月
									{html_select_date prefix="ddl" field_order="D" start_year="+0" end_year="+0"   time=$app.selectedDate day_extra='style="height:24px;width:50px;"'}日
									<input type="image" name="imgbtnSearch" id="imgbtnSearch" align="absmiddle" src="/images/btn_search.gif" style="border-width:0px;" />
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td>
									{if $form.ddlMedia ne ""}
										※ 検索結果 : <FONT color="#cc0000">{$app.articleList.allListCnt}</FONT>件の記事が見つかりました
									{/if}
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td bgColor="#c6c6c6" height="1"></td>
							</tr>
							<tr>
								<td height="7"></td>
							</tr>
							<tr>
								<td>
									<table class="box" cellspacing="0" border="0" id="DataGrid1" style="width:100%;border-collapse:collapse;">
										{foreach from=$app.articleList.list item=val}
										<tr>
											<td align="left">
												ㆍ <a href='/japanese/viewarticle?ArticleID={$val.ArticleID}'>
													{$val.Title}
												</a>
											</td>
											<td align="right" valign="top" style="width:150px;">
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
														<a href="{$app.link}?ddlMedia={$form.ddlMedia}&ddlYear={$form.ddlYear}&ddlMonth={$form.ddlMonth}&ddlDay={$form.ddlDay}&offset={$page.offset}">{$page.index}</a>
													{/if}
													&nbsp;
												{/foreach}
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
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
