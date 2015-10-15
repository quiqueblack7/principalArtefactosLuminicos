<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blueprint: Filterable Product Grid</title>
	<meta name="description" content="Blueprint: A responsive product grid layout with touch-friendly Flickity galleries and Isotope-powered filter functionality." />
	<meta name="keywords" content="blueprint, template, layout, grid, responsive, products, store, filter, isotope, flickity" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Pixel Fabric clothes icons -->
	<link rel="stylesheet" type="text/css" href="fonts/pixelfabric-clothes/style.css" />
	<!-- General demo styles & header -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	 <!-- Flickity gallery styles -->
	<link rel="stylesheet" type="text/css" href="css/flickity.css" />
	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<!-- Bottom bar with filter and cart info -->
	<div class="bar">
		<div class="filter">
			<span class="filter__label">Iluminación: </span>
			<button class="action filter__item filter__item--selected" data-filter="*">General</button>
			<button class="action filter__item" data-filter=".jackets"><i class="icon icon--jacket"></i><span class="action__text">Industrial</span></button>
			<button class="action filter__item" data-filter=".shirts"><i class="icon icon--shirt"></i><span class="action__text">Fluorescente</span></button>
			<button class="action filter__item" data-filter=".dresses"><i class="icon icon--dress"></i><span class="action__text">Exterior</span></button>
			<button class="action filter__item" data-filter=".trousers"><i class="icon icon--trousers"></i><span class="action__text">De Emergencia</span></button>
			<button class="action filter__item" data-filter=".shoes"><i class="icon icon--shoe"></i><span class="action__text">Interior</span></button>
		<button class="action filter__item" data-filter=".led"><i class="icon icon--led"></i><span class="action__text">Con LEDS</span></button>
      <button class="action filter__item" data-filter=".alto"><i class="icon icon--alto"></i><span class="action__text">Alto Voltaje</span></button>
		</div>
		<button class="cart">

		</button>
	</div>
	<!-- Main view -->
	<div class="view">

		<!-- Grid -->
		<section class="grid grid--loading">
			<!-- Loader -->
			<img class="grid__loader" src="images/grid.svg" width="60" alt="Loader image" />
			<!-- Grid sizer for a fluid Isotope (Masonry) layout -->
			<div class="grid__sizer"></div>
			<!-- Grid items -->

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/2AV.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/2AV.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/2AV.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">2AV</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal2">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal2" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>2AV</h2>
					<img src="images/Fluorescente/2AV.jpg" />
					<P>Un producto excepcional iluminación general que se desempeña bien en grandes espacios con techos </br>
						altos. Especialmente indicado para las zonas de oficinas abiertas, espacios públicos interiores,</br>
						bibliotecas y áreas de espera del aeropuerto. La combinación óptima de la luz reflejada de dirección</br>
						y difusa se combinan para la iluminación equilibrada entre la tarea y las paredes próximas, el </br>
						confort visual mejorada y sombras reducido al mínimo. Disponible en 2x2 y 2x4, distribuciones</br>
						 simétricas para los usos generales del área de iluminación.</br></p>
				</div>
			</div>



			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="images/INTERIOR/02454.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/02454.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/02454.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">02454</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal3">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal3" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>02454</h2>
					<img src="images/Interior/02454.jpg" />
					<P>Especial para tiendas minoristas, oficinas, escuelas, Lobbies y Restaurantes. El sistema de iluminación </br>
						 de 02454 Holophane constituye el elemento de diseño de la iluminación ideal para aplicaciones que </br>
						 requieren una nave industrial. Desde 1937 el 02454 ha sido el mejor en bajo brillo, con la iluminación</br>
						eficiente y uso de la energía. La línea de productos 02454 ofrece dos cubiertas y tres opciones de color </br>
						para contribuir con el estilo y la función de cualquier entorno de iluminación. La cubierta de cobre opcional</br>
						 pone de manifiesto la belleza del metal clásico de añadir elegancia al diseño retro-industrial. La familia</br>
						  de 02454 está disponible en  fluorescentes compactas muy popular, incandescente, aditivos metalicos y pulso </br>
							para la flexibilidad máxima del diseño.</p>
				</div>
			</div>

			<div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/COLONIAL MEXICANO.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/COLONIAL MEXICANO.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/COLONIAL MEXICANO.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">COLONIAL MEXICANO</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal4">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal4" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Colonial Mexicano</h2>
					<img src="images/Exterior/COLONIAL MEXICANO.jpg" />
					<P>deal para vialidades, estacionamientos, jardines, parques, áreas recreativas. Luminario exterior decorativo,</br>
						 de alto rendimiento. Cápsula en fundición de aluminio bajo en cobre. Fabricada con un tratamiento previo para</br>
						  una mayor resistencia a la corrosión. Balastro electromagnético autorregulado con un alto factor de potencia.</br>
							 Refractor prismático de cristal Endural de bajo brillo con curva de distribución III. Fácil instalación y mantenimient</p>
				</div>
			</div>

			<div class="grid__item grid__item--size-a shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/2GT8.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/2GT8.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/2GT8.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">2GT8</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal5">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal5" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>2GT8</h2>
					<img src="images/Fluorescente/2GT8.jpg" />
					<P>El primer luminario con lente de acrílico para empotrar, diseñado exclusivamente para lamparas T8,</br>
						 balastros electrónicos T8 de bajo perfil y portalámparas compactas. De alta eficiencia, fácil y </br>
						 rápido mantenimiento, construcción robusta y calidad asegurada. Compatible con casi todos los tipos</br>
						  de plafón, ideal para cualquier instalación comercial.</p>
				</div>
			</div>

			<div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="images/EMERGENCIA/ELM-ELM2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/ELM-ELM2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/ELM-ELM2.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">ELM-ELM2</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal6">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal6" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ELM-ELM2</h2>
					<img src="images/EMERGENCIA/ELM-ELM2.jpg" />
					<P>Unidades de emergencia, con baterías de plomo-calcio libres de mantenimiento.</br>
						 Carcasa de policarbonato, resistente a impactos, corrosión y a la decoloración causada</br>
						  por los rayos UV.  Bajo consumo de energía gracias al uso de LED como fuente de luz.</p>
				</div>
			</div>

			<div class="grid__item grid__item--size-a jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/BANTAM 2000 PRISMALUNE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/BANTAM 2000 PRISMALUNE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/BANTAM 2000 PRISMALUNE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">BANTAM 2000 PRISMALUNE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal7">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal7" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>BANTAM 2000 PRISMALUNE</h2>
					<img src="images/INDUSTRIAL/BANTAM 2000 PRISMALUNE.jpg" />
					<P>Ideal para áreas de manufactura y ensamble, hangares, bodegas. Reflector de cristal prismático,</br>
						 abierto o con lente de cristal termotemplado. Cápsula de balastro en diseño de bajo perfil para</br>
						  uso en aplicaciones de espacio limitado y techos de baja altura. Fabricada con un tratamiento</br>
							 previo para mayor resistencia a la corrosión. Balastro autorregulado de alto factor de potencia</br>
							  con embobinados de cobre para dar la emisión lumínica completa. </p>
				</div>
			</div>



			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="images/INTERIOR/CIS-ILUMINARE (GRANDE Y PEQUEÑO).jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/CIS-ILUMINARE (GRANDE Y PEQUEÑO).jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/CIS-ILUMINARE (GRANDE Y PEQUEÑO).jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">CIS-ILUMINARE (GRANDE Y PEQUEÑO)</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal8">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal8" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>CIS-ILUMINARE (GRANDE Y PEQUEÑO)</h2>
					<img src="images/INTERIOR/CIS-ILUMINARE (GRANDE Y PEQUEÑO).jpg" />
					<P>ideal para el comercios minoristas, aeropuertos, vestíbulos, escuelas. La línea Illuminaire</br>
						incluye cinco nuevos estilos atractivos: el huevo, Crest, Tri huevo-, tri-Cresta y el cuádruple.</br>
						Cada nueva forma (excepto la Quad) está disponible en un tamaño grande o compacto para dar cabida</br>
						a una gama de alturas de montaje. Todos los accesorios se ofrecen con una variedad de distribuciones</br>
						fotométricas (11 en la versión grande y cuatro en la versión compacta) para colocar de manera</br>
						eficiente la luz donde se necesita. Las luminarias también hasta el 92 por ciento de eficiencia,</br>
						que se traduce en una mayor uniformidad de iluminación con menos accesorios. reflectores de vidrio</br>
						borosilicato resistente / refractores garantizar un rendimiento confiable, a largo plazo. </p>
				</div>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/2PM3N.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/2PM3N.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/2PM3N.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">2PMN3</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href=#modal9>Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal9" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>2PMN3</h2>
					<img src="images/Fluorescente/2PM3N.jpg" />
					<P>Luminario parabólico ideal para aplicaciones comerciales y en oficinas. Su diseño </br>
						facilita el desempeño optimo de las lamparas T8 y balastros electrónicos. Las rejillas</br>
						 forman una parábola exacta para obtener máxima eficiencia, excelente control óptico y </br>
						 confort visual. </p>
				</div>
			</div>


			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="images/INTERIOR/illumibay.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/illumibay.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/illumibay.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">illumibay</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal10">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal10" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>illumibay</h2>
					<img src="images/INTERIOR/illumibay.jpg" />
					<P>Para las tiendas de comestibles, librerias, Oficinas, Centros de Recreación, Escuelas.</br>
						 Un diseño agradable, cuya mitad superior está esculpida, hace que la mayor parte de la </br>
						 belleza inherente a nuestra vidrio. El versátil Illumibay es visualmente atractivo y cuenta</br>
						  con la revolucionaria avanzada ISD (Distribución Ideal sinérgica) óptica en supercristal.</br>
							 Está disponible en una variedad de fuentes de luz como lámparas fluorescentes compactas,</br>
							 metalicos cerámica. Holophane ha creado un nuevo estándar industrial para la iluminación </br>
							 de gran altura.</p>
				</div>
			</div>

			<div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/DORCHESTER.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/DORCHESTER.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/DORCHESTER.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">DORCHESTER</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal11">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal11" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>DORCHESTER</h2>
					<img src="images/EXTERIOR/DORCHESTER.jpg" />
					<P>Especial para las calles, estacionamientos, escuelas, desarrollos comerciales, plazas, barrios</br>
						históricos, plazas de pueblos, zonas residenciales, parques, paseos, bulevares, caminos. Diseño basado</br>
						en las farolas las zonas urbanas de finales del siglo XIX. Este fue un momento en estilo victoriano y </br>
						la elegancia fueron comparados con el suave resplandor de las lámparas de gas. Hoy en día, esta luminaria</br>
						ofrece un estilo auténtico, con fuentes de luz moderna y componentes eléctricos. </p>
				</div>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/ATLANTA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/ATLANTA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/ATLANTA.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">ATLANTA</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal12">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal12" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ATLANTA</h2>
					<img src="images/Fluorescente/ATLANTA.jpg"/>
					<P>Ideal para estacionamientos cubiertos, pasillos, áreas de cargas, recepciones, áreas de producción</br>
						 o proceso. Luminario de estilo contemporáneo con controlente refractivo prismático. Cuerpo en lámina</br>
						  de aluminio rechazado. Fabricado con un tratamiento previo para una mayor resistencia a la corrosión.</br>
							 Balastro electrónico de encendido rápido, bajo consumo de energía y alto factor de potencia, con rango</br>
							  de operacion de 127 a 277V. Controlente de resina acrílica con reflector anodizado de alta reflectancia. Fácil instalación.</p>
				</div>
			</div>

			<div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="images/EMERGENCIA/ind.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/ind.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/ind.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">ind</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal13">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal13" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ind</h2>
					<img src="images/EMERGENCIA/ind.jpg"/>
					<P>Proporciona un mínimo de 90 minutos de la iluminación de la potencia nominal en caso de pérdida</br>
						 de alimentación de CA. Único, de diseño innovador para una gran variedad de luz y usos industriales</br>
						  pesados y ambientes comerciales. Superior rendimiento de la lámpara en mayores alturas de montaje.</br>
							 Perfecto para el postes y columnas de montaje. Carcasa robusta, 0.140 "de espesor, moldeada por</br>
							 inyección termoplástica. Orientación vertical diseñado especialmente para el poste o columna de </br>
							 montaje, También es adecuado para muros, montaje I-Beam y montaje pendiente con el equipo de accesorios,</br>
							  disponible en modelos seleccionados.</p>
				</div>
			</div>

			<div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/BANTAM 2000 PRISMATITE.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/BANTAM 2000 PRISMATITE.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/BANTAM 2000 PRISMATITE.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">BANTAM 2000 PRISMATITE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal14">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal14" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>BANTAM 2000 PRISMATITE</h2>
					<img src="images/INDUSTRIAL/BANTAM 2000 PRISMATITE.JPG"/>
					<P>Ideal para túneles, andenes, plataformas de carga, estacionamientos cubiertos, áreas de</br>
						 almacenaje y naves industriales. Luminario a prueba de polvo y humedad. Cápsula en fundición</br>
						  de aluminio fabricada con un tratamiento previo para una mayor resistencia a la corrosión.</br>
							 Balastro electromagnético autorregulado con un alto factor de potencia. Conjunto óptico de </br>
							 cristal de borosilicato prismático Endural resistente al choque térmico. Dos curvas de distribución:</br>
							  simétrica y asimétrica.</p>
				</div>
			</div>



			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="images/INTERIOR/LOBAY.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/LOBAY.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/LOBAY.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">LOBAY</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal15">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal15" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>LOBAY</h2>
					<img src="images/INTERIOR/LOBAY.png"/>
					<P>Ideal para supermercados, almacenes, bodegas, fábricas, auditorios. Cuerpo fabricado en</br>
						 lámina de aluminio rechazado con acabado anodizado. Balastro electromagnético autorregulado</br>
						  o electrónico de bajo consumo de energía. Cuatro refractores de cristal con la opción de cubierta</br>
							 de aluminio rechazado para evitar la aportación de luz hacia arriba de los 180°. Cableado por la</br>
							  parte superior del luminario, cuenta con entrata de 1/2" NPT para colgar el tubo conduit.</p>
				</div>
			</div>



			<div class="grid__item grid__item--size-a dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/GRAN VILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/GRAN VILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/GRAN VILLE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">GRAN VILLE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<a class="meta__price" href="#modal16">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal16" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>GRAN VILLE</h2>
					<img src="images/EXTERIOR/GRAN VILLE.jpg"/>
					<P>deal para jardines, camellones, muelles, estacionamientos, calles residenciales. </br>
						Luminario exterior decorativo, de alto rendimiento. Cápsula en fundición de aluminio bajo en cobre.</br>
						 Fabricada con un tratamiento previo para mayor resistencia a la corrosión. Balastro electromagnético</br>
						  autorregulado con alto factor de potencia. Refractor y reflector prismáticos de cristal Endural de </br>
							bajo brillo y alta reflectancia. Fácil instalación y mantenimiento.</p>
				</div>
			</div>



			<div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="images/EMERGENCIA/LQM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/LQM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/LQM.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">LQM</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="images/INTERIOR/PRISMGLO COMPACTA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/PRISMGLO COMPACTA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/PRISMGLO COMPACTA.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">PRISMGLO COMPACTA</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/BANTAM 2000 PRISMPACK.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/BANTAM 2000 PRISMPACK.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/BANTAM 2000 PRISMPACK.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">BANTAM 2000 PRISMPACK</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/AV SM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/AV SM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/AV SM.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">AV SM</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="images/INTERIOR/PRISMGLO ENHANCED.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/PRISMGLO ENHANCED.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INTERIOR/PRISMGLO ENHANCED.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">PRISMGLO ENHACED</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/GRAND LEDGE.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/GRAND LEDGE.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/GRAND LEDGE.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">GRAND LEDGE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/av smd.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/av smd.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/av smd.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">av smd</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item grid__item--size-a trousers">
				<div class="slider">
					<div class="slider__item"><img src="images/EMERGENCIA/LRP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/LRP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/LRP.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">LRP</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/CRANELITE.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/CRANELITE.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/CRANELITE.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">CRANELITE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/dm-dmw.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/dm-dmw.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/dm-dmw.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">dm-dmw</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/GRANVILLE PREMIER.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/GRANVILLE PREMIER.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/GRANVILLE PREMIER.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">GRANVILLE PREMIER</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/ej-ny.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/ej-ny.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/ej-ny.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">ej-ny</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="images/EMERGENCIA/LV SERIES.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/LV SERIES.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/LV SERIES.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">LV SERIES</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/ENDURALUME.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/ENDURALUME.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/ENDURALUME.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">ENDURALUME</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item grid__item--size-a dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/HOV 16- HOV 25.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/HOV 16- HOV 25.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/HOV 16- HOV 25.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">HOV 16- HOV 25</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="images/EMERGENCIA/POWER SENTRY.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/POWER SENTRY.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/POWER SENTRY.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">POWER SENTRY</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="images/EMERGENCIA/ps.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/ps.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EMERGENCIA/ps.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">ps</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/KAD.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/KAD.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/KAD.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">KAD</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/LIGHT BAT G2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/LIGHT BAT G2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/LIGHT BAT G2.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">LIGHT BAT G2</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>


			<div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/kacm.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/kacm.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/kacm.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">kacm</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/mayfair.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/mayfair.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/mayfair.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">mayfair</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/MEMPHIS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/MEMPHIS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/MEMPHIS.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">MEMPHIS</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/MINI GRANVILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/MINI GRANVILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/MINI GRANVILLE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">MINI GRANVILLE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/MODULE 600.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/MODULE 600.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/MODULE 600.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">MODULE 600</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/NMD-MADEIRA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/NMD-MADEIRA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/NMD-MADEIRA.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">NMD-MADEIRA</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/OVUE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/OVUE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/OVUE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">OVUE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/parkpack.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/parkpack.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/parkpack.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">parkpack</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/PECHINA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/PECHINA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/PECHINA.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">PECHINA</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/pgr.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/pgr.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/pgr.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">pgr</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/PRISMASPHERE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/PRISMASPHERE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/PRISMASPHERE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">PRISMASPHERE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/SERIE GLASWERKS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/SERIE GLASWERKS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/SERIE GLASWERKS.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">SERIE GLASWERKS</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/somerset.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/somerset.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/somerset.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">somerset</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/tfa.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/tfa.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/tfa.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">tfa</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/TFL.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/TFL.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/TFL.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">TFL</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/TFR-TFM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/TFR-TFM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/TFR-TFM.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">TFR-TFM</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/tv.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/tv.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/tv.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">tv</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/twa.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/twa.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/twa.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">twa</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/twac.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/twac.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/twac.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">twac</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/twh.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/twh.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/twh.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">twh</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/TWN-TWP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/TWN-TWP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/TWN-TWP.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">TWN-TWP</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/twp.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/twp.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/twp.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">twp</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/VENUS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/VENUS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/VENUS.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">VENUS</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="images/EXTERIOR/wallpack iv.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/wallpack iv.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/EXTERIOR/wallpack iv.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">wallpack iv</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/NEN ENDURALUME.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/NEN ENDURALUME.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/NEN ENDURALUME.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">NEN ENDURALUME</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/PETROLUME.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PETROLUME.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PETROLUME.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Petrolume</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/PETROLUX II.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PETROLUX II.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PETROLUX II.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Petrolux II</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/PETROLUX.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PETROLUX.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PETROLUX.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Petrolux</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/Prismalume cerrado.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/Prismalume cerrado.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/Prismalume cerrado.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Prismalume cerrado</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMALUME.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMALUME.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMALUME.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Prismalume</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMATITE FLUORESCENTE.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMATITE FLUORESCENTE.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMATITE FLUORESCENTE.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Prismatite Fluorescente</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMGLO.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMGLO.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMGLO.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Prismglo</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMPACK CERRADO.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMPACK CERRADO.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMPACK CERRADO.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Prismpack Cerrado</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMPACK.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMPACK.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/PRISMPACK.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Prismpack</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/sh pa22.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/sh pa22.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/sh pa22.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">SH PA22</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/sh pa25.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/sh pa25.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/sh pa25.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">SH PA25</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/th a14.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/th a14.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/th a14.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">TH A14</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/th.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/th.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/th.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">TH</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/THD.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/THD.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/THD.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">THD</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/THR.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/THR.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/THR.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">THR</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/tx a121-a125.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/tx a121-a125.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/tx a121-a125.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">TX A121/A125</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/txc.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/txc.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/txc.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">TXC</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/VANTAGE ALT.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/VANTAGE ALT.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/VANTAGE ALT.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Vantage Alt</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/VANTAGE MINI.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/VANTAGE MINI.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/VANTAGE MINI.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Vantage Mini</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="images/INDUSTRIAL/VANTAGE RTT.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/VANTAGE RTT.JPG" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/INDUSTRIAL/VANTAGE RTT.JPG" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">Vantage RTT</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/GDI.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/GDI.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/GDI.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">GDI</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>


      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/i-beam.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/i-beam.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/i-beam.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">i-beam</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/mrt retrofit kit.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/mrt retrofit kit.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/mrt retrofit kit.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">mrt retrofit kit</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/NEG-FEG.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/NEG-FEG.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/NEG-FEG.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">NEG-FEG</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>


      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/NEP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/NEP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/NEP.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">NEP</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/NHW.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/NHW.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/NHW.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">NHW</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>


      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/pm3x.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/pm3x.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/pm3x.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">pm3x</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/pmo.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/pmo.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/pmo.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">pmo</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/rt5.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/rt5.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/rt5.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">rt5</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>


      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/s.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/s.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/s.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">s</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/sb.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/sb.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/sb.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">sb</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/SP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/SP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/SP.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">SP</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/wc-ny.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/wc-ny.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/wc-ny.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">wc-ny</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="images/Fluorescente/ww.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/ww.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/Fluorescente/ww.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">ww</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más</span>
				</div>
        <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

        <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="images/CON LEDS/ALX.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/ALX.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/ALX.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">ALX</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="images/CON LEDS/GRANDVILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/GRANDVILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/GRANDVILLE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">GRANDVILLE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

			 <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="images/CON LEDS/LEDGEND.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/LEDGEND.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/LEDGEND.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">LEDGEND</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="images/CON LEDS/LT BEZEL RING.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/LT BEZEL RING.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/LT BEZEL RING.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">LT BEZEL RING</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="images/CON LEDS/LTD.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/LTD.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/LTD.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">LTD</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="images/CON LEDS/SERIE H670.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/SERIE H670.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/SERIE H670.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">SERIE H670</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="images/CON LEDS/teardrop led.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/teardrop led.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/teardrop led.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">teardrop led</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="images/CON LEDS/WASHINGTON POSTLITE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/WASHINGTON POSTLITE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/CON LEDS/WASHINGTON POSTLITE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">WASHINGTON POSTLITE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/1700-AGUILA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/1700-AGUILA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/1700-AGUILA.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">1700-AGUILA</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

       <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/EXPRESS VECTOR.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/EXPRESS VECTOR.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/EXPRESS VECTOR.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">EXPRESS VECTOR</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/HALCON MEDIANO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/HALCON MEDIANO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/HALCON MEDIANO.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">HALCON MEDIANO</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/HALCON PEQUEÑO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/HALCON PEQUEÑO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/HALCON PEQUEÑO.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">HALCON PEQUEÑO</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/HOV 16-HOV 25.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/HOV 16-HOV 25.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/HOV 16-HOV 25.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">HOV 16-HOV 25</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/lmst.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/lmst.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/lmst.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">lmst</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

        <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/MONGOOSE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/MONGOOSE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/MONGOOSE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">MONGOOSE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

         <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/NHMSC-NHMAO.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/NHMSC-NHMAO.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/NHMSC-NHMAO.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">NHMSC-NHMAO</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/NHT.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/NHT.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/NHT.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">NHT</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/POSTE SERIE L5.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/POSTE SERIE L5.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/POSTE SERIE L5.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">POSTE SERIE L5</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/PRISMBEAM II.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/PRISMBEAM II.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/PRISMBEAM II.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">PRISMBEAM II</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/SIGN VUE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/SIGN VUE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/SIGN VUE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">SIGN VUE</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/tunel predator.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/tunel predator.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="images/SISTEMAS DE ALTO MONTAJE/tunel predator.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<h3 class="meta__title">tunel predator</h3>
					<span class="meta__brand">Artefactos Luminicos</span>
					<span class="meta__price">Ver más<span>
				</div>
				<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
			</div>

		</section>
		<!-- /grid-->
	</div>
	<!-- /view -->
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
