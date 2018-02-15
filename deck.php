<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class Deck {

	private $deck = array();


	function __construct($deck=null) {

		if (!is_null($deck)) {
			$this->deck = $deck->getDeck();
		}
		else{
			if(count($this->deck) === 0){
				$deckPosition = 0;
		 		foreach (array("Clubs", "Diamonds", "Hearts", "Spades") as $suit) {
		 			for ($i=1; $i < 14; $i++) {
		 				$card = new Card($i, $suit);
		 				$this->deck[$deckPosition] = $card;
		 				$deckPosition ++;
		 			}
		 		}
			}
		}
	}

	public function getDeck(){
		return $this->deck;
	}

	public function shuffle(){
		$oldDeck = $this->deck;
		for ($i = count($oldDeck) - 1; $i >= 0; $i--) {
			$randomIndex = array_rand(range(0, $i));
			$this->deck[$i] = $oldDeck[$randomIndex];
			array_splice($oldDeck, $randomIndex, 1);
		}
	}

	public static function do_reshuffle(){

		// $this->oldDeck = $__SESSION['deck'];
		$this->Deck->shuffle();

	}
}
?>