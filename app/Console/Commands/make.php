<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class make extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make for those tables';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $list = [
            'City',
            'User',
            'Image',
            'Region',
            'Section',
            'Property',
        ];

        foreach ($list as $name)
        {
            $this->call('make:controller', [
                'name' => $name . 'Controller', '--model' => $name, '--api' => true
            ]);
        }
    }
}
