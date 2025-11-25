<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'nom' => 'ESSOHAM',
                'nom_complet' => 'Roland ESSOHAM',
                'prenoms' => 'Roland',
                'telephone' => '+228 90 83 64 54', 
                'username' => 'bignanges',
                'role_id' => 1,
                'status' => 1,
                'email' => 'bignanges@gmail.com',
                'password' => '040567Ionos', // le mot de passe sera hashé ci-dessous
            ],
            [
                'nom' => 'ADJANOR',
                'prenoms' => 'Emmanuel',
                'nom_complet' => 'Emmanuel ADJANOR',
                'telephone' => '+228 98 97 44 38', 
                'username' => 'manoudev',
                'role_id' => 2,
                'status' => 1,
                'email' => 'manouadjanor@gmail.com',
                'password' => 'manouDDEV@2000', // le mot de passe sera hashé ci-dessous
            ],
        ];

        $totalFetched = count($users);
        $totalInserted = 0;

        foreach ($users as $data) {
            $user = User::updateOrCreate(
                ['email' => $data['email']], // clé unique
                [
                    'nom' => $data['nom'],
                    'prenoms' => $data['prenoms'],
                    'nom_complet' => $data['nom_complet'],
                    'telephone' => $data['telephone'],
                    'author_id' => $data['author_id'],
                    'username' => $data['username'],
                    'slug' => Str::slug($data['username']),
                    'role_id' => $data['role_id'],
                    'status' => $data['status'],
                    'password' => Hash::make($data['password']),
                ]
            );

            if ($user->wasRecentlyCreated) {
                $totalInserted++;
            }

            $this->command->info("Utilisateur '{$user->username}' traité : " . ($user->wasRecentlyCreated ? 'nouveau' : 'existant'));
        }

        $this->command->info("✅ Import des utilisateurs terminé : $totalFetched récupérés, $totalInserted insérés en base.");
    }
}
