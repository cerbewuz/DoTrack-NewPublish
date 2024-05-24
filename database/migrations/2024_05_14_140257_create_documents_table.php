<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->integer('document_id')->unique();
            $table->string('status')->default('outgoing'); // sender side  
            $table->string('status2')->default('incoming'); // receiver side
            $table->unsignedBigInteger('sender_user_id');
            $table->unsignedBigInteger('receiver_user_id');
            $table->string('subject');
            $table->text('description');
            $table->string('prioritization');
            $table->string('classification');
            $table->string('subclassification');
            $table->string('action');
            $table->timestamp('deadline');
            $table->string('file');
            $table->timestamps();

            // Foreign keys
            $table->foreign('sender_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('receiver_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
