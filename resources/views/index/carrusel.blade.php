
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="max-height: 600px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        

    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
   {{-- 
   . '?' . date('Y-m-d h:s')
   --}}
        <div class="item active">
            <img src="{{ asset("assets/index/carrusel/editatona2000x600.jpg") }}" alt="..." class="img-responsive">
        </div>
        <div class="item">
            <a href="http://conacytprensa.mx/index.php/ciencia/humanidades/15884-ciencia-tecnologia-perspectiva-genero" target="_blank">
                <img src="{{ asset("assets/index/carrusel/nayarit2017.jpg") }}" alt="..." class="img-responsive">
            </a>
            <div class="carousel-caption orange lighten-3 white-text hidden-md-down">
                <h3>Nayarit, 2017</h3>
            </div>
        </div>
        <div class="item">
            <a href="http://conacytprensa.mx/index.php/ciencia/humanidades/15884-ciencia-tecnologia-perspectiva-genero" target="_blank">
                <img src="{{ asset("assets/index/carrusel/puebla2017_2000x600.jpg") }}" alt="..." class="img-responsive">
            </a>
            <div class="carousel-caption red lighten-4 white-text hidden-md-down">
                <a href="http://conacytprensa.mx/index.php/ciencia/humanidades/15884-ciencia-tecnologia-perspectiva-genero" target="_blank" class="btn pink"> <i class="fa fa-file-text"></i> Leer nota de la reunión en Puebla, 2017</a>  
            </div>
            

        </div>
        
        <div class="item">
            <img src="{{ asset("assets/index/carrusel/guadalajara2016_2000x600.jpg") }}" alt="..." class="img-responsive center-block">
            <div class="carousel-caption blue darken-3 white-text hidden-md-down">
                <h3>Guadalajara, septiembre 2016</h3>
            </div>
            <div class="carousel-caption white blue-text hidden-md-up">
                <p>Guadalajara, 2016</p>
            </div>

        </div>
        <div class="item">
            <img src="{{ asset("assets/index/carrusel/chiapas2016_2000x600.jpg") }}" class="img-responsive center-block">
            <div class="carousel-caption green white-text hidden-md-down">
                <h3>San Cristóbal de las Casas, octubre 2016</h3>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset("assets/index/carrusel/portadaVideo_2000x600.jpg") }}" class="img-responsive center-block">
            <div class="carousel-caption brown lighten-3 white-text hidden-md-down">
                <a href="https://youtu.be/PMdCyIxA3rw" class="btn btn-danger" target="_blank">
                    <i class="fa fa-youtube-play"></i>
                    Video Red Mexciteg 2013-2016 
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
