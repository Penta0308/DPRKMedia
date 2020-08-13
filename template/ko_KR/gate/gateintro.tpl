<!--
<%@ Page Language="vb" AutoEventWireup="false" Codebehind="gate_intro.aspx.vb" Inherits="KPPress.gate_intro"%>
<%@ Register TagPrefix="uc1" TagName="Bottom" Src="include/gate_bottom.ascx" %>
<%@ Register TagPrefix="uc1" TagName="TOP" Src="include/gate_top.ascx" %>
-->
<HTML>
	<HEAD>
		<title>KPM - 조선언론 정보기지</title>
		<META http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987">
		<LINK href="/css/gate.css" type="text/css" rel="stylesheet">
	</HEAD>
	<body bgColor="#ffffff" leftMargin="0" topMargin="0">
		<form id="Form1" method="post" runat="server">
			<table cellSpacing="0" cellPadding="0" width="801" bgColor="#ffffff" border="0" height="100%">
				<tr>
					<td width="200" height="70"><a href="/gate/gatemain"><img src="/images/logo2_gate.gif" width="200" height="70" border="0"></a></td>
					<td width="600" colspan="2">
						<!-- TOP menu -->
						{include file='gate/include/top.tpl'}
					</td>
					<td width="1" rowspan="9" bgcolor="#C0C0C0"></td>
				</tr>
				<tr>
					<td width="200" height="142"><img src="/images/image_intro_gate.gif" width="200" height="142"></td>
					<td width="600" height="142" colspan="2"><img src="/images/image1_sub_gate.gif" width="600" height="142"></td>
				</tr>
				<tr>
					<td width="200" height="48" rowspan="2"><img src="/images/no_01_gate.gif" width="200" height="48"></td>
					<td width="1" bgcolor="#C0C0C0" rowspan="2"></td>
					<td width="599" height="20"><img src="/images/image2_sub_gate.gif" width="599" height="20"></td>
				</tr>
				<tr>
					<td width="599" height="28" align="right" valign="bottom">HOME &gt; KPM 
						소개&nbsp;&nbsp;</td>
				</tr>
				<tr>
					<td width="200" height="70" rowspan="3" valign="top"><img src="/images/title_intro_gate.gif" width="200" height="28"></td>
					<td width="1" bgcolor="#C0C0C0" rowspan="3"></td>
					<td width="599" height="10"></td>
				</tr>
				<tr>
					<td width="599" height="1" bgcolor="#C0C0C0"></td>
				</tr>
				<tr>
					<td width="599" height="59" align="center" valign="bottom"><img src="/images/bar_intro_gate.gif" width="580" height="48"></td>
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
											<td height="22"><b><font color="#a50021">조선민주주의인민공화국 실시간 기사전송망, 인용전재권/기관리용권 관리운영망</font></b></td>
										</tr>
										<tr>
											<td height="1" bgColor="#808080"></td>
										</tr>
										<tr>
											<td height="20"></td>
										</tr>
										<tr>
											<td>
												<table cellSpacing="0" cellPadding="0" width="538" bgColor="#ffffff" border="0">
												<tr>
													<td width="195">
														<img src="/images/img01_intro_about.gif" width="195" height="227"> 
													</td>
													<td width="10"></td>
													<td valign="top" class="text_intro">
													KPM은 평양→도꾜를 발신기지로 하여 세계최초, 유일하게 개설된 새형의 인터네트기사전송망입니다. 조선민주주의인민공화국의 공식승인과 공화국 
												언론기관의 독점위임을 받아 도꾜 소재 조선메디아가 운영합니다. 조선메디아는 조선민주주의인민공화국의 신문기사, 보도사진, 동영상뉴스의 인용전재권 
												및 기관리용과 관련한 계약과 관리운영업무를 수행합니다. 동시에 KPM을 기지국으로 하여 조선에 대한 빠르고 정확한 정보와 심층적리해를 원하는 
												기관을 대상으로 하는 기사전송업무도 수행합니다. 계약 및 전송써비스와 관련하여 더욱 자세한 정보를 원하는 기관은 조선메디아로 문의해주시기 
												바랍니다.
													</td>
												</tr>
												</table>												
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
											<td height="22"><b><font color="#a50021" style="font-size:9pt;letter-spacing:-1pt">하루 100건(조문) 이상의 기사갱신, &lt;로동신문&gt;, &lt;민주조선&gt; 등 일/주간신문 전기사 실시간 전송</font></b></td>
										</tr>
										<tr>
											<td height="1" bgColor="#808080"></td>
										</tr>
										<tr>
											<td height="12"></td>
										</tr>
										<tr>
											<td><img src="/images/img02_intro_about.gif" width="538" height="355"></td>
										</tr>
										<tr>
											<td height="12"></td>
										</tr>
										<tr>
											<td class="text_intro">
											KPM은 2006년 1월 현재시점에서 &lt;로동신문&gt; &lt;민주조선&gt; &lt;통일신보&gt; &lt;문학신문&gt; &lt;평양타임스&gt; 등 6개 공화국매체의 모든 지면기사와 &lt;천리마&gt; &lt;경제연구&gt; 등 저널 15종의 모든 기사/논문을 인터네트상에서 실시간으로 전송합니다. 일간신문인 &lt;로동신문&gt; &lt;민주조선&gt;은 출근첫시간에 열람이 가능하도록 전송합니다.
											</td>
										</tr>
										<tr>
											<td height="26"></td>
										</tr>
										<tr>
											<td>
												<table cellSpacing="0" cellPadding="0" width="538" bgColor="#ffffff" border="0">
												<tr>
													<td width="170">
														<img src="/images/img03_intro_about.gif" width="170" height="170"><br><br>
														<img src="/images/img04_intro_about.gif" width="170" height="226">
													</td>
													<td width="10"></td>
													<td valign="top">
														<table cellSpacing="0" cellPadding="0" width="358" bgColor="#ffffff" border="0">
															<tr>
																<td height="1" bgColor="#808080"></td>
															</tr>
															<tr>
																<td height="3"></td>
															</tr>
															<tr>
																<td height="22"><b><font color="#a50021" style="font-size:9pt;letter-spacing:-1pt">정당, 행정부, 수도권, 지방, 경제 등 지역/분야별 특별취재기사</font></b></td>
															</tr>
															<tr>
																<td height="1" bgColor="#808080"></td>
															</tr>
															<tr>
																<td height="12"></td>
															</tr>
															<tr>
																<td class="text_intro">KPM은 &lt;조선신보 평양지국&gt; 현지 기자진의 특별취재기사도 전송합니다. 당, 행정부, 수도권 및 지방소식, 경제분야의 심층취재기사, 각계인사와의 인터뷰기사 등을 현장사진과 함께 열람할수 있습니다.</td>
															</tr>
															<tr>
																<td height="24"></td>
															</tr>
															<tr>
																<td height="1" bgColor="#808080"></td>
															</tr>
															<tr>
																<td height="3"></td>
															</tr>
															<tr>
																<td height="22"><b><font color="#a50021" style="font-size:9pt;letter-spacing:-1pt">사회과학원, 김일성종합대학 등의 학자, 교원들의 기고/해설기사</font></b></td>
															</tr>
															<tr>
																<td height="1" bgColor="#808080"></td>
															</tr>
															<tr>
																<td height="12"></td>
															</tr>
															<tr>
																<td class="text_intro">정세와 관련하여 초점이 되고있는 사항들에 대한 공화국의 정확한 견해와 립장을 담은 전문가들의 기고문과 해설기사, 론문들도 열람할수있습니다.</td>
															</tr>
															<tr>
																<td height="24"></td>
															</tr>
															<tr>
																<td height="1" bgColor="#808080"></td>
															</tr>
															<tr>
																<td height="3"></td>
															</tr>
															<tr>
																<td height="22"><b><font color="#a50021" style="font-size:9pt;letter-spacing:-1pt">현지 기자진이 직접 촬영하는 생생한 보도사진과 동영상</font></b></td>
															</tr>
															<tr>
																<td height="1" bgColor="#808080"></td>
															</tr>
															<tr>
																<td height="12"></td>
															</tr>
															<tr>
																<td class="text_intro">KPM은 글기사, 사진, 동영상을 통합하여 써비스하는 첨단 류형의 인터네트언론기지입니다. 농장과 기업소, 시장, 지방별 뉴스현장의 탐방기사, 인물인터뷰 등 주요기사는 생생한 사진과 함께 전송되며 핵심기사에는 동영상도 제공됩니다.</td>
															</tr>
															<tr>
																<td height="12"></td>
															</tr>
														</table>																									
													</td>
												</tr>
												</table>	
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
				</tr>
			</table>
		</form>
	</body>
</HTML>
