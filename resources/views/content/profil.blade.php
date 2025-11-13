@extends('template.layout')

@section('content')
@include('components.title')
<!-- ##### Post Details Area Start ##### -->
<section class="post-news-area mt-5">
    <div class="container">
        <div class="row mb-100">
            <!-- Post Details Content Area -->
            <div class="col-12 col-md-2">
                <div class="post-details-content">
                    <img src="{{ asset('assets/img/core-img/logo-big.png') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-10">
                <div class="post-details-content">
                    <h2>{{ __('lang.history.judul') }}</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="post-details-content mb-50">
                    <p class="text-justify">{{ __('lang.history.l1') }}
                    </p>
                    <p class="text-justify">{{ __('lang.history.l2') }}</p>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->

@endsection
