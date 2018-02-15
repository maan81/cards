<!DOCTYPE html>
<html>
<head>
 	<meta charset="UTF-8"> 
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">A Card Test ;)</a>
			</div>
			<button id="shuffle" type="button" class="btn btn-default navbar-btn">Shuffle</button>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="deck1 col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Fresh Deck (Deck 1)</div>
					<div id="fresh_deck" class="panel-body">
						<?php foreach ($firstDeck->getDeck() as $card): ?>
							<img class="col-md-3" src="<?php echo $card->getImage(); ?>">
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="deck2 col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Shuffled (Deck 1)</div>
					<div id="shuffled_deck" class="panel-body">
						<?php $firstDeck->shuffle(); ?>
						<?php foreach ($firstDeck->getDeck() as $card): ?>
							<img class="col-md-3" src="<?php echo $card->getImage(); ?>">
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="deck3 col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">New Deck (Deck 2)</div>
					<div id="new_deck" class="panel-body">
						<?php $secondDeck = new Deck(); ?>
						<?php foreach ($secondDeck->getDeck() as $card): ?>
							<img class="col-md-3" src="<?php echo $card->getImage(); ?>">
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="script.js"></script>


</body>
</html>