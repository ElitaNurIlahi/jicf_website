@extends('layouts.app')

@section('title', 'Accommodation - JICF 2025')

@section('content')
<div style="background: #f5f5f9; padding: 80px 0; min-height: calc(100vh - 80px);">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 20px;">
        <div style="background: white; padding: 60px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
            <h1 style="font-size: 32px; font-weight: 700; color: #1a1a1a; margin-bottom: 30px; position: relative; padding-bottom: 15px;">
                Accommodation
                <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: #ff6b35;"></span>
            </h1>

            <p style="color: #333; font-size: 16px; line-height: 1.8; margin-bottom: 50px;">
                For our out-of-town guests, Gedung Dhanapala is surrounded by a variety of excellent hotel options to suit every need and budget. You can find well-known establishments such as Hotel Borobudur Jakarta, Oasis Amir Hotel, and Lumire Hotel & Convention Center within a short distance. These hotels offer a range of amenities and are conveniently located to ensure a comfortable stay and easy access to the event. We recommend booking your accommodations in advance to secure the best rates and availability.
            </p>

            <div class="hotel-grid-container" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
               
                <!-- Hotel 1 -->
                <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s;">
                    <img src="{{ asset('images/borobudur.jpg') }}" alt="Hotel Borobudur Jakarta" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 25px;">
                        <h3 style="font-size: 20px; font-weight: 700; color: #1a1a1a; margin-bottom: 10px;">Hotel Borobudur Jakarta</h3>
                        <div style="color: #FFA500; font-size: 16px; margin-bottom: 15px;">★★★★★</div>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                            Jl. Lap. Banteng Selatan No.1, Ps. Baru, Jakarta Pusat 10710
                        </p>
                        <span style="display: inline-block; background: #E8F4FD; color: #0369A1; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600;">
                            2.5 km near you
                        </span>
                    </div>
                </div>

                <!-- Hotel 2 -->
                <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s;">
                    <img src="{{ asset('images/aryaduta.jpg') }}" alt="Aryaduta Hotel" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 25px;">
                        <h3 style="font-size: 20px; font-weight: 700; color: #1a1a1a; margin-bottom: 10px;">Aryaduta Hotel</h3>
                        <div style="color: #FFA500; font-size: 16px; margin-bottom: 15px;">★★★★</div>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                            Jl. Prajurit KKO Usman dan Harun No.44-48, Jakarta Pusat 10110
                        </p>
                        <span style="display: inline-block; background: #E8F4FD; color: #0369A1; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600;">
                            1.8 km near you
                        </span>
                    </div>
                </div>

                <!-- Hotel 3 -->
                <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s;">
                    <img src="{{ asset('images/lumiere.jpg') }}" alt="Lumire Hotel & Convention" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 25px;">
                        <h3 style="font-size: 20px; font-weight: 700; color: #1a1a1a; margin-bottom: 10px;">Lumire Hotel & Convention</h3>
                        <div style="color: #FFA500; font-size: 16px; margin-bottom: 15px;">★★★★</div>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                            Jl. Senen Raya No.135, Senen, Jakarta Pusat 10410
                        </p>
                        <span style="display: inline-block; background: #E8F4FD; color: #0369A1; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600;">
                            3.2 km near you
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@media (max-width: 900px) {
    .hotel-grid-container {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

@media (max-width: 600px) {
    .hotel-grid-container {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endsection