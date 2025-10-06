@extends('layouts.app')

@section('title', 'Contact - JICF 2025')

@section('content')
<section style="background: #f5f5f9; padding: 80px 0; min-height: calc(100vh - 80px);">
    <div style="max-width: 1100px; margin: 0 auto; padding: 0 20px;">
        <div style="background: white; padding: 60px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
            
            <h1 style="font-size: 32px; font-weight: 700; color: #1a1a1a; margin-bottom: 8px;">Contact</h1>
            <div style="height: 3px; width: 60px; background: #ff6b35; margin-bottom: 35px;"></div>

            <p style="color: #333; font-size: 16px; line-height: 1.8; margin-bottom: 50px;">
                For all inquiries regarding THE THIRD Jakarta International Competition Forum, please use the official international cooperation email at <a href="mailto:jicf@kppu.go.id" style="color: #0369A1; text-decoration: none; font-weight: 600;">jicf@kppu.go.id</a>.
            </p>

            <!-- Contact Cards Grid -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-bottom: 60px;">
                
                <!-- Card 1 - Partnership -->
                <div class="contact-card" style="background: white; border: 2px solid #E0F2FE; border-radius: 12px; padding: 30px; transition: all 0.3s ease;">
                    <h3 style="font-size: 22px; font-weight: 700; color: #0369A1; margin-bottom: 20px;">Partnership:</h3>
                    <h4 style="font-size: 16px; font-weight: 600; color: #1a1a1a; margin-bottom: 8px;">Deswin Nur</h4>
                    <p style="color: #666; font-size: 14px; margin-bottom: 15px; line-height: 1.6;">Head of Bureau for Public Relations and Cooperation</p>
                    <a href="mailto:deswin.nur@gmail.com" style="color: #0369A1; font-size: 14px; text-decoration: none; transition: color 0.3s;">deswin.nur@gmail.com</a>
                </div>

                <!-- Card 2 - Program & Speaker -->
                <div class="contact-card" style="background: white; border: 2px solid #E0F2FE; border-radius: 12px; padding: 30px; transition: all 0.3s ease;">
                    <h3 style="font-size: 22px; font-weight: 700; color: #0369A1; margin-bottom: 20px;">Program & Speaker:</h3>
                    <h4 style="font-size: 16px; font-weight: 600; color: #1a1a1a; margin-bottom: 8px;">Diana Yoseva</h4>
                    <p style="color: #666; font-size: 14px; margin-bottom: 15px; line-height: 1.6;">Senior Investigator</p>
                    <a href="mailto:didiyoseva@gmail.com" style="color: #0369A1; font-size: 14px; text-decoration: none; transition: color 0.3s;">didiyoseva@gmail.com</a>
                </div>

                <!-- Card 3 - Operational & Media -->
                <div class="contact-card" style="background: white; border: 2px solid #E0F2FE; border-radius: 12px; padding: 30px; transition: all 0.3s ease;">
                    <h3 style="font-size: 22px; font-weight: 700; color: #0369A1; margin-bottom: 20px;">Operational & Media:</h3>
                    <h4 style="font-size: 16px; font-weight: 600; color: #1a1a1a; margin-bottom: 8px;">Intan Putri</h4>
                    <p style="color: #666; font-size: 14px; margin-bottom: 15px; line-height: 1.6;">Head of Public Relations Division</p>
                    <a href="mailto:birohumaskerma@kppu.go.id" style="color: #0369A1; font-size: 14px; text-decoration: none; transition: color 0.3s;">birohumaskerma@kppu.go.id</a>
                </div>

            </div>

            <!-- Get Social Section -->
            <div style="text-align: center; padding-top: 40px; border-top: 1px solid #e5e7eb;">
                <h3 style="font-size: 24px; font-weight: 700; color: #1a1a1a; margin-bottom: 30px;">Get Social</h3>
                <div style="display: flex; justify-content: center; gap: 25px; flex-wrap: wrap;">
                    <a href="#" class="social-icon" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; background: #FFA500; border-radius: 50%; transition: all 0.3s ease; text-decoration: none;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; background: #FFA500; border-radius: 50%; transition: all 0.3s ease; text-decoration: none;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; background: #FFA500; border-radius: 50%; transition: all 0.3s ease; text-decoration: none;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; background: #FFA500; border-radius: 50%; transition: all 0.3s ease; text-decoration: none;">
                        <svg width="24" height="24" viewBox="0 0 448 512" fill="white">
                            <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(3, 105, 161, 0.15);
    border-color: #0369A1;
}

.contact-card a:hover {
    color: #025a8a;
    text-decoration: underline;
}

.social-icon:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(255, 165, 0, 0.4);
}

@media (max-width: 900px) {
    div[style*="grid-template-columns: repeat(3, 1fr)"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

@media (max-width: 600px) {
    div[style*="grid-template-columns: repeat(3, 1fr)"] {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endsection