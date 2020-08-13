<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
	<tr>
		<td height="26" bgColor="#e2e2e2">&nbsp;&nbsp;&nbsp;<b>NOTICE</b></td>
		<td width="328" bgColor="#e2e2e2"></td>
		<td width="70" bgColor="#e2e2e2">&nbsp;</td>
	</tr>
	<tr>
		<td colSpan="3" height="7"></td>
	</tr>
</table>

<table cellspacing="0" cellpadding="1" border="0" id="Article2_DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:558px;border-collapse:collapse;">
{foreach from=$app.lastestNotice item=val}
	<tr>
		<td align="right" valign="top" style="width:10px;">
			ㆍ
		</td>
		<td align="left" style="height:20px;">
			<A onclick="javascript:window.open('/gate/gatepopupnoticejpn?no={$val.Number}', 'notice', 'toolbar=0, directories=0, status=0, menubar=no, scrollbars=yes, resizable=no,width=316,height=300,top=100,left=300')" href="#">
				{$val.Subject} 
			</A>
		</td>
		<td align="right" valign="top" style="width:80px;">
			{$val.RegDate|date_format:'%m/%d'}
		</td>
	</tr>
{foreachelse}
	<tr>
		<td align="right" valign="top" style="width:10px;">
			ㆍ
		</td>
		<td align="left" style="height:20px;">
			お知らせはありません。
		</td>
		<td align="right" valign="top" style="width:80px;">
			&nbsp;
		</td>
	</tr>
{/foreach}

</table>
<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
	<tr>
		<td width="568" height="7"></td>
	</tr>
</table>
