<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/generate-sitemap', function () {
    $sitemap = Sitemap::create();

    $sitemap->add(Url::create('/')->setPriority(1.0));
    $sitemap->add(Url::create('/services')->setPriority(0.9));
    $sitemap->add(Url::create('/contact-us')->setPriority(0.8));
    $sitemap->add(Url::create('/faq')->setPriority(0.8));

    \App\Models\Job::all()->each(function($job) use ($sitemap) {
        $sitemap->add(Url::create("/jobs/{$job->slug}")
            ->setLastModificationDate($job->updated_at)
            ->setPriority(0.7)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
    });

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return "Sitemap generated!";
});
