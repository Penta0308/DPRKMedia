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
														{$val.TitleJpn}
													</b></a><a href='{$val.Location_Large}'><img src="/images/btn_download_j.gif" width="80" height="16" border="0" align="absmiddle"></a><br>
												<br>
												{$val.CaptionJpn|nl2br}
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
