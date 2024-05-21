<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subclassifications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $subclassifications = [
            "Accomplished Reports",
            "Acknowledgement Receipt for Equipment(ARE)",
            "Action plan/Work Plan/Financial Plan",
            "Administrative Cases",
            "Advice",
            "Affidavits",
            "Allotment Files",
            "Annual Budgets",
            "Annual Statement of Accounts Payable",
            "Applications(Employment, Leave, Relief, Retirements/Resignation)",
            "Attendance Monitoring Sheets",
            "Authorizations",
            "Bonding Files",
            "Budget Estimates",
            "Budget Sheet Analysis",
            "Certifications",
            "Certifications of Funds Availability",
            "Complaints/Protest",
            "Contracts",
            "Deeds"
        ];

        foreach ($subclassifications as $subclassification) {
            DB::table('subclassifications')->insert([
                'name' => $subclassification,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subclassifications');
    }
};
