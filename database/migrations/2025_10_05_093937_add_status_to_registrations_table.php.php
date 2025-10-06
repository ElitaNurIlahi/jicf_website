<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->after('consent');
            $table->text('rejection_reason')->nullable()->after('status');
            $table->string('qr_code')->nullable()->after('registration_number');
            $table->timestamp('qr_sent_at')->nullable()->after('qr_code');
            $table->timestamp('approved_at')->nullable()->after('qr_sent_at');
            $table->foreignId('approved_by')->nullable()->constrained('admins')->after('approved_at');
        });
    }

    public function down()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn(['status', 'rejection_reason', 'qr_code', 'qr_sent_at', 'approved_at', 'approved_by']);
        });
    }
};
