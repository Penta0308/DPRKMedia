{literal}
<script type="text/javascript">
<!--
document.onkeypress = function(e) {
 e = e ? e : event;
 var key_code = e.charCode ? e.charCode : ((e.wihich) ? e.witch : e.keyCode);
 var ele = e.target ? e.target : e.srcElement;
 if (key_code == '13') {
 	if (ele.name == 'txtKeyword') {
 	  document.Form1.submit();
 	}
 }
}
//-->
</script>
{/literal}
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" bgColor="#e2e2e2" height="26">&nbsp;&nbsp;<b>&#26908;索</b></td>
								<td align="right" width="398" bgColor="#e2e2e2"></td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="558" bgColor="#ffffff" border="0">
							<tr>
								<td align="center" height="40">
									{if $app.dateerr eq true}
									<font color="red">
									日付が間違って入力されています。（期間は31日以内までです）<br><br>
									</font>
									{/if}
									<select name="search_year_from">
										{section name=i start=2005 loop=2021}
										<option {if $form.search_year_from eq $smarty.section.i.index || ($form.search_year_from == "" && date('Y') eq $smarty.section.i.index)}selected="selected"{/if} value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
										{/section}/
									</select>
									<select name="search_month_from">
										{section name=i start=1 loop=13}
										<option {if $form.search_month_from eq $smarty.section.i.index || ($form.search_month_from == "" && date('m') eq $smarty.section.i.index)}selected="selected"{/if} value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
										{/section}
									</select>/
									<select name="search_day_from">
										{section name=i start=1 loop=32}
										<option {if $form.search_day_from eq $smarty.section.i.index || ($form.search_day_from == "" && date('d') eq $smarty.section.i.index)}selected="selected"{/if} value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
										{/section}
									</select> ～ 
									<select name="search_year_to">
										{section name=i start=2005 loop=2021}
										<option {if $form.search_year_to eq $smarty.section.i.index || ($form.search_year_to == "" && date('Y') eq $smarty.section.i.index)}selected="selected"{/if} value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
										{/section}/
									</select>
									<select name="search_month_to">
										{section name=i start=1 loop=13}
										<option {if $form.search_month_to eq $smarty.section.i.index|| ($form.search_month_to == "" && date('m') eq $smarty.section.i.index)}selected="selected"{/if} value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
										{/section}
									</select>/
									<select name="search_day_to">
										{section name=i start=1 loop=32}
										<option {if $form.search_day_to eq $smarty.section.i.index || ($form.search_day_to == "" && date('d') eq $smarty.section.i.index)}selected="selected"{/if} value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
										{/section}
									</select><br>
								
									<select name="ddlWhere" id="ddlWhere">
										<option {if $form.ddlWhere eq "news"}selected="selected"{/if} value="news">ニュース</option>
										<option {if $form.ddlWhere eq "journal"}selected="selected"{/if} value="journal">ジャーナル</option>
										<option {if $form.ddlWhere eq "photo"}selected="selected"{/if} value="photo">写真</option>
									</select>
									&nbsp;
									<input name="txtKeyword" type="text" id="txtKeyword" style="height:20px;width:268px;" value="{$form.txtKeyword}" />
									&nbsp;
									<input type="image" name="imgbtnSearch" id="imgbtnSearch" align="absmiddle" src="/images/btn_search.gif" style="border-width:0px;" />
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td>
									{if $form.txtKeyword ne ""}
										※ 検索結果 : 
										<FONT color="#cc0000">
											{$app.articleList.allListCnt}
										</FONT>
										件の記事が見つかりました
									{/if}
            					</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>

							{if $form.ddlWhere eq "news"}
								<TR>
									<TD bgColor="#c6c6c6" height="1"></TD>
								</TR>
								<TR>
									<TD height="7"></TD>
								</TR>
								<TR>
									<TD>
										<B>ニュース</B><BR>
										<BR>
										<table class="box" cellspacing="0" border="0" id="dgNews" style="width:100%;border-collapse:collapse;">
											<tbody>
												{foreach from=$app.articleList.list item=val}
												<tr>
													<td align="left">
														<a href="/japanese/viewarticle?ArticleID={$val.ArticleID}&txtKeyword={$app.searchKeyword}">
															[{$val.MediaNameJpn}]
															{$val.Title|google_highlight:$app.searchKeyword}
														</a>
													</td>
													<td align="right" valign="top" style="width:150px;">
														{$val.JunSongDateTime|date_format:"%G-%m-%d %H:%M"}
													</td>
												</tr>
												{/foreach}

												<tr align="center" valign="bottom" style="color:#003296;height:30px;">
													<td colspan="3">
														{foreach from=$app.pager item=page}
															{if $page.offset == $app.current}
																<strong>{$page.index}</strong>
															{else}
																<a href="{$app.link}?ddlWhere={$form.ddlWhere}&txtKeyword={$form.txtKeyword}&offset={$page.offset}&search_year_from={$form.search_year_from}&search_month_from={$form.search_month_from}&search_day_from={$form.search_day_from}&search_year_to={$form.search_year_to}&search_month_to={$form.search_month_to}&search_day_to={$form.search_day_to}">{$page.index}</a>
															{/if}
															&nbsp;
														{/foreach}
													</td>
												</tr>
											</tbody>
										</table>
									</TD>
								</TR>
							{/if}
							
							{if $form.ddlWhere eq "journal"}
								<TR>
									<TD bgColor="#c6c6c6" height="1"></TD>
								</TR>
								<TR>
									<TD height="7"></TD>
								</TR>
								<TR>
									<TD>
										<B>ジャーナル</B><BR>
										<BR>
										<table class="box" cellspacing="0" border="0" id="dgJournal" style="width:100%;border-collapse:collapse;">
											<tbody>
												{foreach from=$app.articleList.list item=val}
												<tr>
													<td align="left">
														<a href="/japanese/viewjournal?JArticleID={$val.JArticleID}">
															[{$val.MediaName}]
															{$val.Title}
														</a>
													</td>
													<td align="left" valign="top" style="width:90px;">
														{$val.BalHengYear}年 {$val.GwonHo}号
													</td>
												</tr>
												{/foreach}

												<tr align="center" valign="bottom" style="color:#003296;height:30px;">
													<td colspan="3">
														{foreach from=$app.pager item=page}
															{if $page.offset == $app.current}
																<strong>{$page.index}</strong>
															{else}
																<a href="{$app.link}?ddlWhere={$form.ddlWhere}&txtKeyword={$form.txtKeyword}&offset={$page.offset}&search_year_from={$form.search_year_from}&search_month_from={$form.search_month_from}&search_day_from={$form.search_day_from}&search_year_to={$form.search_year_to}&search_month_to={$form.search_month_to}&search_day_to={$form.search_day_to}">{$page.index}</a>
															{/if}
															&nbsp;
														{/foreach}
													</td>
												</tr>
											</tbody>
										</table>
									</TD>
								</TR>
							{/if}
							
							{if $form.ddlWhere eq "photo"}
								<TR>
									<TD bgColor="#c6c6c6" height="1"></TD>
								</TR>
								<TR>
									<TD height="7"></TD>
								</TR>
								<TR>
									<TD><B>写真</B><BR>
										<center>
										<table id="dlPhoto" cellspacing="0" cellpadding="10" designtimedragdrop="124" border="0" style="border-collapse:collapse;">
											<tbody>
												{section name=idx loop=$app.articleList.list}
												{if $smarty.section.idx.index % 2 == 0}
												<tr>
												{/if}
													<td>
														<table height="100%" cellspacing="0" cellpadding="0" width="100" align="center" border="0">
															<tbody>
																<tr>
																	<td style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" valign="middle" align="center" width="100" height="100">
																		<a href="javascript:MMPhotoView({$app.articleList.list[idx].mmFileID});">
																			<img src="{$app.articleList.list[idx].Location_Thumb}" border="0">
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		{$app.articleList.list[idx].TitleJpn}
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												{if $smarty.section.idx.index % 2 != 0}
												</tr>
												{/if}
												{/section}
												
												<tr align="center" valign="bottom" style="color:#003296;height:30px;">
													<td colspan="2">
														{foreach from=$app.pager item=page}
															{if $page.offset == $app.current}
																<strong>{$page.index}</strong>
															{else}
																<a href="{$app.link}?ddlWhere={$form.ddlWhere}&txtKeyword={$form.txtKeyword}&offset={$page.offset}&search_year_from={$form.search_year_from}&search_month_from={$form.search_month_from}&search_day_from={$form.search_day_from}&search_year_to={$form.search_year_to}&search_month_to={$form.search_month_to}&search_day_to={$form.search_day_to}">{$page.index}</a>
															{/if}
															&nbsp;
														{/foreach}
													</td>
												</tr>
											</tbody>
										</table>
										</center>
									</TD>
								</TR>
							{/if}

