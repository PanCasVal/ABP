@extends('abp.menu')

@section('content')
<div>
    	<h2 align="center" style="font-size: 2em">Vista previa</h2>
    <div class="container">
  		<div class="row">
    		<div class="col-sm">
      			<div class="card" style="width: 18rem;">
  						<img src="https://www.maquituls.es/noticias/wp-content/uploads/2018/02/mueble.jpg" class="card-img-top" alt="https://www.maquituls.es/noticias/wp-content/uploads/2018/02/mueble.jpg">
  					<div class="card-body">
    					<h5 class="card-title">Estante</h5>
    					<p class="card-text">Lugar pa poner cosas y ya.</p>
    					<a href="#" class="btn btn-primary">Comprar</a>
  					</div>
				</div>
    		</div>
    		<div class="col-sm">
      			<div class="card" style="width: 18rem;">
  						<img src="https://mejorconsalud.as.com/wp-content/uploads/2018/02/Mantenimiento-de-los-muebles-de-madera-en-casa.jpg" class="card-img-top" alt="https://mejorconsalud.as.com/wp-content/uploads/2018/02/Mantenimiento-de-los-muebles-de-madera-en-casa.jpg">
  					<div class="card-body">
    					<h5 class="card-title">Conjunto de sala</h5>
    					<p class="card-text">Mesitas y sillitas.</p>
    					<a href="#" class="btn btn-primary">Comprar</a>
  					</div>
				</div>
    		</div>
    		<div class="col-sm">
      			<div class="card" style="width: 18rem;">
  						<img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Muebles_de_madera_en_Adjuntas_del_R%C3%ADo%2C_Dolores_Hidalgo%2C_Guanajuato.jpg" class="card-img-top" alt="https://upload.wikimedia.org/wikipedia/commons/e/e4/Muebles_de_madera_en_Adjuntas_del_R%C3%ADo%2C_Dolores_Hidalgo%2C_Guanajuato.jpg">
  					<div class="card-body">
    					<h5 class="card-title">Sala</h5>
    					<p class="card-text">Salita.</p>
    					<a href="#" class="btn btn-primary">Comprar</a>
  					</div>
				</div>
    		</div>
  		</div>
	</div>
        <h2 align="center" style="font-size: 2em; margin-top: 1em">Pecio de productos</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.rmfp.com/wp-content/uploads/2019/10/The-Best-Wood-Option-1080x675.jpeg" class="d-block w-100" alt="https://www.rmfp.com/wp-content/uploads/2019/10/The-Best-Wood-Option-1080x675.jpeg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Roble</h5>
                                <p>Dura y duradera.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.pinimg.com/originals/9e/9a/25/9e9a252ae380b5f4033857071587c25a.jpg" class="d-block w-100" alt="https://i.pinimg.com/originals/9e/9a/25/9e9a252ae380b5f4033857071587c25a.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Abeto</h5>
                                <p>Arbol de tronco alto y recto, coteza lisa y blanquesina, copa en forma de cono con ramas horizontales.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://madera-sostenible.com/wp-content/uploads/2020/04/ATIBT_MaderaTropical-980x600.jpg" class="d-block w-100" alt="https://madera-sostenible.com/wp-content/uploads/2020/04/ATIBT_MaderaTropical-980x600.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Abedul</h5>
                                <p>Arbol de corteza lisa de color blanco plateado copa ovoide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-sm">
     			<iframe width="560" height="315" src="https://www.youtube.com/embed/_7SnifoPP1E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <footer>
    	<h6 align="center">Holi</h6>
    </footer>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
@endsection