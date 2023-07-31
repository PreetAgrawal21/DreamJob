<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
        [
        'category_name'=>  'IT & Telecommunication'
        ]);
        Category::create([
        'category_name'=>'Marketing / Advertising'
        ]);
        // [
        //     'category_name'=> 'General Mgmt'
        // ],
        // [
        //     'category_name'=> 'Banking / Insurance /Financial Services'
        // ],
        // [
        //     'category_name'=>'Construction / Engineering / Architects '
        // ],
        // [
        //     'category_name'=>'Creative / Graphics / Designing'
        // ],
        // [
        //     'category_name'=>'Social work', 'hospitality'
        // ],
        // [
        //     'category_name'=>'journalism-editor-media'
        // ],
        // [
        //     'category_name'=>'Agriculture + Livestock'
        // ],
        // [
        //     'category_name'=>'Teaching profession'
        // ],
        // [
        //     'category_name'=>'Engineer'
        // ],
        // [
        //     'category_name'=>'Sales'
        // ],
         Category::create([
             'category_name'=>'Web development'
         ]);
         Category::create([
            'category_name'=>'Mobile App'
         ]);
        Category::create([
            'category_name'=>'Others'
        ]
    );
    }
}
