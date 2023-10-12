@extends('layouts2.app')
@section('hfeed page-wrapper')
<style>
    .border{
        border: 1px solid black !important;
    }
    .button {
        color: #fff;
        background: #000;
        text-transform: uppercase;
        font-size: 14px;
    }
    </style>
<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            {{ __('messages.CONTACT US') }}
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="index.html">{{ __('messages.HOME') }}</a><span class="delimiter"></span> {{ __('messages.CONTACT US') }}
                    </div>
                </div>
            </div>
            <!-- <section class="section section-padding background-img bg-img-7 p-t-70 p-b-70 m-b-0">
                <div class="section-container small">
                    <div class="block block-contact-form">
                        <div class="block-widget-wrap">
                            <div class="block-title">
                                <h2>Send Us Your Questions!</h2>
                                <div class="sub-title">We’ll get back to you within two days.</div>
                            </div>
                            <div class="block-content">
                                <form action="#" method="post" class="contact-form" novalidate="novalidate">
                                    <div class="contact-us-form">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <label class="required">Name</label><br>
                                                <span class="form-control-wrap">
                                                    <input type="text" name="name" value="" size="40" class="form-control" aria-required="true">
                                                </span>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <label class="required">Email</label><br>
                                                <span class="form-control-wrap">
                                                    <input type="email" name="email" value="" size="40" class="form-control" aria-required="true">
                                                </span>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="required">Message</label><br>
                                                <span class="form-control-wrap">
                                                    <textarea name="message" cols="40" rows="10" class="form-control" aria-required="true"></textarea>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-button">
                                            <input type="submit" value="Submit" class="button"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <div id="content" class="site-content" role="main">
                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="shop-cart">
                            <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                                    <h2>{{ __('messages.Tell Us Your Message') }}</h2>
                                    <form action="#" method="post" class="contact-form" novalidate="novalidate">
                                        <div class="contact-us-form">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-6">
                                                    <label class="required">{{ __('messages.Name') }}</label><br>
                                                    <span class="form-control-wrap">
                                                        <input type="text" name="name" value="" size="40" class="form-control  border" aria-required="true">
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-10 col-md-6">
                                                    <label class="required">{{ __('messages.Email') }}</label><br>
                                                    <span class="form-control-wrap">
                                                        <input type="email" name="email" value="" size="40" class="form-control  border" aria-required="true">
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-10 col-md-6">
                                                    <label class="required">{{ __('messages.Message') }}</label><br>
                                                    <span class="form-control-wrap">
                                                        <textarea name="message" cols="40" rows="5" class="form-control border" aria-required="true"></textarea>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-button mt-2 button" style="margin-top: 10px;">
                                                <input type="submit" value="Submit" class="button"></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-12" style="margin-top: 45px;">
                                    <div class="cart-totals">
                                        <h2 class="text-center">{{ __('messages.CONTACT US') }}</h2>
                                        <div>
                                            <div class="cart-subtotal">
                                                <div class="title">{{ __('messages.Address') }}</div>
                                                <div>{{ __('messages.104, Options Primo,Passport office lane, Near Seepz gate-no.2, MIDC,Andheri East,Mumbai-400093') }}</div>
                                            </div>
                                            <div class="shipping-totals">
                                                <div class="title">{{ __('messages.Phone') }}</div>
                                                <div>
                                                    
                                                    <p class="shipping-desc">
                                                    +022-6236-2942
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="order-total">
                                                <div class="title">Email</div>
                                                <div>support@angirajewels.com</div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
            </div>

            
            <div id="content" class="site-content" role="main" style="margin-top: 20px;">
                <div class="page-contact">


                    <!-- <section class="section section-padding m-b-70">
                        <div class="section-container">
                          
                            <div class="block block-contact-info">
                                <div class="block-widget-wrap">
                                   
                                    <div class="info-title">
                                        <h2>Need Help?</h2>
                                    </div>
                                    <div class="info-items">
                                        <div class="row">
                                            <div class="col-md-4 sm-m-b-30">
                                                <div class="info-item">
                                                    <div class="item-tilte">
                                                        <h2>Phone</h2>
                                                    </div>
                                                    <div class="item-content">
                                                        810.222.5439
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 sm-m-b-30">
                                                <div class="info-item">
                                                    <div class="item-tilte">
                                                        <h2>Customer Service</h2>
                                                    </div>
                                                    <div class="item-content">
                                                        <p>Monday to Friday</p>
                                                        <p>8:00am – 4:00pm Sydney, NSW time (UTC +10)</p>
                                                        <p>Saturday and Sunday closed</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="info-item">
                                                    <div class="item-tilte">
                                                        <h2>Returns</h2>
                                                    </div>
                                                    <div class="item-content small-width">
                                                        For information on Returns and Refunds, please click <a href="#">here.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->

                    <section class="section section-padding">
                        <div class="section-container small">
                            <!-- Block Contact Map -->
                            <div class="block block-contact-map">
                                <div class="block-widget-wrap">
                                    <iframe src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" aria-label="London Eye, London, United Kingdom"></iframe>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection