<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
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
        \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Magni esse eius ab at deserunt sit expedita, optio ipsa recusandae repudiandae. 
        //     Culpa, quod amet mollitia distinctio ipsa alias rem maxime similique?'

        // ]);


        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'Laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Magni esse eius ab at deserunt sit expedita, optio ipsa recusandae repudiandae. 
        //     Culpa, quod amet mollitia distinctio ipsa alias rem maxime similique?'

        // ]);


    }
}
