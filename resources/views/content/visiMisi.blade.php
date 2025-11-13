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
                    <h2>{{ __('lang.visimisi.judul') }}</h2>
                    <!--<center><h2>{{ __('lang.visimisi.subjudul') }}</h2></center>-->
                </div>
            </div>
            <div class="col-12">
                <div class="post-details-content mb-50">
                    <center>
                        <h2>{{ __('lang.visimisi.visi') }}</h2>
                    </center>
                    <p class="text-justify">{{ __('lang.visimisi.isivisi') }}</p>
                    <center>
                        <h2>{{ __('lang.visimisi.misi') }}</h2>
                    </center>
                    <p class="text-justify">{{ __('lang.visimisi.isimisi1') }}</p>
                    <p class="text-justify">{{ __('lang.visimisi.isimisi2') }}</p>
                    <p class="text-justify">{{ __('lang.visimisi.isimisi3') }}</p>
                    <center>
                        <h2>{{ __('lang.visimisi.tujuan') }}</h2>
                    </center>
                    <p class="text-justify">{{ __('lang.visimisi.isitujuan1') }}</p>
                    <p class="text-justify">{{ __('lang.visimisi.isitujuan2') }}</p>
                    <p class="text-justify">{{ __('lang.visimisi.isitujuan3') }}</p>
                    <p class="text-justify">{{ __('lang.visimisi.isitujuan4') }}</p>
                </div>
            </div>
            
        </div>
    </div>

</section>
<!-- ##### Post Details Area End ##### -->

@endsection
