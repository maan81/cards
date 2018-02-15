<?php

session_start();

require_once('card.php');
require_once('deck.php');

$firstDeck = new Deck(isset($__SESSION['deck'])?$__SESSION['deck']:null);

$__SESSION['deck'] = $firstDeck;

if($_SERVER['REQUEST_URI']=='/do_reshuffle'){
	include('section2_section3.php');
}else{
	include('whole.php');
}


