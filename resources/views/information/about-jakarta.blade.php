@extends('layouts.app')

@section('title', 'About Jakarta - JICF 2025')

@section('content')
<div style="background: #f5f5f9; padding: 80px 0; min-height: calc(100vh - 80px);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
        <div style="background: white; padding: 60px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
            <h1 style="font-size: 32px; font-weight: 700; color: #1a1a1a; margin-bottom: 40px; position: relative; padding-bottom: 15px;">
                About Jakarta
                <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: #ff6b35;"></span>
            </h1>

            <img src="{{ asset('images/jakarta-city.jpg') }}" 
                 alt="Jakarta City" 
                 style="width: 100%; max-width: 800px; height: auto; margin: 0 auto 40px; display: block; border-radius: 8px;">

            <div style="color: #333; font-size: 16px; line-height: 1.8;">
                <p style="margin-bottom: 20px;">
                    Jakarta, the capital of Indonesia, is a bustling metropolis and the nation's center of government, business, and culture. Home to more than 10 million people, it is a melting pot of traditions from across the archipelago, blending heritage with modern urban life.
                </p>

                <p style="margin-bottom: 20px;">
                    As Southeast Asia's dynamic hub, Jakarta hosts the headquarters of major corporations, financial institutions, and government bodies, while also serving as a gateway for international trade and diplomacy. Iconic landmarks such as the National Monument (Monas), Kota Tua, and the modern skyline showcase its balance of history and progress.
                </p>

                <p style="margin-bottom: 0;">
                    With its diverse culture, vibrant economy, and strategic role, Jakarta reflects Indonesia's spirit of resilience, innovation, and growth.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection