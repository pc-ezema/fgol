@extends('layouts.frontend', ['title' => 'Careers']) 

@section('page-content')
<main>
    <section class="contact-hero page-hero" style="margin-bottom: 0px !important;">
        <div class="container">
            <div class="contact-hero-content">
                <h2>Join Us in <br />
                    Shaping Tomorrow</h2>
            </div>
        </div>
        <div class="page-hero-background">
            <img src="{{ url('assets/images/careers/career-hero.jpeg')}}" alt="Contact" class="img-fluid">
        </div>
    </section>

    <section class="career-about fade-in">
        <div class="container">
            <h2>Why Work With Us?</h2>
            <div class="benefits">
                <div class="benefit">
                    <h3>💡 Innovation</h3>
                    <p>Work on cutting-edge projects that make a real impact.</p>
                </div>
                <div class="benefit">
                    <h3>🌍 Diversity</h3>
                    <p>Be part of an inclusive team that values different perspectives.</p>
                </div>
                <div class="benefit">
                    <h3>📈 Growth</h3>
                    <p>We invest in your personal and professional development.</p>
                </div>
            </div>

            <div class="no-openings">
                <p>🚫 There are no job openings at the moment. Please check back later!</p>
            </div>
        </div>
    </section>
</main>
@endsection
