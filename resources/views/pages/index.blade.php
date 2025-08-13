@extends('layouts.frontend', ['title' => 'Welcome to Farming Global Operations Limited'])

@section('page-content')
<main>
    <section class="home-hero page-hero">
        <div class="slider">
            <!-- Slide 1 -->
            <div class="slide active">
                <div class="container">
                    <div class="home-hero-content">
                        <h2>Revolutionizing Global Agriculture <br />from the Heart of Africa</h2>
                        <h3><i>Where Vision Meets Harvest</i></h3>
                    </div>
                </div>
                <div class="page-hero-background">
                    <img src="{{ url('assets/images/index/hero-background-one.jpeg')}}" alt="Home" class="img-fluid">
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide">
                <div class="container">
                    <div class="home-hero-content">
                        <h2>Empowering Farmers <br />With Technology</h2>
                        <h3><i>Innovation in Every Seed</i></h3>
                    </div>
                </div>
                <div class="page-hero-background">
                    <img src="{{ url('assets/images/index/hero-background-two.jpeg')}}" alt="Home" class="img-fluid">
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide">
                <div class="container">
                    <div class="home-hero-content">
                        <h2>Sustainable Growth <br />for Future Generations</h2>
                        <h3><i>Harvesting Dreams, Sustaining Lives</i></h3>
                    </div>
                </div>
                <div class="page-hero-background">
                    <img src="{{ url('assets/images/index/hero-background-three.jpeg')}}" alt="Home" class="img-fluid">
                </div>
            </div>

            <!-- Navigation -->
            <div class="slider-nav">
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>
        </div>
    </section>

    <section class="home-content">
        <div class="container">
            <p>Premium agricultural investments rooted in Nigeria's fertile landscape. Farming Global Operating Limited transforms traditional farming into sophisticated agribusiness ventures that deliver exceptional returns while nurturing food security across West Africa.</p>
        </div>
    </section>
    <section class="home-info">
        <div class="container">
            <div class="home-info-item">
                <figure class="home-info-item-image">
                    <img data-animate-image data-src="{{ url('assets/images/index/era.jpeg')}}" alt="" class="img-fluid defer">
                    <h2>New Era Of Agriculture</h2>
                </figure>
                <div class="content">
                    <h2>Transforming Tradition into Technological Excellence</h2>
                    <p>Africa stands at the threshold of its greatest agricultural revolution.</p>
                </div>
            </div>
            <div class="home-info-item">
                <figure class="home-info-item-image">
                    <img data-animate-image data-src="{{ url('assets/images/index/renewable-energy.jpeg')}}" alt="" class="img-fluid defer">
                    <h2>Renewable Energy</h2>
                </figure>
                <div class="content">
                    <h2>Energy Independence Drives Investment Excellence</h2>
                    <p>Farm Global Operations Limited has integrated renewable energy infrastructure that generates over 12MW of clean power across our operations, creating multiple revenue streams while significantly cutting operational costs.</p>
                </div>
            </div>
            <div class="home-info-item">
                <figure class="home-info-item-image">
                    <img data-animate-image data-src="{{ url('assets/images/index/the-land.jpeg')}}" alt="" class="img-fluid defer">
                    <h2>The Land</h2>
                </figure>
                <div class="content">
                    <h2>Preserve. Enhance. Multiply</h2>
                    <p>Our meticulously selected 500,000+ hectares span Nigeria's most fertile agricultural zones, strategically positioned along transportation corridors that connect directly to Lagos ports and international markets.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-action commitment-action">
        <div class="container">
            <div class="section-action-content commitment-action-content">
                <div class="content">
                    <h2>Farmers & Stakeholders Empowerment</h2>
                    <p>our success is rooted in our commitment to elevating every stakeholder in our agricultural ecosystem. We don't just employ farmers—we transform them into agricultural entrepreneurs and equity partners. Our comprehensive empowerment programs create wealth that extends far beyond our immediate operations.</p>
                </div>
            </div>
            <!-- <div class="section-action-image commitment-action-image">
                <img data-src="https://placehold.co/1902x1059" alt="" class="img-fluid defer">
            </div> -->
        </div>
        <div class="section-action-background">
            <img data-src="{{ url('assets/images/index/farmers-and-stakeholders-empowerment.jpeg')}}" class="img-fluid defer">
        </div>
    </section>
    <section class="home-quality" id="businessSegment" style="padding-top: 1.5rem;">
        <div style="text-align: center; margin-top: 60px;">
            <div class="content">
                <h2 style="color: #fff; font-size: 38px;">Our Business Segment</h2>
            </div>
        </div>
        <div class="container">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/index/crop-production.jpeg');">
                        <span>Crop Production</span>
                    </div>
                    <div class="flip-card-back">
                        <h3>Crop Production</h3>
                        <p>Large-scale cultivation of cereals, cash crops, and horticulture across 250,000+ acres with precision agriculture technology.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/index/medicinal-crops.jpeg');">
                        <span>Medicinal Crops</span>
                    </div>
                    <div class="flip-card-back">
                        <h3>Medicinal Crops</h3>
                        <p>Specialized cultivation of pharmaceutical plants including artemisia, moringa, and ginger for global health markets.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/index/livestock-and-dairy.jpeg');">
                        <span>Livestock & Dairy</span>
                    </div>
                    <div class="flip-card-back">
                        <h3>Livestock & Dairy</h3>
                        <p>Integrated animal production including cattle ranching, poultry farming, and aquaculture with modern facilities.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/index/sustainable-mining.jpeg');">
                        <span>Sustainable Mining</span>
                    </div>
                    <div class="flip-card-back">
                        <h3>Sustainable Mining</h3>
                        <p>Responsible extraction of minerals that support agricultural operations while maintaining environmental standards.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/index/agtech-innovation.jpeg');">
                        <span>AgTech Innovation</span>
                    </div>
                    <div class="flip-card-back">
                        <h3>AgTech Innovation</h3>
                        <p>Cutting-edge agricultural technology including AI, drones, and IoT sensors for precision farming and optimization.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/index/supply-chain.jpeg');">
                        <span>Supply Chain</span>
                    </div>
                    <div class="flip-card-back">
                        <h3>Supply Chain</h3>
                        <p>Integrated logistics and processing facilities ensuring farm-to-market efficiency with global distribution networks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-action home-action--company">
        <div class="container">
            <div class="home-action-content">
                <div class="content">
                    <h2>Our Priorities</h2>
                    <p>Our success is rooted in our commitment to elevating every stakeholder in our agricultural ecosystem. We don't just employ farmers—we transform them into agricultural entrepreneurs and equity partners. Our comprehensive empowerment programs create wealth that extends far beyond our immediate operations.</p>
                </div>
            </div>
        </div>
        <div class="home-action-background">
            <img data-src="{{ url('assets/images/index/our-priorities.jpeg')}}" class="img-fluid defer">
        </div>
    </section>
</main>

<script>
    let slides = document.querySelectorAll(".slide");
    let currentIndex = 0;
    let slideInterval = setInterval(nextSlide, 5000); // Auto slide every 5s

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove("active"));
        slides[index].classList.add("active");
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    document.querySelector(".next").addEventListener("click", () => {
        nextSlide();
        resetTimer();
    });

    document.querySelector(".prev").addEventListener("click", () => {
        prevSlide();
        resetTimer();
    });

    function resetTimer() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 5000);
    }
</script>
@endsection