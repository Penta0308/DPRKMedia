<!--
<%@ Page Language="vb" AutoEventWireup="false" Codebehind="ContactWrite.aspx.vb" Inherits="KPPress.ContactWrite"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
-->
<HTML>
	<HEAD>
		<title>ContactWrite</title>
		<meta content="Microsoft Visual Studio .NET 7.1" name="GENERATOR">
		<meta content="Visual Basic .NET 7.1" name="CODE_LANGUAGE">
		<meta content="JavaScript" name="vs_defaultClientScript">
		<meta content="http://schemas.microsoft.com/intellisense/ie5" name="vs_targetSchema">
		<LINK href="/css/main.css" type="text/css" rel="stylesheet">
		<script>
			{literal}
			function PopupOpen(page,name,width,height){
				var left = (screen.width - width) / 2;
				var top = (screen.height - height) / 2; 
				var features = 'width=' + width + ',height=' + height + ',left=' + left +',top=' + top;
				features    += 'diretories=no,location=no,menubar=no,scrollbars=no,toolbar=no,resizable=yes,';
				features    += 'status=yes,';
				window_handle= window.open(page,name,features);
			}
			{/literal}
		</script>
	</HEAD>
	<body leftMargin="0" topMargin="0">
		<form id="Form1" method="post" runat="server" enctype="multipart/form-data">
			<table cellSpacing="2" cellPadding="0" width="538"  border="0">
				<tr bgColor="#595959" height="25">
					<td align="center" colSpan="2"><font color="#ffffff"><b>상담의뢰</b></font></td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center" width="20%">국가/소재도시</td>
					<td width="80%">
						&nbsp;
						<input name="txtNation" type="text" id="txtNation" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">기관명</td>
					<td>
						&nbsp;
						<input name="txtWriteCustomerName" type="text" id="txtWriteCustomerName" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">부서/담당자</td>
					<td>
						&nbsp;
						<input name="txtWriteUserName" type="text" id="txtWriteUserName" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">전화/팍스</td>
					<td>
						&nbsp;
						<input name="txtTel" type="text" id="txtTel" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">전자우편</td>
					<td>
						&nbsp;
						<input name="txtEmail" type="text" id="txtEmail" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">제목</td>
					<td>
						&nbsp;
						<input name="txtSubject" type="text" id="txtSubject" style="width:180px;" />
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="106">
					<td align="center">내용</td>
					<td>
						&nbsp;
						<textarea id="txtText" style="HEIGHT: 100px;width:390px;" name="txtText" runat="server"></textarea>
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="25">
					<td align="center">첨부파일</td>
					<td>
						&nbsp;
						<input id="txtFile" name="txtFile" type="file" size="30" runat="server">
					</td>
				</tr>
				<tr bgColor="#e6e6e6" height="35">
					<td align="center" colSpan="2">
						<input type="image" name="btnSubmit" id="btnSubmit" src="/images/btn_contact_send.gif" style="border-width:0px;" />
						{if $app.popupscript}
							{literal}
							<script type="text/javascript">
							<!--
							PopupOpen('/gate/contactwritepopup','MenuEditorSub','395','164');
							// -->
							</script>
							{/literal}
						{/if}
					</td>
				</tr>
			</table>
		</form>
	</body>
</HTML>
