@extends('layouts.frontend', ['title' => 'Our Operations'])

@section('page-content')
<main>
    <!-- Hero Section -->
    <section class="contact-hero page-hero" style="margin-bottom: 0px !important;">
        <div class="container">
            <div class="contact-hero-content">
                <h2 class="fade-in">Our Operations</h2>
            </div>
        </div>
        <div class="page-hero-background">
            <img src="https://placehold.co/1200x800" alt="Our Operations" class="img-fluid">
        </div>
    </section>

    <!-- Operations Section -->
    <section class="operations-section">
        <div class="container">

            <!-- Agriculture Division -->
            <div class="operation-card fade-left fade-in-left">
                <div class="operation-image">
                    <img src="https://placehold.co/600x400" alt="Agriculture Division">
                </div>
                <div class="operation-content fade-right">
                    <h2>Agriculture Division</h2>
                    <ul>
                        <li><strong>Crop Production:</strong> Cereals (maize, rice, wheat), Cash crops (cocoa, cotton, cashew), Horticulture (fruits, vegetables)</li>
                        <li>Interactive crop calendar</li>
                        <li>Yield data and productivity metrics</li>
                    </ul>
                </div>
            </div>

            <!-- Medicinal Crops Division -->
            <div class="operation-card reverse fade-right fade-in-right">
                <div class="operation-image">
                    <img src="https://placehold.co/600x400" alt="Medicinal Crops Division">
                </div>
                <div class="operation-content fade-left">
                    <h2>Medicinal Crops Division</h2>
                    <ul>
                        <li><strong>Pharmaceutical Plants:</strong> Artemisia, ginger, turmeric, moringa</li>
                        <li>Research Partnerships with pharma companies</li>
                        <li>GMP certification, purity testing</li>
                        <li>Export markets and supply chain</li>
                    </ul>
                </div>
            </div>

            <!-- Livestock & Animal Production -->
            <div class="operation-card fade-left fade-in-left">
                <div class="operation-image">
                    <img src="https://placehold.co/600x400" alt="Livestock & Animal Production">
                </div>
                <div class="operation-content fade-right">
                    <h2>Livestock & Animal Production</h2>
                    <ul>
                        <li><strong>Cattle Ranching:</strong> Beef production, dairy operations</li>
                        <li><strong>Poultry:</strong> Egg production, broiler farming</li>
                        <li><strong>Aquaculture:</strong> Fish farming, sustainable practices</li>
                        <li><strong>Feed Production:</strong> Integrated feed mills</li>
                    </ul>
                </div>
            </div>

            <!-- Mining Operations -->
            <div class="operation-card reverse fade-right fade-in-right">
                <div class="operation-image">
                    <img src="https://placehold.co/600x400" alt="Mining Operations">
                </div>
                <div class="operation-content fade-left">
                    <h2>Mining Operations</h2>
                    <ul>
                        <li><strong>Mineral Resources:</strong> Types of minerals extracted</li>
                        <li><strong>Sustainable Mining:</strong> Environmental protection measures</li>
                        <li>Agricultural Integration with mining operations</li>
                        <li>Worker safety and community protection</li>
                    </ul>
                </div>
            </div>

            <!-- Technology Integration -->
            <div class="operation-card fade-left fade-in-left">
                <div class="operation-image">
                    <img src="https://placehold.co/600x400" alt="Technology Integration">
                </div>
                <div class="operation-content fade-right">
                    <h2>Technology Integration</h2>
                    <ul>
                        <li><strong>Precision Agriculture:</strong> GPS-guided farming, soil sensors</li>
                        <li><strong>Drone Technology:</strong> Crop monitoring, pest detection</li>
                        <li><strong>Data Analytics:</strong> Yield prediction, weather modeling</li>
                        <li><strong>Automation:</strong> Smart irrigation, automated harvesting</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

</main>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".fade-in-left, .fade-in-right");

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