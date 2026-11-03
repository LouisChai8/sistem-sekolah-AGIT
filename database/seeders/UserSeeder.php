<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'jolene.013@ski.sch.id';
        $userStudentEmail = 'louis.013@ski.sch.id';

        // User Teacher
        User::updateOrCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => "Jolene Lynelle",
                'password' => bcrypt('password'),
                'role' => 'teacher'
            ]
        );

        // User Student
        User::updateOrCreate(
            ['email' => $userStudentEmail],
            [
                'name' => "Louis Chai",
                'password' => bcrypt('password'),
                'role' => 'student'
            ]
        );
    }
}
