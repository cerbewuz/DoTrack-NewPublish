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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id')->unique();
            $table->string('department_name');
            $table->timestamps();
           }); 
            $department_name = [
                "IT Department",
                "Ed-Science Department",
                "Ed-English Department",
                "Ed-Filipino Department",
                "Ed-Math Department",
                "Accounting Department",
                "Records Department",
                "Administrative Department",
                "Business Department",
                "Humanities Department",
                "Social Science Department",
                "Sports Department",
                "Arts Department",
                "Library Department",
                "Regular Staff",
            ];
            foreach ($department_name as $department) {
                do {
                    $department_id = rand(10000, 99999);
                } while(DB::table('departments')->where('department_id', $department_id)->exists());
            
                DB::table('departments')->insert([
                    'department_id' => $department_id,
                    'department_name' => $department,
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
        Schema::dropIfExists('departments');
    }
};
