						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#c8d0dc">
									&nbsp;&nbsp;
									<b>{$app_ne.articleInfo.MediaName}</b>
								</td>
								<td align="right" width="398" bgColor="#c8d0dc">
									<select size="1" name="MediaID" onchange="location.href=this.options[this.selectedIndex].value" id="lbx_Journals" style="font-size:8pt;width:130px;">
										{foreach from=$app.journalList item=val}
										<option value="/listjournal?MediaID={$val.MediaID}" {if $form.MediaID eq $val.MediaID}selected="selected"{/if}>{$val.MediaName}</option>
										{/foreach}
									</select>
									&nbsp;
								</td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="530" bgColor="#ffffff" border="0">
							<tr>
								<td width="530" height="15"></td>
							</tr>
							<tr>
								<td>
									<span id="lbl_Title" style="color:#003296;font-size:11pt;font-weight:bold;">
										{$app_ne.articleInfo.Title}
									</span>
								</td>
							</tr>
							<tr>
								<td height="15"></td>
							</tr>
							<tr>
								<td>
									<span style="font-size:8pt;">
									<b>저자</b> {$app_ne.articleInfo.Writers}
									{if $app_ne.articleInfo.TitleEng ne ""}<b>영문제목</b> {$app_ne.articleInfo.TitleEng}{/if}
									| <b>출처</b> &lt;{$app_ne.articleInfo.MediaName}&gt; 
									{if $app_ne.articleInfo.BalHengYear ne 0}
										{$app_ne.articleInfo.BalHengYear}년
										{if $app_ne.articleInfo.GwonHo ne 0}
											&nbsp;{$app_ne.articleInfo.GwonHo}호
											{if $app_ne.articleInfo.Rugye ne 0}
												 (루계{$app_ne.articleInfo.Rugye}호)
											{/if}
											{if $app_ne.articleInfo.Page ne "-"}
												{$app_ne.articleInfo.Page}쪽
											{/if}
										{/if}
									{/if}
									{if $app_ne.articleInfo.BalHengJi ne ""}
										| <b>발행지</b> {$app_ne.articleInfo.BalHengJi}
									{/if}
									{if $app_ne.articleInfo.BalHengCher ne ""}
										| <b>발행처</b> {$app_ne.articleInfo.BalHengCher}
									{/if}
									{if $app_ne.articleInfo.JungGiGanHengMulNo ne ""}
										| <b>정기간행물번호</b> {$app_ne.articleInfo.JungGiGanHengMulNo}
									{/if}
									{if $app_ne.articleInfo.ISSN ne ""}
										| <b>ISSN</b> {$app_ne.articleInfo.ISSN}
									{/if}
									</span>
								</td>
							</tr>
							<tr>
								<td height="15"></td>
							</tr>
							<tr>
								<td class="text">
									{if $app_ne.articleInfo.FileName eq ""}
										{$app_ne.articleInfo.Nayong1|nl2br|replace:"</div><br>":"<br>"|replace:"  ":"&nbsp;&nbsp;"}
										{$app_ne.articleInfo.Nayong2|nl2br|replace:"</div><br>":"<br>"|replace:"  ":"&nbsp;&nbsp;"}
									{else}
										<center><a href="{$app_ne.articleInfo.FileName}" target='_blank'><img src='/images/btn_orginal.gif' border='0'></a></center>
									{/if}
								</td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
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
