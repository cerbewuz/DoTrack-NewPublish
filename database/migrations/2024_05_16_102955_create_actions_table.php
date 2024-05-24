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
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $actions = [
            "For Approval/ Signature",
            "For Comment/ Justification",
            "For Confirmation",
            "For Consolidation",
            "For Dissemination",
            "For Monitoring",
            "For Printing",
            "For Submission of Documents",
            "For Other Appropriate Action",
        ];
        foreach ($actions as $action) {
            DB::table('actions')->insert([
                'name' => $action,
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
        Schema::dropIfExists('actions');
    }
};
