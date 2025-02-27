<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<title>Menu</title>
	<link rel="icon" type="image/png" href="img/adr_ico.png" />
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<body onload="onLoad()">
	<img src="img/adr_anim.svg" style="width:80px;margin:10px;position:fixed;right:0;bottom:0;" />
	<img src="img/logo_musee.png" style="width:80px;margin:10px;position:fixed;left:0;bottom:0;" />

	<div id="body">
		<div id="button_back" onClick="redirect('https://adr.cs-campus.fr/musee')">
			Retour au site
		</div>


		<div class="legend">
			<div class="subcontent" style="grid-template-columns:max-content 1fr;">
				<div style="text-align:center">&#127811;</div>
				<div style="line-height:100%;">Ce plat est végétarien</div>
				<div style="text-align:center"><strong style="color:#ee0;">•</strong></div>
				<div style="line-height:100%;">Ce plat fait parti d'une formule</div>
			</div>
		</div>
		<div class="topmenu" style="grid-area: t;">
		</div>
		<div class="top" style="grid-area: a;">
			<img src="img/logo_musee.png" />
			<h2 style="color:#ed2024;">Viens te régaler au Musée tous les jours de la semaine !</h2>
			<div style="font-family:CaviarDreams;line-height:140%;">Que ce soit pour une petite pause gustative ou pour un repas complet, le Musée t'accueille du lundi au vendredi:<br><br>
				<strong>7h30-9h</strong>: pour un p'tit dej équilibré à 2€ seulement !!<br><br>
				<strong>11h30-14h</strong>: pour un déjeuner complet, formules à 5€, pizzas à 5€, de quoi se nourrir à petits prix<br><br>
				<strong>17h-00h30</strong>: pour retrouver tes potes autour d'une petite pinte, un snack, ou certainement les deux (fermé le vendredi)
			</div><br>
		</div>
		<div class="content" id="les_menus" style="grid-area: c;">
			<h1>[LES|MENUS]</h1>
			<br>
			<h2>&#8764; Menu étudiant &#8765;</h2>
			<div class="subcontent">
				<div>
					• 1 plat <strong style="color:#ee0;">•</strong><br>
					• 1 dessert<br>
					• 1 soft ou 1/2 de Kro (+0,50€) <strong style="color:#ee0;">•</strong><br>
				</div>
				<div>
					5<small>,90</small> € 
				</div>
			</div><br>
			<h2>&#8764; Menu pizza &#8765;</h2>
			<div class="subcontent">
				<div>
					• 1 pizza <strong style="color:#ee0;">•</strong><br>
					• 1 soft ou 1/2 de Kro (+0,50€) <strong style="color:#ee0;">•</strong><br>
				</div>
				<div>
					6<small>,20</small> €
				</div>
			</div><br>
			<h2>&#8764; Menu p'tit dej &#8765;</h2>
			<div class="subcontent">
				<div>
					• 1 boisson chaude<br>
					• 1 viennoiserie<br>
					• 1 verre de jus<br>
				</div>
				<div>
					2<small>,20</small> €
				</div>
			</div><br>
			<h2>&#8764; Menu burger frites &#8765;</h2>
			<div class="subcontent">
				<div>
					• 1 burger<br>
					• 1 portion frites<br>
					• 1 soft (+0,50€) ou 1/2 de Kro (+1€)<br>
				</div>
				<div>
					6<small>,00</small> €
				</div>
			</div><br>
			<h2>&#8764; Menu tacos frites &#8765;</h2>
			<div class="subcontent">
				<div>
					• 1 tacos<br>
					• 1 portion frites<br>
					• 1 soft (+0,50€) ou 1/2 de Kro (+1€)<br>
				</div>
				<div>
					6<small>,00</small> €
				</div>
			</div><br>
			<h2>&#8764; Menu kebab &#8765;</h2>
			<div class="subcontent">
				<div>
					• 1 kebab<br>
					• 1 portion frites<br>
					• 1 soft (+0,50€) ou 1/2 de Kro (+1€)<br>
				</div>
				<div>
					6<small>,00</small> €
				</div>
			</div><br>
		</div>
		<div class="content" id="les_plats" style="grid-area: b;">
			<h1>[LES|PLATS]</h1>
			<br>
			<h2>&#8764; Pizzas &#8765;</h2>
			<div class="subcontent">
				<div onClick="">Reine <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Sauce tomate, mozza, jambon, olives, origan</div>
				</div>
				<div>5<small>,60</small> €</div>
				<div onClick="">Kebab <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Sauce tomate, mozza, kebab, salade, sauce blanche, origan</div>
				</div>
				<div>5<small>,60</small> €</div>
				<div onClick="">Poulet Cheddar<div class="compo">Composition : Sauce tomate, mozza, tenders, cheddar, olives, oigons frits, origan</div>
				</div>
				<div>6<small>,10</small> €</div>
				<div onClick="">Poulet <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Sauce tomate, mozza, poulet, olives, origan</div>
				</div>
				<div>5<small>,60</small> €</div>
				<div onClick="">Pepperoni <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Sauce tomate, mozza, pepperoni, origan</div>
				</div>
				<div>5<small>,60</small> €</div>
				<div onClick="">Végétarienne &#127811;<div class="compo">Composition : Sauce tomate, mozza, artichauts, poivrons, tomates, salade, olives, origan</div>
				</div>
				<div>5<small>,60</small> €</div>
				<div onClick="">Margherita &#127811;<div class="compo">Composition : Sauce tomate, mozza, tomates, olives, origan</div>
				</div>
				<div>5<small>,00</small> €</div>
				<div onClick="">3 fromages &#127811;<div class="compo">Composition : Sauce tomate, mozza, chèvre, bleu, origan</div>
				</div>
				<div>6<small>,20</small> €</div>
				<div onClick="">Orientale<div class="compo">Composition : Sauce tomate, mozza, merguez, poivrons, oeuf, olives, origan</div>
				</div>
				<div>6<small>,20</small> €</div>
				<div onClick="">Bœuf<div class="compo">Composition : Sauce tomate, mozza, boulettes de boeuf, poivrons, oeuf, olives, origan</div>
				</div>
				<div>6<small>,20</small> €</div>
				<div onClick="">Saumon<div class="compo">Composition : Crème fraiche, mozza, saumon, origan</div>
				</div>
				<div>6<small>,30</small> €</div>
				<div onClick="">Raclette<div class="compo">Composition : Crème fraiche, mozza, jambon cru, fromage à raclette, origan</div>
				</div>
				<div>6<small>,30</small> €</div>
				<div onClick="">Tartiflette<div class="compo">Composition : Crème fraiche, mozza, reblochon, pommes de terre, lardons, origan</div>
				</div>
				<div>6<small>,30</small> €</div>
				<div onClick="">Chèvre-Miel &#127811;<div class="compo">Composition : Sauce tomate, mozza, chèvre, miel, olives, origan</div>
				</div>
				<div>6<small>,00</small> €</div>
			</div><br>
			<h2>&#8764; Sandwichs &#8765;</h2>
			<div class="subcontent">
				<div onClick="">Jambon/beurre <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Jambon, beurre</div>
				</div>
				<div>3<small>,00</small> €</div>
				<div onClick="">Jambon rosette <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Jambon, rosette</div>
				</div>
				<div>3<small>,00</small> €</div>
				<div onClick="">Bagnat Poulet crudités (disponible en VG)<div class="compo">Composition : Poulet, tomates, salade</div>
				</div>
				<div>3<small>,80</small> €</div>
				<div onClick="">Bagel saumon fromage frais<div class="compo">Composition : saumon, fromage frais, salade</div>
				</div>
				<div>4<small>,00</small> €</div>
			</div><br>
			<h2>&#8764; Wrap &#8765;</h2>
			<div class="subcontent">
				<div onClick="">Poulet <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Poulet croustillant, salade, tomates</div>
				</div>
				<div>3<small>,90</small> €</div>
				<div onClick="">Chèvre/Miel &#127811; <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Chèvre, miel, carottes, salade</div>
				</div>
				<div>3<small>,60</small> €</div>
			</div><br>
			<h2>&#8764; Burger &#8765;</h2>
			<div class="subcontent">
				<div onClick="">Burger micro-onde <strong style="color:#ee0;">•</strong>
				</div>
				<div>3<small>,90</small> €</div>
				<div onClick="">Burger cocoricco &#127811; <strong style="color:#ee0;">•</strong>
				</div>
				<div>4<small>,20</small> €</div>
			</div><br>
			<h2>&#8764; Salades &#8765;</h2>
			<div class="subcontent">
				<div onClick="">Caesar <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Poulet, salade, parmesan, croutons</div>
				</div>
				<div>3<small>,80</small> €</div>
				<div onClick="">Grecque &#127811; <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Feta, salade, oignons</div>
				</div>
				<div>3<small>,80</small> €</div>
				<div onClick="">Italienne <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : Jambon cru, mozza, tomates séchées, salade</div>
				</div>
				<div>3<small>,80</small> €</div>
				<div onClick="">Noddle au poulet <strong style="color:#ee0;">•</strong>
					<div class="compo">Composition : poulet, noddle, poivrons, pousse de sojat, cacahuète</div>
				</div>
				<div>4<small>,50</small> €</div>
			</div><br>
			<h2>&#8764; Quiches &#8765;</h2>
			<div class="subcontent">
				<div onClick="">Lorraine <strong style="color:#ee0;">•</strong></div>
				<div>3<small>,90</small> €</div>
				<div onClick="">Légumes <strong style="color:#ee0;">•</strong></div>
				<div>3<small>,90</small> €</div>
				<div onClick=""> Quiche du jlur <strong style="color:#ee0;">•</strong></div>
				<div>3<small>,90</small> €</div>
			</div><br>
			<h2>&#8764; Pasta box &#8765;</h2>
			<div class="subcontent">
				<div onClick="">Carbonara <strong style="color:#ee0;">•</strong></div>
				<div>3<small>,70</small> €</div>
				<div onClick="">Pesto</div>
				<div>3<small>,30</small> €</div>
				<div onClick="">Saumon</div>
				<div>3<small>,80</small> €</div>
			</div><br>
			<h2>&#8764; Panini &#8765;</h2>
			<div class="subcontent">
				<div onClick="">Tomates mozza pesto <strong style="color:#ee0;">•</strong></div>
				<div>3<small>,90</small> €</div>
				<div onClick="">Poulet tikka cheddar</div>
				<div>3<small>,90</small> €</div>
			</div><br>
			<h2>&#8764; Fritures &#8765;</h2>
			<div class="subcontent">
				<div>Nuggets <small>(6)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>3<small>,20</small> €</div>
				<div>Nuggets <small>(10)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>4<small>,00</small> €</div>
				<div>Mozzarella sticks <small>(9)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>4<small>,90</small> €</div>
				<div>Calamars à la romaine (10) <small>(10)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>3<small>,60</small> €</div>
				<div>Oignon rings <small>(10)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>3<small>,00</small> €</div>
				<div>Wings de poulet <small>(8)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>4<small>,50</small> €</div>
				<div>Nems <small>(8)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>4<small>,50</small> €</div>
				<div>Tenders <small>(6)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>4<small>,60</small> €</div>
				<div>Nems <small>(8)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>4<small>,50</small> €</div>
				<div>avec frites<br></div>
				<div>+1<small>,00</small> €</div>
				<div>Frites<br></div>
				<div>2<small>,20</small> €</div>
			</div><br>
			<h2>&#8764; Desserts &#8765;</h2>
			<div class="subcontent">
				<div>Donuts<br></div>
				<div>1<small>,20</small> €</div>
				<div>Viennoiserie<br></div>
				<div>1<small>,00</small> €</div>
				<div>Mini beignets par 3<br></div>
				<div>1<small>,70</small> €</div>
				<div>Maxi beignet<br></div>
				<div>1<small>,70</small> €</div>
				<div>Tartes / Flan<br></div>
				<div>2<small>,00</small> €</div>
				<div>Cookie / Brownie<br></div>
				<div>1<small>,90</small> €</div>
				<div>Muffin<br></div>
				<div>2<small>,00</small> €</div>
				<div>Fruit<br></div>
				<div>1<small>,00</small> €</div>
				<div>Banane<br></div>
				<div>0<small>,60</small> €</div>
				<div>Salade de fruits<br></div>
				<div>1<small>,60</small> €</div>
				<div>Dessert du jour<br></div>
				<div>2<small>,20</small> €</div>
			</div><br>
			<h2>&#8764; Le petit plus &#8765;</h2>
			<div class="subcontent">
				<div>Saucissons<br></div>
				<div>5<small>,50</small> €</div>
				<div>Sticks de saucisson<br></div>
				<div>2<small>,40</small> €</div>
				<div>Confiserie<br></div>
				<div>1<small>,10</small> €</div>
				<div>Tablette de chocolat<br></div>
				<div>1<small>,50</small> €</div>
				<div>Chips<br></div>
				<div>1<small>,20</small> €</div>
				<div>Pringles<br></div>
				<div>2<small>,00</small> €</div>
				<div>Chupa chups<br></div>
				<div>0<small>,40</small> €</div>
				<div>Bonbon<br></div>
				<div>1<small>,20</small> €</div>
			</div>
		</div>
		<div class="content" id="le_bar" style="grid-area: d;">
			<h1>[LE|BAR]</h1>
			<br>
			<h2>&#8764; Les pressions &#8765;</h2>
			<div class="subcontent" style="grid-template-columns:1fr max-content max-content max-content;">
				<div><br></div>
				<div>1/2</div>
				<div>Pinte</div>
				<div>Girafe <small>(3L)</small></div>
				<div>• Kronenbourg <small>(4,2%)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>1<small>,80</small> €</div>
				<div>3<small>,50</small> €</div>
				<div>20<small>,00</small> € </div>
				<div>• 1664 blanche <small>(5%)</small><br></div>
				<div>2<small>,50</small> €</div>
				<div>4<small>,50</small> €</div>
				<div>24<small>,00</small> € </div>
				<div>• Grim rouge <small>(6%)</small><br></div>
				<div>2<small>,50</small> €</div>
				<div>4<small>,50</small> €</div>
				<div>24<small>,00</small> € </div>
				<div>• Grim Pale <small>(5,5%)</small><br></div>
				<div>2<small>,50</small> €</div>
				<div>4<small>,50</small> €</div>
				<div>24<small>,00</small> € </div>
				<div>• Grim blonde <small>(6,7%)</small><br></div>
				<div>2<small>,50</small> €</div>
				<div>4<small>,50</small> €</div>
				<div>24<small>,00</small> € </div>
				<div>• Bière du mois<br></div>
				<div>2<small>,50</small> €</div>
				<div>4<small>,50</small> €</div>
				<div>24<small>,00</small> € </div>
				<div>• Elephant <small>(7,2%)</small><br></div>
				<div>2<small>,50</small> €</div>
				<div>4<small>,50</small> €</div>
				<div>24<small>,00</small> € </div>
			</div><br>
			<h2>&#8764; Les bouteilles &#8765;</h2>
			<div class="subcontent">
				<div>Barbar <small>(8%)</small><br></div>
				<div>2<small>,70</small> €</div>
				<div>Barge Ambrée <small>(7,2%)</small><br></div>
				<div>3<small>,10</small> €</div>
				<div>Barge IPA <small>(5,8%)</small><br></div>
				<div>3<small>,10</small> €</div>
				<div>Barge PA <small>(5%)</small><br></div>
				<div>3<small>,10</small> €</div>
				<div>Beck's <small>(5%)</small><br></div>
				<div>2<small>,60</small> €</div>
				<div>Bête <small>(8%)</small><br></div>
				<div>3<small>,00</small> €</div>
				<div>Chimay <small>(9%)</small><br></div>
				<div>3<small>,00</small> €</div>
				<div>Chouffe <small>(8%)</small><br></div>
				<div>3<small>,00</small> €</div>
				<div>Cidre doux <small>(2,5%)</small> <strong style="color:#ee0;">•</strong><br></div>
				<div>1<small>,60</small> €</div>
				<div>Corona <small>(4,7%)</small><br></div>
				<div>3<small>,00</small> €</div>
				<div>Cuvée des Trolls <small>(7%)</small><br></div>
				<div>3<small>,00</small> €</div>
				<div>Delirium <small>(8,5%)</small><br></div>
				<div>3<small>,00</small> €</div>
				<div>Desperados <small>(5,9%)</small><br></div>
				<div>3<small>,00</small> €</div>
				<div>Franziskaner <small>(5%)</small><br></div>
				<div>3<small>,00</small> €</div>
				<div>Grim rouge <small>(6%)</small><br></div>
				<div>2<small>,70</small> €</div>
				<div>Kwacl <small>(8,4%)</small><br></div>
				<div>2<small>,80</small> €</div>
				<div>Leffe <small>(6,6%)</small><br></div>
				<div>2<small>,00</small> €</div>
				<div>Lindemans Kriek <small>(4%)</small><br></div>
				<div>2<small>,70</small> €</div>
				<div>Mort Subite <small>(4%)</small><br></div>
				<div>2<small>,00</small> €</div>
				<div>Namur <small>(4,5%)</small><br></div>
				<div>2<small>,60</small> €</div>
				<div>Orval <small>(6,2%)</small><br></div>
				<div>3<small>,20</small> €</div>
				<div>Pécheresse <small>(2,5%)</small><br></div>
				<div>2<small>,60</small> €</div>
				<div>Peroni <small>(5,1%)</small><br></div>
				<div>2<small>,40</small> €</div>
				<div>Queue de Charrue <small>(8,4%)</small><br></div>
				<div>2<small>,70</small> €</div>
				<div>Rince Cochon <small>(5,4%)</small><br></div>
				<div>2<small>,70</small> €</div>
				<div>Skoll <small>(6%)</small><br></div>
				<div>2<small>,70</small> €</div>
				<div>Tigre <small>(5.5%)</small><br></div>
				<div>3<small>,10</small> €</div>
				<div>Triple K <small>(8.4%)</small><br></div>
				<div>2<small>,80</small> €</div>
				<div>Vedett IPA <small>(6%)</small><br></div>
				<div>3<small>,00</small> €</div>
			</div><br>
			<h2>&#8764; Vins et bouteilles&#8765;</h2>
			<div class="subcontent">
				<div>Verre (rosé, blanc et rouge)<br></div>
				<div>3<small>,00</small> €</div>
				<div>En bouteille<br></div>
				<div>12<small>,00</small> €</div>
				<div>Bouteille de Crémant<br></div>
				<div>12<small>,00</small> €</div>
				<div>Bouteille de Champagnes<br></div>
				<div>22<small>,00</small> €</div>
				
			</div><br>
			<h2>&#8764; Les softs &#8765;</h2>
			<div class="subcontent">
				<div>Eau<br></div>
				<div>1<small>,00</small> €</div>
				<div>Cristalline<br></div>
				<div>0<small>,60</small> €</div>
				<div>En canette (33cL) <strong style="color:#ee0;">•</strong><br></div>
				<div>1<small>,10</small> €</div>
				<div>San pellegrino (50cL)<br></div>
				<div>1<small>,10</small> €</div>
				<div>Perrier (50cL)<br></div>
				<div>1<small>,30</small> €</div>
				<div>Jus de fruits<br></div>
				<div>1<small>,30</small> €</div>
				<div>Red Bull (25cL)<br></div>
				<div>1<small>,70</small> €</div>
			</div><br>
			<h2>&#8764; Cafés &#8765;</h2>
			<div class="subcontent">
				<div>Expresso <strong style="color:#ee0;">•</strong><br></div>
				<div>0<small>,90</small> €</div>
				<div>café long<br></div>
				<div>1<small>,00</small> €</div>
				<div>Thé<br></div>
				<div>0<small>,80</small> €</div>
			</div><br>
		</div>
	</div>

</body>

</html>