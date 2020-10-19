@extends('layouts.app')

@section('content')
    <main class="container pt-5 mt-5">
            <div class="row">
                <div class="container mt-2">
                    <div class="col-lg-12 ">
                        <div class="row">
                            <a class="offset-lg-2 offset-md-2 col-lg-8 col-md-8 col-sm-12 text-center ">
                                <img class="" src="{{asset('/photos/xondy.png')}}" alt="Author's logo"/>
                            </a>
                        </div>
                        
                        <div class="row mt-5">
                            <a class="offset-lg-3 offset-md-3 col-lg-6 col-md-6 text-center tagline-1 btn-0 " href="{{
                                 route('service') }}">
                                <div class="text">let's build something <br> amazing together!
                                </div>
                            </a>
                        </div>  
                            
                        <div class="row">
                            <div class="offset-lg-3 offset-md-3 col-lg-6 col-md-6 tagline-2 mt-5 btn-1">
                                <div class="row">
                                    <p class="col-lg-7 col-md-7 order-sm- spread">BEYOND IMAGINATION</p>
                                
                                    <div class="col-lg-5 col-md-5">
                                        <a href="#" target="_blank" class="facebook color"><i class="fab fa-facebook-f box"></i></a>
                                        <a href="#" class="twitter color" target="_blank"><i class="fab fa-twitter box"></i></a>
                                        <a href="#" class="linkedin color" target="_blank"><i class="fab fa-linkedin-in box"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                            
                    </div>
                </div>
            </div>
    </main>
    
    
     
    
    <div class="container mt-5 pt-5">
        <div class="row mt-5">
          
            <a href="#" class="col-lg-2 about">
              <img class="img mr-4 mt-2" src="/photos/Nixson.jpeg">
                  <p class="about_me">about me</p>
            </a>
            
            <div class="col-lg-5 home_text ">
                  I build beautiful & intelligent<a href="#" class="web">websites</a>
            </div>
      
            <div class="col-lg-5">
                  <p class="home_text intelligent">intelligent and beautiful <a href="#" class="web underline">Login </a></p>
            </div>
              
        </div>
    </div> 

@endsection





