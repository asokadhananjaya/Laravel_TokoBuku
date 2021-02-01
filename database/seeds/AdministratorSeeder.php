<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;         
        $administrator->username = "administrator";         
        $administrator->name = "Site Administrator";         
        $administrator->email = "administrator@main.test";         
        $administrator->roles = json_encode(["ADMIN"]);         
        $administrator->password = \Hash::make("gundam123");         
        $administrator->avatar = "saat-ini-tidak-ada-file.png";        
        $administrator->address = "City Resort Hawaiian Blok B 55"; 
        $administrator->phone = "081389031166"; 
 
        $administrator->save(); 
 
        $this->command->info("User Admin berhasil diinsert"); 
    }
}
