<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Department;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::truncate();
        Department::truncate();
        Post::truncate();
        
        $book=Category::factory()->create(['category_name'=>'book']);
        $table=Category::factory()->create(['category_name'=>'table']);
        
        Post::factory(2)->create(['category_id'=>$book->id]);
        Post::factory(2)->create(['category_id'=>$table->id]);
        Department::create([
            'department_name'=>'HR',
            'slug'=>'humanresource'
        ]);
    }
}
