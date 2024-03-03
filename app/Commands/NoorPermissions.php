<?php

namespace Noorfarooqy\NoorAuth\Commands;

use Illuminate\Console\Command;
use Noorfarooqy\NoorAuth\Services\AuthServices;

class NoorPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'noorauth:permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run Permissions and modules';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('------RUNNING PERMISSIONS -------');
        $authServices = new AuthServices();
        $authServices->RunPermissions();
        $this->info('------RUNNING ROLES -------');
        $authServices->RunRoles();
    }
}
