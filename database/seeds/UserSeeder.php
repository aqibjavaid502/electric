<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // Usage:

    public function run()
    {
        // \App\User::create([
        //     'role_id' => 1,
        //     'name' => 'Admin',
        //     'email' => 'admin@demo.com',
        //     'password' => bcrypt('password'),
        // ]);


        function getRandomData()
        {
            $randomNumber = rand(1, 3);

            $distanceRanges = [
                rand(50, 100) / 100,
                rand(200, 400) / 100,
                rand(400, 600) / 100,
            ];

            $timeRanges = [
                '30 to 60 mint',
                '60 to 90 mint',
                '90 to 120 mint',
            ];

            return [
                'distance' => $distanceRanges[$randomNumber - 1],
                'time_to_reach' => $timeRanges[$randomNumber - 1],
            ];
        }

        $names = [
            'Anthony Lewis', 'Samuel Moore', 'Kenneth Wright', 'Jonathan Harris', 'George Jackson',
            'Michael Turner', 'Nicholas Parker', 'Matthew Miller', 'Eric Scott', 'William Young',
            'Gregory Adams', 'Terry Nelson', 'Kevin Mitchell', 'Jeffrey Collins', 'Patrick Hill',
            'Raymond Hayes', 'Brandon White', 'Aaron Green', 'Harold King', 'Justin Foster',
            'Timothy Murphy', 'Randy Bennett', 'Lawrence Reed', 'Stephen Richardson', 'Philip Simmons',
            'Jeremy Wood', 'Douglas Carter', 'Dennis Hayes', 'Walter Price', 'Eugene Barnes',
            'Russell Griffin', 'Victor Edwards', 'Billy Mitchell', 'Louis Foster', 'Gary Simmons',
            'Sean Carter', 'Andrew Sanders', 'Ralph Hayes', 'Jesse Martin', 'Gregory Ward',
            'Bobby Lewis', 'Johnny Brooks', 'Roy Coleman', 'Michael Johnson', 'David Williams',
            'James Brown', 'Robert Davis', 'William Jones', 'Joseph Taylor', 'Charles Wilson',
            'Thomas Anderson', 'Daniel Moore', 'Richard Lee', 'Christopher Martin', 'Matthew Garcia',
            'Anthony Rodriguez', 'Edward Martinez', 'Brian Hernandez', 'Kevin Lopez', 'George Gonzalez',
            'Nicholas Perez', 'Benjamin Turner', 'Samuel Harris', 'Jonathan King', 'Kenneth Scott',
            'Patrick Young', 'Joshua Clark', 'Jeffrey White', 'Ryan Hall', 'Timothy Baker', 'Jason Nelson',
            'Stephen Lewis', 'Brandon Adams', 'Eric Green', 'Gregory Turner', 'Justin Parker',
            'Aaron Collins', 'Terry Morris', 'Jeremy Reed', 'Frank Bennett', 'Harold Hayes',
            'Raymond Rivera', 'Billy Howard', 'Jesse Powell', 'Gerald Foster', 'Lawrence Simmons',
            'Roy Murphy', 'Randy Hayes', 'Russell Barnes', 'Ernest Reed', 'Phillip Foster',
            'Bobby Ward', 'Jimmy Coleman', 'Willie Cox', 'Johnny Mitchell', 'Louis Edwards',
            'Samuel Griffin', 'Victor Murray', 'Danny Wallace', 'Allen Hernandez', 'Douglas Kelly',
            'Eugene Sanders', 'Walter Price', 'Harold Phillips', 'Peter Richardson', 'Harry Brooks',
            'Gregory Martin', 'Bruce Turner', 'Albert Butler', 'Willie Simmons', 'Ralph Wood',
            'Jesse Powell', 'Gary Rodriguez', 'Benjamin Bennett', 'Eric Mitchell', 'Roy Foster',
            'Andrew Hayes', 'Dennis Patterson', 'Sean Russell', 'Eugene Barnes', 'Scott Butler',
            'Samuel Simmons', 'Ralph Nelson', 'Walter Powell', 'Jimmy Collins', 'Terry Simmons',
            'Louis Carter', 'Kevin Howard', 'Raymond Green', 'Randy Turner', 'Phillip Martinez',
            'Christopher Brooks', 'Peter Murphy', 'Johnny Hayes', 'Gregory Scott', 'Albert Baker',
            'Danny Ward', 'Bruce Thompson', 'Frank Garcia', 'Harold Kelly', 'Stephen Coleman',
            'Michael Reed',
        ];

        $electriciansData = [];

        foreach ($names as $name) {
            $electricianData = [
                'name' => $name,
            ] + getRandomData();

            $electriciansData[] = $electricianData;
        }

        DB::table('electricians')->insert($electriciansData);
    }
}