{{-- resources/views/information/about-host.blade.php --}}
@extends('layouts.app')

@section('title', 'About the Host - Jakarta International Competition Forum')

@section('styles')
<style>
    .info-section {
        background: #f5f5f5;
        padding: 80px 0;
    }

    .content-box {
        background: #fff;
        padding: 60px;
        border-radius: 12px;
        max-width: 1000px;
        margin: 0 auto;
    }

    .section-title {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 40px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100px;
        height: 4px;
        background: #D97706;
    }

    .host-image {
        width: 100%;
        max-width: 600px;
        height: auto;
        border-radius: 8px;
        margin: 0 auto 40px;
        display: block;
    }

    .text-content {
        font-size: 16px;
        line-height: 1.8;
        color: #333;
    }

    .text-content p {
        margin-bottom: 20px;
    }
</style>
@endsection

@section('content')
<section class="info-section">
    <div class="container">
        <div class="content-box">
            <h1 class="section-title">About the Host</h1>
            <img src="{{ asset('images/kppu-building.jpg') }}" alt="KPPU Building" class="host-image">
            <div class="text-content">
                <p>
                    In Indonesia's dynamic business landscape, the Komisi Pengawas Persaingan Usaha (KPPU) serves 
                    as the guardian of fair and healthy business competition. An independent government agency, its 
                    core mandate is to enforce Law No. 5 of 1999, which prohibits monopolistic practices and unfair 
                    business competition. The work of the KPPU is fundamental to ensuring a level playing field where 
                    innovation thrives, consumer interests are protected, and the economy can grow equitably.
                </p>
                <p>
                    This year has been especially transformative for the KPPU. With the appointment of new 
                    commissioners for the 2024-2029 period, the institution is embarking on a strategic agenda focused 
                    on institutional modernization and proactive enforcement. Recent developments include a new 
                    regulation on the procedure and case handling of partnership agreements, particularly those 
                    between large corporations and micro, small, and medium enterprises (MSMEs). This underscores a 
                    renewed commitment to protecting smaller businesses.
                </p>
                <p>
                    The KPPU's influence extends across key economic sectors, with a current focus on industries such 
                    as energy, digital markets, and food security. The commission is also actively working to enhance its 
                    digital supervision systems and is considering a shift to a mandatory pre-closing merger control 
                    regime.
                </p>
                <p>
                    Understanding the role and impact of the KPPU is crucial for any business operating in Indonesia. 
                    Their actions set the precedent for market conduct, and their latest regulations can significantly 
                    impact everything from merger and acquisition strategies to internal compliance programs. We are 
                    privileged to have a dedicated section on our website to highlight the importance of their work, 
                    ensuring you are well-equipped with the knowledge to navigate this evolving regulatory environment.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- resources/views/information/venue.blade.php --}}
@extends('layouts.app')

@section('title', 'Venue - Jakarta International Competition Forum')

@section('styles')
<style>
    .info-section {
        background: #f5f5f5;
        padding: 80px 0;
    }

    .content-box {
        background: #fff;
        padding: 60px;
        border-radius: 12px;
        max-width: 1000px;
        margin: 0 auto;
    }

    .section-title {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 40px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100px;
        height: 4px;
        background: #D97706;
    }

    .venue-map {
        width: 100%;
        height: 400px;
        border-radius: 8px;
        margin-bottom: 40px;
        border: 2px solid #e5e7eb;
    }

    .text-content {
        font-size: 16px;
        line-height: 1.8;
        color: #333;
    }

    .text-content p {
        margin-bottom: 20px;
    }
</style>
@endsection

