<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'student_id' => rand(1, 3),
            'book_id' => rand(1, 10),
            'count' => rand(1, 5)
        ];
    }
}