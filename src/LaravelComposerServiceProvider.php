<?php

    namespace Skydiver\LaravelComposer;

    use Illuminate\Support\ServiceProvider;

    class LaravelComposerServiceProvider extends ServiceProvider {

        public function register() {

            $this->commands([
                'Skydiver\LaravelComposer\Commands\LaravelComposer'
            ]);

        }

    }

?>