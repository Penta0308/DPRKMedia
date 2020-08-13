<!--
<%@ Control Language="vb" AutoEventWireup="false" Codebehind="Articles_main.ascx.vb" Inherits="KPPress.Articles_main" TargetSchema="http://schemas.microsoft.com/intellisense/ie5" %>
-->
<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
	<tr>
		<td height="26" bgColor="#e2e2e2">&nbsp;&nbsp;&nbsp;<A href="/listsrc?MediaID={$MediaID}" onfocus="this.blur()"><b>조선신보 평양지국</b></A></td>
		<td width="328" bgColor="#e2e2e2"></td>
		<td width="70"><A href="/listsrc?MediaID={$MediaID}" onfocus="this.blur()"><IMG height="26" src="/images/btn_main_more.gif" width="70" border="0"></A></td>
	</tr>
	<tr>
		<td colSpan="3" height="7"></td>
	</tr>
</table>

<table cellspacing="0" cellpadding="1" border="0" id="Article2_DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:558px;border-collapse:collapse;">
{foreach from=$app.article4List item=val}
	<tr>
		<td align="right" valign="top" style="width:10px;">
			ㆍ
		</td>
		<td align="left" style="height:20px;">
			<a href="/viewarticle?ArticleID={$val.ArticleID}">{$val.Title}</a>
			{if $val.chkphoto eq "1"}
			<img src='/images/icon_photo.gif' align='absmiddle'>
			{/if}
		</td>
		<td align="right" valign="top" style="width:80px;">
			{$val.JunsongDateTime|date_format:"%m-%d %H:%M"}
		</td>
	</tr>
{/foreach}
</table>
<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
	<tr>
		<td width="568" height="7"></td>
	</tr>
</table>
