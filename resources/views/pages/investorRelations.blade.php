@extends('layouts.frontend', ['title' => 'Investor Relations'])

@section('page-content')
<main>
    <!-- Hero Section -->
    <section class="contact-hero page-hero" style="margin-bottom: 0 !important;">
        <div class="container">
            <div class="contact-hero-content">
                <h2 class="fade-in">Investor Relations</h2>
            </div>
        </div>
        <div class="page-hero-background">
            <img src="{{ url('assets/images/investor/investor-relations-hero.jpeg')}}" alt="Investor Relations" class="img-fluid">
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="investor-timeline-section">
        <div class="container">
            <div class="timeline">

                <!-- Investment Highlights -->
                <div class="timeline-item fade-left fade-in-left">
                    <div class="timeline-marker"><span>01</span></div>
                    <div class="timeline-content">
                        <h2>Investment Highlights</h2>
                        <ul>
                            <li><strong>Financial Performance:</strong> Revenue, profit, growth metrics</li>
                            <li><strong>Market Opportunity:</strong> TAM, growth projections, market position</li>
                            <li><strong>Investment Proposition:</strong> Value creation strategy, ROI potential</li>
                            <li><strong>Competitive Advantages:</strong> Differentiation factors</li>
                        </ul>
                    </div>
                </div>

                <!-- Financial Information -->
                <div class="timeline-item fade-right fade-in-right">
                    <div class="timeline-marker"><span>02</span></div>
                    <div class="timeline-content">
                        <h2>Financial Information</h2>
                        <ul>
                            <li><strong>Annual Reports:</strong> Downloadable PDF reports</li>
                            <li><strong>Quarterly Results:</strong> Financial statements and presentations</li>
                            <li><strong>Key Metrics:</strong> KPIs, production data, efficiency ratios</li>
                            <li><strong>Historical Performance:</strong> 5-year financial trends</li>
                        </ul>
                    </div>
                </div>

                <!-- Corporate Governance -->
                <div class="timeline-item fade-left fade-in-left">
                    <div class="timeline-marker"><span>03</span></div>
                    <div class="timeline-content">
                        <h2>Corporate Governance</h2>
                        <ul>
                            <li><strong>Board Composition:</strong> Director profiles and expertise</li>
                            <li><strong>Governance Policies:</strong> Transparency and accountability</li>
                            <li><strong>Risk Management:</strong> Risk factors and mitigation strategies</li>
                            <li><strong>Shareholder Information:</strong> Ownership structure, rights</li>
                        </ul>
                    </div>
                </div>

                <!-- Investment Opportunities -->
                <div class="timeline-item fade-right fade-in-right">
                    <div class="timeline-marker"><span>04</span></div>
                    <div class="timeline-content">
                        <h2>Investment Opportunities</h2>
                        <ul>
                            <li><strong>Funding Requirements:</strong> Capital needs and use of funds</li>
                            <li><strong>Growth Projects:</strong> Expansion plans and investments</li>
                            <li><strong>Partnership Opportunities:</strong> Joint ventures, collaborations</li>
                            <li><strong>Exit Strategies:</strong> IPO timeline, acquisition potential</li>
                        </ul>
                    </div>
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
        }, { threshold: 0.25 });

        elements.forEach(el => observer.observe(el));
    });
</script>

@endsection
