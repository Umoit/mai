@extends('home.global')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item">
                    <div class="page-header header-filter">
                        <div class="page-header-image" style="background-image: url('../assets/img/bg40.jpg');"></div>
                        <div class="content-center text-center">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <h1 class="title">Finding the Perfect.</h1>
                                    <h4 class="description text-white">The haute couture crowds make stylish statements between shows during couture season in Paris...</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="page-header header-filter">
                        <div class="page-header-image" style="background-image: url('../assets/img/bg41.jpg');"></div>
                        <div class="content-center">
                            <div class="row">
                                <div class="col-md-8 offset-md-2 text-center">
                                    <h1 class="title">Street Style: Couture.</h1>
                                    <h4 class="description text-white">See what Karlie Kloss, Tracee Ellis Ross and others wore between the shows...</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="page-header header-filter">
                        <div class="page-header-image" style="background-image: url('../assets/img/bg29.jpg');"></div>
                        <div class="content-center text-center">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <h1 class="title">For Men With Style.</h1>
                                    <h4 class="description text-white">Shirts that actually fit? Check. Linen shorts? Yup. Those wider pants suddenly in style? Got them, too....</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="now-ui-icons arrows-1_minimal-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="now-ui-icons arrows-1_minimal-right"></i>
            </a>
        </div>

        <div class="main">
            <div class="section">
                <div class="container">
                    <h2 class="section-title">Find what you need</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-product card-plain">
                                        <div class="card-image">
                                            <a href="#">
                                                <img src="../assets/img/polo.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="card-block">
                                            <a href="#">
                                                <h4 class="card-title">Polo Ralph Lauren</h4>
                                            </a>
                                            <p class="card-description">
                                                Impeccably tailored in Italy from lightweight navy wool.
                                            </p>
                                            <div class="card-footer">
                                                <div class="price-container">
                                                    <span class="price"> € 300</span>
                                                </div>
                                                <button class="btn btn-danger btn-neutral btn-icon btn-round pull-right" rel="tooltip" title="Remove from wishlist" data-placement="left">
                                                    <i class="now-ui-icons ui-2_favourite-28"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-product card-plain">
                                        <div class="card-image">
                                            <a href="#">
                                                <img src="../assets/img/tom-ford.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="card-block">
                                            <a href="#">
                                                <h4 class="card-title">Tom Ford</h4>
                                            </a>
                                            <p class="card-description">
                                                Immaculate tailoring is TOM FORD's forte.
                                            </p>
                                            <div class="card-footer">
                                                <div class="price-container">
                                                    <span class="price"> € 879</span>
                                                </div>
                                                <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip" title="Add to wishlist" data-placement="left">
                                                    <i class="now-ui-icons ui-2_favourite-28"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-product card-plain">
                                        <div class="card-image">
                                            <a href="#">
                                                <img src="../assets/img/wooyoungmi.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="card-block">
                                            <a href="#">
                                                <h4 class="card-title">Wooyoungmi</h4>
                                            </a>
                                            <p class="card-description">
                                                Dark-grey slub wool, pintucked notch lapels.
                                            </p>
                                            <div class="card-footer">
                                                <div class="price-container">
                                                    <span class="price">€ 555</span>
                                                </div>
                                                <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip" title="Add to wishlist" data-placement="left">
                                                    <i class="now-ui-icons ui-2_favourite-28"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-product card-plain">
                                        <div class="card-image">
                                            <a href="#">
                                                <img src="../assets/img/sweeney.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="card-block">
                                            <a href="#">
                                                <h4 class="card-title">Thom Sweeney</h4>
                                            </a>
                                            <p class="card-description">
                                                It's made from lightweight grey wool woven.
                                            </p>
                                            <div class="card-footer">
                                                <div class="price-container">
                                                    <span class="price"> € 680</span>
                                                </div>
                                                <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip" title="Add to wishlist" data-placement="left">
                                                    <i class="now-ui-icons ui-2_favourite-28"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-product card-plain">
                                        <div class="card-image">
                                            <a href="#">
                                                <img src="../assets/img/kingsman.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="card-block">
                                            <a href="#">
                                                <h4 class="card-title">Kingsman</h4>
                                            </a>
                                            <p class="card-description">
                                                Crafted from khaki cotton and fully canvassed.
                                            </p>
                                            <div class="card-footer">
                                                <div class="price-container">
                                                    <span class="price"> € 725</span>
                                                </div>
                                                <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip" title="Remove from wishlist" data-placement="left">
                                                    <i class="now-ui-icons ui-2_favourite-28"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-product card-plain">
                                        <div class="card-image">
                                            <a href="#">
                                                <img src="../assets/img/boglioli.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="card-block">
                                            <a href="#">
                                                <h4 class="card-title">Boglioli</h4>
                                            </a>
                                            <p class="card-description">
                                                Masterfully crafted in Northern Italy.
                                            </p>
                                            <div class="card-footer">
                                                <div class="price-container">
                                                    <span class="price">€ 699</span>
                                                </div>
                                                <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip" title="Add to wishlist" data-placement="left">
                                                    <i class="now-ui-icons ui-2_favourite-28"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <div class="col-md-3 offset-md-4">
                                    <button rel="tooltip" class="btn btn-primary btn-round">Load more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
