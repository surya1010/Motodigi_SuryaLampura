<?php

use Illuminate\Database\Seeder;
use App\Outlet;

class OutletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Outlet 1
        $outlet1 = new Outlet();
        $outlet1->name = 'Outlet Wew Jakarta';
        $outlet1->address = 'Jakarta';
        $outlet1->longitude = '106.822745';
        $outlet1->latitude = '-6.1744651';
        $outlet1->users_id ='8';
        $outlet1->save();


        #Outlet 2
        $outlet2 = new Outlet();
        $outlet2->name = 'Outlet Wew Surabaya';
        $outlet2->address = 'Surabaya';
        $outlet2->longitude = '112.7520883';
        $outlet2->latitude = '-7.2574719';
        $outlet2->users_id ='4';
        $outlet2->save();
    }
}
