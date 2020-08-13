						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" bgColor="#e2e2e2" height="26">&nbsp;&nbsp;
									{if $form.lvl eq "1"}
									<span id="lbl_bar" style="color:Red;font-weight:bold;">주요기사</span>
									{else}
									<span id="lbl_bar" style="color:Black;font-weight:bold;">전체기사</span>
									{/if}
								</td>
								<td align="right" width="398" bgColor="#e2e2e2">최근 일주일간의 뉴스 목록입니다.&nbsp;</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td align="center" width="568" colSpan="2" height="40">
									<select name="ddlMedia" id="ddlMedia">
										<option {if $form.ddlMedia eq "0"}selected="selected"{/if} value="0">전체</option>
										{foreach from=$app.mediaList item=val}
											<option {if $form.ddlMedia eq $val.MediaID}selected="selected"{/if} value="{$val.MediaID}">{$val.MediaName}</option>
										{/foreach}
									</select>
									&nbsp;
									<input name="txtKeyword" type="text" id="txtKeyword" style="height:20px;width:200px;" value="{$form.txtKeyword}"/>
									&nbsp;
									<input type="image" name="imgbtnSearch" id="imgbtnSearch" align="absmiddle" src="/images/btn_search.gif" style="border-width:0px;" />
									<input type="hidden" name="lvl" value="{$form.lvl}" />
								</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td align="center" width="568" colSpan="2">
									<table cellspacing="0" cellpadding="1" border="0" id="DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:558px;border-collapse:collapse;">
										{foreach from=$app.articleList.list item=val}
										<tr style="height:20px;">
											<td align="left">
												<a href='/viewarticle?ArticleID={$val.ArticleID}'>[{$val.MediaName}]
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
														<a href="{$app.link}?lvl={$form.lvl}&ddlMedia={$form.ddlMedia}&txtKeyword={$form.txtKeyword}&offset={$page.offset}">{$page.index}</a>
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
