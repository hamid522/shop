<?php

use Illuminate\Database\Seeder;
use App\Product;
{

};
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
          'name'=>'MacBook Pro MD 101',
          'slug'=>'macbook-pro-md-101',
          'details'=>'15inch Monitor, 1TB SSD, 32GB RAM',
          'price'=>24999,
          'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        Product::create([
          'name'=>'Asus N552JV',
          'slug'=>'asus-N-Series',
          'details'=>'15inch Monitor, 2TB HDD, 16GB RAM',
          'price'=>15999,
          'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        Product::create([
          'name'=>'Asus K550JX',
          'slug'=>'asus-K-Series',
          'details'=>'15inch Monitor, 1TB HDD, 8GB RAM',
          'price'=>9999,
          'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        Product::create([
          'name'=>'Acer V15 Nitro',
          'slug'=>'acer-v-15-nitro',
          'details'=>'15inch Monitor, 1TB SSD + 256GB SSD, 32GB RAM',
          'price'=>16000,
          'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        Product::create([
          'name'=>'asus ZenBook UX305',
          'slug'=>'asus-zenbook',
          'details'=>'15inch Monitor, 1TB SSD, 32GB RAM',
          'price'=>13499,
          'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
    }
}
