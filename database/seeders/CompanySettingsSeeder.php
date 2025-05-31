<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CompanySettings;

class CompanySettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanySettings::updateOrCreate(['key' => 'name'], ['value' => 'Allwearly']);
        CompanySettings::updateOrCreate(['key' => 'logo'], ['value' => 'assets/img/logo.png']);
    }
}
