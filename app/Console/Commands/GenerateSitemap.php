<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Job; // example dynamic pages



class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

    $sitemap->add(Url::create('/')->setPriority(1.0));
    $sitemap->add(Url::create('/services')->setPriority(0.9));
    $sitemap->add(Url::create('/contact-us')->setPriority(0.8));
    $sitemap->add(Url::create('/faq')->setPriority(0.8));

    // Dynamic pages example
    // \App\Models\Job::all()->each(function($job) use ($sitemap) {
    //     $sitemap->add(Url::create("/jobs/{$job->slug}")
    //         ->setLastModificationDate($job->updated_at)
    //         ->setPriority(0.7)
    //         ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
    // });

    $sitemap->writeToFile(public_path('sitemap.xml'));

    $this->info('Sitemap generated successfully!');
    }
}