{*
							<asp:panel id="pnlVideo" runat="server" Visible="False">
								<TR>
									<TD bgColor="#c6c6c6" height="1"></TD>
								</TR>
								<TR>
									<TD height="7"></TD>
								</TR>
								<TR>
									<TD><B>動画</B><BR>
										<asp:datalist id="dlVideo" runat="server" CellPadding="10" RepeatColumns="4">
											<ItemTemplate>
												<TABLE height="100%" cellSpacing="0" cellPadding="0" width="100" align="center" border="0">
													<TR>
														<TD style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid"
															vAlign="middle" align="center" width="100" height="100"><a href='javascript:MMVideoView(<%# Container.DataItem("mmFileID")%>);'><img src='<%# Container.DataItem("Location_Thumb")%>' border=0></TD>
													</TR>
													<tr>
														<TD>
															<%# Container.DataItem("title")%>
															</a>
														</TD>
													</tr>
												</TABLE>
											</ItemTemplate>
										</asp:datalist></TD>
								</TR>
								<asp:panel id="pnlVideoMore" runat="server" Visible="False">
									<TR>
										<TD vAlign="middle" align="right" height="40"><A href='search.aspx?media=video&amp;keyword=<%=HttpUtility.UrlEncodeUnicode(request("keyword"))%>'><IMG src="/images/icon_searchMore.gif" border="0"></A>
										</TD>
									</TR>
								</asp:panel>
							</asp:panel>
*}
							{if $app.articleList.allListCnt eq 0 && $form.ddlWhere ne ""}
								<TR>
									<TD vAlign="middle" align="center" height="100">
										<B>{$form.txtKeyword}</B> の検索結果がありません。
									</TD>
								</TR>
							{/if}

							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td align="right" colSpan="2"><A class="branch_a" href="#t">↑ Top</A>&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
						</table>
