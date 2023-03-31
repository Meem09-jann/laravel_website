<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::truncate();
        Portfolio::create([
            'id' => 1,        
            'title' => 'managR',
            'client_name'=>'In House Product Of TiCON System Limited',
            'platform'=>'Web Aplication',
            'used_technology' => 'PHP (CodeIgniter),MySQL, Javascript ',
            'product_description' =>'A business solution offered as a service specially designed for SMEs',
            'img_url' => 'assets/img/products/1549521885.png',
            
        ]);
        Portfolio::create([
            'id' => 2,         
            'title' => 'BASIS SOFTEXPO GUIDE APP',
            'client_name'=>'Bangladesh Association of Software and Information Services (BASIS)',
            'platform'=>'Android, Web Application,',
            'used_technology' => 'Java for Android platform, Codeigniter Framework and MySQL ',
            'product_description' =>'Expo Guide
                                    -> Seminar List
                                    -> Speaker Profile
                                    -> Daily Updates and Notification
                                    -> QR Code Generator and Visitor Report
                                    -> Published Job
                                    -> Published Discount
                                    -> Published Offer
                                    -> B2B Meeting Request. ',
            'img_url' => 'assets/img/products/1553072339.png',
            
        ]);
        Portfolio::create([
            'id' => 3,          
            'title' => 'Drishti',
            'client_name'=>'Ministry of Posts, Telecommunications and Information Technology, Bangladesh Govt.',
            'platform'=>'Android',
            'used_technology' => 'Machine Learning, Natural Language Processing, Own algorithm, Speach Recognition, Text To Speach(TTS), Image to Peach ',
            'product_description' =>'Android base Artificial Intelligence.
                                    ->Can recognize question and give real response.
                                    ->Can set Alarm, Schedule Reminder.
                                    ->Search things on internet based on user command.
                                    ->It can be extended to any other services based on Data Set.  ',
            'img_url' => 'assets/img/products/1567502142.png',
            
        ]);
        Portfolio::create([
            'id' => 4,         
            'title' => 'GoSourcing365',
            'client_name'=>'GoSourcing LLC',
            'platform'=>'Android, IOS Aplication, Web API',
            'used_technology' => ' PHP v.7, MySQL v.14, Kotlin, Retrofit, Picasso, Material Dialog, Circular ImageView, MVVM, Objective C, AFNetworking',
            'product_description' =>'Android & IOS application for Online B2B Networking & Sourcing Platform ',
            'img_url' => 'assets/img/products/1567504723.png',
            
        ]);
        Portfolio::create([
            'id' => 5,       
            'title' => 'GPS-Tracker',
            'client_name'=>'HDTel',
            'platform'=>'Android',
            'used_technology' => ' PHP v.7, MySQL v.14, Kotlin, Retrofit, Picasso, Material Dialog, MVVM ',
            'product_description' =>'Stay connected with friends and family.
                                    ->Send distress sms to three emergency contact person.
                                    ->Get warning message for location changes of children. ',
            'img_url' => 'assets/img/products/1567684627.png',
            
        ]);
    }
}
