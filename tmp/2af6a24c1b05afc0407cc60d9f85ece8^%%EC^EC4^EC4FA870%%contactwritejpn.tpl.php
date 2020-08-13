<?php /* Smarty version 2.6.27, created on 2020-05-01 21:44:17
         compiled from gate/contactwritejpn.tpl */ ?>
<!--
<%@ Page Language="vb" AutoEventWireup="false" Codebehind="ContactWrite_jpn.aspx.vb" Inherits="KPPress.ContactWrite_jpn"%>
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
	<HEAD>
		<title>ContactWrite</title>
		<meta content="Microsoft Visual Studio .NET 7.1" name="GENERATOR">
		<meta content="Visual Basic .NET 7.1" name="CODE_LANGUAGE">
		<meta content="JavaScript" name="vs_defaultClientScript">
		<meta content="http://schemas.microsoft.com/intellisense/ie5" name="vs_targetSchema">
		<LINK href="/japanese/include/main.css" type="text/css" rel="stylesheet">
		<script>
			<?php echo '
			function PopupOpen(page,name,width,height){
				var left = (screen.width - width) / 2;
				var top = (screen.height - height) / 2; 
				var features = \'width=\' + width + \',height=\' + height + \',left=\' + left +\',top=\' + top;
				features    += \'diretories=no,location=no,menubar=no,scrollbars=no,toolbar=no,resizable=yes,\';
				features    += \'status=yes,\';
				window_handle= window.open(page,name,features);
			}
			'; ?>

		</script>
	</HEAD>
	<body leftMargin="0" topMargin="0">
		<form id="Form1" method="post" runat="server" enctype="multipart/form-data">
			<table cellSpacing="2" cellPadding="0" width="538" border="0">
				<tr bgColor="#595959" height="25">
					<td align="center" colSpan="2"><font color="#ffffff"><b>相談依頼</b></font></td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center" width="20%">Country/City</td>
					<td width="80%">
						&nbsp;
						<input name="txtNation" type="text" id="txtNation" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">Company</td>
					<td>
						&nbsp;
						<input name="txtWriteCustomerName" type="text" id="txtWriteCustomerName" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">Post/Name</td>
					<td>
						&nbsp;
						<input name="txtWriteUserName" type="text" id="txtWriteUserName" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">Tel/Fax</td>
					<td>
						&nbsp;
						<input name="txtTel" type="text" id="txtTel" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">E-mail</td>
					<td>
						&nbsp;
						<input name="txtEmail" type="text" id="txtEmail" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">Title</td>
					<td>
						&nbsp;
						<input name="txtSubject" type="text" id="txtSubject" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="106">
					<td align="center">Description
						<br>
						of Proposal</td>
					<td>
						&nbsp;
						<textarea id="txtText" style="HEIGHT: 100px;width:390px;" name="txtText" runat="server"></textarea>
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">File</td>
					<td>
						&nbsp;
						<input id="txtFile" name="txtFile" type="file" size="30" runat="server">
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="35">
					<td align="center" colSpan="2">
						<input type="image" name="btnSubmit" id="btnSubmit" src="/images/btn_contact_send_eng.gif" style="border-width:0px;" />
						<?php if ($this->_tpl_vars['app']['popupscript']): ?>
							<?php echo '
							<script type="text/javascript">
							<!--
							PopupOpen(\'/gate/contactwritepopupjpn\',\'MenuEditorSub\',\'395\',\'164\');
							// -->
							</script>
							'; ?>

						<?php endif; ?>
					</td>
				</tr>
			</table>
		</form>
	</body>
</HTML>