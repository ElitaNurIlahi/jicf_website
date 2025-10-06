@extends('layouts.app')

@section('title', 'Venue - JICF 2025')

@section('content')
<div style="background: #f5f5f9; padding: 80px 0; min-height: calc(100vh - 80px);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
        <div style="background: white; padding: 60px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
            <h1 style="font-size: 32px; font-weight: 700; color: #1a1a1a; margin-bottom: 40px; position: relative; padding-bottom: 15px;">
                Venue
                <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: #ff6b35;"></span>
            </h1>

            <div style="width: 100%; height: 450px; margin-bottom: 40px; border-radius: 8px; overflow: hidden;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7273346977!2d106.83634121476878!3d-6.172801095530688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5cb019d1a5b%3A0x7176ab25b6de0b31!2sGedung%20Dhanapala!5e0!3m2!1sen!2sid!4v1623345678901!5m2!1sen!2sid"
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>

            <div style="color: #333; font-size: 16px; line-height: 1.8;">
                <p style="margin-bottom: 20px;">
                    We are delighted to host the event at the prestigious Gedung Dhanapala, a venue renowned for its elegant and strategic location in Central Jakarta. Located within the complex of the Ministry of Finance, Gedung Dhanapala provides a professional and accessible setting for our event.
                </p>

                <p style="margin-bottom: 20px;">
                    The venue's grand ballroom is designed for both large-scale events and intimate gatherings, with a maximum capacity of 3,000 guests. The space boasts a sophisticated atmosphere with its high ceilings and stunning crystal chandeliers. Guests will also appreciate the state-of-the-art acoustic design, ensuring an exceptional audio experience for all presentations and discussions.
                </p>

                <p style="margin-bottom: 0;">
                    For your convenience, the venue offers extensive parking facilities with a capacity for up to 2,000 cars, and it is easily accessible by public transportation. With its prime location at Jalan Lapangan Banteng Timur No.2-4, Jakarta Pusat, and premium facilities, Gedung Dhanapala provides the perfect backdrop for a day of insightful discussion and networking.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
