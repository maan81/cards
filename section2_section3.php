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
						<?php $secondDeck = new Deck($firstDeck); ?>
						<?php /*foreach ($secondDeck->getDeck() as $card):*/ ?>
						<?php /*foreach ($firstDeck->getDeck() as $card):*/ ?>
						<?php foreach ($secondDeck->getDeck() as $card): ?>
							<img class="col-md-3" src="<?php echo $card->getImage(); ?>">
						<?php endforeach; ?>
					</div>
				</div>
			</div>
