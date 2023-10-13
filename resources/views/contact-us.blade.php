@extends('layouts2.app')
@section('hfeed page-wrapper')
<style>
    .border {
        border: 1px solid black !important;
    }

    .button {
        color: #fff;
        background: #000;
        text-transform: uppercase;
        font-size: 14px;
    }
    .col{
    /* padding: 10px 30px; */
    align-items: center;
    margin-top: 10px;
    font-size: larger;
    font-weight: bold;
    }
    .left{
        margin-left: 18px;
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
            <section class="section section-padding background-img bg-img-2 p-t-70 p-b-50 m-b-70">
                <div class="section-container small">
                    <div class="block block-contact-form">
                        <div class="block-widget-wrap">
                            <div class="block-title">
                                <h2>{{ __('messages.Send Us Your Questions!') }}</h2>
                                <div class="sub-title">{{ __('messages.We’ll get back to you within two days.') }}</div>
                            </div>
                            <div class="block-content shop-cart">
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
                                                            <label class="required">{{ __('messages.Phone') }}</label><br>
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
                                                    <div class="form-button mt-2 button" style="margin-top: 10px;margin-left:138px;">
                                                        <input type="submit" value="Submit" class="button"></span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-4" style="margin-top: 108px;">
                                            <div class="cart-totals">
                                                
                                                <h2 class="text-center">{{ __('messages.CONTACT US') }}</h2>
                                                <div>
                                                    <div class="col">
                                                        <h3><i class="fa fa-map-marker" style="margin: 15px;"></i>{{ __('messages.Address') }}</h3>
                                                        <div class="left">{{ __('messages.104, Options Primo,Passport office lane, Near Seepz gate-no.2, MIDC,Andheri East,Mumbai-400093') }}</div>
                                                    </div>
                                                    <div class="col">
                                                        <h3><i class="fa fa-phone" style="margin: 15px;"></i>{{ __('messages.Phone') }}</h3>
                                                        <div class="left">

                                                            <p class="shipping-desc ">
                                                                +022-6236-2942
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h3><i class="fa fa-envelope" style="margin: 15px;"></i>Email</h3>
                                                        <div class="left">support@angirajewels.com</div>
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
            </section>
            


            <div id="content" class="site-content" role="main" style="margin-top: 20px;">
                <div class="page-contact">
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