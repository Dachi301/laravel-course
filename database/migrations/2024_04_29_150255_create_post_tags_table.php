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
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('post_post_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Post::class, 'post_listing_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\PostTag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tags');
        Schema::dropIfExists('post_post_tag'); // Adjust the table name here as well
    }
};
