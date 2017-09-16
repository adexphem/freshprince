<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <div class="item active">
            <img src="{{url('images/banner/banner1.png')}}" alt="Banner1">
            <div class="carousel-caption">
                <h3>WE ARE ROYAL</h3>
                <p>We don't just print, we pay attention to every detail.</p>
            </div>
        </div>

        <div class="item">
            <img src="{{url('images/banner/banner2.jpg')}}" alt="Banner1">
            <div class="carousel-caption">
                <h3>COLLECTIONS</h3>
                <p>We deliver to the letters!</p>
            </div>
        </div>

        <div class="item">
            <img src="{{url('images/banner/banner3.jpg')}}" alt="Banner1">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>
        </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>