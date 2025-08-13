@extends('layouts.frontend', ['title' => 'Innovation & Technology'])

@section('page-content')
<main>
    <!-- Hero Section -->
    <section class="contact-hero page-hero" style="margin-bottom: 0 !important;">
        <div class="container">
            <div class="contact-hero-content">
                <h2 class="fade-in">Innovation & Technology</h2>
            </div>
        </div>
        <div class="page-hero-background">
            <img src="{{ url('assets/images/innovation/innovation-and-technology-hero.jpeg')}}" alt="Innovation & Technology" class="img-fluid">
        </div>
    </section>

    <!-- Innovation Cards Grid -->
    <section class="innovation-section">
        <div class="container">
            <div class="innovation-grid">

                <!-- Research & Development -->
                <article class="innovation-card fade-up fade-in">
                    <div class="innovation-image">
                        <img src="{{ url('assets/images/innovation/research-and-development.jpeg')}}" alt="Research & Development">
                    </div>
                    <div class="innovation-content">
                        <h3>Research & Development</h3>
                        <ul>
                            <li><strong>Innovation Centers:</strong> R&D facilities and capabilities</li>
                            <li><strong>Scientific Partnerships:</strong> Universities, research institutes</li>
                            <li><strong>Patent Portfolio:</strong> Intellectual property and innovations</li>
                            <li><strong>Future Technologies:</strong> Emerging tech investments</li>
                        </ul>
                    </div>
                </article>

                <!-- Digital Agriculture -->
                <article class="innovation-card fade-up fade-in" style="animation-delay: 0.15s;">
                    <div class="innovation-image">
                        <img src="{{ url('assets/images/innovation/digital-agriculture.jpeg')}}" alt="Digital Agriculture">
                    </div>
                    <div class="innovation-content">
                        <h3>Digital Agriculture</h3>
                        <ul>
                            <li><strong>Smart Farming:</strong> IoT sensors, AI applications</li>
                            <li><strong>Blockchain:</strong> Supply chain transparency and traceability</li>
                            <li><strong>Mobile Applications:</strong> Farmer support tools</li>
                            <li><strong>Data Management:</strong> Big data analytics and insights</li>
                        </ul>
                    </div>
                </article>

                <!-- AgTech Partnerships -->
                <article class="innovation-card fade-up fade-in" style="animation-delay: 0.3s;">
                    <div class="innovation-image">
                        <img src="{{ url('assets/images/innovation/agtech-partnerships.jpeg')}}" alt="AgTech Partnerships">
                    </div>
                    <div class="innovation-content">
                        <h3>AgTech Partnerships</h3>
                        <ul>
                            <li><strong>Technology Providers:</strong> Strategic partnerships</li>
                            <li><strong>Startup Collaborations:</strong> Innovation ecosystem</li>
                            <li><strong>Investment Portfolio:</strong> AgTech investments and ventures</li>
                        </ul>
                    </div>
                </article>

            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(".fade-up");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            });
        }, { threshold: 0.2 });

        elements.forEach(el => observer.observe(el));
    });
</script>
@endsection
