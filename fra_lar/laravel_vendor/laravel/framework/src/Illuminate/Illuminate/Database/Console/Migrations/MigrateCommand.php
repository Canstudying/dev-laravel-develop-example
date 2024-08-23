<?php
/**
 * 数据库控制台，迁移命令类
 */

namespace Illuminate\Database\Console\Migrations;

use Illuminate\Console\ConfirmableTrait;
use Illuminate\Database\Migrations\Migrator;

class MigrateCommand extends BaseCommand
{
    use ConfirmableTrait;

    /**
     * The name and signature of the console command.
	 * 控制台命令的名称和签名
     *
     * @var string
     */
    protected $signature = 'migrate {--database= : The database connection to use}
                {--force : Force the operation to run when in production}
                {--path=* : The path(s) to the migrations files to be executed}
                {--realpath : Indicate any provided migration file paths are pre-resolved absolute paths}
                {--pretend : Dump the SQL queries that would be run}
                {--seed : Indicates if the seed task should be re-run}
                {--step : Force the migrations to be run so they can be rolled back individually}';

    /**
     * The console command description.
	 * 控制台命令描述
     *
     * @var string
     */
    protected $description = 'Run the database migrations';

    /**
     * The migrator instance.
	 * 迁移实例
     *
     * @var \Illuminate\Database\Migrations\Migrator
     */
    protected $migrator;

    /**
     * Create a new migration command instance.
	 * 创建新的迁移命令实例
     *
     * @param  \Illuminate\Database\Migrations\Migrator  $migrator
     * @return void
     */
    public function __construct(Migrator $migrator)
    {
        parent::__construct();

        $this->migrator = $migrator;
    }

    /**
     * Execute the console command.
	 * 执行控制台命令
     *
     * @return void
     */
    public function handle()
    {
        if (! $this->confirmToProceed()) {
            return;
        }

        $this->prepareDatabase();

        // Next, we will check to see if a path option has been defined. If it has
        // we will use the path relative to the root of this installation folder
        // so that migrations may be run for any path within the applications.
        $this->migrator->setOutput($this->output)
                ->run($this->getMigrationPaths(), [
                    'pretend' => $this->option('pretend'),
                    'step' => $this->option('step'),
                ]);

        // Finally, if the "seed" option has been given, we will re-run the database
        // seed task to re-populate the database, which is convenient when adding
        // a migration and a seed at the same time, as it is only this command.
        if ($this->option('seed') && ! $this->option('pretend')) {
            $this->call('db:seed', ['--force' => true]);
        }
    }

    /**
     * Prepare the migration database for running.
	 * 准备运行迁移数据库
     *
     * @return void
     */
    protected function prepareDatabase()
    {
        $this->migrator->setConnection($this->option('database'));

        if (! $this->migrator->repositoryExists()) {
            $this->call('migrate:install', array_filter([
                '--database' => $this->option('database'),
            ]));
        }
    }
}
