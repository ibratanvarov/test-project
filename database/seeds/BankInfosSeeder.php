<?php

use App\BankInfo;
use Illuminate\Database\Seeder;

class BankInfosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BankInfo::create([
            'phone'=>'998935735870',
            'bank_account'=>'001266-01',
            'credit_account'=>'BFS 123',
            'card_number'=>'0066457895632584',
        ]);
        BankInfo::create([
            'phone'=>'998908059669',
            'bank_account'=>'001263-01',
            'credit_account'=>'BFS 133',
            'card_number'=>'0066457795632584',
        ]);
        BankInfo::create([
            'phone'=>'998935735871',
            'bank_account'=>'001266-02',
            'credit_account'=>'BFS 100',
            'card_number'=>'0066457895632581',
        ]);
        BankInfo::create([
            'phone'=>'998935735860',
            'bank_account'=>'001266-22',
            'credit_account'=>'BFS 103',
            'card_number'=>'0066457895532584',
        ]);
        BankInfo::create([
            'phone'=>'998935735875',
            'bank_account'=>'001266-51',
            'credit_account'=>'BFS 183',
            'card_number'=>'0066457845632584',
        ]);

    }
}
