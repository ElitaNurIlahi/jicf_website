@extends('layouts.app')

@section('title', 'Information - JICF 2025')

@section('content')
<!-- About the Host -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">About the Host</h2>
            <div class="h-1 w-32 bg-orange-500 mb-8"></div>

            <div class="mb-8">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800" alt="KPPU Building" class="w-full rounded-lg shadow-md mb-6">
            </div>

            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    In Indonesia's dynamic business landscape, the Komisi Pengawas Persaingan Usaha (KPPU) serves as the guardian
                    of fair and healthy business competition. An independent government agency, its core mandate is to enforce Law
                    No. 5 of 1999, which prohibits monopolistic practices and unfair business competition. The work of the KPPU is
                    fundamental to ensuring a level playing field where innovation thrives, consumer interests are protected, and the
                    economy can grow equitably.
                </p>

                <p>
                    This year has been especially transformative for the KPPU. With the appointment of new commissioners for the
                    2024-2029 period, the institution is embarking on a strategic agenda focused on institutional modernization and
                    proactive enforcement. Recent developments include a new regulation on the procedure and case handling of
                    partnership agreements, particularly those between large corporations and micro, small, and medium enterprises
                    (MSMEs). This underscores a renewed commitment to protecting smaller businesses.
                </p>

                <p>
                    The KPPU's influence extends across key economic sectors, with a current focus on industries such as energy,
                    digital markets, and food security. The commission is also actively working to enhance its digital supervision
                    systems and is considering a shift to a mandatory pre-closing merger control regime.
                </p>

                <p>
                    Understanding the role and impact of the KPPU is crucial for any business operating in Indonesia. Their actions
                    set the precedent for market conduct, and their latest regulations can significantly impact everything from merger
                    and acquisition strategies to internal compliance programs. We are privileged to have a dedicated section on our
                    website to highlight the importance of their work, ensuring you are well-equipped with the knowledge to navigate
                    this evolving regulatory environment.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Venue -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Venue</h2>
            <div class="h-1 w-32 bg-orange-500 mb-8"></div>

            <div class="mb-6">
                <img src="https://images.unsplash.com/photo-1582564286939-400a311013a2?w=800" alt="Gedung Dhanapala" class="w-full rounded-lg shadow-md">
            </div>

            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    We are delighted to host the event at the prestigious Gedung Dhanapala, a venue renowned for its elegant and
                    strategic location in Central Jakarta. Located within the complex of the Ministry of Finance, Gedung Dhanapala
                    provides a professional and accessible setting for our event.
                </p>

                <p>
                    The venue's grand ballroom is designed for both large-scale events and intimate gatherings, with a maximum
                    capacity of 3,000 guests. The space boasts a sophisticated atmosphere with its high ceilings and stunning crystal
                    chandeliers. Guests will also appreciate the state-of-the-art acoustic design, ensuring an exceptional audio
                    experience for all presentations and discussions.
                </p>

                <p>
                    For your convenience, the venue offers extensive parking facilities with a capacity for up to 2,000 cars, and it
                    is easily accessible by public transportation. With its prime location and premium facilities, Gedung Dhanapala
                    provides the perfect backdrop for a day of insightful discussion and networking.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Accommodation -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Accommodation</h2>
            <div class="h-1 w-32 bg-orange-500 mb-8"></div>

            <p class="text-gray-700 mb-8">
                For our out-of-town guests, Gedung Dhanapala is surrounded by a variety of excellent hotel options to suit every
                need and budget. You can find well-known establishments such as Hotel Borobudur Jakarta, Oasis Amir Hotel, and
                Lumire Hotel & Convention Center within a short distance. These hotels offer a range of amenities and are
                conveniently located to ensure a comfortable stay and easy access to the event. We recommend booking your
                accommodations in advance to secure the best rates and availability.
            </p>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Hotel 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=400" alt="Hotel Borobudur Jakarta" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Hotel Borobudur Jakarta</h3>
                        <div class="flex text-yellow-400 mb-3">
                            <span>★★★★★</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">Jl. Lap. Banteng Selatan No.1, Ps. Baru, Jakarta Pusat 10710</p>
                        <div class="bg-blue-50 text-blue-700 text-sm px-3 py-1 rounded inline-block">
                            2.5 km near from you
                        </div>
                    </div>
                </div>

                <!-- Hotel 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=400" alt="Aryaduta Hotel" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Aryaduta Hotel</h3>
                        <div class="flex text-yellow-400 mb-3">
                            <span>★★★★</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">Jl. Prajurit KKO Usman dan Harun No.44-48, Jakarta Pusat 10110</p>
                        <div class="bg-blue-50 text-blue-700 text-sm px-3 py-1 rounded inline-block">
                            1.8 km near from you
                        </div>
                    </div>
                </div>

                <!-- Hotel 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?w=400" alt="Lumire Hotel" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Lumire Hotel & Convention</h3>
                        <div class="flex text-yellow-400 mb-3">
                            <span>★★★★</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">Jl. Senen Raya No.135, Senen, Jakarta Pusat 10410</p>
                        <div class="bg-blue-50 text-blue-700 text-sm px-3 py-1 rounded inline-block">
                            3.2 km near from you
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Activity -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Social Activity</h2>
            <div class="h-1 w-32 bg-orange-500 mb-8"></div>

            <div class="mb-6">
                <img src="https://images.unsplash.com/photo-1555664424-778a1e5e1b48?w=800" alt="Jakarta City" class="w-full rounded-lg shadow-md">
            </div>

            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Beyond the conference hall, Jakarta offers a vibrant scene for networking and relaxation. For those looking to
                    connect with fellow professionals, the city's nightlife and culinary scene provide the perfect backdrop. Consider
                    visiting Skye, a popular rooftop lounge with breathtaking city views, or the bustling culinary area of Pecenongan
                    for a taste of authentic local street food.
                </p>

                <p>
                    For a more relaxed social gathering, the city's unique cafés and public spaces are ideal. Pos Bloc Jakarta, a
                    creatively repurposed colonial post office, and the serene Taman Menteng offer a unique atmosphere for informal
                    chats. Meanwhile, those with a passion for arts and culture might enjoy exploring the many galleries and performance
                    spaces around Taman Ismail Marzuki.
                </p>

                <p>
                    Jakarta's diverse offerings provide countless opportunities for you to build new relationships and strengthen
                    existing ones. We encourage you to explore these unique spots and make the most of your time in the city.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Jakarta -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">About Jakarta</h2>
            <div class="h-1 w-32 bg-orange-500 mb-8"></div>

            <div class="mb-6">
                <img src="https://images.unsplash.com/photo-1568666865436-eb919623d115?w=800" alt="Jakarta Skyline" class="w-full rounded-lg shadow-md">
            </div>

            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>
                    Jakarta, the capital of Indonesia, is a bustling metropolis and the nation's center of government, business, and
                    culture. Home to more than 10 million people, it is a melting pot of traditions from across the archipelago,
                    blending heritage with modern urban life.
                </p>

                <p>
                    As Southeast Asia's dynamic hub, Jakarta hosts the headquarters of major corporations, financial institutions, and
                    government bodies, while also serving as a gateway for international trade and diplomacy. Iconic landmarks such as
                    the National Monument (Monas), Kota Tua, and the modern skyline showcase its balance of history and progress.
                </p>

                <p>
                    With its diverse culture, vibrant economy, and strategic role, Jakarta reflects Indonesia's spirit of resilience,
                    innovation, and growth.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
