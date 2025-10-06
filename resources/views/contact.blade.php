@extends('layouts.app')

@section('title', 'Contact - JICF 2025')

@section('content')
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Header -->
        <div class="max-w-4xl mx-auto text-center mb-16 fade-in-up">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">Contact</h1>
            <p class="text-xl text-gray-600">
                For all inquiries regarding THE THIRD Jakarta International Competition Forum, please use the official
                international cooperation email at 
                <a href="mailto:jicf@kppu.go.id" class="text-blue-600 hover:text-blue-700 font-semibold">jicf@kppu.go.id</a>.
            </p>
        </div>

        <!-- Contact Cards -->                               
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 mb-20">
            <!-- Card 1: Partnership -->
            <div class="contact-card group h-full">
                <div class="card-inner h-full p-8 rounded-xl border-2 border-blue-200 transition-all duration-500 hover:border-gray-500 hover:bg-gray-500 hover:shadow-xl flex flex-col">
                    <h3 class="text-2xl font-bold mb-6 text-blue-600 group-hover:text-white transition-colors duration-300">
                        Partnership:
                    </h3>
                    <div class="space-y-4 flex-grow flex flex-col">
                        <h4 class="text-xl font-semibold text-gray-900 group-hover:text-white transition-colors duration-300">
                            Deswin Nur
                        </h4>
                        <p class="text-gray-600 group-hover:text-gray-50 transition-colors duration-300 flex-grow">
                            Head of Bureau for Public Relations and Cooperation
                        </p>
                        <a href="mailto:deswin.nur@gmail.com" 
                           class="inline-block text-gray-700 group-hover:text-white font-medium hover:underline transition-colors duration-300">
                            deswin.nur@gmail.com
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Program & Speaker -->
            <div class="contact-card group h-full" style="animation-delay: 0.2s">
                <div class="card-inner h-full p-8 rounded-xl border-2 border-blue-200 transition-all duration-500 hover:border-gray-500 hover:bg-gray-600 hover:shadow-xl flex flex-col">
                    <h3 class="text-2xl font-bold mb-6 text-blue-600 group-hover:text-white transition-colors duration-300">
                        Program & Speaker:
                    </h3>
                    <div class="space-y-4 flex-grow flex flex-col">
                        <h4 class="text-xl font-semibold text-gray-900 group-hover:text-white transition-colors duration-300">
                            Diana Yoseva
                        </h4>
                        <p class="text-gray-600 group-hover:text-gray-50 transition-colors duration-300 flex-grow">
                            Senior Investigator
                        </p>
                        <a href="mailto:didiyoseva@gmail.com" 
                           class="inline-block text-gray-700 group-hover:text-white font-medium hover:underline transition-colors duration-300">
                            didiyoseva@gmail.com
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Operational & Media -->
            <div class="contact-card group h-full" style="animation-delay: 0.4s">
                <div class="card-inner h-full p-8 rounded-xl border-2 border-blue-200 transition-all duration-500 hover:border-gray-500 hover:bg-gray-600 hover:shadow-xl flex flex-col">
                    <h3 class="text-2xl font-bold mb-6 text-blue-600 group-hover:text-white transition-colors duration-300">
                        Operational & Media:
                    </h3>
                    <div class="space-y-4 flex-grow flex flex-col">
                        <h4 class="text-xl font-semibold text-gray-900 group-hover:text-white transition-colors duration-300">
                            Intan Putri
                        </h4>
                        <p class="text-gray-600 group-hover:text-gray-50 transition-colors duration-300 flex-grow">
                            Head of Public Relations Division
                        </p>
                        <a href="mailto:birohumaskerma@kppu.go.id" 
                           class="inline-block text-gray-700 group-hover:text-white font-medium hover:underline transition-colors duration-300">
                            birohumaskerma@kppu.go.id
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Get Social Section -->
        <div class="max-w-4xl mx-auto text-center fade-in-up" style="animation-delay: 0.6s">
            <h2 class="text-4xl font-bold text-gray-900 mb-12">Get Social</h2>
            <div class="flex justify-center gap-8">
                <!-- Facebook -->
                <a href="#" class="social-icon group">
                    <div class="w-16 h-16 rounded-full bg-orange-500 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </div>
                </a>

                <!-- Instagram -->
                <a href="#" class="social-icon group">
                    <div class="w-16 h-16 rounded-full bg-orange-500 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </div>
                </a>

                <!-- YouTube -->
                <a href="#" class="social-icon group">
                    <div class="w-16 h-16 rounded-full bg-orange-500 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </div>
                </a>

                <!-- Twitter/X -->
                <a href="#" class="social-icon group">
                    <div class="w-16 h-16 rounded-full bg-orange-500 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Fade In Up Animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in-up {
    animation: fadeInUp 0.8s ease-out forwards;
    opacity: 0;
}

/* Contact Card Animation */
@keyframes slideInCard {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.contact-card {
    animation: slideInCard 0.6s ease-out forwards;
    opacity: 0;
}

/* Card Background Transition */
.card-inner {
    background-color: transparent;
}

.card-inner:hover {
    transform: translateY(-5px);
}

/* Social Icon Animation */
@keyframes bounceIn {
    from {
        opacity: 0;
        transform: scale(0.3);
    }
    50% {
        transform: scale(1.05);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.social-icon {
    animation: bounceIn 0.6s ease-out forwards;
    opacity: 0;
}

.social-icon:nth-child(1) { animation-delay: 0.7s; }
.social-icon:nth-child(2) { animation-delay: 0.8s; }
.social-icon:nth-child(3) { animation-delay: 0.9s; }
.social-icon:nth-child(4) { animation-delay: 1s; }
</style>
@endsection