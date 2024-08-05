<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i <= 20; $i++) {
            $customer = new Customer();
            $customer->name = "Cliente " . $i + 1;
            $customer->phone = rand(1111111111, 999999999);
            $customer->address = "Address " . $i + 1;
            $customer->save();
        }
    }
}
