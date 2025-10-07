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
                <div class="hotel-card" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: all 0.3s ease; cursor: pointer;">
                    <img src="{{ asset('images/borobudur.jpg') }}" alt="Hotel Borobudur Jakarta" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 25px;">
                        <h3 style="font-size: 20px; font-weight: 700; color: #1a1a1a; margin-bottom: 10px;">Hotel Borobudur Jakarta</h3>
                        <div style="color: #FFA500; font-size: 16px; margin-bottom: 15px;">★★★★★</div>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                            Jl. Lap. Banteng Selatan No.1, Ps. Baru, Jakarta Pusat 10710
                        </p>
                        <span style="display: inline-block; background: #E8F4FD; color: #0369A1; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600; margin-bottom: 15px;">
                            2.5 km near you
                        </span>
                        <button onclick="openModal('hotel1')" style="display: block; width: 100%; background: #0369A1; color: white; padding: 10px; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; transition: background 0.3s;">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>

                <!-- Hotel 2 -->
                <div class="hotel-card" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: all 0.3s ease; cursor: pointer;">
                    <img src="{{ asset('images/aryaduta.jpg') }}" alt="Aryaduta Hotel" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 25px;">
                        <h3 style="font-size: 20px; font-weight: 700; color: #1a1a1a; margin-bottom: 10px;">Aryaduta Hotel</h3>
                        <div style="color: #FFA500; font-size: 16px; margin-bottom: 15px;">★★★★</div>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                            Jl. Prajurit KKO Usman dan Harun No.44-48, Jakarta Pusat 10110
                        </p>
                        <span style="display: inline-block; background: #E8F4FD; color: #0369A1; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600; margin-bottom: 15px;">
                            1.8 km near you
                        </span>
                        <button onclick="openModal('hotel2')" style="display: block; width: 100%; background: #0369A1; color: white; padding: 10px; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; transition: background 0.3s;">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>

                <!-- Hotel 3 -->
                <div class="hotel-card" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: all 0.3s ease; cursor: pointer;">
                    <img src="{{ asset('images/lumiere.jpg') }}" alt="Lumire Hotel & Convention" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 25px;">
                        <h3 style="font-size: 20px; font-weight: 700; color: #1a1a1a; margin-bottom: 10px;">Lumire Hotel & Convention</h3>
                        <div style="color: #FFA500; font-size: 16px; margin-bottom: 15px;">★★★★</div>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                            Jl. Senen Raya No.135, Senen, Jakarta Pusat 10410
                        </p>
                        <span style="display: inline-block; background: #E8F4FD; color: #0369A1; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600; margin-bottom: 15px;">
                            3.2 km near you
                        </span>
                        <button onclick="openModal('hotel3')" style="display: block; width: 100%; background: #0369A1; color: white; padding: 10px; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; transition: background 0.3s;">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="hotelModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 30px; border-radius: 12px; max-width: 800px; width: 90%; max-height: 90vh; overflow-y: auto; position: relative;">
        <button onclick="closeModal()" style="position: absolute; top: 15px; right: 15px; background: none; border: none; font-size: 28px; cursor: pointer; color: #666;">&times;</button>
        <div id="modalContent"></div>
    </div>
</div>

<style>
.hotel-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.hotel-card button:hover {
    background: #025a8a !important;
}

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

<script>
const hotelData = {
    hotel1: {
        name: 'Hotel Borobudur Jakarta',
        stars: 5,
        address: 'Jl. Lap. Banteng Selatan No.1, Ps. Baru, Jakarta Pusat 10710',
        map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666031550679!2d106.8301576!3d-6.1761393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5cc097e35db%3A0x7302b729335a095b!2sHotel%20Borobudur%20Jakarta!5e0!3m2!1sen!2sid!4v1686405845813!5m2!1sen!2sid'
    },
    hotel2: {
        name: 'Aryaduta Menteng',
        stars: 5,
        address: 'Jl. Prajurit KKO Usman dan Harun No.44-48, Jakarta Pusat 10110',
        map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7234567890!2d106.8349063!3d-6.1815392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f431511b4705%3A0x5e50ddbbad3cd0d4!2sAryaduta%20Menteng!5e0!3m2!1sen!2sid!4v1686405923413!5m2!1sen!2sid'
    },
    hotel3: {
        name: 'Lumire Hotel & Convention',
        stars: 4,
        address: 'Jl. Senen Raya No.135, Senen, Jakarta Pusat 10410',
        map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6234567890!2d106.8426763!3d-6.1741593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f43551ca9263%3A0x4949ba549b582667!2sLumire%20Hotel%20%26%20Convention!5e0!3m2!1sen!2sid!4v1686405978413!5m2!1sen!2sid'
    }
};


function openModal(hotelId) {
    const hotel = hotelData[hotelId];
    const stars = '★'.repeat(hotel.stars) + '☆'.repeat(5 - hotel.stars);
    
    document.getElementById('modalContent').innerHTML = `
        <h2 style="font-size: 28px; font-weight: 700; margin-bottom: 15px; color: #1a1a1a;">${hotel.name}</h2>
        <div style="color: #FFA500; font-size: 20px; margin-bottom: 15px;">${stars}</div>
        <p style="color: #666; font-size: 16px; margin-bottom: 25px;">${hotel.address}</p>
        <iframe src="${hotel.map}" width="100%" height="400" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
    `;
    
    document.getElementById('hotelModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('hotelModal').style.display = 'none';
}

window.onclick = function(event) {
    const modal = document.getElementById('hotelModal');
    if (event.target === modal) {
        closeModal();
    }
}
</script>
@endsection