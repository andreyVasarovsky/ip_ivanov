<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {email?} {password?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new user';

    protected $name2 = null;
    protected $email2 = null;

    /**
     * Create a new command instance.
     *
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
        $email = (is_null($this->argument('email'))) ? Str::random(8).'@gmail.com' : $this->argument('email');
        $password = (is_null($this->argument('password'))) ? Str::random(8) : $this->argument('password');
        $name = (explode("@", $email))[0];

        try {
            User::create(['email' => $email, 'name' => $name, 'password' => Hash::make($password)]);
        }catch (\Exception $ex){
            $this->error('Creation failed!');
            return false;
        }
        $this->info('User created! Email: '.$email.' Password: '.$password);
        return true;
    }
}
