<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develop';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $this->prepareData();

        $position = Position::find(1);

        $worker = Worker::find(1);

        $position = Position::find(1);

        dd($position->workers->toArray());



        return 0;
    }

    private function prepareData()
    {

        $position1 = Position::create([
            'title' => 'Developer',
        ]);

        $position2 = Position::create([
            'title' => 'Manager',
        ]);

        $position3 = Position::create([
            'title' => 'Director',
        ]);

        $workerData1 = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'ivanov@gmail.com',
            'position_id' => $position1->id,
            'age' => 20,
            'description' => 'Some descr',
            'is_married' => false,
        ];

        $workerData2 = [
            'name' => 'Karl',
            'surname' => 'Karlov',
            'email' => 'karlik@gmail.com',
            'position_id' => $position2->id,
            'age' => 28,
            'description' => 'Some descr',
            'is_married' => true,
        ];

        $workerData3 = [
            'name' => 'Kitty',
            'surname' => 'Abobova',
            'email' => 'kate@gmail.com',
            'position_id' => $position1->id,
            'age' => 18,
            'description' => 'Some descr',
            'is_married' => false,
        ];

        $workerData4 = [
            'name' => 'Ruslan',
            'surname' => 'Kuvandykov',
            'email' => 'infantrymanstart@mail.ru',
            'position_id' => $position1->id,
            'age' => 21,
            'description' => 'It\'s me, yow',
            'is_married' => false,
        ];

        $workerData5 = [
            'name' => 'Petr',
            'surname' => 'Petrov',
            'email' => 'petya228@gmail.com',
            'position_id' => $position1->id,
            'age' => 25,
            'description' => 'Some descr',
            'is_married' => true,
        ];

        $workerData6 = [
            'name' => 'Vadim',
            'surname' => 'Dubovik',
            'email' => 'jolud@gmail.com',
            'position_id' => $position1->id,
            'age' => 21,
            'description' => 'My friend',
            'is_married' => false,
        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);
        $worker4 = Worker::create($workerData4);
        $worker5 = Worker::create($workerData5);
        $worker6 = Worker::create($workerData6);

        $profileData1 = [
            'worker_id' => $worker1->id,
            'skill' => 'Backend',
            'finished_study_at' => '2020-07-01',
            'city' => 'Tokio',
            'experience' => 5,
        ];

        $profileData2 = [
            'worker_id' => $worker2->id,
            'skill' => 'Boss',
            'finished_study_at' => '2014-02-01',
            'city' => 'Rio',
            'experience' => 10,
        ];

        $profileData3 = [
            'worker_id' => $worker3->id,
            'skill' => 'Frontend',
            'finished_study_at' => '2024-07-03',
            'city' => 'Oslo',
            'experience' => 10,
        ];

        $profileData4 = [
            'worker_id' => $worker1->id,
            'skill' => 'Backend',
            'finished_study_at' => '2025-07-01',
            'city' => 'Novosibirsk',
            'experience' => 0,
        ];

        $profileData5 = [
            'worker_id' => $worker2->id,
            'skill' => 'DevOps',
            'finished_study_at' => '2021-02-01',
            'city' => 'Moscow',
            'experience' => 6,
        ];

        $profileData6 = [
            'worker_id' => $worker3->id,
            'skill' => 'Backend',
            'finished_study_at' => '2026-07-03',
            'city' => 'Novosibirsk',
            'experience' => 3,
        ];

        Profile::create($profileData1);
        Profile::create($profileData2);
        Profile::create($profileData3);
        Profile::create($profileData4);
        Profile::create($profileData5);
        Profile::create($profileData6);
    }
}
