						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" bgColor="#ffe0e0" height="26">&nbsp;&nbsp; <b>PHOTO</b></td>
								<td align="right" width="398" bgColor="#ffe0e0">
									<select name="ddlSelectSection" onchange="location.href=this.options[this.selectedIndex].value"" id="ddlSelectSection" style="font-size:9pt;">
										<option {if $form.ddlSelectSection eq 0}selected="selected"{/if} value="0">전체</option>
										{foreach from=$app.sectionList item=val}
											<option value="/listphoto?ddlSectionSection={$val.SectionId}{if $form.ddlSelectSection ne ''}&ddlSelectSection={$form.ddlSelectSection}{/if}" {if $form.ddlSelectSection eq $val.SectionId}selected="selected"{/if}>{$val.SectionName}</option>
										{/foreach}
									</select>
								</td>
							</tr>
							<tr>
								<td width="568" colSpan="2" height="15"></td>
							</tr>
							<tr>
								<td align="center" width="568" colSpan="2">

									<table cellspacing="0" cellpadding="3" border="0" id="DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:540px;border-collapse:collapse;">
										{foreach from=$app.photoAllList.list item=val}
											<tr valign="top">
												<td align="left" valign="middle" style="height:120px;width:110px;">
													<table width="102" height="102" cellSpacing="0" cellPadding="0" border="0">
														<tr>
															<td height="1" colspan="3" bgColor="#A3A3A3"></td>
														</tr>
														<tr>
															<td width="1" height="100" bgColor="#A3A3A3"></td>
															<td width="100" height="100" bgColor="#FFFFFF" align="center" valign="middle">
																<a href="#" onclick='popup_photo({$val.mmFileID})'><img src='{$val.Location_Thumb}' border="0"></a>
															</td>
															<td width="1" height="100" bgColor="#A3A3A3"></td>
														</tr>
														<tr>
															<td height="1" colspan="3" bgColor="#A3A3A3"></td>
														</tr>
													</table>
												</td>
												<td valign="middle">
													<a href="#" class="branch_a" onclick='popup_photo({$val.mmFileID})'>
														<b>
															{$val.Title}
														</b>
													</a>
												</td>
												<td valign="middle" style="width:90px;">
													<a href="#" onclick='popup_photo({$val.mmFileID})'><img src="/images/btn_photo_big.gif" width="80" height="28" border="0"></a><br>
													<a href='{$val.Location_Large}' target="_blank"><img src="/images/btn_download.gif" width="80" height="16" border="0"></a><br>
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
									<asp:datagrid id="DataGrid1" runat="server" ItemStyle-VerticalAlign="Top" ShowHeader="False" Font-Size="9pt"
										Width="540px" PageSize="10" AutoGenerateColumns="False" AllowPaging="True" OnPageIndexChanged="doPaging" BorderStyle="None" BackColor="White"
										CellPadding="3" GridLines="None">
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
																<a href="#" onclick='popup_photo(<%# Container.DataItem("mmFileID") %>)'><img src='<%# Container.DataItem("Location_Thumb") %>' border="0"></a>
															</td>
															<td width="1" height="100" bgColor="#A3A3A3"></td>
														</tr>
														<tr>
															<td height="1" colspan="3" bgColor="#A3A3A3"></td>
														</tr>
													</table>
												</ItemTemplate>
												<ItemStyle HorizontalAlign="left" VerticalAlign="Middle" Width="110" Height="120"></ItemStyle>
											</asp:TemplateColumn>
											<asp:TemplateColumn>
												<ItemTemplate>
													<a href="#" class="branch_a" onclick='popup_photo(<%# Container.DataItem("mmFileID") %>)'>
														<b>
															<%# Container.DataItem("Title") %>
														</b></a>
												</ItemTemplate>
												<ItemStyle VerticalAlign="Middle"></ItemStyle>
											</asp:TemplateColumn>
											<asp:TemplateColumn>
												<ItemTemplate>
													<a href="#" onclick='popup_photo(<%# Container.DataItem("mmFileID") %>)'><img src="/images/btn_photo_big.gif" width="80" height="28" border="0"></a><br>
													<a href='<%# Container.DataItem("Location_Large") %>' target="_blank"><img src="/images/btn_download.gif" width="80" height="16" border="0"></a><br>
												</ItemTemplate>
												<ItemStyle VerticalAlign="Middle" Width="90"></ItemStyle>
											</asp:TemplateColumn>
										</Columns>
										<PagerStyle HorizontalAlign="Center" ForeColor="#003296" Mode="NumericPages" Height="30" VerticalAlign="Bottom"></PagerStyle>
									</asp:datagrid>
									*}
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