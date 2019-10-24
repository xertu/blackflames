<?php

/**
*layout
*ce qui sera toujours affiche
*/

require '../views/header.php';
require '../views/nav.php';

?>






<div class="equipes">
	<button type="button" class="button bouton" data-toggle="offCanvasRightSplit1"><p>Médiéval-Fantastique<p></button>
		<button type="button" class="button bouton" data-toggle="offCanvasRightSplit2"><p>Steampunk</p></button>
		<button type="button" class="button bouton" data-toggle="offCanvasRightSplit3"><p>Cosplay/Réplique</p></button>
		<button type="button" class="button bouton" data-toggle="offCanvasRightSplit4"><p>Futuriste/Post-apo</p></button>


		<!-- portraits du personnels -->

		<div class="grid-x grid-margin-x">
			<div class="cell small-6">
				<div class="off-canvas-wrapper">
					<div class="off-canvas-absolute position-right" id="offCanvasRightSplit1" data-off-canvas>
						<h3>Médiéval-fantastique</h3>
						<p>Magie, chevaliers, elfes ou griffon le tout dans de vastes contrées féériques, voici
ce qui compose cet univers. Besoin d'une épée magique, d'une armure en écailles de dragon ou encore
d'une sacoche en cuir pour transporter vos biens précieux ? C'est par ici que ça se passe.</p>
					</div>


					<div id="portrait" class="off-canvas-content" style="min-height: 300px;" data-off-canvas-content>
						<img class="sylvie" src="../images/medieval.webp">


					</div>

				</div>
			</div>
			<div class="cell small-6">
				<div class="off-canvas-wrapper">
					<div class="off-canvas-absolute position-right" id="offCanvasRightSplit2" data-off-canvas>
						<h3>Steampunk</h3>

						<p>Aussi appellé "Rétrofuturiste". Prenez l'ère Victorienne, gardez les gentlemans, les ladies, les
explorateurs et autres inventeurs, ajoutez y une touche de fantastique, figez le tout avant la découverte du
pétrole et vous y êtes. Mécanismes bizarres, armes foldingues ou accessoires loufoques, c'est ici que vous
les trouverez.</p>
					</div>
					<div id="portrait" class="off-canvas-content" style="min-height: 300px;" data-off-canvas-content>

						<img class="sylvie" src="../images/steampunk.webp">
					</div>
				</div>
			</div>
			<div class="cell small-6">
				<div class="off-canvas-wrapper">
					<div class="off-canvas-absolute position-right" id="offCanvasRightSplit3" data-off-canvas>
						<h3>Cosplay/Réplique</h3>
						<p>Qui n'a jamais imaginé, l'espace d'un instant, être un super héro ou bien un
personnage de Fiction ? Voici ce en quoi consiste le Cosplay: On reproduit le costume/ Armes ou
Accessoires d'un personnage afin de l'incarner. Vous cherchez des armures de l'univers de Warcraft ? Ou
bien des accessoires de l'univers d'Assassin Creed ? Vous êtes au bon endroit.</p>
					</div>
					<div id="portrait" class="off-canvas-content" style="min-height: 300px;" data-off-canvas-content>

						<img class="sylvie" src="../images/cosplay.webp">
					</div>
				</div>
				<div class="cell small-6">
					<div class="off-canvas-wrapper">
						<div class="off-canvas-absolute position-right" id="offCanvasRightSplit4" data-off-canvas>
							<h3>Futuriste/post-apo</h3>
							<p>Projetons nous loin dans le futur, que nous arrive-t-il: Notre monde est il ravagé par
les guerres, la maladie ou encore les Morts vivants? Ou bien sommes nous dans une ère de hautes
technologies où droïdes, téléportation ou même voitures volantes, sont monnaie courante ? Dans tous les cas,
Pistolets laser, Prothèses biomécaniques et armes traficotées se trouvent ici.</p>
						</div>
						<div id="portrait" class="off-canvas-content" style="min-height: 300px;" data-off-canvas-content>

							<img class="sylvie" src="../images/futuriste.webp">
						</div>
					</div>
				</div>


			</div>
		</div>




	</div>

	<script src="../Js/form.js"></script>
	<script src="../node_modules/jquery/dist/jquery.js"></script>
	<script src="../node_modules/what-input/dist/what-input.js"></script>
	<script src="../node_modules/foundation-sites/dist/js/foundation.js"></script>
	<script src="../js/app.js"></script>
</body>
</html>