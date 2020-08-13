						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#e2e2e2">
									{if $app_ne.articleInfo.image == ""}
										&nbsp;&nbsp;&nbsp;<b>{$app_ne.articleInfo.MediaNameJpn}</b>
									{else}
										<IMG height="26" src="/images/{$app.articleInfo.media}" width="170">
									{/if}
								</td>
								<td align="right" width="398" bgColor="#e2e2e2">
									{if $app_ne.articleInfo.SectionNameJpn != "" && $app_ne.articleInfo.SectionNameJpn != "なし"}<b>{$app_ne.articleInfo.SectionNameJpn}</b>{/if}
									{if $app_ne.articleInfo.SectionNameJpn != "" && $app_ne.articleInfo.SectionNameJpn != "なし" && $app_ne.articleInfo.LocalNameJpn != "" && $app_ne.articleInfo.LocalNameJpn != "なし"}<b> | </b>{/if}
									{if $app_ne.articleInfo.LocalNameJpn != "" && $app_ne.articleInfo.LocalNameJpn != "なし"}<b>{$app_ne.articleInfo.LocalNameJpn}</b>{/if}&nbsp;&nbsp;
							</tr>
							<tr>
								<td colspan="2" align="right" height="26"><a href='/printarticle?ArticleID={$form.ArticleID}' target="_blank"><img src="/images/icon_print.gif" align="absmiddle" border="0">
										記事プリント</a></td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="530" bgColor="#ffffff" border="0">
							<tr>
								<td width="530" height="10"></td>
							</tr>
							<tr>
								<td>
									<span style="color:#003296;font-size:11pt;font-weight:bold;"><b>{$app_ne.articleInfo.Title|google_highlight:$form.txtKeyword}</b></span>
									{if $app_ne.articleInfo.chkPhoto eq "1"}
									<img src='/images/icon_photo.gif' align='absmiddle'>
									{/if}
								</td>
							</tr>
							<tr>
								<td height="5"></td>
							</tr>
							<tr>
								<td>
									<b>{$app_ne.articleInfo.SubTitle|google_highlight:$form.txtKeyword}</b>
								</td>
							</tr>
							<tr>
								<td height="15"></td>
							</tr>
							<tr>
								<td class="text">
									{$app_ne.articleInfo.Nayong1|nl2br|replace:"</div><br>":"<br>"|replace:"  ":"&nbsp;&nbsp;"|google_highlight:$form.txtKeyword}
									{$app_ne.articleInfo.Nayong2|nl2br|replace:"</div><br>":"<br>"|replace:"  ":"&nbsp;&nbsp;"|google_highlight:$form.txtKeyword}
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td>
									{foreach from=$app.relArticle item=val}
										<a href='/viewarticle?ArticleID={$val.ArticleID}'>
											<b>[関連記事]</b>
											{$val.Title}
										</a>
										<br>
									{/foreach}
								</td>
							</tr>
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="right" height="17">
									{if $app_ne.articleInfo.WriterName ne ""}{$app_ne.articleInfo.WriterName} <!-- 記者 -->{/if}
									{if $app_ne.articleInfo.Email ne ""}({$app_ne.articleInfo.Email}){/if}
								</td>
							</tr>
							<tr>
								<td align="right">
									{$app_ne.articleInfo.JunsongDateTime}
								</td>
							</tr>
						</table>
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
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
