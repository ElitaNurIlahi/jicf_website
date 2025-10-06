@extends('layouts.app')

@section('title', 'Agenda - JICF 2025')

{{-- ASUMSI: Alpine.js sudah terpasang di layouts/app.blade.php. Jika belum, tambahkan: --}}
{{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

@section('styles')
<style>
    /* Mengatur font agar terlihat lebih "resmi" seperti di gambar */
    body {
        /* Ganti dengan font yang lebih sesuai jika diperlukan, misalnya Inter, atau font sans-serif default */
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }
    .agenda-title {
        letter-spacing: 0.15em; /* Spasi antar huruf pada judul */
    }
    /* Style untuk border luar tebal, menyesuaikan dengan gambar UX */
    .agenda-container {
        /* Border keliling tebal, shadow ringan untuk memisahkan dari background */
        border: 1px solid #d1d5db; /* Border tipis di sekeliling */
        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
        background-color: white;
    }
    /* Class untuk mengubah border elemen pertama dan terakhir agar terlihat menyatu */
    .agenda-item-first {
        border-top: none !important;
    }
    .agenda-item-last {
        border-bottom: none !important;
    }
</style>
@endsection

@section('content')

<div class="pt-10 pb-20 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        
        {{-- Judul Besar --}}
        <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-12 uppercase agenda-title tracking-widest">
            CONFERENCE AGENDA
        </h1>

        {{-- Container untuk semua item agenda dengan border keliling --}}
        <div class="agenda-container border-2 border-gray-300 rounded-lg overflow-hidden">
            
            {{-- Data Agenda dalam bentuk Array --}}
            @php
                $agenda_data = [
                    ['time' => '08.15 - 09.00', 'title' => 'Registration and Coffee', 'description' => null, 'type' => 'break'],
                    ['time' => '09.00 - 09.30', 'title' => 'Opening Sessions', 'description' => 'MC welcome, Modern Dance, Host Remark (Chairperson of KPPU), Partner Remark (Minister of MSME)', 'type' => 'session'],
                    ['time' => '09.30 - 10.00', 'title' => 'Honorary Address (TBC)', 'description' => 'H.E. President of the Republic of Indonesia, Prabowo Subianto (tbc)', 'type' => 'session'],
                    ['time' => '10.00 - 10.30', 'title' => 'Keynote Speech', 'description' => '"Shaping the Digital Frontier: BRICS-Led Competition Policy in the Age of AI" Maxim Shaskolsky (Head of FAS Russia, BRICS CLPC, tbc)', 'type' => 'session'],
                    ['time' => '10.30 - 11.30', 'title' => 'Panel 1 — Digital Dominance: Platform Power and Enforcement', 'description' => 'Interoperability, app store remedies, data portability, market investigations, evidence integrity, consumer protection.', 'type' => 'panel'],
                    ['time' => '12.00 - 13.00', 'title' => 'Networking Lunch & Exhibition', 'description' => 'Foyer exhibitions & booth interactions', 'type' => 'break'],
                    ['time' => '13.00 - 14.00', 'title' => 'Panel 2 — Merger Dynamics & Market Transparency', 'description' => 'Ex-ante filings vs ex-post scrutiny, data access remedies, "killer acquisitions", transparency post-merger audits.', 'type' => 'panel'],
                    ['time' => '14.00 - 15.00', 'title' => 'Panel 3 — Unfair Contract Terms for MSMEs', 'description' => 'MSME partnership supervision, abuse of dominance, consumer law, evidence playbook.', 'type' => 'panel'],
                    ['time' => '15.00 - 16.00', 'title' => 'Panel 4 — Ensuring Fair Public Procurement at the National and Regional Level', 'description' => [
                        'Bid-rigging detection, exclusion/integrity lists, e-catalog design, MSME access, data-sharing (LKPP/KPPU/KPK/regions).',
                        'Speakers (tbc): Governor of DKI or West Java; KPK; Head of LKPP; Competition. Moderator (tbc): World Bank. Q&A (15\').'
                    ], 'type' => 'panel'],
                    ['time' => '16.00 - 16.15', 'title' => 'Closing Remarks — Conference Summary & Next Steps', 'description' => 'Vice Chairperson of KPPU', 'type' => 'session'],
                    ['time' => '19.00 - 21.00', 'title' => 'Dinner Reception (By Invitation)', 'description' => 'Host: KPPU', 'type' => 'break'],
                ];
                $total_items = count($agenda_data);
            @endphp
            
            {{-- Loop untuk menampilkan item agenda --}}
            @foreach ($agenda_data as $index => $item)
                @php
                    $is_panel_or_session = in_array($item['type'], ['session', 'panel']);
                    $has_description = !empty($item['description']);
                    $is_collapsible = $has_description && $is_panel_or_session; // Hanya panel/session yang bisa didropdown
                    
                    // Style border untuk item
                    $border_style = 'border-b border-gray-300';
                    if ($index === 0) {
                        $border_style = 'border-b border-gray-300 agenda-item-first'; // Item pertama tanpa border-top
                    } elseif ($index === $total_items - 1) {
                        $border_style = 'agenda-item-last'; // Item terakhir tanpa border-bottom
                    }
                    
                    // Tambahkan border yang lebih tebal untuk memisahkan sesi/panel utama dari break/lunch
                    if (($index > 0 && $agenda_data[$index-1]['type'] === 'break' && $item['type'] !== 'break') || ($index === 0 && $item['type'] !== 'break')) {
                        $border_style = 'border-t-4 border-gray-100 ' . $border_style;
                    }
                    if ($item['type'] === 'break' && $index < $total_items - 1 && $agenda_data[$index+1]['type'] !== 'break') {
                        $border_style = 'border-b-4 border-gray-100 ' . $border_style;
                    }

                    // Tentukan latar belakang untuk item yang tidak bisa di-collapse (Break/Lunch/Regist)
                    $bg_style = $is_collapsible ? 'bg-white' : 'bg-gray-50';
                @endphp

                <div x-data="{ open: false }" class="{{ $border_style }} {{ $bg_style }} hover:bg-gray-50 transition-colors duration-200">
                    {{-- HEADER ITEM AGENDA (Waktu dan Judul) --}}
                    <div 
                        @click="{{ $is_collapsible ? 'open = !open' : '' }}"
                        class="flex items-start py-4 px-6 cursor-pointer {{ $is_collapsible ? 'hover:bg-gray-100' : 'cursor-default' }}"
                    >
                        {{-- Waktu --}}
                        <div class="w-1/4 pr-4 flex-shrink-0">
                            <p class="text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $item['time'] }}</p>
                        </div>
                        
                        {{-- Judul dan Icon Dropdown --}}
                        <div class="w-3/4 flex justify-between items-start">
                            <h2 class="text-sm font-extrabold text-gray-900 leading-snug">{{ $item['title'] }}</h2>
                            
                            @if ($is_collapsible)
                                {{-- Icon Panah Dropdown --}}
                                <svg x-bind:class="{ 'rotate-180': open }" class="w-5 h-5 ml-2 text-gray-500 transition-transform duration-300 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            @endif
                        </div>
                    </div>

                    {{-- DETAIL / DROPDOWN CONTENT --}}
                    @if ($has_description)
                        <div x-show="open" x-collapse.duration.300ms>
                            <div class="pl-6 pr-6 pb-4 pt-1 ml-[25%] border-l-2 border-gray-200">
                                @if (is_array($item['description']))
                                    <div class="text-gray-700 text-xs mt-1 space-y-1">
                                        @foreach ($item['description'] as $line)
                                            <p>{{ $line }}</p>
                                        @endforeach
                                    </div>
                                @else
                                    <p class="text-gray-700 text-xs mt-1">{{ $item['description'] }}</p>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach

        </div> {{-- End agenda-container --}}
    </div>
</div>
@endsection