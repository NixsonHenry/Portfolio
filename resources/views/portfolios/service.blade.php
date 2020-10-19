@extends('layouts.app')

@section('content')
    
    <section class="container format-text2">
        <h2 class="text-center text-uppercase my-5 py-5 services">My services</h2>

        <div class="row">
            <div class="col-md-4 ">
                <!-- First row -->
                <div class="row mb-4">
                    <div class="col-2">
                    <a class="icon" href="#"><i class="fab fa-js-square icons "></i></a>
                    </div>

                    <div class="col-10 mb-2">
                        <a class="title-0" href="#"><h5 class="font-weight-bold  mb-2 font-weight-bold title-0">| Web design</h5></a>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                </div>

            <!-- Second row -->
                <div class="row">
                    <div class="col-2">
                    <a class="icon" href="#"><i class="fas fa-database icons"></i></a>
                    </div>
                    <div class="col-10 mb-2">
                        <a class="title-0" href="#"><h5 class="font-weight-bold  mb-2 title-0">| Data science services</h5></a>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                </div>
            </div>

            <!--Third row -->
            <div class="col-md-4">
                <div class="row mb-4">
                    <div class="col-2">
                      <a class="icon" href="#"><i class="fab fa-laravel icons"></i></a>
                    </div>
                    <div class="col-10 mb-2">
                        <a class="title-0" href="#"><h5 class="font-weight-bold  mb-2 title-0">| Web development</h5></a>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-2">
                    <a class="icon" href="#"><i class="fas fa-table icons"></i></a>
                    </div>
                    <div class="col-10 mb-2">
                        <a class="title-0" href="#"><h5 class="font-weight-bold mb-2 title-0 ">| Preparing data for modeling</h5></a>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="row mb-4">
                    <div class="col-2">
                    <a class="icon" href="#"><i class="fab fa-wordpress icons"></i></a>
                    </div>
                    <div class="col-10 mb-2">
                        <a class="title-0" href="#"><h5 class="font-weight-bold mb-2 title-0">| WordPress Development</h5></a>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <a class="icon" href="#"><i class="fas fa-server icons"></i></a>
                    </div>
                    <div class="col-10 mb-2">
                        <a class="title-0" href="#"><h5 class="font-weight-bold  mb-2 title-0">| Developing & executing models</h5></a>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  
  
    <div class="container-fluid pb-3 bg-testimony">
        <div class="container">
        
            <div class="row">
                <section class="mb-5 col-lg-12 col-sm-12">
                <h1 class="text-center text-uppercase my-5 service">What clients say about me</h1>

              
                    <div class="avatar mb-4 text-center">
                      <img src="/photos/Kenel.jpg"
                        class="rounded-circle img-fluid" alt="First sample avatar image">
                    </div>

                    <div class="row">
                        <p class="offset-lg-2 col-lg-8 col-sm-12 text-center format-text1 mt-5"><i class="fas fa-quote-left quotes" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quodeos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam vel repudiandae excepturi tenetur illo. <i class="fas fa-quote-right quotes" aria-hidden="true"></i></p>

                            <div class="col-sm-12 mt-4 text-center mb-4">
                            <h3><strong>Jean Kenel Dessources</strong></h3>
                            <p class="mt-3 founder">Founder at ET Company</p>
                            <i class="fas fa-star quotes"></i>
                            <i class="fas fa-star quotes"></i>
                            <i class="fas fa-star quotes"></i>
                            <i class="fas fa-star quotes"></i>
                            <i class="fas fa-star quotes"></i>
                            </div>              
                    </div>
                    
                </section> 
            </div>
        </div>
    </div>
@endsection
