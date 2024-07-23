<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\Customer;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Booking::factory()
        // ->count(10)
        // ->create();
        $customers = Customer::all();
        // dd($customers);
        foreach ($customers as $customer) {
            Booking::factory()->create([
                "customer_id" => $customer->id,
            ]);
        }
    }
}
