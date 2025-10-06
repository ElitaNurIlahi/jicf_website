<?php

// database/seeders/DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SliderSeeder::class,
            ContactSeeder::class,
            AgendaSeeder::class,
        ]);
    }
}

// database/seeders/SliderSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        $sliders = [
            [
                'image' => 'sliders/slide1.jpg',
                'title' => 'The Third Jakarta International Competition Forum',
                'description' => 'Legal Reform, International Alignment & Enforcement Evolution',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'image' => 'sliders/slide2.jpg',
                'title' => 'Building a Fair Business Environment',
                'description' => 'Join us in discussing new directions for competition law enforcement',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'image' => 'sliders/slide3.jpg',
                'title' => 'Innovation and Competition Policy',
                'description' => 'Exploring the digital economy era challenges and opportunities',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}

// database/seeders/ContactSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        $contacts = [
            [
                'category' => 'partnership',
                'name' => 'Deswin Nur',
                'position' => 'Head of Bureau for Public Relations and Cooperation',
                'email' => 'deswin.nur@gmail.com',
                'order' => 1,
            ],
            [
                'category' => 'program_speaker',
                'name' => 'Diana Yoseva',
                'position' => 'Senior Investigator',
                'email' => 'didiyoseva@gmail.com',
                'order' => 1,
            ],
            [
                'category' => 'operational_media',
                'name' => 'Intan Putri',
                'position' => 'Head of Public Relations Division',
                'email' => 'birohumaskerjasama@kppu.go.id',
                'order' => 1,
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}

// database/seeders/AgendaSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agenda;
use Carbon\Carbon;

class AgendaSeeder extends Seeder
{
    public function run(): void
    {
        $agendas = [
            [
                'date' => Carbon::now()->addDays(30),
                'start_time' => '08:00:00',
                'end_time' => '09:00:00',
                'title' => 'Registration & Welcome Coffee',
                'description' => 'Participants registration and networking session',
                'speaker' => null,
                'location' => 'Gedung Dhanapala - Main Lobby',
            ],
            [
                'date' => Carbon::now()->addDays(30),
                'start_time' => '09:00:00',
                'end_time' => '09:30:00',
                'title' => 'Opening Ceremony',
                'description' => 'Welcome remarks and forum introduction',
                'speaker' => 'KPPU Chairman',
                'location' => 'Gedung Dhanapala - Grand Ballroom',
            ],
            [
                'date' => Carbon::now()->addDays(30),
                'start_time' => '09:30:00',
                'end_time' => '11:00:00',
                'title' => 'Keynote Speech: Legal Reform in Competition Law',
                'description' => 'Exploring the evolution of competition law enforcement in the digital economy',
                'speaker' => 'International Competition Expert',
                'location' => 'Gedung Dhanapala - Grand Ballroom',
            ],
            [
                'date' => Carbon::now()->addDays(30),
                'start_time' => '11:00:00',
                'end_time' => '11:30:00',
                'title' => 'Coffee Break',
                'description' => 'Networking and refreshments',
                'speaker' => null,
                'location' => 'Gedung Dhanapala - Foyer',
            ],
            [
                'date' => Carbon::now()->addDays(30),
                'start_time' => '11:30:00',
                'end_time' => '13:00:00',
                'title' => 'Panel Discussion: International Alignment & Enforcement',
                'description' => 'Discussion on cross-jurisdictional collaboration and enforcement strategies',
                'speaker' => 'Panel of International Experts',
                'location' => 'Gedung Dhanapala - Grand Ballroom',
            ],
            [
                'date' => Carbon::now()->addDays(30),
                'start_time' => '13:00:00',
                'end_time' => '14:30:00',
                'title' => 'Lunch Break',
                'description' => 'Buffet lunch and networking',
                'speaker' => null,
                'location' => 'Gedung Dhanapala - Dining Hall',
            ],
            [
                'date' => Carbon::now()->addDays(30),
                'start_time' => '14:30:00',
                'end_time' => '16:00:00',
                'title' => 'Breakout Sessions: SME Compliance & Digital Markets',
                'description' => 'Parallel sessions on SME-friendly compliance and digital market regulation',
                'speaker' => 'Industry Leaders & Regulators',
                'location' => 'Gedung Dhanapala - Meeting Rooms',
            ],
            [
                'date' => Carbon::now()->addDays(30),
                'start_time' => '16:00:00',
                'end_time' => '16:30:00',
                'title' => 'Closing Remarks',
                'description' => 'Summary and future outlook',
                'speaker' => 'KPPU Representatives',
                'location' => 'Gedung Dhanapala - Grand Ballroom',
            ],
        ];

        foreach ($agendas as $agenda) {
            Agenda::create($agenda);
        }
    }
}