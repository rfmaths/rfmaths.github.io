
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Packages personnels</title>

<!-- Bootstrap -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

<style>
/* Fonts from Google Fonts */
@import url(//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic&subset=latin,latin-ext);
@import url(//fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic,700italic&subset=latin,latin-ext);
@import url(//fonts.googleapis.com/earlyaccess/nanumgothic.css);
@import url(//fonts.googleapis.com/earlyaccess/nanumgothiccoding.css);

/* Some elements from Apaxy */
* {
	margin:0;
	padding:0;
}
html {
	min-height: 100%;
	padding-top: 1em;
	padding-bottom: 1em;
	border-top: 10px solid #eee;
	border-bottom: 10px solid #eee;
	color: #61666c;
	line-height: 10px;
}
.font-monospace {
	font-family: 'Ubuntu Mono', 'Nanum Gothic Coding', monospace;
	font-weight: 400;
}
.font-sans-serif {
	font-family: 'Ubuntu', 'Nanum Gothic', sans-serif;
	font-weight: 300;
}
strong,
.strong {
	font-weight: 500;
}
.no-strong {
	font-weight: 300;
}
.transparent {
	border: 0px;
}
a:link {
	text-decoration: none;
	color: #61666c;
}
a:visited {
	color: #61666c;
}
a:hover {
	color: #2d2d2d;
}
a:active {
	color: #2d2d2d;
}
a:focus {
	color: #2d2d2d;
}
table {
	table-layout:fixed;
}
tr {
	height: 39px;
	text-align: center;
}
th {
	white-space: nowrap;
}
td {
	word-wrap: break-word;
}
td a:link {
	display: block;
}
.btn {
	font-weight: 300;
}
.btn-file {
	position: relative;
	overflow: hidden;
}
.btn-file input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	min-width: 100%;
	min-height: 100%;
	font-size: 100px;
	text-align: right;
	filter: alpha(opacity=0);
	opacity: 0;
	background: red;
	cursor: inherit;
	display: block;
}
input[readonly] {
	background-color: white !important;
	cursor: text !important;
}
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {
	border-color: rgba(97, 102, 108, 0.8);
	box-shadow: 0 1px 1px rgba(97, 102, 108, 0.075) inset, 0 0 8px rgba(97, 102, 108, 0.6);
	outline: 0 none;
}
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="font-sans-serif">
<header class="header-wrapper">
<div class="container">
<div class="row">
<h3 class="no-strong text-center">
<a href="?dir=/"><span>Packages personnels</span></a>
<span><small class="no-strong">- C. Pierquet -</small></span>
</h3>
</div>
</div>
</header>

<a id="simplex"></a>

<hr>

<section class="container">
<div class="row">
<div class="col-xs-12">
<p>
<a href="?dir=/#simplex">Racine</a> /
</p>
</div>
</div>

<table class="table table-hover">
<thead class="small">
<tr>
<th style="width: 39px;"></th>
<th class="no-strong text-left"><a href="?sort_by=name&amp;sort_as=asc&amp;dir=/#simplex">Nom de fichier<img style="border:0;" alt="asc" src="?img=arrow_down" /></a></th>
<th class="no-strong text-center hidden-xs" style="width: 156px;"><a href="?sort_by=mod&amp;sort_as=desc&amp;dir=/#simplex">Ajouté&nbsp;</a></th>
<th class="no-strong text-center" style="width: 97.5px;"><a href="?sort_by=size&amp;sort_as=desc&amp;dir=/#simplex">Taille&nbsp;</a></th>
</tr>
</thead>

<tbody>
<tr>
<td><img alt="dir" src="?img=folder-home"></td>
<td class="text-left"><a href="?dir=/#simplex">..</a></td>
<td class="hidden-xs"></td>
<td></td>
</tr>

<tr>
<td><img alt="dir" src="?img=folder"></td>
<td class="text-left"><a href="?dir=/graphiques/#simplex">graphiques</a></td>
<td class="hidden-xs"></td>
<td></td>
</tr>

<tr>
<td><img alt="dir" src="?img=folder"></td>
<td class="text-left"><a href="?dir=/jeux/#simplex">jeux</a></td>
<td class="hidden-xs"></td>
<td></td>
</tr>

<tr>
<td><img alt="dir" src="?img=folder"></td>
<td class="text-left"><a href="?dir=/maths/#simplex">maths</a></td>
<td class="hidden-xs"></td>
<td></td>
</tr>

<tr>
<td><img alt="dir" src="?img=folder"></td>
<td class="text-left"><a href="?dir=/outils/#simplex">outils</a></td>
<td class="hidden-xs"></td>
<td></td>
</tr>
</tbody>
</table>
</section>
<footer class="footer-wrapper">
<div class="container">
<div class="row text-muted">
</div>
</div><!-- file-manager-tools-container -->

<div class="footer-bottom-wrapper">
<hr>
<div class="container visible-xs">
<div class="row">
<div class="col-xs-12 text-center">
<h4 class="no-strong">Packages personnels avec <a href="https://github.com/jmkim/simplex">Simplex</a></h4>
</div>
</div><!-- row -->
</div><!-- container -->

<div class="container hidden-xs">
<div class="row">
<div class="col-sm-8 text-left">
<h4 class="no-strong">Packages personnels avec <a href="https://github.com/jmkim/simplex">Simplex</a></h4>
</div>

<div class="col-sm-1 col-sm-offset-3 pull-right">
<a href="#simplex"><button class="btn btn-default" type="button" style="margin:3px 0 2px 0;">Haut</button></a>
</div>
</div><!-- row -->
</div><!-- container -->
</div><!-- footer-bottom-wrapper -->
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- From http://www.abeautifulsite.net/whipping-file-inputs-into-shape-with-bootstrap-3 -->
<script>
$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});
	
$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    });
});
</script>
</body>
</html>
