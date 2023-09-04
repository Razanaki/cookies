<footer>
		<link rel="stylesheet" href="../css/footer.css">
		<div class="row-alaranjado" > 
			<div class="container">
				<div class="row"> 
					<div class="col-md-2 text-center"> 
						<img class="logotipo" src="../img/biscoito.png" alt="Logotipo">
					</div>

					<div class="col-md-10"> 
						<div class="row row-cols">
							<div class="col-md-4 col-posts-populares"> 
								<h4>POSTS POPULARES</h4>
								<ul class="list-unstyled">
									<li>
										<h5>10 curiosidades sobre biscoitos</h5>
										<time>Fevereiro 11, 2023</time>
									</li>

									<li>
										<h5>Tipos de biscoitos no mundo todo</h5>
										<time>Junho 6, 2023</time>
									</li>
								</ul>
							</div>
						

							<div class="col-md-4 col-links"> 
								<h4> LINKS </h4>
									<ul class="list-unstyled">
										<li><a href="#"><i class="fa fa-angle-right"> TICKETS </i></a></li>
										<li><a href="#"><i class="fa fa-angle-right"> NOTÍCIAS</i> </a></li>
										<li><a href="#"><i class="fa fa-angle-right"> CALENDÁRIO</i> </a></li>
									</ul>
							</div>
							 

							<div class="col-md-4 col-contato"> 
								<h4> CONTATO </h4>
								<adress> 
									<i class="fa fa-location-dot"></i><span> Rua dos Operários, 18 <br/> São Paulo, Brasil</span>
								</adress>
								 <a href="tel:97689-9494"><i class="fa fa-phone"></i><p>97689-9494</p> </a> 
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>

		<div class="row-marrom">
			<div class="container">
				<p class="float-md-start">Copyright © Portal das Biscoiteiras 2023. All Rights reserved.</p>
				<p class="float-md-end"> Created by Bianca Honda</p>
			</div>

		</div>
	</footer>



	<script src="../lib/jquery/jquery.min.js"> </script>	
	<script src="../lib/owl-carousel2/owl.carousel.min.js"> </script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"> </script>
	<script>
		$(document).ready(function() {

			$("#busca").on("focus", function(){

				$("#busca").addClass("ativo");

			}).on("blur", function(){

				$("#busca").removeClass("ativo");				

			});

		$(".thumbnails").owlCarousel({
			loop:true,
			//nav: true,
			navText:["Anterior", "Próximo"],
			responsive: {
				0:{item: 1},
				480:{item:3},
				768:{item: 4},
				1200:{item: 6}
			}

		});


		});
	</script>
</html>