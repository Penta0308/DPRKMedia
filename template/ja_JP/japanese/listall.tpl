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
										<option {if $form.ddlMedia eq "0"}selected="selected"{/if} value="0">すべて</option>
										{foreach from=$app.mediaList item=val}
											<option {if $form.ddlMedia eq $val.MediaID}selected="selected"{/if} value="{$val.MediaID}">{$val.MediaNameJpn}</option>
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
												ㆍ <a href='/japanese/viewarticle?ArticleID={$val.ArticleID}'>
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
								<td>&nbsp;&nbsp;<A class="branch_a" href="javascript:history.back();">← Back</A></td>
								<td align="right"><A class="branch_a" href="#t">↑ Top</A>&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
						</table>
