@extends('template.layout')

@section('content')
<style>
    .box-child {
        height: auto;
    }

    .box-child a {
        color: white;
    }

    .box-child:hover {
        background: #003679;
    }

    .box-child a:hover {
        color: whitesmoke;
    }

    .box-child a div {
        font-size: 16px;
        font-weight: bold;
    }
</style>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{ asset('assets/img/bg-img/stmikbdg-bg1.jpg') }}); height: 20vh;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>{{ $title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $kategori }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-news-area mt-5">
    <div class="container">
        <?php
        $value_box_univ = array(
            array('Akreditasi STMIK Bandung (2018)', '27 November 2018', 'https://drive.google.com/file/d/13k-qtnSCKS93ccpebKX2x42Hdqkt20qY/view?usp=sharing'),
            array('Akreditasi STMIK Bandung (2022)', '21 September 2022', 'https://drive.google.com/file/d/1mRGk8ZWC5BcT55B4Oe1sOEQYwhGNC4V4/view?usp=drive_link'),
            array('Akreditasi STMIK Bandung (2023)', '14 November 2023', 'https://drive.google.com/file/d/1vHZah4W_XXQBmvra-KixwO4qo6vI6NrC/view?usp=sharing')
        );
        $value_box_if = array(
            array('Akreditasi Teknik Informatika (2000)', '10 Agustus 2000', 'https://drive.google.com/file/d/13DS85fC8oEOnnzChPhJs0sthTW6NIIgR/view?usp=sharing'),
            array('Akreditasi Teknik Informatika (2008)', '20 Juni 2008', 'https://drive.google.com/file/d/129lfMPmnFQeEDkzEHWIylzWZgKg9kdPC/view?usp=sharing'),
            array('Akreditasi Teknik Informatika (2014)', '08 Desember 2014', 'https://drive.google.com/file/d/17yVQZLmW9qbqQE5Ay4H5uRZHBB1o6jeS/view?usp=sharing'),
            array('Akreditasi Teknik Informatika (2017)', '05 Desember 2017', 'https://drive.google.com/file/d/1qpCSGgpGFuFlAhTqKiPV0zZQvJNEEfN-/view?usp=sharing'),
            array('Akreditasi Teknik Informatika (2022)', '12 Desember 2022', 'https://drive.google.com/file/d/1CppOXS_RvHsCRZE3IM6xwO6xKpPUWQKf/view?usp=sharing')
        );
        $value_box_si = array(
            array('Akreditasi Sistem Informasi (2008)', '31 Mei 2008', 'https://drive.google.com/file/d/1KKDcwAeQSqlcg0UWzCrrQoF_K_xa2FIX/view?usp=sharing'),
            array('Akreditasi Sistem Informasi (2014)', '08 Desember 2014', 'https://drive.google.com/file/d/1ZMXX7-qk4jt4xSp7l8N3u2KQe18ld8NE/view?usp=sharing'),
            array('Akreditasi Sistem Informasi (2018)', '09 Januari 2018', 'https://drive.google.com/file/d/1Uev6JV3qBWMTaaPt0VNRy2i8_0yWQla6/view?usp=sharing'),
            array('Akreditasi Sistem Informasi (2023) Revisi', '19 oktober 2023', 'https://drive.google.com/file/d/1ff1_F6rDIVEkyIQMVR354riatXuNyGwJ/view?usp=sharing'),
        );
        $value_box_mi = array(
            array('Akreditasi Manajemen Informatika (2000)', '10 Agustus 2000', 'https://drive.google.com/file/d/1uU3GcrZeIhjrJa46j80yi9Hi87b3IhyC/view?usp=sharing')
        );
        ?>

        <div class="row mb-100">
            <!-- Post Details Content Area -->
            <div class="col-12">
                <div class="post-details-content mb-50">
                    <div class="row justify-content-center mx-1">
                        <!-- Universitas -->
                        <?php for ($i = 0; $i < count($value_box_univ); $i++) { ?>
                            <div class="col-12 my-1 py-2 border box-child bg-yellow">
                                <a target="_blank" href="{{ $value_box_univ[$i][2] }}">
                                    <div>{{ $value_box_univ[$i][0] }}</div>
                                    {{ $value_box_univ[$i][1] }}
                                </a>
                            </div>
                        <?php } ?>
                        <!-- IF -->
                        <div class="col-12">
                            <div class="section-heading text-center mt-50">
                                <div class="line"></div>
                                <h4>Teknik Informatika</h4>
                            </div>
                        </div>
                        <?php for ($i = 0; $i < count($value_box_if); $i++) { ?>
                            <div class="col-12 my-1 py-2 border box-child bg-yellow">
                                <a target="_blank" href="{{ $value_box_if[$i][2] }}">
                                    <div>{{ $value_box_if[$i][0] }}</div>
                                    {{ $value_box_if[$i][1] }}
                                </a>
                            </div>
                        <?php } ?>
                        <!-- SI -->
                        <div class="col-12">
                            <div class="section-heading text-center mt-50">
                                <div class="line"></div>
                                <h4>Sistem Informasi</h4>
                            </div>
                        </div>
                        <?php for ($i = 0; $i < count($value_box_mi); $i++) { ?>
                            <div class="col-12 my-1 py-2 border box-child bg-yellow">
                                <a target="_blank" href="{{ $value_box_mi[$i][2] }}">
                                    <div>{{ $value_box_mi[$i][0] }}</div>
                                    {{ $value_box_mi[$i][1] }}
                                </a>
                            </div>
                        <?php } ?>
                        <?php for ($i = 0; $i < count($value_box_si); $i++) { ?>
                            <div class="col-12 my-1 py-2 border box-child bg-yellow">
                                <a target="_blank" href="{{ $value_box_si[$i][2] }}">
                                    <div>{{ $value_box_si[$i][0] }}</div>
                                    {{ $value_box_si[$i][1] }}
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->

@endsection