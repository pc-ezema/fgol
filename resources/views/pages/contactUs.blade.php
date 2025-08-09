@extends('layouts.frontend', ['title' => 'Contact Us'])

@section('page-content')
<main>
    <section class="contact-hero page-hero">
        <div class="container">
            <div class="contact-hero-content">
                <h2>Get in Touch<br />
                    with Us!</h2>
                <h3>Whether you&#8217;re interested in partnering with Bowles Farming Company or want to learn more about our
                    sustainable practices, we&#8217;re eager to connect with you.</h3>
            </div>
        </div>
        <div class="page-hero-background">
            <img src="https://placehold.co/1140x678" alt="Contact" class="img-fluid">
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
    <section class="section-action contact-location">
        <div class="container">
            <div class="section-action-content contact-location-content">
                <div class="content">
                    <h2>Contact us at:</h2>
                    <p><a href="../cdn-cgi/l/email-protection.html" class="__cf_email__"
                            data-cfemail="167f78707956747077647b3875797b">[email&#160;protected]</a></p>
                    <p>(209) 827-3000</p>
                    <p>11609 Hereford Rd,<br />
                        Los Banos, CA<br />
                        93635</p>
                </div>

                <ul class="contact-location-social">
                    <li>
                        <a href="https://www.instagram.com/bowlesfarming" title="Instagram" target="_blank"
                            class="footer-social-item">
                            <i class="fab fa-instagram" aria-hidden="true"></i> </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/BowlesFarming/" title="Facebook" target="_blank"
                            class="footer-social-item">
                            <i class="fab fa-facebook-square" aria-hidden="true"></i> </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/bowlesfarming?lang=en" title="Twiiter" target="_blank"
                            class="footer-social-item">
                            <i class="fab fa-twitter-square" aria-hidden="true"></i> </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC1L05VfDgAT4z5m3bEGE18Q" title="Youtube" target="_blank"
                            class="footer-social-item">
                            <i class="fab fa-youtube" aria-hidden="true"></i> </a>
                    </li>
                </ul>
            </div>
            <div class="section-action-image contact-location-image">
                <img data-src="https://bfarm.com/wp-content/uploads/2023/06/map-1.png" alt="" class="img-fluid defer">
            </div>
        </div>
        <div class="section-action-background">
            <img data-src="https://bfarm.com/wp-content/uploads/2023/06/map-bg.png" class="img-fluid defer">
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