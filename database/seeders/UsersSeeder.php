<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users =  [
          [
            'name' => 'AHMAD FALIANSYAH',
            'nisn' => '0065795431',
            'nis' => '2122123456',
            'email' => 'faliansyah.siswa@smkn1ciomas.sch.id',
            'email_verified_at' => now(),
            'kelas' => 'XI PPLG 2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
          ],
          [
            'name' => 'Amelia Putri Sulaeman',
            'nisn' => '3062471500',
            'nis' => '212234567',
            'email' => 'ameliaput.siswa@smkn1ciomas.sch.id',
            'email_verified_at' => now(),
            'kelas' => 'XI PPLG 2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
          ],
          [
            'name' => 'andi abdul',
            'nisn' => '00677779',
            'nis' => '2122898989',
            'email' => 'andi.siswa@smkn1ciomas.sch.id',
            'email_verified_at' => now(),
            'kelas' => 'XI PPLG 2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
          ],
          [
            'name' => 'Ariyanto H',
            'nisn' => '0067878789',
            'nis' => '2122345099',
            'email' => 'ariyanto.siswa@smkn1ciomas.sch.id',
            'email_verified_at' => now(),
            'kelas' => 'XI PPLG 2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
          ],
          [
            'name' => '',
            'nisn' => '',
            'nis' => '',
            'email' => '',
            'email_verified_at' => now(),
            'kelas' => 'XI PPLG 2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
          ],
          [
            'name' => 'cindy m',
            'nisn' => '0067879340',
            'nis' => '2122567890',
            'email' => 'cindy.siswa@smkn1ciomas.sch.id',
            'email_verified_at' => now(),
            'kelas' => 'XI PPLG 2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
          ],
          [
            'name' => 'claymment ananda',
            'nisn' => '0062689890',
            'nis' => '2122378960',
            'email' => 'claymment.siswa@smkn1ciomas.sch.id',
            'email_verified_at' => now(),
            'kelas' => 'XI PPLG 2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
          ],


            ];
  
            User::insert($users);
    }
}
