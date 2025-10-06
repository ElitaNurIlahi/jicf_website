@extends('layouts.app')

@section('title', 'Social Activity - JICF 2025')

@section('content')
<div style="background: #f5f5f9; padding: 80px 0; min-height: calc(100vh - 80px);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
        <div style="background: white; padding: 60px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
            <h1 style="font-size: 32px; font-weight: 700; color: #1a1a1a; margin-bottom: 40px; position: relative; padding-bottom: 15px;">
                Social Activity
                <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: #ff6b35;"></span>
            </h1>

            <img src="{{ asset('images/social.png') }}" 
                 alt="Jakarta Social Activity" 
                 style="width: 100%; max-width: 500px; height: auto; margin: 0 auto 40px; display: block; border-radius: 8px;">

            <div style="color: #333; font-size: 16px; line-height: 1.8;">
                <p style="margin-bottom: 20px;">
                    Beyond the conference hall, Jakarta offers a vibrant scene for networking and relaxation. For those looking to connect with fellow professionals, the city's nightlife and culinary scene provide the perfect backdrop. Consider visiting Skye, a popular rooftop lounge with breathtaking city views, or the bustling culinary area of Pecenongan for a taste of authentic local street food.
                </p>

                <p style="margin-bottom: 20px;">
                    For a more relaxed social gathering, the city's unique cafés and public spaces are ideal. Pos Bloc Jakarta, a creatively repurposed colonial post office, and the serene Taman Menteng offer a unique atmosphere for informal chats. Meanwhile, those with a passion for arts and culture might enjoy exploring the many galleries and performance spaces around Taman Ismail Marzuki.
                </p>

                <p style="margin-bottom: 0;">
                    Jakarta's diverse offerings provide countless opportunities for you to build new relationships and strengthen existing ones. We encourage you to explore these unique spots and make the most of your time in the city.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
