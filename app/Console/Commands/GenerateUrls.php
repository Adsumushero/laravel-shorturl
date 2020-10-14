<?php

namespace App\Console\Commands;

use App\Models\ShortenerUrl;
use Illuminate\Console\Command;

class GenerateUrls extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:url {items}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate random urls';

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
     * Use UrlFactory for generate random urls
     */
    public function handle()
    {
        $items = $this->argument('items');
        $bar = $this->output->createProgressBar($items);
        $bar->start();
        factory(ShortenerUrl::class, (int) $items)->make()->each(function ($item) use ($bar) {
            if ($item->save()) {
                $bar->advance();
            }
        });
        $bar->finish();
    }
}
