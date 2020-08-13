{if count($errors)}
 <ul>
  {foreach from=$errors item=error}
   <li>{$error}</li>
  {/foreach}
 </ul>
{/if}
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#c9c9c9">&nbsp;&nbsp; <A href="/listall?lvl=1" onfocus="this.blur()">
										<b>주요기사</b></A></td>
								<td width="328" bgColor="#c9c9c9"></td>
								<td width="70"><A href="/listall?lvl=1" onfocus="this.blur()"><IMG height="26" src="/images/btn_main_more2.gif" width="70" border="0"></A></td>
							</tr>
							<tr>
								<td width="568" height="7" colspan="3"></td>
							</tr>
						</table>
						<!-- 主要記事 -->{include file='include/articles1_main.tpl'}
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" height="7"></td>
							</tr>
						</table>
						<!-- 労働新聞 -->{include file='include/articles2_main.tpl' MediaID='1001'}
						<!-- 民主朝鮮 -->{include file='include/articles3_main.tpl' MediaID='1002'}
						<!-- 平壌支局ニュース -->{include file='include/articles4_main.tpl' MediaID='1003'}
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="318" height="26" bgColor="#c9c9c9">&nbsp;&nbsp; <b>주간기사</b></td>
								<td width="250" bgColor="#c9c9c9" align="right">
									<font style="FONT-SIZE:8pt">▶ <A href="/listsrc?MediaID=1004" onfocus="this.blur()">
											통일신보</A> | <A href="/listsrc?MediaID=1005" onfocus="this.blur()">문학신문</A>
										| <A href="/listsrc?MediaID=1006" onfocus="this.blur()">Pyongyang Times</A>
									</font>&nbsp;
								</td>
							</tr>
							<tr>
								<td height="7" colspan="2"></td>
							</tr>
						</table>
						<!-- 統一新報 -->{include file='include/articles5_main.tpl' MediaID='1004'}
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" align="center"><img src=/images/line_main.gif></td>
							</tr>
						</table>
						<!-- 文学新聞 -->{include file='include/articles6_main.tpl' MediaID='1005'}
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" align="center"><img src=/images/line_main.gif></td>
							</tr>
						</table>
						<!-- Pyongyang Times -->{include file='include/articles7_main.tpl' MediaID='1006'}
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" height="7"></td>
							</tr>
						</table>
						<!-- NOTICE -->{include file='include/articles8_main.tpl'}
