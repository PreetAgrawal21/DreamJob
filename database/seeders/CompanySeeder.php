<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    Company::create(
        [
            'user_id' => '2',
            'company_category_id' => '1',
            'logo' => 'abcd.jpg',
            'title' => 'Aniga Technologies',
            'decription' => 'we are providing It solutions <br> such as website development',
            'website' => 'www.anigatechnologies.com',
        ]);
        Company::create([
            'user_id' => '2',
            'company_category_id' => '1',
            'logo' => 'abcd.jpg',
            'title' => 'B2 Software',
            'decription' => 'we are contributing in web development ',
            'website' => 'www.B2Software.com',
        ]);
        Company::create([
            'user_id' => '2',
            'company_category_id' => '1',
            'logo' => 'bcd.jpg',
            'title' => 'IT solutions',
            'decription' => 'we are developing mobile applications ',
            'website' => 'www.ITsolutions.com',
        ]);
        Company::create([
            'user_id' => '2',
            'company_category_id' => '1',
            'logo' => 'MIM Solutions.jpg',
            'title' => 'Axis bank',
            'decription' => 'WE are havinh having expertise in web development and andorid app',
            'website' => 'www.MIMsolutions.com',
        ]);
        Company::create([
            'user_id' => '2',
            'company_category_id' => '1',
            'logo' => 'abcd.jpg',
            'title' => 'BBC technologis',
            'decription' => 'Leading company in It sector ',
            'website' => 'www.bbctechnologis.com',
        ]);
        Company::create([
            'user_id' => '2',
            'company_category_id' => '1',
            'logo' => "('layouts/front-end/img/com-logo-2.jpg') }}",
            'title' => 'Legit technologis',
            'decription' => 'Leading company in It sector ',
            'website' => 'www.legittechnologis.com',
        ]);
        Company::create([
            'user_id' => '4',
            'company_category_id' => '1',
            'logo' => "('layouts/front-end/img/com-logo-2.jpg') }}",
            'title' => 'xyz technologis',
            'decription' => 'Leading company in It sector ',
            'website' => 'www.xyztechnologis.com',
        ]);



        // $details = [
        //     [
        //         'title' => 'Php laravel developer',
        //         'level' => 'Senior level',
        //         'employment' => 'full time',
        //         'education' => 'bachelors',
        //     ], [
        //         'title' => 'Marketing Expert',
        //         'level' => 'Senior level',
        //         'employment' => 'full time',
        //         'education' => 'bachelors',
        //     ], [
        //         'title' => 'Professional designer',
        //         'level' => 'Top level',
        //         'employment' => 'Part time',
        //         'education' => 'bachelors',
        //     ], [
        //         'title' => 'Dotnet programmer',
        //         'level' => 'Senior level',
        //         'employment' => 'full time',
        //         'education' => 'high school',
        //     ], [
        //         'title' => 'Sales Executive',
        //         'level' => 'Senior level',
        //         'employment' => 'Part time',
        //         'education' => 'bachelors',
        //     ], [
        //         'title' => 'Maths Teacher',
        //         'level' => 'Senior level',
        //         'employment' => 'full time',
        //         'education' => 'master',
        //     ],
        // ];
        // //user id is 2 that has author role
        // $company = Company::factory()->create([
        //     'company_category_id' => 1,
        //     'title' => 'Gabrato company',
        //     'logo' => 'images/logo/7.png',
        // ]);
        // foreach ($details as $index => $detail) {
        //     $post = Post::factory()->create([
        //         'company_id' => $company->id,
        //         'job_title' => $detail['title'],
        //         'job_level' => $detail['level'],
        //         'employment_type' => $detail['employment'],
        //         'education_level' => $detail['education'],
        //     ]);
        // }
    }
}
