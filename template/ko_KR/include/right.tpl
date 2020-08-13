{* <!--
<%@ Control Language="vb" AutoEventWireup="false" Codebehind="Right.ascx.vb" Inherits="KPPress.Right" TargetSchema="http://schemas.microsoft.com/intellisense/ie5" %>
--> *}
<table cellSpacing="0" cellPadding="0" width="212" border="0">
	<tr>
		<td width="212" height="37">
			<table cellSpacing="0" cellPadding="0" width="212" border="0">
				<tr>
					<td width="212" height="6"><IMG height="6" src="/images/bg_search_top.gif" width="212"></td>
				</tr>
				<tr>
					<td vAlign="middle" align="center" width="212" bgColor="#408080" height="25">
						<a href="/search">
							<img border="0" src="/images/btn_search_big.gif">
						</a>
					</td>
				</tr>
				<tr>
					<td width="212" height="6"><IMG height="6" src="/images/bg_search_bottom.gif" width="212"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height="10"></td>
	</tr>
</table>

<TABLE cellSpacing="0" cellPadding="0" width="212" align="center" border="0">
	<TR>
		<TD width="212"><A href="/listphoto"><IMG height="24" src="/images/bar_r_photo.gif" width="212" border="0"></A></TD>
	</TR>
	<TR>
		<TD bgColor="#c6c6c6" height="2"></TD>
	</TR>
	<TR>
		<TD align="center" bgColor="#c6c6c6">
			<TABLE cellSpacing="0" cellPadding="0" width="200" border="0">
				{foreach from=$app.photoList item=val}
					<tr>
						<td width="192">
							<a href="#" onclick='popup_photo({$val.mmFileID})'><img src='{$val.Location_Thumb}' border="1" align=left vspace="5" style="border-color:black"></a>
						</td>
					</tr>
					<tr>
						<td height="28">
							<font style="font-size:8pt;"><a href="#" onclick='popup_photo({$val.mmFileID})' class="branch_a">
									▶
									{$val.Title}
								</a></font>
						</td>
					</tr>
				{/foreach}
			</TABLE>
		</TD>
	</TR>
	<TR>
		<TD height="10"></TD>
	</TR>
</TABLE>

{*
<TABLE cellSpacing="0" cellPadding="0" width="212" align="center" border="0">
	<TR>
		<TD width="212"><A href="/listvideo"><IMG height="24" src="/images/bar_r_video.gif" width="212" border="0"></A></TD>
	</TR>
	<TR>
		<TD bgColor="#c6c6c6" height="2"></TD>
	</TR>
	<TR>
		<TD align="center" bgColor="#c6c6c6">
			<TABLE cellSpacing="0" cellPadding="0" width="200" border="0">
				{foreach from=$app.videoList item=val}
					<tr>
						<td width="192">
							<a href="#" onclick='popup_video({$val.mmFileID}, 300)'><img src='{$val.Location_Thumb}' border="1" align=left vspace="5" style="border-color:black"></a>
						</td>
					</tr>
					<tr>
						<td height="28">
							<font style="font-size:8pt;"><a href="#" onclick='popup_video({$val.mmFileID}, 300)' class="branch_a">
									▶
									{$val.Title}
								</a></font>
						</td>
					</tr>
				{/foreach}
			</TABLE>
		</TD>
	</TR>
	<TR>
		<TD height="10"></TD>
	</TR>
</TABLE>
*}

