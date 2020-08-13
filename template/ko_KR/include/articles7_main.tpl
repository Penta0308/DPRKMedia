<!--
<%@ Control Language="vb" AutoEventWireup="false" Codebehind="Articles_main.ascx.vb" Inherits="KPPress.Articles_main" TargetSchema="http://schemas.microsoft.com/intellisense/ie5" %>
-->
<table cellspacing="0" cellpadding="1" border="0" id="Article2_DataGrid1" style="background-color:White;border-style:None;font-size:9pt;width:558px;border-collapse:collapse;">
{foreach from=$app.article7List item=val}
	<tr>
		<td align="left" style="height:20px;">
			<a href="/viewarticle?ArticleID={$val.ArticleID}">[Pyongyang Times] {$val.Title}</a>
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
