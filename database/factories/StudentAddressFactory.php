<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\StudentAddress;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     *
     * @return array<string, mixed>
     */
    // protected $model = StudentAddress::class;
    protected $model = StudentAddress::class;
    private static $counter = 1;
    public function definition()
    {
        return [
            'user_id' => self::$counter++,
            // 'id '=>fake()->$counter ++,
            'address_line_1'=>fake()->streetAddress,
            'city'=>fake()->city ,
            'post_code'=>fake()->postcode,
            'state'=>fake()->state,
        ];
    }
}