@section('content')
<section class="info-section">
    <div class="container">
        <div class="content-box">
            <h1 class="section-title">Venue</h1>
            <div class="venue-map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666666666667!2d106.8166667!3d-6.1833333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sGedung%20Dhanapala!5e0!3m2!1sen!2sid!4v1234567890"
                    width="100%" 
                    height="100%" 
                    style="border:0; border-radius: 8px;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
            <div class="text-content">
                <p>
                    We are delighted to host the event at the prestigious Gedung Dhanapala, a venue renowned for its 
                    elegant and strategic location in Central Jakarta. Located within the complex of the 
                    Ministry of Finance, Gedung Dhanapala provides a professional and accessible setting for our event.
                </p>
                <p>
                    The venue's grand ballroom is designed for both large-scale events and intimate gatherings, with a 
                    maximum capacity of 3,000 guests. The space boasts a sophisticated atmosphere with its high 
                    ceilings and stunning crystal chandeliers. Guests will also appreciate the state-of-the-art acoustic 
                    design, ensuring an exceptional audio experience for all presentations and discussions.
                </p>
                <p>
                    For your convenience, the venue offers extensive parking facilities with a capacity for up to 2,000 
                    cars, and it is easily accessible by public transportation. With its prime location and premium 
                    facilities, Gedung Dhanapala provides the perfect backdrop for a day of insightful discussion and 
                    networking.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- resources/views/information/accommodation.blade.php --}}
@extends('layouts.app')

@section('title', 'Accommodation - Jakarta International Competition Forum')

@section('styles')
<style>
    .info-section {
        background: #f5f5f5;
        padding: 80px 0;
    }

    .content-wrapper {
        max-width: 1100px;
        margin: 0 auto;
    }

    .section-title {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100px;
        height: 4px;
        background: #D97706;
    }

    .intro-text {
        font-size: 16px;
        color: #666;
        margin-bottom: 50px;
        line-height: 1.6;
    }

    .hotel-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
    }

    .hotel-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .hotel-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .hotel-image {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .hotel-content {
        padding: 25px;
    }

    .hotel-name {
        font-size: 20px;
        font-weight: 700;
        color: #000;
        margin-bottom: 12px;
    }

    .hotel-stars {
        color: #FFA500;
        margin-bottom: 15px;
        font-size: 18px;
    }

    .hotel-address {
        font-size: 14px;
        color: #666;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .hotel-distance {
        display: inline-block;
        background: #E0F2FE;
        color: #0369A1;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
    }
</style>
@endsection

@section('content')
<section class="info-section">
    <div class="container">
        <div class="content-wrapper">
            <h1 class="section-title">Accommodation</h1>
            <p class="intro-text">
                For our out-of-town guests, Gedung Dhanapala is surrounded by a variety of excellent hotel options 
                to suit every need and budget. You can find well-known establishments such as Hotel Borobudur 
                Jakarta, Oasis Amir Hotel, and Lumire Hotel & Convention Center within a short distance. These 
                hotels offer a range of amenities and are conveniently located to ensure a comfortable stay and easy 
                access to the event. We recommend booking your accommodations in advance to secure the best 
                rates and availability.
            </p>

            <div class="hotel-grid">
                <div class="hotel-card">
                    <img src="{{ asset('images/hotel-borobudur.jpg') }}" alt="Hotel Borobudur Jakarta" class="hotel-image">
                    <div class="hotel-content">
                        <h3 class="hotel-name">Hotel Borobudur Jakarta</h3>
                        <div class="hotel-stars">★★★★★</div>
                        <p class="hotel-address">
                            Jl. Lap. Banteng Selatan No.1, Ps. Baru, Jakarta Pusat 10710
                        </p>
                        <span class="hotel-distance">2.5 km near you</span>
                    </div>
                </div>

                <div class="hotel-card">
                    <img src="{{ asset('images/aryaduta-hotel.jpg') }}" alt="Aryaduta Hotel" class="hotel-image">
                    <div class="hotel-content">
                        <h3 class="hotel-name">Aryaduta Hotel</h3>
                        <div class="hotel-stars">★★★★</div>
                        <p class="hotel-address">
                            Jl. Prajurit KKO Usman dan Harun No.44-48, Jakarta Pusat 10110
                        </p>
                        <span class="hotel-distance">1.8 km near you</span>
                    </div>
                </div>

                <div class="hotel-card">
                    <img src="{{ asset('images/lumire-hotel.jpg') }}" alt="Lumire Hotel & Convention" class="hotel-image">
                    <div class="hotel-content">
                        <h3 class="hotel-name">Lumire Hotel & Convention</h3>
                        <div class="hotel-stars">★★★★</div>
                        <p class="hotel-address">
                            Jl. Senen Raya No.135, Senen, Jakarta Pusat 10410
                        </p>
                        <span class="hotel-distance">3.2 km near you</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection