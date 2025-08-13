@extends('layouts.frontend', ['title' => 'Sustainability'])

@section('page-content')
<main>
    <!-- Hero Section -->
    <section class="contact-hero page-hero" style="margin-bottom: 0 !important;">
        <div class="container">
            <div class="contact-hero-content">
                <h2 class="fade-in">Sustainability</h2>
            </div>
        </div>
        <div class="page-hero-background">
            <img src="{{ url('assets/images/sustainability/sustainability-hero.jpeg')}}" alt="Sustainability" class="img-fluid">
        </div>
    </section>

    <!-- Sustainability Sections -->
    <section class="sustainability-section">
        <div class="container">

            <!-- Environmental Stewardship -->
            <div class="sustainability-card fade-left fade-in-left">
                <div class="sustainability-image">
                    <img src="{{ url('assets/images/sustainability/environmental-stewardship.jpeg')}}" alt="Environmental Stewardship">
                </div>
                <div class="sustainability-content fade-right">
                    <h2>Environmental Stewardship</h2>
                    <ul>
                        <li><strong>Climate Action:</strong> Carbon reduction targets and achievements</li>
                        <li><strong>Water Conservation:</strong> Efficient irrigation systems</li>
                        <li><strong>Soil Health:</strong> Regenerative farming practices</li>
                        <li><strong>Biodiversity:</strong> Wildlife conservation programs</li>
                        <li><strong>Renewable Energy:</strong> Solar installations, biogas systems</li>
                    </ul>
                </div>
            </div>

            <!-- Social Responsibility -->
            <div class="sustainability-card reverse fade-right fade-in-right">
                <div class="sustainability-image">
                    <img src="{{ url('assets/images/sustainability/social-responsiblity.jpeg')}}" alt="Social Responsibility">
                </div>
                <div class="sustainability-content fade-left">
                    <h2>Social Responsibility</h2>
                    <ul>
                        <li><strong>Community Development:</strong> Schools, healthcare, infrastructure</li>
                        <li><strong>Farmer Empowerment:</strong> Training programs, microfinance</li>
                        <li><strong>Gender Equality:</strong> Women in agriculture initiatives</li>
                        <li><strong>Youth Development:</strong> Agricultural education and employment</li>
                    </ul>
                </div>
            </div>

            <!-- Governance Excellence -->
            <div class="sustainability-card fade-left fade-in-left">
                <div class="sustainability-image">
                    <img src="{{ url('assets/images/sustainability/governance-excellence.jpeg')}}" alt="Governance Excellence">
                </div>
                <div class="sustainability-content fade-right">
                    <h2>Governance Excellence</h2>
                    <ul>
                        <li><strong>Transparency:</strong> Regular reporting and stakeholder engagement</li>
                        <li><strong>Ethics:</strong> Code of conduct and business practices</li>
                        <li><strong>Compliance:</strong> Regulatory adherence and certifications</li>
                        <li><strong>Risk Management:</strong> Comprehensive risk assessment framework</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</main>
@endsection
