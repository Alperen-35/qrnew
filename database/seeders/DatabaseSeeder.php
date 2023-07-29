<?php
namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Kategori;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        \App\Models\Sitesettings::create([
            'key' => 'title',
            'val' => 'QR Menu',
        ]);
        \App\Models\Sitesettings::create([
            'key' => 'logo',
            'val' => '',
        ]);
        // $kategori1 = new Kategori;
        // $kategori1->kategori_adi = 'Ana Yemek';
        // $kategori1->save();

        // $kategori2 = new Kategori;
        // $kategori2->kategori_adi = 'Çorba';
        // $kategori2->save();

        // $kategori3 = new Kategori;
        // $kategori3->kategori_adi = 'Atıştırmalıklar';
        // $kategori3->save();

        // $kategori3 = new Kategori;
        // $kategori3->kategori_adi = 'İçecekler';
        // $kategori3->save(); 
    }
}