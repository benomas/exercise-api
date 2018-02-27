<?php namespace Database\Seeds\Test;

use Illuminate\Database\Seeder;
use App\Models\{User,Role};
use DB;

class UsersTableSeeder extends Seeder {

  public function run()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::transaction(function() {
      factory(User::class, 10000)->create()->each(function ($u) {
        $u->roles()->sync([1]);
      });
    });
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }
}
