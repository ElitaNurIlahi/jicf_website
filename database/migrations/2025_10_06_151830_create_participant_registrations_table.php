<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('participant_registrations', function (Blueprint $table) {
            
            // 1. Ganti Kolom 'approved' yang sudah ada menjadi kolom 'status' (enum)
            // KITA HAPUS DULU KOLOM 'approved' YANG SUDAH ADA
            $table->dropColumn('approved');

            // KEMUDIAN TAMBAHKAN KOLOM STATUS BARU
            // Gunakan after('user_id') atau setelah kolom yang Anda inginkan
            $table->enum('status', ['pending', 'approved', 'rejected'])
                  ->default('pending')
                  ->after('user_id'); 
            
            // 2. Tambahkan Kolom Baru
            $table->text('rejection_reason')->nullable()->after('status');
            
            // Kolom QR_CODE TIDAK PERLU DITAMBAHKAN KARENA SUDAH ADA di migration awal.

            $table->timestamp('qr_sent_at')->nullable()->after('qr_code');
            $table->timestamp('approved_at')->nullable()->after('qr_sent_at');
            
            // 3. Foreign Key ke User (Approved_by)
            // Pastikan Anda sudah punya tabel 'users'
            $table->foreignId('approved_by')
                  ->nullable()
                  ->constrained('users') 
                  ->after('approved_at');
        });
    }

    public function down(): void
    {
        Schema::table('participant_registrations', function (Blueprint $table) {
            
            // 1. Hapus Foreign Key dulu
            $table->dropConstrainedForeignId('approved_by');
            
            // 2. Hapus Kolom yang Ditambahkan
            $table->dropColumn(['status', 'rejection_reason', 'qr_sent_at', 'approved_at']);

            // 3. Kembalikan Kolom 'approved' asli
            $table->boolean('approved')->default(false);
        });
    }
};