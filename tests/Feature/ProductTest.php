<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_loads_products_view_page()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }

    public function test_loads_product_create_form()
    {
        $response = $this->get('/products/create');

        $response->assertStatus(200);
    }

    public function test_loads_product_edit_form()
    {
        Product::factory()->create();
        $response = $this->get('/products/edit/1');
        $response->assertViewIs('products.create');
        $response->assertStatus(200);
    }

    public function test_can_add_products()
    {
        $data = [
            "name" => "Mouse",
            "price" => "2300",
            "description" => "nice mouse"
        ];
        $response = $this->post("/products", $data);
        $response->assertStatus(302);
        $this->assertDatabaseCount('products', 1);
    }

    public function test_can_update_products()
    {
        $product = Product::factory()->create();
        $data = [
            "name" => "KeyBoard",
            "price" => "2300",
            "description" => "nice mouse"
        ];
        $response = $this->post("/products/update/$product->id", $data);
        $response->assertStatus(302);
        $productUpdated = Product::first();
        $this->assertNotEquals($product->name, $productUpdated->name);
    }


    public function test_can_soft_delete_product()
    {
        $product = Product::factory()->create();
        $this->assertDatabaseCount('products', 1);
        $response = $this->get("/products/delete/$product->id");
        $productSoftDeleted = Product::withTrashed()->first();
        $this->assertEquals($product->id, $productSoftDeleted->id);
        $this->assertDatabaseCount('products', 1);
        $response->assertStatus(302);
    }

    public function test_can_force_delete_product()
    {
        $product = Product::factory()->create();
        $this->assertDatabaseCount('products', 1);
        $response = $this->get("/products/forcedelete/$product->id");
        $response->assertStatus(302);
        $this->assertDatabaseCount('products', 0);
    }
}
