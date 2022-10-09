<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Lesson;
use App\Models\Payment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Phone::factory(10)->create();
        Post::factory(15)->create();
        Comment::factory(20)->create();
        Student::factory(10)->create();
        Teacher::factory(10)->create();
        Lesson::factory(10)->create();
        Payment::factory(10)->create();
    }
}
