<?php

/**
 * Template Name: Referral
 */

/* Header */
get_header();

?>


<main>
    <section id="referral-page" class="referral-page">
        <div class="container-fluid">
            <div style="padding-top: 5rem;" class="row gradient">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <img class="thumb_icon" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/thumb_icon.svg" alt="thumb_icon">
                    <h2 class="section_title text-center py-4">
                        Referral Program
                    </h2>
                    <img class="stars" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/stars.svg" alt="stars">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <p class="section_subtitle pt-4">Do you know someone looking to change their tracking platform?</p>

                    <p>We’d love to talk to them! Refer them to vene dash and you’ll start earning referral fees for each new client that signs-up.</p>

                    <p class="section_subtitle pb-4 pt-5">Here are the steps to earn your referral bonus:</p>

                    <ol class="steps col">
                        <li class="pb-5">Submit your referral here. We will check if they are new to us internally and confirm with you within 1 business day.</li>
                        <li class="pb-5">Select your preferred outreach method. We will either reach out to them directly, or work with you for the referral partnership.</li>
                        <li class="pb-5">We will keep you informed on the status of the referral and are happy to chat about any requests.</li>
                        <li class="pb-5">You’ll start earning referral bonus, as soon as the referred client receives his first invoice! You will receive 50€ immediately after the first invoice is issued plus 10% of the monthly invoice amounts for the first year.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container-fluid form-section">
            <div class="container form-container">
                <div class="row py-5 m-0 px-0">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <p class="section_subtitle">
                            Conctact us!
                        </p>
                        <h1 class="section_title text-center">
                            Prospect You want to Refer
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form id="referral_form" class="row d-flex flex-row referral_form">

                            <div class="col-md-6">
                                <strong class="referral_form_heading">Your Referral:</strong>
                                <div class="form-group pt-2">
                                    <input type="text" placeholder="Referral's Name" class="form-control" id="referralsName" aria-describedby="referralsName">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Referral's Company Name" class="form-control" id="referralsCompanyName" aria-describedby="referralsCompanyName">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Referral's Email Adress" type="email" class="form-control" id="referralsEmailAddress" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Referral's Phone or Skype (Optional)" class="form-control" id="referralsPhoneSkype" aria-describedby="referralsPhoneSkype">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <strong class="referral_form_heading">Your Details:</strong>
                                <div class="form-group pt-2">
                                    <input type="text" placeholder="Your Name" class="form-control" id="yourName" aria-describedby="yourName">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Your Email Adress" type="email" class="form-control" id="yourEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Company Name" class="form-control" id="yourCompanyName" aria-describedby="yourCompanyName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="referral_form_heading">Your preferred outreach method</p>
                                <div class="custom-control custom-checkbox">
                                    <div class="form-check form-check-inline">

                                        <label class="form-check-label outreach-method-label" for="directly">
                                            <input type="radio" name="outreach-method" class="form-check-input" id="directly">
                                            <div class="outreach-method-img"></div>
                                            Directly
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">

                                        <label class="form-check-label outreach-method-label" for="throughMe">
                                            <input type="radio" name="outreach-method" class="form-check-input" id="throughMe">
                                            <div class="outreach-method-img"></div>
                                            Through Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button id="submit_form" class="btn big_cta custom_btn" type="submit">Submit</button>
                            </div>
                            <div class="form__message">
                                <img alt="Imagem de refresh" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/ring.svg" class="refresh">
                                <div class="alert alert-dark alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <p id="message_contact">Success!</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>