<!--
<%@ Control Language="vb" AutoEventWireup="false" Codebehind="Articles2_main.ascx.vb" Inherits="KPPress.Articles2_main_jpn" TargetSchema="http://schemas.microsoft.com/intellisense/ie5" %>
-->
{foreach from=$app.article1List item=val name=article1List}
		<TABLE cellSpacing="0" cellPadding="0" width="558" bgColor="#ffffff" border="0">
			<TR>
				<TD width="5"></TD>
				<TD>ㆍ <A href='/japanese/viewarticle?ArticleID={$val.ArticleID}'>
						{$val.Title}
					</A>
					{if $val.chkphoto eq "1"}
					<img src='/images/icon_photo.gif' align='absmiddle'>
					{/if}
				</TD>
				<TD width="80" align="right">{$val.JunsongDateTime|date_format:"%m-%d %H:%M"}</TD>
			</TR>
		</TABLE>

		{if ($smarty.foreach.article1List.index + 1) % 5 == 0 && !$smarty.foreach.article1List.last}
		<img src=/images/line_main.gif>
		{/if}
{/foreach}
<table cellSpacing="0" cellPadding="0" width="568" bgColor="#ffffff" border="0">
	<tr>
		<td width="568" height="7"></td>
	</tr>
</table>
