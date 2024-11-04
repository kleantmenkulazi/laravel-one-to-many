<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// models
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allTypes = [
            'HTML',
            'CSS',
            'JS',
            'Vue',
            'SQL',
            'PHP',
            'Laravel',
        ];

        foreach($allTypes as $singleType){
            $type = Type::create([
                'title'=> $singleType,
                'slug' => str()->slug($singleType),
            ]);
        }
    }
}
