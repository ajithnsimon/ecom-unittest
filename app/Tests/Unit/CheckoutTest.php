<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Traits\Checkout;

class CheckoutTest extends TestCase
{
    use Checkout;

    public function case1()
    {

        $items = [
            ['code' => 'PF1', 'quantity' => 3, 'price' => 40],
            ['code' => 'PF2', 'quantity' => 1, 'price' => 80],
            ['code' => 'PF3', 'quantity' => 1, 'price' => 50],
        ];

        $total = $this->total($items);

        return function () use ($total) {
            $this->assertEquals(210, $total);
        };
    }

    public function case2()
    {

        $items = [
            ['code' => 'PF1', 'quantity' => 2, 'price' => 40],
        ];

        $total = $this->total($items);

        return function () use ($total) {
            $this->assertEquals(40, $total);
        };
    }

    public function case3()
    {

        $items = [
            ['code' => 'PF1', 'quantity' => 1, 'price' => 40],
            ['code' => 'PF2', 'quantity' => 3, 'price' => 80],
        ];

        $total = $this->total($items);

        return function () use ($total) {
            $this->assertEquals(265, $total);
        };
    }
    
}