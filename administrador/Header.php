
<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Chibcha-web</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="TemplateAdministrador/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="TemplateAdministrador/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="TemplateAdministrador/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="assetsCliente/plugins/toastr/toastr.min.css" />

	<link rel="stylesheet" type="text/css" href="TemplateAdministrador/src/plugins/sweetalert2/sweetalert2.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="TemplateAdministrador/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="TemplateAdministrador/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="TemplateAdministrador/src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="TemplateAdministrador/vendors/styles/style.css">

	<link rel="stylesheet" type="text/css" href="TemplateAdministrador/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="TemplateAdministrador/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="TemplateAdministrador/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="TemplateAdministrador/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="TemplateAdministrador/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>
	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="../TemplateAdministrador/vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> -->

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>

				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="TemplateAdministrador/src/images/chat-img1.jpg" alt="">
						</span>
						<span class="user-name"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Perfil</a>
						<a class="dropdown-item" href="../cerrar.php"><i class="dw dw-logout"></i> Salir</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
