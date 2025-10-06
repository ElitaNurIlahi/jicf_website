@extends('layouts.app')

@section('title', 'Home - JICF 2025')

@push('body-class')
<script>document.body.classList.add('home-page');</script>
@endpush

@section('content')
<section class="relative w-full" style="height: calc(100vh - 80px); margin: 0; padding: 0; overflow: hidden;">
    <div id="heroCarousel" class="relative w-full h-full">
        
        <div class="carousel-slide active absolute inset-0">
            <img src="{{ asset('images/jakarta-slide1.png') }}" 
                 alt="Jakarta Slide 1" 
                 style="width: 100%; height: 100%; object-fit: cover; display: block;">
        </div>

        <div class="carousel-slide absolute inset-0 opacity-0">
            <img src="{{ asset('images/jakarta-slide2.png') }}" 
                 alt="Jakarta Slide 2" 
                 style="width: 100%; height: 100%; object-fit: cover; display: block;">
        </div>

        <div class="carousel-slide absolute inset-0 opacity-0">
            <img src="{{ asset('images/jakarta-slide3.png') }}" 
                 alt="Jakarta Slide 3" 
                 style="width: 100%; height: 100%; object-fit: cover; display: block;">
        </div>

        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 flex gap-3">
            <button onclick="goToSlide(0)" class="carousel-dot w-3 h-3 rounded-full bg-white"></button>
            <button onclick="goToSlide(1)" class="carousel-dot w-3 h-3 rounded-full bg-white/50"></button>
            <button onclick="goToSlide(2)" class="carousel-dot w-3 h-3 rounded-full bg-white/50"></button>
        </div>
    </div>
</section>

<script>
let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-slide');
const dots = document.querySelectorAll('.carousel-dot');

function showSlide(index) {
    slides.forEach((s, i) => s.style.opacity = i === index ? '1' : '0');
    dots.forEach((d, i) => {
        d.className = `carousel-dot w-3 h-3 rounded-full ${i === index ? 'bg-white' : 'bg-white/50'}`;
    });
}

function goToSlide(i) {
    currentSlide = i;
    showSlide(i);
}

setInterval(() => {
    currentSlide = (currentSlide + 1) % 3;
    showSlide(currentSlide);
}, 4000);

slides.forEach(s => s.style.transition = 'opacity 1s ease-in-out');
</script>
@endsection