@extends('layouts.frontend', ['title' => 'About Us'])

@section('page-content')
<main>
    <!-- Hero Section -->
    <section class="contact-hero page-hero" style="margin-bottom: 0 !important;">
        <div class="container">
            <div class="contact-hero-content">
                <h2 class="fade-in">About Us</h2>
            </div>
        </div>
        <div class="page-hero-background">
            <img src="https://placehold.co/1200x800" alt="About FGOL" class="img-fluid">
        </div>
    </section>

    <!-- Company Overview -->
    <section class="about-section section-padding">
        <div class="container fade-up fade-in">
            <div class="about-text">
                <p>
                    Farming Global Operations Limited (FGOL) is a dynamic, integrated agribusiness conglomerate headquartered in Nigeria, with operations spanning multiple continents.
                    We are pioneering the future of sustainable agriculture through innovative farming practices, responsible mining operations, and cutting-edge agricultural technology.
                </p>
                <p>
                    Founded on the principle that agriculture is the backbone of global prosperity, FGOL operates across five core sectors: large-scale crop production, specialized medicinal crop cultivation, sustainable livestock and animal production, agricultural technology solutions, and responsible mineral extraction.
                </p>
                <p>
                    As a proudly Nigerian company with global ambitions, we leverage Africa's abundant natural resources and agricultural potential to feed the world, heal communities, and drive economic development across emerging markets.
                </p>
            </div>
        </div>
    </section>

    <!-- Vision -->
    <section class="section-action about-team">
        <div class="container">
            <div class="section-action-content about-team-content">
                <div class="content">
                    <h3>OUR VISION</h3>
                    <p style="color: #000">To be the world's leading integrated agribusiness enterprise, transforming global agriculture through innovation, sustainability, and excellence while creating prosperity for communities, stakeholders, and future generations.</p>
                </div>
            </div>
            <div class="section-action-image about-team-image">
                <img src="https://placehold.co/1000x750">
            </div>
        </div>
    </section>

    <!-- Mission -->
    <section class="section-action about-community"
        style="background-image: url('https://placehold.co/1000x750');">
        <div class="overlay"></div>
        <div class="about-community-content">
            <div class="content fade-up">
                <h3>Our Mission</h3>
                <ul class="mission-list">
                    <li>Producing high-quality crops, livestock, and medicinal plants that nourish and heal the world</li>
                    <li>Implementing cutting-edge, sustainable farming technologies that maximize yield while protecting our planet</li>
                    <li>Developing integrated supply chain solutions that connect farmers to global markets</li>
                    <li>Responsibly extracting and utilizing mineral resources to support agricultural development</li>
                    <li>Empowering local communities through employment, knowledge transfer, and economic development</li>
                    <li>Leading the transition to climate-smart agriculture for future food security</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="core-values-section section-padding">
        <div class="container">
            <h3 class="section-title text-center fade-in">Core Values</h3>
            <div class="values-grid">
                <article class="value-card fade-up fade-in">
                    <h4>Excellence</h4>
                    <p>We pursue perfection in everything we do, from seed to harvest, farm to market.</p>
                </article>
                <article class="value-card fade-up fade-in" style="animation-delay: 0.1s;">
                    <h4>Sustainability</h4>
                    <p>We implement regenerative practices, conserve resources, and minimize our carbon footprint.</p>
                </article>
                <article class="value-card fade-up fade-in" style="animation-delay: 0.2s;">
                    <h4>Innovation</h4>
                    <p>We embrace technology and creative solutions to solve complex agricultural challenges.</p>
                </article>
                <article class="value-card fade-up fade-in" style="animation-delay: 0.3s;">
                    <h4>Integrity</h4>
                    <p>We uphold transparency, honesty, and ethical business practices in all our dealings.</p>
                </article>
                <article class="value-card fade-up fade-in" style="animation-delay: 0.4s;">
                    <h4>Community Empowerment</h4>
                    <p>We measure success by the positive impact we create for farmers and communities.</p>
                </article>
                <article class="value-card fade-up fade-in" style="animation-delay: 0.5s;">
                    <h4>Global Citizenship</h4>
                    <p>We honor our roots while embracing international best practices for global food security.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Operating Principles -->
    <section class="principles-carousel">
        <div class="container">
            <div class="carousel-header">
                <h2>Operating Principles</h2>
                <div class="carousel-arrows">
                    <button class="prev-btn"><i class="fa fa-chevron-left"></i></button>
                    <button class="next-btn"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="carousel-track" id="principlesSlider">
                <div class="carousel-item">
                    <h3>Integrated Excellence</h3>
                    <p>We operate as a cohesive ecosystem where crop production, animal husbandry, medicinal farming, and mineral extraction complement each other, creating operational synergies and competitive advantages.</p>
                </div>
                <div class="carousel-item">
                    <h3>Science-Driven Decisions</h3>
                    <p>Our dedicated team blends sustainable practices, innovative techniques, and a deep respect for nature in order to optimize the vitality and abundance of your farm.</p>
                </div>
                <div class="carousel-item">
                    <h3>Stakeholder-Centric Approach</h3>
                    <p>We prioritize the needs and interests of all stakeholders—farmers, employees, customers, communities, investors, and partners—ensuring mutual prosperity and long-term relationships.</p>
                </div>
                <div class="carousel-item">
                    <h3>Adaptive Resilience</h3>
                    <p>We build flexibility and resilience into our operations to adapt to climate change, market volatility, and emerging challenges while maintaining operational continuity and growth.</p>
                </div>
                <div class="carousel-item">
                    <h3>Quality Assurance</h3>
                    <p>From soil preparation to final product delivery, we maintain the highest quality standards through rigorous testing, certification, and continuous monitoring at every stage of our operations.</p>
                </div>
                <div class="carousel-item">
                    <h3>Strategic Partnerships</h3>
                    <p>We collaborate with leading agricultural institutions, technology providers, research organizations, and government agencies to leverage collective expertise and accelerate innovation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Organizational Culture -->
    <section class="culture-grid-section">
        <h2>ORGANIZATIONAL CULTURE</h2>
        <div class="culture-grid">
            <div class="culture-card">
                <i class="fas fa-trophy"></i>
                <h3>Performance Culture</h3>
                <p>We foster a high-performance environment where merit is recognized, excellence is rewarded, and continuous learning is encouraged. Every team member is empowered to contribute to our collective success.</p>
            </div>
            <div class="culture-card">
                <i class="fas fa-lightbulb"></i>
                <h3>Innovation Mindset</h3>
                <p>We cultivate a culture of curiosity, experimentation, and creative problem-solving. Failure is viewed as a learning opportunity, and breakthrough thinking is celebrated and supported.</p>
            </div>
            <div class="culture-card">
                <i class="fas fa-people-arrows"></i>
                <h3>Collaborative Spirit</h3>
                <p>Teamwork transcends departmental boundaries. Our greatest achievements come from collective effort, knowledge sharing, and mutual support across all levels of the organization.</p>
            </div>
            <div class="culture-card">
                <i class="fas fa-users-cog"></i>
                <h3>Diversity & Inclusion</h3>
                <p>We embrace diversity in all its forms—cultural, professional, intellectual, and experiential. Our inclusive environment harnesses the power of different perspectives to drive innovation and growth.</p>
            </div>
            <div class="culture-card">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>Leadership Development</h3>
                <p>We invest in developing leaders at every level, providing opportunities for growth, mentorship, and skill development that prepare our people for increasing responsibilities and impact.</p>
            </div>
            <div class="culture-card">
                <i class="fas fa-balance-scale"></i>
                <h3>Work-Life Integration</h3>
                <p>We promote healthy work-life integration, employee wellbeing, and personal development alongside professional achievement.</p>
            </div>
        </div>
    </section>
