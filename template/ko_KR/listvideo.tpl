						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#ffe0e0">&nbsp;&nbsp; <b>VIDEO</b></td>
								<td align="right" width="398" bgColor="#ffe0e0"></td>
							</tr>
							<tr>
								<td colSpan="2" width="568" height="15"></td>
							</tr>
							<tr>
								<td colSpan="2" width="568" align="center">
									<table cellspacing="0" cellpadding="3" border="0" id="DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:548px;border-collapse:collapse;">
										{foreach from=$app.videoAllList.list item=val}
										<tr valign="top">
											<td align="left" style="height:160px;width:110px;">
												<table width="102" height="102" cellSpacing="0" cellPadding="0" border="0">
													<tr>
														<td height="1" colspan="3" bgColor="#A3A3A3"></td>
													</tr>
													<tr>
														<td width="1" height="100" bgColor="#A3A3A3"></td>
														<td width="100" height="100" bgColor="#FFFFFF" align="center" valign="middle">
															<a href="#" onclick='popup_video({$val.mmFileID}, 300)'><img src='{$val.Location_Thumb}' border="0"></a>
														</td>
														<td width="1" height="100" bgColor="#A3A3A3"></td>
													</tr>
													<tr>
														<td height="1" colspan="3" bgColor="#A3A3A3"></td>
													</tr>
												</table>
												<table width="102" cellSpacing="0" cellPadding="0" border="0">
													<tr>
														<td align="center" height="40">
															<a href="#" onclick='popup_video({$val.mmFileID}, 56)'><img src="/images/btn_56k.gif" width="48" height="22" border="0"></a>
															<a href="#" onclick='popup_video({$val.mmFileID}, 300)'><img src="/images/btn_300k.gif" width="48" height="22" border="0"></a>
														</td>
													</tr>
												</table>
											</td><td class="Text">
												<a href="#" onclick='popup_video({$val.mmFileID}, 300)' class="branch_a">
													<b>
														{$val.Title}
													</b></a><a href='{$val.Location_Large}'><img src="/images/btn_download.gif" width="80" height="16" border="0" align="absmiddle"></a><br>
												<br>
												{$val.Caption|nl2br}
											</td>
										</tr>
										{/foreach}

										<tr align="center" valign="bottom" style="color:#003296;height:30px;">
											<td colspan="3">
												{foreach from=$app.pager item=page}
													{if $page.offset == $app.current}
														<strong>{$page.index}</strong>
													{else}
														<a href="{$app.link}?MediaID={$form.MediaID}&offset={$page.offset}">{$page.index}</a>
													{/if}
													&nbsp;
												{/foreach}
											</td>
										</tr>
									</table>

									
									{*
									<asp:datagrid id="DataGrid1" runat="server" GridLines="None" CellPadding="3" BackColor="White"
										BorderStyle="None" OnPageIndexChanged="doPaging" AllowPaging="True" AutoGenerateColumns="False"
										PageSize="10" Width="548px" Font-Size="9pt" ShowHeader="False" ItemStyle-VerticalAlign="Top">
										<Columns>
											<asp:TemplateColumn>
												<ItemTemplate>
													<table width="102" height="102" cellSpacing="0" cellPadding="0" border="0">
														<tr>
															<td height="1" colspan="3" bgColor="#A3A3A3"></td>
														</tr>
														<tr>
															<td width="1" height="100" bgColor="#A3A3A3"></td>
															<td width="100" height="100" bgColor="#FFFFFF" align="center" valign="middle">
																<a href="#" onclick='popup_video(<%# Container.DataItem("mmFileID") %>, 300)'><img src='<%# DataBinder.Eval(Container.DataItem, "Location_Thumb") %>' border="0"></a>
															</td>
															<td width="1" height="100" bgColor="#A3A3A3"></td>
														</tr>
														<tr>
															<td height="1" colspan="3" bgColor="#A3A3A3"></td>
														</tr>
													</table>
													<table width="102" cellSpacing="0" cellPadding="0" border="0">
														<tr>
															<td align="center" height="40">
																<a href="#" onclick='popup_video(<%# Container.DataItem("mmFileID") %>, 56)'><img src="/images/btn_56k.gif" width="48" height="22" border="0"></a>
																<a href="#" onclick='popup_video(<%# Container.DataItem("mmFileID") %>, 300)'><img src="/images/btn_300k.gif" width="48" height="22" border="0"></a>
															</td>
														</tr>
													</table>
												</ItemTemplate>
												<ItemStyle HorizontalAlign="left" Width="110" Height="160"></ItemStyle>
											</asp:TemplateColumn>
											<asp:TemplateColumn>
												<ItemTemplate>
													<a href="#" onclick='popup_video(<%# Container.DataItem("mmFileID") %>, 300)' class="branch_a">
														<b>
															<%# DataBinder.Eval(Container.DataItem, "Title") %>
														</b></a><a href='<%# Container.DataItem("Location_Large") %>'><img src="/images/btn_download.gif" width="80" height="16" border="0" align="absmiddle"></a><br>
													<br>
													<%# DataBinder.Eval(Container.DataItem, "Caption").Replace(Chr(13), "<br>") %>
												</ItemTemplate>
												<ItemStyle CssClass="Text"></ItemStyle>
											</asp:TemplateColumn>
										</Columns>
										<PagerStyle HorizontalAlign="Center" ForeColor="#003296" Mode="NumericPages" Height="30" VerticalAlign="Bottom"></PagerStyle>
									</asp:datagrid>
									*}
								</td>
							</tr>
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
