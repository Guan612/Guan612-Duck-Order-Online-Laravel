<?php

use App\Enums\ProductStatus;
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
        $productStatus = array_column(ProductStatus::cases(), "value");

        Schema::create('products', function (Blueprint $table) use ($productStatus) {
            $table->id();
            $table->string("name");
            $table->string("price");
            $table->integer("quantity")->default(0);
            $table->enum("productStatus", $productStatus)->default(ProductStatus::removed->value);
            $table->string("product_url")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
