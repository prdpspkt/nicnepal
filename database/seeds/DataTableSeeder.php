<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new \App\Company();
        $company->name = "Public Service Commission";
        $company->address = "Anamnagar, Kathmandu";
        $company->email = "pradeep@gmail.com";
        $company->phone = "9845659107";
        $company->fax = "9857659107";
        $company->user_id = 1;
        $company->office_type_id = 1;
        $company->about = "Nothing to tell all know about this";
        $company->save();

        $company = new \App\Notice();
        $company->title = "मेरिट लिष्टको लागि कलेज रोज्ने सम्बन्धी सूचना/पोखरा विश्वविद्यालय";
        $company->description = "मेरिट लिष्टको लागि कलेज रोज्ने सम्बन्धी सूचना/पोखरा विश्वविद्यालय";
        $company->published = "२०७५-०६-०७";
        $company->notice_type_id =1;
        $company->user_id = 1;
        $company->company_id = 1;
        $company->content = "Nothing to tell all know about this";
        $company->save();
    }
}
