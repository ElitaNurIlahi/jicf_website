@extends('layouts.app')

@section('title', 'About the Host - JICF 2025')

@section('content')
<div style="background: #f5f5f9; padding: 80px 0; min-height: calc(100vh - 80px);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
        <div style="background: white; padding: 60px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
            <h1 style="font-size: 32px; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; position: relative; padding-bottom: 15px;">
                About the Host
                <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: #ff6b35;"></span>
            </h1>

            <img src="{{ asset('images/kppu-building.jpg') }}" 
                 alt="KPPU Building" 
                 style="width: 100%; max-width: 700px; height: auto; margin: 40px auto; display: block; border-radius: 8px;">

            <div style="color: #333; font-size: 16px; line-height: 1.8;">
                <p style="margin-bottom: 20px;">
                    In Indonesia's dynamic business landscape, the Komisi Pengawas Persaingan Usaha (KPPU) serves as the guardian of fair and healthy business competition. An independent government agency, its core mandate is to enforce Law No. 5 of 1999, which prohibits monopolistic practices and unfair business competition. The work of the KPPU is fundamental to ensuring a level playing field where innovation thrives, consumer interests are protected, and the economy can grow equitably.
                </p>

                <p style="margin-bottom: 20px;">
                    This year has been especially transformative for the KPPU. With the appointment of new commissioners for the 2024-2029 period, the institution is embarking on a strategic agenda focused on institutional modernization and proactive enforcement. Recent developments include a new regulation on the procedure and case handling of partnership agreements, particularly those between large corporations and micro, small, and medium enterprises (MSMEs). This underscores a renewed commitment to protecting smaller businesses.
                </p>

                <p style="margin-bottom: 20px;">
                    The KPPU's influence extends across key economic sectors, with a current focus on industries such as energy, digital markets, and food security. The commission is also actively working to enhance its digital supervision systems and is considering a shift to a mandatory pre-closing merger control regime.
                </p>

                <p style="margin-bottom: 0;">
                    Understanding the role and impact of the KPPU is crucial for any business operating in Indonesia. Their actions set the precedent for market conduct, and their latest regulations can significantly impact everything from merger and acquisition strategies to internal compliance programs. We are privileged to have a dedicated section on our website to highlight the importance of their work, ensuring you are well-equipped with the knowledge to navigate this evolving regulatory environment.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection