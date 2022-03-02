<?php

require_once APP_DIR.'/app/libs/Form_Builder.php';

use App\Libs\FormBuilder;

echo '<section>
		<h2 id="text"><span>Już wkrótcę będziesz mógł się zalogować!</h2>
		<img src="' . BASE_URL . 'app/img/PhantomR.png" id="phantomR">
		<img src="' . BASE_URL . 'app/img/PhantomL.png" id="phantomL">
		<a href="' . BASE_URL . '" id="btn2">Back</a>

		<img src="' . BASE_URL . 'app/img/rocks.png" id="rocks">
		<img src="' . BASE_URL . 'app/img/water.png" id="water">   
	</section>
	<div class="sec">
		<h2>Już wkrótce będziesz mógł stworzyć konto!<br>Zajrzyj tutaj niedługo</h2>
		<h4>Co umożliwi ci konto?</h4><br><br>
		<p class="possibilities">
		Możliwosć dodawania komentarzy i dzielenia się swoją opinią.<br>
		Ocenianie gier.<br>
		Szybki kontakt z nami co umożliwi również proponowanie nowości i zmian do gier!<br>
		Jako pierwszy dowiesz się o nowościach i przewidywanych zmianach.<br>
		Bonusy do naszych gier.<br>
		A w przyszłości wiele więcej korzyści!!!
		</p>
	</div>';

echo '<script type="text/javascript" src="' . JS_URL . 'login.js"></script>';

//echo '<div class="container">
//    <div id="typical_header">
//      <h2>Zaloguj się!</h2>
//    </div>
//    <main>';
//
//FormBuilder\echo_ombox_result('user/login');
//
//echo '<div id="typical_form" class="urbox">
//    <form id="login" action="' . BASE_URL . 'user/auth" method="POST">';
//
//FormBuilder\echo_part_title('logowanie');
//FormBuilder\echo_input('Nazwa <span class="neo">|</span> Mail <span class="neo">|</span> Tel', 'login');
//FormBuilder\echo_input('Hasło', 'password', '', 'password');
//
//echo '<div class="filters-buttons">
//                <div class="button">
//                    <input type="button" value="wyczyść" onclick="return clearForm(`login`);">
//                </div>
//                <div class="button important-button">
//                    <input type="submit" value="zaloguj" onclick="return saveForm(`login`);">
//                </div>
//            </div>
//        </form>
//        <div class="extra-info">
//          <p>Zapomniałeś hasła? <a href="' . BASE_URL . 'user/send_password">KLIK</a>!</p>
//        </div>
//        <div class="extra-info">
//          <p>Nie masz konta? Żaden problem - <a href="'.BASE_URL.'user/register">REJESTRACJA</a>.</p>
//        </div>
//        <div class="g-signin2" data-onsuccess="onSignIn"></div>
//      </div>
//    </main>

