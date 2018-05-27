<?php
require_once('../../../app/models/database.class.php');
require_once('../../../app/helpers/validator.class.php');
require_once('../../../app/helpers/component.class.php');
require_once('../../../app/helpers/dumper.php');
require_once('../../../app/helpers/phpmyimporter.php');
class Page extends Component {
	public static function templateHeader($title){
		print("
			<!DOCTYPE html>
			<html lang='es'>
				<head>
					<meta charset='utf-8'>
					<title>Dashboard - $title</title>
					<link type='text/css' rel='stylesheet' href='../../../web/css/bootstrap.css'/>
					<link type='text/css' rel='stylesheet' href='../../../web/css/login.css'/>
					<link type='text/css' rel='stylesheet' href='../../../web/css/daterangepicker.css'/>
					<link type='text/css' rel='stylesheet' href='../../../web/fonts/css/fontawesome-all.min.css'/>
					<link type='text/css' rel='stylesheet' href='../../../web/font/css/font-awesome.min.css'/>
					<link type='text/css' rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'/>		
					<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
				</head>
				<body class='nav-md'>
					<div class='container body'>
						<div class='main_container'>
							<header >
							</header>
							<main>
		");
	}


	public static function templateFooter(){
		print("
							</main>
							<!-- Footer -->
							<footer >
							</footer>
							<!-- ./Footer -->
						</div>
					</div>  
					<!-- jQuery -->
					<script type='text/javascript' src='../../../web/js/jquery.js'></script>
					<!-- Bootstrap -->
					<script type='text/javascript' src='../../../web/js/bootstrap.js'></script>
					<!-- bootstrap-progressbar -->
					<script type='text/javascript' src='../../../web/js/bootstrap-progressbar.js'></script>
					<!-- Custom Theme Scripts -->
					<script type='text/javascript' src=''></script>
				</body>
			</html>
		");
	}
}
?>