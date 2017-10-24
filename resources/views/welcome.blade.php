@extends('templates.layouts.master')

@section('content')
    @include('templates.homepage.image-carousel')

    @include('templates.partials.wide-marketing-a-section')

    <div class="_spacer_down_10"></div>

    <div class="container">
        <div class="section-products">
            <div class="w3-card-4">
                <div class="card_img-anchor">
                    <img src="/images/homepage/baseEngine.jpeg" alt="Norway">
                </div>
                <div class="w3-center w3-row-padding">
                    <p class="card_title">Customised Wedding Invitation Card</p>
                    <p class="card_price">Starting from 1,350.00</p>
                </div>
            </div>
            <div class="w3-card-4">
                <div class="card_img-anchor">
                    <img src="/images/homepage/newEngineLoading.jpeg" alt="Loading Engine">
                </div>
                <div class="w3-center w3-row-padding">
                    <p class="card_title">Customised Wedding Invitation Card</p>
                    <p class="card_price">Starting from 1,350.00</p>
                </div>
            </div>
            <div class="w3-card-4">
                <div class="card_img-anchor">
                    <img src="/images/homepage/baseEngine2.jpeg" alt="Norway">
                </div>
                <div class="w3-center w3-row-padding">
                    <p class="card_title">Customised Wedding Invitation Card</p>
                    <p class="card_price">Starting from 1,350.00</p>
                </div>
            </div>
        </div>
    </div>

    <div class="_spacer_down_10"></div>

    <div class="container">
        <div class="card_weprint floating">
        </div>
    </div>

    <div class="_spacer_down_10"></div>

    @include('templates.partials.wide-newsletter-section')
@endsection
