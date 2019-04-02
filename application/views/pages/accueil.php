<div class="container">
	<div>
		<div id="divForImg" class="container w-100"></div>
		<div id="demo" class="carousel slide imgCarousel" data-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100"
						src="<?PHP echo base_url('assets/img/AI.jpg')?>" alt="AI">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100"
						src=<?PHP echo base_url('assets/img/coding.jpg')?> alt="coding">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100"
						src="<?PHP echo base_url('assets/img/equation.jpg')?>"
						alt="equation">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span
				class="carousel-control-prev-icon"></span>
			</a> <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>

		</div>
	</div>
</div>