<table cellSpacing="0" cellPadding="0" width="212" border="0">
	<tr>
		<td><A href="/listetc?ID=108&chk_etc=section&lvl=1"><IMG height="23" src="/images/bar_r_editorial.gif" width="212" border="0"></A></td>
	</tr>
	<tr>
		<td height="4"></td>
	</tr>
	<tr>
		<td align="center">
			<table cellSpacing="0" cellPadding="0" width="212" border="0">
				<tr>
					<td bgColor="#c6c6c6" colSpan="6" height="1"></td>
				</tr>
				<tr>
					<td width="1" bgColor="#c6c6c6" height="8"></td>
					<td width="210" colSpan="4"></td>
					<td width="1" bgColor="#c6c6c6"></td>
				</tr>

				{foreach from=$app.editorialList item=val}
					<tr>
						<td width="1" bgColor="#C6C6C6"></td>
						<td width="3"></td>
						<td width="10" valign="top">ㆍ</td>
						<td width="190" valign="top"><a href='/viewarticle?ArticleID={$val.ArticleID}'>{$val.Title}</a></td>
						<td width="7"></td>
						<td width="1" bgColor="#C6C6C6"></td>
					</tr>
					<tr>
						<td width="1" bgColor="#C6C6C6" height="3"></td>
						<td width="210" colspan="4"></td>
						<td width="1" bgColor="#C6C6C6"></td>
					</tr>
				{/foreach}
				
				<tr>
					<td width="1" bgColor="#c6c6c6" height="5"></td>
					<td width="210" colSpan="4"></td>
					<td width="1" bgColor="#c6c6c6"></td>
				</tr>
				<tr>
					<td bgColor="#c6c6c6" colSpan="6" height="1"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height="8"></td>
	</tr>
	<tr>
		<td><b><A href="/listetc?ID=109&chk_etc=section&lvl=1"><IMG height="23" src="/images/bar_r_interview.gif" width="212" border="0"></A></b></td>
	</tr>
	<tr>
		<td height="4"></td>
	</tr>
	<tr>
		<td align="center">
			<table cellSpacing="0" cellPadding="0" width="212" border="0">
				<tr>
					<td width="212" bgColor="#c6c6c6" colSpan="6" height="1"></td>
				</tr>
				<tr>
					<td width="1" bgColor="#c6c6c6" height="8"></td>
					<td width="210" colSpan="4"></td>
					<td width="1" bgColor="#c6c6c6"></td>
				</tr>

				{foreach from=$app.interviewList item=val}
					<tr>
						<td width="1" bgColor="#C6C6C6"></td>
						<td width="3"></td>
						<td width="10" valign="top">ㆍ</td>
						<td width="190" valign="top"><a href='/viewarticle?ArticleID={$val.ArticleID}'>{$val.Title}</a></td>
						<td width="7"></td>
						<td width="1" bgColor="#C6C6C6"></td>
					</tr>
					<tr>
						<td width="1" bgColor="#C6C6C6" height="3"></td>
						<td width="210" colspan="4"></td>
						<td width="1" bgColor="#C6C6C6"></td>
					</tr>
				{/foreach}
				
				<tr>
					<td width="1" bgColor="#c6c6c6" height="5"></td>
					<td width="210" colSpan="4"></td>
					<td width="1" bgColor="#c6c6c6"></td>
				</tr>
				<tr>
					<td bgColor="#c6c6c6" colSpan="6" height="1"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height="8">
		</td>
	</tr>

	<TR>
		<TD><IMG height="23" src="/images/bar_r_kigo.gif" width="212" border="0"></TD>
	</TR>
	<TR>
		<TD height="4"></TD>
	</TR>
	<TR>
		<TD align="center">
			<TABLE cellSpacing="0" cellPadding="0" width="212" border="0">
				<TR>
					<TD width="212" bgColor="#c6c6c6" colSpan="6" height="1"></TD>
				</TR>
				<TR>
					<TD width="1" bgColor="#c6c6c6" height="8"></TD>
					<TD width="210" colSpan="4"></TD>
					<TD width="1" bgColor="#c6c6c6"></TD>
				</TR>

				{foreach from=$app.contributionList item=val}
					<tr>
						<td width="1" bgColor="#C6C6C6"></td>
						<td width="3"></td>
						<td width="10" valign="top">ㆍ</td>
						<td width="190" valign="top"><a href='/viewarticle?ArticleID={$val.ArticleID}'>{$val.Title|replace:'&lt;기고&gt;':''}</a></td>
						<td width="7"></td>
						<td width="1" bgColor="#C6C6C6"></td>
					</tr>
					<tr>
						<td width="1" bgColor="#C6C6C6" height="3"></td>
						<td width="210" colspan="4"></td>
						<td width="1" bgColor="#C6C6C6"></td>
					</tr>
				{/foreach}
				<TR>
					<TD width="1" bgColor="#c6c6c6" height="5"></TD>
					<TD width="210" colSpan="4"></TD>
					<TD width="1" bgColor="#c6c6c6"></TD>
				</TR>
				<TR>
					<TD bgColor="#c6c6c6" colSpan="6" height="1"></TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
	<TR>
		<TD height="8"></TD>
	</TR>

	{*<asp:Panel id="pnlKPMToday" runat="server" Visible="false">
		<TR>
			<TD><IMG height="23" src="/images/bar_r_today.gif" width="212" border="0"></TD>
		</TR>
		<TR>
			<TD width="212" height="4"></TD>
		</TR>
		<TR>
			<TD align="center" bgColor="#e6e6e6" height="46">
				<TABLE cellSpacing="0" cellPadding="0" width="186" border="0">
					<TR>
						<TD>
							<asp:panel id="pnlInfoService" runat="server" CssClass="branch_a"></asp:panel></TD>
					</TR>
				</TABLE>
			</TD>
		</TR>
		<TR>
			<TD height="8"></TD>
		</TR>
	</asp:Panel>*}
</table>
