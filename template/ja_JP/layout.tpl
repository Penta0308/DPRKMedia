<HTML>
	<HEAD>
		<title>KPM - Japanese</title>
		<META http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987">
		<LINK href="/japanese/include/main.css" type="text/css" rel="stylesheet">
		<script language="JavaScript" src="/japanese/include/main.js"></script>
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
						{include file='japanese/include/top.tpl'}
					</td>
					<td width="1" rowspan="4" bgcolor="#929292"></td>
				</tr>
				<tr>
					<td vAlign="top" align="center" width="148" height="100%">
						<!-- LEFT menu -->
						{include file='japanese/include/left.tpl'}
					</td>
					<td width="1" rowspan="3" bgcolor="#929292"></td>
					<td vAlign="top" align="center" width="584">
						<!-- MAIN start -->
						{$content}
						<!-- MAIN end -->
					</td>
					<td width="1" rowspan="3" bgcolor="#929292"></td>
					<td vAlign="top" align="center" width="228">
						<!-- RIGHT manu -->
						{include file='japanese/include/right.tpl'}
					</td>
				</tr>
				<tr>
					<td colSpan="5" height="8"></td>
				</tr>
				<tr>
					<td colSpan="5">
						<!-- BOTTOM menu -->
						{include file='japanese/include/bottom.tpl'}
					</td>
				</tr>
			</table>
		</form>
	</body>
</HTML>
