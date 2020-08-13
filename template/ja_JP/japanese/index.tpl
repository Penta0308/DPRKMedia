{if count($errors)}
 <ul>
  {foreach from=$errors item=error}
   <li>{$error}</li>
  {/foreach}
 </ul>
{/if}
						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#c9c9c9">&nbsp;&nbsp; <b>KPM Today</b></td>
								<td width="328" bgColor="#c9c9c9"></td>
								<td width="70"><A href="/japanese/listall?lvl=0" onfocus="this.blur()"><IMG height="26" src="/images/btn_main_more2.gif" width="70" border="0"></A></td>
							</tr>
							<tr>
								<td width="568" height="7" colspan="3"></td>
							</tr>
						</table>
						<!-- Contents -->
						{include file='japanese/include/articles2_main.tpl'}

						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="170" height="26" bgColor="#c9c9c9">&nbsp;&nbsp; <b>平壌支局記事</b></td>
								<td width="328" bgColor="#c9c9c9"></td>
								<td width="70"  bgColor="#c9c9c9"><A href="/japanese/listsrc?MediaID=1007" onfocus="this.blur()"><IMG height="26" src="/images/btn_main_more2.gif" width="70" border="0"></A></td>
							</tr>
							<tr>
								<td width="568" height="7" colspan="3"></td>
							</tr>
						</table>
						<!-- Contents -->
						{include file='japanese/include/articles1_main.tpl'}

						<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
							<tr>
								<td width="568" height="7"></td>
							</tr>
						</table>
						<!-- NOTICE -->{include file='japanese/include/articles8_main.tpl'}
