@extends('layouts.frontend', ['title' => 'News'])

@section('page-content')
<main>
    <!-- Hero Section -->
    <section class="contact-hero page-hero" style="margin-bottom: 0px !important;">
        <div class="container">
            <div class="contact-hero-content">
                <h2 class="fade-in">Latest News <br /> & Updates</h2>
            </div>
        </div>
        <div class="page-hero-background">
            <img src="https://placehold.co/1200x800" alt="News" class="img-fluid">
        </div>
    </section>

    <!-- News List Section -->
    <section class="home-news">
        <div class="container">
            <div class="home-news-header">
                <h2>News</h2>
            </div>
            <div class="home-news-list">
                <article class="blog-item">
                    <a href="rebecca-burgesss-quest-to-transform-cotton-into-a-regenerative-crop/index.html" title="Rebecca Burgess’s Quest to Transform Cotton into a Regenerative Crop">
                        <figure>
                            <img data-animate-image data-src="https://placehold.co/500x333" alt="Rebecca Burgess’s Quest to Transform Cotton into a Regenerative Crop" class="img-fluid defer">
                        </figure>
                    </a>
                    <div class="blog-item-date">
                        Sep 05, 2021 </div>
                    <a href="rebecca-burgesss-quest-to-transform-cotton-into-a-regenerative-crop/index.html" title="Rebecca Burgess’s Quest to Transform Cotton into a Regenerative Crop">
                        <h1>Rebecca Burgess’s Quest to Transform Cotton into a Regenerative Crop</h1>
                        <p>Bay Area resident Rebecca Burgess started with a simple idea: can I make an [&hellip;]</p>
                    </a>
                </article>
                <article class="blog-item">
                    <a href="farm-tech-depends-on-broadband-access/index.html" title="Farm tech depends on broadband access">
                        <figure>
                            <img data-animate-image data-src="https://placehold.co/500x333" alt="Farm tech depends on broadband access" class="img-fluid defer">
                        </figure>
                    </a>
                    <div class="blog-item-date">
                        Jul 14, 2021 </div>
                    <a href="farm-tech-depends-on-broadband-access/index.html" title="Farm tech depends on broadband access">
                        <h1>Farm tech depends on broadband access</h1>
                        <p>Farmers and ranchers in the 21st century are increasingly turning to soil sensors, online [&hellip;]</p>
                    </a>
                </article>
                <article class="blog-item">
                    <a href="how-bowles-farming-company-supports-people-and-birds-even-during-a-pandemic/index.html" title="How Bowles Farming Company Supports People and Birds &#8211; Even During a Pandemic">
                        <figure>
                            <img data-animate-image data-src="https://placehold.co/500x333" alt="How Bowles Farming Company Supports People and Birds &#8211; Even During a Pandemic" class="img-fluid defer">
                        </figure>
                    </a>
                    <div class="blog-item-date">
                        Jun 24, 2020 </div>
                    <a href="how-bowles-farming-company-supports-people-and-birds-even-during-a-pandemic/index.html" title="How Bowles Farming Company Supports People and Birds &#8211; Even During a Pandemic">
                        <h1>How Bowles Farming Company Supports People and Birds &#8211; Even During a Pandemic</h1>
                        <p>By: Meghan Hertel Bowles Farming Company (BFCo)&nbsp;is located next to Grasslands Ecological Area and [&hellip;]</p>
                    </a>
                </article>
            </div>
        </div>
    </section>
</main>
@endsection