</main>
<style>
    .principles-carousel {
        padding: 2rem 0;
        background: #f9f9f9;
    }

    .carousel-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .carousel-header h2 {
        font-size: 1.8rem;
        color: #1b4d3e;
    }

    .carousel-arrows button {
        background: #1b4d3e;
        color: #fff;
        border: none;
        padding: 0.4rem 0.8rem;
        margin-left: 0.5rem;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .carousel-arrows button:hover {
        background: #145235;
    }

    .carousel-track {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        gap: 1rem;
        padding-bottom: 1rem;
    }

    .carousel-track::-webkit-scrollbar {
        display: none;
    }

    .carousel-item {
        flex: 0 0 300px;
        background: #fff;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
        transition: transform 0.3s ease;
    }

    .carousel-item:hover {
        transform: translateY(-5px);
    }

    .carousel-item h3 {
        color: #1b4d3e;
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .carousel-item p {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.4;
    }

    .culture-grid-section {
        max-width: 1100px;
        margin: 2rem auto;
        padding: 2rem;
        background: #f9f9f9;
        border-radius: 12px;
    }

    .culture-grid-section h2 {
        text-align: center;
        font-size: 2rem;
        color: #1b4d3e;
        margin-bottom: 2rem;
    }

    .culture-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .culture-card {
        background: #fff;
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        text-align: center;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .culture-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .culture-card i {
        font-size: 2rem;
        color: #1b4d3e;
        margin-bottom: 0.8rem;
    }

    .culture-card h3 {
        font-size: 1.2rem;
        color: #1b4d3e;
        margin-bottom: 0.5rem;
    }

    .culture-card p {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.5;
    }
</style>
<script>
    const track = document.getElementById('principlesSlider');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    function scrollNext() {
        track.scrollBy({
            left: 320,
            behavior: 'smooth'
        });
    }

    function scrollPrev() {
        track.scrollBy({
            left: -320,
            behavior: 'smooth'
        });
    }

    nextBtn.addEventListener('click', scrollNext);
    prevBtn.addEventListener('click', scrollPrev);

    // Auto-scroll every 4 seconds
    setInterval(() => {
        if (track.scrollLeft + track.clientWidth >= track.scrollWidth) {
            track.scrollTo({
                left: 0,
                behavior: 'smooth'
            });
        } else {
            scrollNext();
        }
    }, 4000);
</script>
@endsection