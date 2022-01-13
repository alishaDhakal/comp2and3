@extends('component.layout')
@section('content')

    <section id="hero" class="text-white tm-font-big tm-parallax">

    <div class="text-center tm-hero-text-container">
            <div class="tm-hero-text-container-inner">
                <h2 class="tm-hero-title">Alisha Dhakal</h2>
                <p class="tm-hero-subtitle">
                    University ID : C7229119
                    <br />Group A
                </p>
            </div>
        </div>

        <div class="tm-next tm-intro-next">
            <a href="#introduction" class="text-center tm-down-arrow-link">
                <i class="fas fa-3x fa-caret-down tm-down-arrow"></i>
            </a>
        </div>
    </section>

    <section id="introduction" class="tm-section-pad-top mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="img/the-town-01.jpg" alt="Image" class="img-fluid tm-intro-img" />
                </div>
                <div class="col-lg-6">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4 tm-section-title">Introduction</h2>
                        <p class="mb-4 tm-intro-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur corporis facere itaque labore libero minus sint vero! Consequatur, cum ex, harum in itaque mollitia officiis, porro quasi quis velit voluptatem?
                        </p>
                        <p class="mb-5 tm-intro-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur corporis facere itaque labore libero minus sint vero! Consequatur, cum ex, harum in itaque mollitia officiis, porro quasi quis velit voluptatem?
                        </p>
                        <div class="tm-next">
                            <a href="#work" class="tm-intro-text tm-btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row tm-section-pad-top">
                <div class="col-lg-4">
                    <i class="fas fa-4x fa-bus text-center tm-icon"></i>
                    <h4 class="text-center tm-text-primary mb-4">Curabitur at elit eu risus</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur corporis facere itaque labore libero minus sint vero! Consequatur, cum ex, harum in itaque mollitia officiis, porro quasi quis velit voluptatem?
                    </p>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <i class="fas fa-4x fa-bicycle text-center tm-icon"></i>
                    <h4 class="text-center tm-text-primary mb-4">Nunc sed metus vel nisi</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur corporis facere itaque labore libero minus sint vero! Consequatur, cum ex, harum in itaque mollitia officiis, porro quasi quis velit voluptatem?
                    </p>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <i class="fas fa-4x fa-city text-center tm-icon"></i>
                    <h4 class="text-center tm-text-primary mb-4">Fusce sed nisi sagittis</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur corporis facere itaque labore libero minus sint vero! Consequatur, cum ex, harum in itaque mollitia officiis, porro quasi quis velit voluptatem?
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
