@extends('layouts.frontend', ['title' => 'Contact Us'])

@section('page-content')
<main>
    <section class="contact-hero page-hero">
        <div class="container">
            <div class="contact-hero-content">
                <h2>Get in Touch<br />
                    with Us!</h2>
            </div>
        </div>
        <div class="page-hero-background">
            <img src="{{ url('assets/images/contact/contact-hero.jpeg')}}" alt="Contact" class="img-fluid">
        </div>
    </section>
    <section class="contact-form">
        <div class="container">
            <div class="content">
                <h2>Let&#8217;s Talk</h2>
            </div>
            <div class="contact-form-content">
                <div class="wpcf7 no-js" id="wpcf7-f414-o1" lang="en-US" dir="ltr" data-wpcf7-id="414">
                    <div id="formResponse"></div>

                    <form id="contactForm">
                        <!-- Honeypot -->
                        <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name" placeholder="Your name" maxlength="100" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" name="email" placeholder="Your email" maxlength="150" required>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input id="subject" type="text" name="subject" placeholder="Subject" maxlength="150">
                            </div>

                            <div class="form-group full-width">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" placeholder="Your message" rows="5" maxlength="1000"></textarea>
                            </div>

                            <input type="hidden" name="recaptcha_token" id="recaptchaToken">

                            <div class="form-group full-width">
                                <button type="submit" class="btn-submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-info-section">
        <div class="container">
            <div class="contact-info-content">
                <div class="contact-details">
                    <h2>Contact us at:</h2>
                    <p><strong>Email:</strong> sales@farmglobal.org</p>
                    <p><strong>Phone:</strong> +234 803 074 3653</p>
                    <p><strong>US Office:</strong> 337 N. Vineyard, 4th floor, Ontario, CA 91764</p>
                    <p><strong>Nigeria Office:</strong> Corporate Headquarters, Maitama, Abuja</p>

                    <ul class="contact-social-links">
                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

                <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.1051094874983!2d-117.61407942492333!3d34.0668197169615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c3345baa1bafe5%3A0x61670d2fa35a594c!2s337%20N%20Vineyard%20Ave%2C%20Ontario%2C%20CA%2091764%2C%20USA!5e0!3m2!1sen!2sng!4v1755256884553!5m2!1sen!2sng" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
jQuery(function($) {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        let $form = $(this);
        let $btn = $form.find('button[type="submit"]');
        let $response = $('#formResponse');

        $btn.prop('disabled', true).text('Sending...');

        $.ajax({
            url: '{{ url("/contact-submit") }}', // Laravel endpoint
            method: 'POST',
            data: $form.serialize(),
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            success: function(res) {
                if (res.status === 'success') {
                    $response.html(`<div class="alert alert-success">${res.message}</div>`);
                    $form[0].reset();
                } else {
                    $response.html(`<div class="alert alert-danger">${res.message}</div>`);
                }
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorMsg = Object.values(errors).map(e => `<li>${e[0]}</li>`).join('');
                    $response.html(`<div class="alert alert-danger"><ul>${errorMsg}</ul></div>`);
                } else {
                    $response.html(`<div class="alert alert-danger">Something went wrong.</div>`);
                }
            },
            complete: function() {
                $btn.prop('disabled', false).text('Send Message');
            }
        });
    });
});
</script>
@endsection