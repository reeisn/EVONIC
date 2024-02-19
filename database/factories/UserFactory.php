<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
use Faker\Factory as Faker;


class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'nis'=>$this->faker->numberBetween(1234506789),
            'nisn'=>$this->faker->numberBetween(1234506789),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'kelas' => 'XI PPLG 2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'profile_photo_path' => 'profile-photos/ava.jpg'
        ];

        // $names = ['ahmad', 'amelia', 'anindya', 'salsabila'];

        // factory(App\User::class, 100)->create()->each(function () use ($names) {
        //     $user->name = $names[array_rand($names)];
        //     $user->save();
        // });

            // return [
            //     'name' => 'AHMAD FALIANSYAH',
            //     'nisn' => '0065795431',
            //     'nis' => '2122123456',
            //     'email' => 'faliansyah.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
                

            //     'name' => 'Rinawati',
            //     'nisn' => '0067506736',
            //     'nis' => '2122030506',
            //     'email' => 'rina.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),

            //     'name' => 'Amelia Putri Sulaeman',
            //     'nisn' => '3062471500',
            //     'nis' => '212234567',
            //     'email' => 'ameliaput.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            // ];
            //   return [
            //     'name' => 'Amelia Putri Sulaeman',
            //     'nisn' => '3062471500',
            //     'nis' => '212234567',
            //     'email' => 'ameliaput.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            //   ];
            //   return [
            //     'name' => 'andi abdul',
            //     'nisn' => '00677779',
            //     'nis' => '2122898989',
            //     'email' => 'andi.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            //   ];
            //   return [
            //     'name' => 'Ariyanto H',
            //     'nisn' => '0067878789',
            //     'nis' => '2122345099',
            //     'email' => 'ariyanto.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            //   ];
            //   return [
            //     'name' => 'Falih Fadhli',
            //     'nisn' => '0067926498',
            //     'nis' => '2122071022',
            //     'email' => 'falih.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            //   ];
            //   return [
            //     'name' => 'cindy m',
            //     'nisn' => '0067879340',
            //     'nis' => '2122567890',
            //     'email' => 'cindy.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            //   ];
            //   return [
            //     'name' => 'claymment ananda',
            //     'nisn' => '0062689890',
            //     'nis' => '2122378960',
            //     'email' => 'claymment.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            //   ];
            //   return [
            //     'name' => 'Hafiz M F',
            //     'nisn' => '0057890237',
            //     'nis' => '2122367890',
            //     'email' => 'hafiz.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            //   ];
            //   return [
            //     'name' => 'M Rafli F',
            //     'nisn' => '00521590890',
            //     'nis' => '2122299765',
            //     'email' => 'rafli.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            //   ];
            //   return [
            //     'name' => 'Rinawati',
            //     'nisn' => '0067506736',
            //     'nis' => '2122030506',
            //     'email' => 'rina.siswa@smkn1ciomas.sch.id',
            //     'email_verified_at' => now(),
            //     'kelas' => 'XI PPLG 2',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //     'remember_token' => Str::random(10),
            //   ];
            
    }



    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (! Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}
