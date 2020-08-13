<!--
<%@ Page Language="vb" AutoEventWireup="false" Codebehind="gate_guide_jpn.aspx.vb" Inherits="KPPress.gate_guide_jpn" %>
<%@ Register TagPrefix="uc1" TagName="TOP" Src="include/gate_top_jpn.ascx" %>
<%@ Register TagPrefix="uc1" TagName="Bottom" Src="include/gate_bottom.ascx" %>
-->
<HTML>
	<HEAD>
		<title>KPM - Japanese</title>
		<META http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987">
		<LINK href="/css/gate_jpn.css" type="text/css" rel="stylesheet">
	</HEAD>
	<body bgColor="#ffffff" leftMargin="0" topMargin="0">
		<form id="Form1" method="post" runat="server">
			<table cellSpacing="0" cellPadding="0" width="801" bgColor="#ffffff" border="0" height="100%">
				<tr>
					<td width="200" height="70"><a href="/gate/gatemainjpn"><img src="/images/logo2_gate_jpn.gif" width="200" height="70" border="0"></a></td>
					<td width="600" colspan="2">
						<!-- TOP menu -->
						{include file='gate/include/top.tpl'}
					</td>
					<td width="1" rowspan="9" bgcolor="#C0C0C0"></td>
				</tr>
				<tr>
					<td width="200" height="142"><img src="/images/image_guide_gate.gif" width="200" height="142"></td>
					<td width="600" height="142" colspan="2"><img src="/images/image1_sub_gate.gif" width="600" height="142"></td>
				</tr>
				<tr>
					<td width="200" height="48" rowspan="2"><img src="/images/no_02_gate.gif" width="200" height="48"></td>
					<td width="1" bgcolor="#C0C0C0" rowspan="2"></td>
					<td width="599" height="20"><img src="/images/image2_sub_gate.gif" width="599" height="20"></td>
				</tr>
				<tr>
					<td width="599" height="28" align="right" valign="bottom">HOME &gt; 
						利用案内&nbsp;&nbsp;</td>
				</tr>
				<tr>
					<td width="200" height="70" rowspan="3" valign="top"><img src="/images/title_guide_gate_j.gif" width="200" height="28"></td>
					<td width="1" bgcolor="#C0C0C0" rowspan="3"></td>
					<td width="599" height="10"></td>
				</tr>
				<tr>
					<td width="599" height="1" bgcolor="#C0C0C0"></td>
				</tr>
				<tr>
					<td width="599" height="59" align="center" valign="bottom"><img src="/images/bar_guide_gate_j.gif" width="580" height="48"></td>
				</tr>
				<tr>
					<td width="200" align="center" valign="top">
						<table cellSpacing="0" cellPadding="0" width="180" border="0">
							<tr>
								<td width="180" height="20"></td>
							</tr>
						</table>
					</td>
					<td width="1" bgcolor="#C0C0C0"></td>
					<td width="599" align="center">
									<table cellSpacing="0" cellPadding="0" width="538" bgColor="#ffffff" border="0">
										<tr>
											<td height="26"></td>
										</tr>
										<tr>
											<td height="1" bgColor="#808080"></td>
										</tr>
										<tr>
											<td height="3"></td>
										</tr>
										<tr>
											<td height="22"><b><font color="#a50021">引用転載権/転送権</font></b></td>
										</tr>
										<tr>
											<td height="1" bgColor="#808080"></td>
										</tr>
										<tr>
											<td height="12"></td>
										</tr>
										<tr>
											<td class="text_intro">
											朝鮮民主主義人民共和国の公式委任と各言論社との独占契約によってＫＰＭに掲載された記事及び写真、動映像などのすべてのデータ送信権はコリアメディアにあります。弊社承認のない引用及び転載、契約機関の報道を利用した再引用及び転載は法的責任が生じる行為として賠償請求の対象となることがあります。
											</td>
										</tr>
										<tr>
											<td height="26"></td>
										</tr>
										<tr>
											<td height="1" bgColor="#808080"></td>
										</tr>
										<tr>
											<td height="3"></td>
										</tr>
										<tr>
											<td height="22"><b><font color="#a50021">受信/閲覧資格及びお問い合わせ先</font></b></td>
										</tr>
										<tr>
											<td height="1" bgColor="#808080"></td>
										</tr>
										<tr>
											<td height="12"></td>
										</tr>
										<tr>
											<td class="text_intro">
											ＫＰＭのリアルタイム記事情報サービスは有料です。コリアメディアと引用及び転載権契約を締結した大学、研究所、公共機関など機関に限り全文を提供します。個人有料サービスは 扱いません。契約を希望される法人、機関は銘記された連絡場所までお問い合わせまたは訪問頂くようお願いします。<b><a href="/gate/gate_contact_jpn.aspx#p"><font color="navy">→ E-mail 相談</font></a></b><br><br>
											<!-- img src="/images/img_map_about_jpn.gif" width="538" height="320" -->
											</td>
										</tr>
										<tr>
											<td height="26"></td>
										</tr>
										<tr>
											<td height="1" bgColor="#808080"></td>
										</tr>
										<tr>
											<td height="3"></td>
										</tr>
										<tr>
											<td height="22"><b><font color="#a50021">送信/利用方式</font></b></td>
										</tr>
										<tr>
											<td height="1" bgColor="#808080"></td>
										</tr>
										<tr>
											<td height="12"></td>
										</tr>
										<tr>
											<td class="text_intro">
											ご契約法人、機関に限りインターネットで繋がれた担当者（部署）のコンピューターのＩＰを開くことも出来ます。この他送信、利用方式に関する詳細なお問い合わせ、ご相談は上記の場所にご連絡ください。
											</td>
										</tr>
										<tr>
											<td height="26"></td>
										</tr>
										
									</table>
					</td>
				</tr>
				<tr>
					<td width="800" colSpan="3" height="100%" bgcolor="#C0C0C0" valign="top" align="right">
						<!-- FOOTER -->
						{include file='gate/include/bottom.tpl'}
					</td>
					</td>
				</tr>
			</table>
		</form>
	</body>
</HTML>
