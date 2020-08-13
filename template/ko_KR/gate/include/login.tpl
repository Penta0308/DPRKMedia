<!--
<%@ Control Language="vb" AutoEventWireup="false" Codebehind="gate_login.ascx.vb" Inherits="KPPress.gate_login" TargetSchema="http://schemas.microsoft.com/intellisense/ie5" %>
-->
<table cellSpacing="0" cellPadding="0" width="180" bgColor="#e2e2e2" border="0">
	<tr>
		<td height="10" colspan="2">
		{if count($errors) || $app.faillogin}
			{if $form.txt_userid ne ""}
				<center><font color="red">로그인에 실패하였습니다.</font></center>
			{elseif $form.txt_userid eq ""}
				<center><font color="red">UserName을 입력해 주십시오.</font></center>
			{/if}
		{/if}
		</td>
	</tr>
	<tr>
		<td width="70" height="25" align="right"><font color="#093842" style="FONT-SIZE:8pt">UserName</font>&nbsp;</td>
		<td width="100" align="right">
			<input name="txt_userid" type="text" id="Login1_txt_userid" style="border-color:#7F9DB9;border-width:1px;border-style:Solid;font-size:9pt;width:95px;" />
		</td>
		<td width="10" rowspan="3"></td>
	</tr>
	<tr>
		<td width="70" height="25" align="right"><font color="#093842" style="FONT-SIZE:8pt">Password</font>&nbsp;</td>
		<td width="100" align="right">
			<input name="txt_pwd" type="password" id="Login1_txt_pwd" style="border-color:#7F9DB9;border-width:1px;border-style:Solid;font-size:9pt;width:95px;" />
		</td>
	</tr>
	<tr>
		<td width="70" height="40" align="right"></td>
		<td width="100" align="right">
			<input type="image" name="btn_login" id="Login1_btn_login" src="/images/btn_login_gate.gif" style="border-width:0px;" />
		</td>
	</tr>
</table>
