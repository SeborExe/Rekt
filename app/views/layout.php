<?php
declare(strict_types=1);

namespace App\Views\Layout;

function render(array $view) {
        top($view['file_name']);

        require_once APP_DIR . '/app/views/' . $view['file_name'] . '.php';

        bottom();
    }

function top (string $file_name, string $title = '') {
    echo '<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>' . APP_NAME . ' - ' . ($title !== '' ?: explode('/', $file_name)[1]) . '</title>
	<meta name="description" content="Zobacz wszystko, co powienieneś wiedzieć o monitorach komputerowych w technikum informatycznym." />
	<meta name="keywords" content="budowa, zasada działania, CRT, LCD, złącza, wady, zalety, parametry monitorów, oznaczenia, maski, rodzaje matryc: TN, PVA, MVA, IPS, wymiar przekątnej, rozdzielczość, wielkość plamki, wielkość piksela, jasność, kontrast, bad pixel, PDP, OLED, VGA, DSUB, HDMI, DVI, jaki monitor kupić, porównanie CRT vs LCD" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link href="' . CSS_URL . 'icons/flaticon.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="' . CSS_URL . 'base.css">
	<link rel="stylesheet" href="' . CSS_URL . 'layout.css">
</head>

<body>
	<header id="header">
		<a href="' . BASE_URL . '" class="logo">REKT</a>';


    if (!isset($_SESSION['id_user'])) {
        echo '<ul>
			<li><a href="' . BASE_URL . '" class="active">Home</a></li>
			<li><a href="#">REKT</a></li>
			<li><a href="#">REKT 2</a></li>
			<li><a href="#">SgameS</a></li>
			<li><a href="' . BASE_URL . 'user/login">Zaloguj</a></li>
		</ul>';
    } else {
        echo '<ul>
			<li><a href="#" class="active">Home</a></li>
			<li><a href="#">REKT</a></li>
			<li><a href="#">REKT 2</a></li>
			<li><a href="#">SgameS</a></li>
			<li><a href="#">Wyloguj</a></li>
		</ul>';
    }
		
echo '	</header>';
}

function bottom () {
    echo '	<div class="footer">
    <div class="media">
        <a href="https://www.facebook.com/sebastian.hara.5/" aria-label="facebook" target="_blank" class="facebook"><i class="flaticon-facebook-app-symbol"></i></a>
        <a href="https://www.instagram.com/seboreleven/" aria-label="instagram" target="_blank" class="instagram"><i class="flaticon-instagram"></i></a>
        <a href="https://www.youtube.com/user/SeborMetin2" aria-label="youtube" target="_blank" class="youtube-play"><i class="flaticon-youtube"></i></a>
        <a href="https://github.com/SeborExe" aria-label="github" target="_blank" class="github"><img src="' . BASE_URL . 'app/img/GitHub-Mark-Light-32px.png"></a>
    </div>
    <div class="autor"><p>Seria auorstwa Sebastiana Hara. Tworzone z pasją od 2019 roku.</p></div>
</div>
</body>
</html>';
}
