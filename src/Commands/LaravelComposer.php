<?php

    namespace Skydiver\LaravelComposer\Commands;

    use Illuminate\Console\Command;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Console\Input\InputArgument;

    class LaravelComposer extends Command {

        protected $name        = 'composer:update';
        protected $description = 'Run composer update and save packages diff';

        public function __construct() {
            parent::__construct();
        }

        public function fire() {

            # DIRS & FILES
            $logs_dir  = storage_path() . '/composer/';
            $file_date = date('Ymd_His');
            $file_log1 = $logs_dir . 'composer_' . $file_date . '_PRE.log';
            $file_log2 = $logs_dir . 'composer_' . $file_date . '_PST.log';

            # CREATE LOGS FOLDER
            if(!file_exists($logs_dir)) {
                mkdir($logs_dir);
            }

            # SAVE CURRENT COMPOSER PACKAGES
            $cmd = exec("composer show -i > $file_log1");

            # RUN COMPOSER UPDATE
            passthru('composer update');

            # SAVE UPDATED COMPOSER PACKAGES
            $cmd = exec("composer show -i > $file_log2");

        }

    }

?>
