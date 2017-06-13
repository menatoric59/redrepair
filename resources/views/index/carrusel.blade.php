
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="max-height: 600px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>

    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="http://www.ifuap.buap.mx/eventos/SFHPPG17/" target="_blank">
                <img src="{{ asset("assets/index/carrusel/seminarioSeptiembre2017.jpg") . '?' . date('Y-m-d h:s') }} alt="..." class="img-responsive center-block">
            
            </a>
        </div>
        <div class="item">
            <img src="{{ asset("assets/index/carrusel/puebla2017.jpg") . '?' . date('Y-m-d h:s') }} alt="..." class="img-responsive center-block">
            <div class="carousel-caption red lighten-2 white-text hidden-md-down">
                <h1 class="thin">Reunión Nacional</h1>
                <h3>Puebla, mayo 2017</h3>
                <a href="http://conacytprensa.mx/index.php/ciencia/humanidades/15884-ciencia-tecnologia-perspectiva-genero" class="btn grey darken-3" target="_blank">Ver nota</a>
                
            </div>
            <div class="carousel-caption red lighten-2 white-text hidden-md-up">
                <p>Puebla, 2017</p>
            </div>

        </div>
        <div class="item">
            <img src="{{ asset("assets/index/carrusel/homenaje.jpg") . '?' . date('Y-m-d h:s') }} alt="..." class="img-responsive center-block">
             <div class="carousel-caption white-text cyan darken-3 text-darken-3" style="width: 100%">
                <h2 class="hidden-xs">De sus amigas de la red</h2>

                <a href="http://www.medios.ceiich.unam.mx/video/172/" class="btn grey darken-3" target="_blank">Ver video</a>
            </div>

        </div>
        <div class="item">
            <img src="{{ asset("assets/index/carrusel/guadalajara2016.jpg") . '?' . date('Y-m-d h:s') }} alt="..." class="img-responsive center-block">
            <div class="carousel-caption white blue-text hidden-md-down">
                <h1 class="thin">Reunión Nacional</h1>
                <h3>Guadalajara, septiembre 2016</h3>
            </div>
            <div class="carousel-caption white blue-text hidden-md-up">
                <p>Guadalajara, 2016</p>
            </div>

        </div>
        <div class="item">
            <img src="assets/index/carrusel/chiapas2016.jpg" alt="..." class="img-responsive center-block">
            <div class="carousel-caption green white-text hidden-md-down">
                <h1>Reunión Nacional</h1>
                <h3>San Cristóbal de las Casas, octubre 2016</h3>
            </div>
            <div class="carousel-caption green white-text hidden-md-up">
                <p>San Cristóbal, 2016</p>
            </div>
        </div>
        <div class="item">
            <img src="assets/index/carrusel/portadaVideo.jpg" alt="..." class="img-responsive center-block">
            <div class="carousel-caption white red-text hidden-md-down">
                <h1>Red Mexciteg 2013-2016</h1>
                <a href="https://youtu.be/PMdCyIxA3rw" class="btn btn-danger" target="_blank">
                    <i class="fa fa-youtube-play"></i>
                    Video
                </a>

            </div>
            <div class="carousel-caption white red-text hidden-md-up">
                <a href="https://youtu.be/PMdCyIxA3rw" class="btn btn-danger" target="_blank">Ver video</a>
            </div>
        </div>


    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
