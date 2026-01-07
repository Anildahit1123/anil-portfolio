@extends('layouts.header')
@section('content')
<section id="about" class="about">

<div class="container" data-aos="fade-up">
  <div class="row gx-0">

    <div class="col-lg-4 d-flex flex-column justify-content-top" data-aos="fade-up" data-aos-delay="200" style="padding:5px;">
    <img src="{{asset('assets/img/portfolio/portfolio-9.jpg')}}" style="width:100%;"> 
    <blockquote>
                <p>Also listen while reading.</p>
               <div style="display:flex; justify-content:center;">
                    <audio controls style="height:30px; width:80%;">
                     <source src="{{asset('assets/audio/raat_ki_rani.mp3')}}" type="audio/mpeg">
                    </audio>   
                            
                
                    <img src="{{asset('assets/img/copy.png')}}" alt="Donate_me" style="width: 80px; object-fit:contain; margin:0 20px;">
               </div><br>
                         
        </blockquote>      
            
    </div>

    <div class="col-lg-4 d-flex flex-column justify-content-top" data-aos="fade-up" data-aos-delay="200" style="padding:5px;">
    <img src="{{asset('assets/img/portfolio/portfolio-9.jpg')}}" style="width:100%;"> 
    <blockquote>
                <p>Also listen while reading.</p>
               <div style="display:flex; justify-content:center;">
                    <audio controls style="height:30px; width:80%;">
                     <source src="{{asset('assets/audio/raat_ki_rani.mp3')}}" type="audio/mpeg">
                    </audio>   
                            
                
                    <img src="{{asset('assets/img/copy.png')}}" alt="Donate_me" style="width: 80px; object-fit:contain; margin:0 20px;">
               </div><br>
                         
        </blockquote>      
            
    </div>
    
</div>
</section>

@endsection 
