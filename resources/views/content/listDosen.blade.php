@extends('template.layout')

@section('content')
@include('components.title')
<?php

use App\Http\Controllers\LandingPageController as LP; ?>
<!-- ##### Pimpinan Area Start ##### -->
<section class="team-area mt-5">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container-fluid">


    <style type="text/css">
    	body{margin-top:20px;}
.event-schedule-area .section-title .title-text {
    margin-bottom: 50px;
}

.event-schedule-area .tab-area .nav-tabs {
    border-bottom: inherit;
}

.event-schedule-area .tab-area .nav {
    border-bottom: inherit;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-top: 80px;
}

.event-schedule-area .tab-area .nav-item {
    margin-bottom: 75px;
}
.event-schedule-area .tab-area .nav-item .nav-link {
    text-align: center;
    font-size: 22px;
    color: #333;
    font-weight: 600;
    border-radius: inherit;
    border: inherit;
    padding: 0px;
    text-transform: capitalize !important;
}
.event-schedule-area .tab-area .nav-item .nav-link.active {
    color: #4125dd;
    background-color: transparent;
}

.event-schedule-area .tab-area .tab-content .table {
    margin-bottom: 0;
    width: 80%;
}
.event-schedule-area .tab-area .tab-content .table thead td,
.event-schedule-area .tab-area .tab-content .table thead th {
    border-bottom-width: 1px;
    font-size: 20px;
    font-weight: 600;
    color: #252525;
}
.event-schedule-area .tab-area .tab-content .table td,
.event-schedule-area .tab-area .tab-content .table th {
    border: 1px solid #b7b7b7;
    padding-left: 30px;
}
.event-schedule-area .tab-area .tab-content .table tbody th .heading,
.event-schedule-area .tab-area .tab-content .table tbody td .heading {
    font-size: 16px;
    text-transform: capitalize;
    margin-bottom: 16px;
    font-weight: 500;
    color: #252525;
    margin-bottom: 6px;
}
.event-schedule-area .tab-area .tab-content .table tbody th span,
.event-schedule-area .tab-area .tab-content .table tbody td span {
    color: #4125dd;
    font-size: 18px;
    text-transform: uppercase;
    margin-bottom: 6px;
    display: block;
}
.event-schedule-area .tab-area .tab-content .table tbody th span.date,
.event-schedule-area .tab-area .tab-content .table tbody td span.date {
    color: #656565;
    font-size: 14px;
    font-weight: 500;
    margin-top: 15px;
}
.event-schedule-area .tab-area .tab-content .table tbody th p {
    font-size: 14px;
    margin: 0;
    font-weight: normal;
}

.event-schedule-area-two .section-title .title-text h2 {
    margin: 0px 0 15px;
}

.event-schedule-area-two ul.custom-tab {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 30px;
}
.event-schedule-area-two ul.custom-tab li {
    margin-right: 70px;
    position: relative;
}
.event-schedule-area-two ul.custom-tab li a {
    color: #252525;
    font-size: 25px;
    line-height: 25px;
    font-weight: 600;
    text-transform: capitalize;
    padding: 35px 0;
    position: relative;
}
.event-schedule-area-two ul.custom-tab li a:hover:before {
    width: 100%;
}
.event-schedule-area-two ul.custom-tab li a:before {
    position: absolute;
    left: 0;
    bottom: 0;
    content: "";
    background: #4125dd;
    width: 0;
    height: 2px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
.event-schedule-area-two ul.custom-tab li a.active {
    color: #4125dd;
}

.event-schedule-area-two .primary-btn {
    margin-top: 40px;
}

.event-schedule-area-two .tab-content .table {
    -webkit-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
    margin-bottom: 0;
}
.event-schedule-area-two .tab-content .table thead {
    background-color: #007bff;
    color: #fff;
    font-size: 20px;
}
.event-schedule-area-two .tab-content .table thead tr th {
    padding: 20px;
    border: 0;
}
.event-schedule-area-two .tab-content .table tbody {
    background: #fff;
}
.event-schedule-area-two .tab-content .table tbody tr.inner-box {
    border-bottom: 1px solid #dee2e6;
}
.event-schedule-area-two .tab-content .table tbody tr th {
    border: 0;
    padding: 30px 20px;
    vertical-align: middle;
}
.event-schedule-area-two .tab-content .table tbody tr th .event-date {
    color: #252525;
    text-align: center;
}
.event-schedule-area-two .tab-content .table tbody tr th .event-date span {
    font-size: 50px;
    line-height: 50px;
    font-weight: normal;
}
.event-schedule-area-two .tab-content .table tbody tr td {
    padding: 30px 20px;
    vertical-align: middle;
}
.event-schedule-area-two .tab-content .table tbody tr td .r-no span {
    color: #252525;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap h3 a {
    font-size: 20px;
    line-height: 20px;
    color: #cf057c;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap h3 a:hover {
    color: #4125dd;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .categories {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin: 10px 0;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .categories a {
    color: #252525;
    font-size: 16px;
    margin-left: 10px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .categories a:before {
    content: "\f07b";
    font-family: fontawesome;
    padding-right: 5px;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .time span {
    color: #252525;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .organizers {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin: 10px 0;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .organizers a {
    color: #4125dd;
    font-size: 16px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .organizers a:hover {
    color: #4125dd;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-wrap .organizers a:before {
    content: "\f007";
    font-family: fontawesome;
    padding-right: 5px;
}
.event-schedule-area-two .tab-content .table tbody tr td .primary-btn {
    margin-top: 0;
    text-align: center;
}
.event-schedule-area-two .tab-content .table tbody tr td .event-img img {
    width: 100px;
    height: 100px;
    border-radius: 8px;
}

    </style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="event-schedule-area-two bg-color pad100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="title-text">
                        <h2>Faculty Members</h2>
                    </div>
                </div>
            </div>
            <!-- /.col end-->
        </div>
        <!-- row end-->
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav custom-tab" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="SI-tab active show" data-toggle="tab" href="#SI" role="tab" aria-controls="SI" aria-selected="false">Information Systems</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="IF-tab " data-toggle="tab" href="#IF" role="tab" aria-controls="IF" aria-selected="false">Informatics Engineering </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="general-tab " data-toggle="tab" href="#General" role="tab" aria-controls="General" aria-selected="false">Adjunct </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="SI" role="tabpanel" aria-labelledby="SI-tab">
                        <div class="table-responsive table-hover table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{asset("/assets/dosen/AR.jpg")}}" width="40%"></td>
                                        <td><h3>Assoc. Prof. Dr. Abdurrahman, M.T.</h3></td>
                                        <td>
                                            <span>Chairman</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> abdurrahman@stmik-bandung.ac.id</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/AR" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                      <tr>
                                        <td><img src="{{asset("/assets/dosen/YJ.jpg")}}" width="40%"></td>
                                        <td><h3>Yus Jayusman, M.T</h3></td>
                                        <td>
                                            <span>Vice Chairman of Student Affairs</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> yusjayusman@stmik-bandung.ac.id</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/YJ" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset("/assets/dosen/LA.jpg")}}" width="40%"></td>
                                        <td><h3>Linda Apriyanti, M.T</h3></td>
                                        <td>
                                            <span>Vice Chairman of Human Resources and Finance</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> lindaapriyanti@stmik-bandung.ac.id</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/LA" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset("/assets/dosen/UA.jpg")}}" width="40%"></td>
                                        <td><h3>Uro Abdul Rohim, M.T</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> uro@stmik-bandung.ac.id</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/UA" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                  
                                    <tr>
                                        <td><img src="{{asset("/assets/dosen/DV.jpg")}}" width="40%"></td>
                                        <td><h3>Dayanni Vera Versanika, M.Kom</h3></td>
                                        <td>
                                            <span>Head of LPPM</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> dayannivv@stmik-bandung.ac.id</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/DV" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset("/assets/dosen/DA.jpg")}}" width="40%"></td>
                                        <td><h3>Dedy Apriyadi, M.Si</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> dedyapriyadi@stmik-bandung.ac.id</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/DA" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset("/assets/dosen/HG.jpg")}}" width="40%"></td>
                                        <td><h3>Herna Gunawan, M.Si</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/HG" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="" width="40%"></td>
                                        <td><h3>Haris Gunawan, M.Si</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/HI" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="" width="40%"></td>
                                        <td><h3>Murlinah</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/MH" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="" width="40%"></td>
                                        <td><h3>Meidi Fransisca Siregar</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/MF" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="" width="40%"></td>
                                        <td><h3>Mira Sylvia Kasegrina Siregar</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/MS" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{asset("/assets/dosen/BF.jpg")}}" width="40%"></td>
                                        <td><h3>Bening Fathima Rabbaniya Amatillah</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> Bening@stmik-bandung.ac.id</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/BF" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                 
                                  

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="IF" role="tabpanel" aria-labelledby="IF-tab">
                        <div class="table-responsive table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                        <td><img src="{{asset("/assets/dosen/MN.jpg")}}" width="40%"></td>
                                        <td><h3>Mina Ismu Rahayu, M.T</h3></td>
                                        <td>
                                            <span>Head of the Study Program</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> mina@stmik-bandung.ac.id</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/MN" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                  <tr>
                                        <td><img src="{{asset("/assets/dosen/DP.jpg")}}" width="40%"></td>
                                        <td><h3>Dani Pradana Kartaputra, M.T</h3></td>
                                        <td>
                                            <span>Vice Chairman of Academic Affairs</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> dani.pradana@stmik-bandung.ac.id</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/DP" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                  <tr>
                                        <td><img src="" width="40%"></td>
                                        <td><h3>Rachmat Jaenal Abidin, M.T</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/RJ" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                  <tr>
                                        <td><img src="{{asset("/assets/dosen/EF.jpg")}}" width="40%"></td>
                                        <td><h3>Dr.Erfizal Fikri Yusmansyah, M.T</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/EF" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                  <tr>
                                        <td><img src="" width="40%"></td>
                                        <td><h3>Faiqunisa</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/FQ" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                  <tr>
                                        <td><img src="{{asset("/assets/dosen/KA.jpg")}}" width="40%"></td>
                                        <td><h3>Khoirida Aelani, M.T</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> khoirida@stmik-bandung.ac.id</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/KA" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                  <tr>
                                        <td><img src="" width="40%"></td>
                                        <td><h3>Agus Soepriadi</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/AS" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="General" role="tabpanel" aria-labelledby="general-tab">
                        <div class="table-responsive table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                        <td><img src="{{asset("/assets/dosen/LR.jpg")}}" width="40%"></td>
                                        <td><h3>Lia Rovianti, S.S</h3></td>
                                        <td>
                                            <span>An English lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> liarovianti@gmail.com</span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/LR" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                   <tr>
                                        <td><img src="{{asset("/assets/dosen/MM.jpg")}}" width="40%"></td>
                                        <td><h3>Drs. Mulyoto Marwan</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/MM" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                   <tr>
                                        <td><img src="" width="40%"></td>
                                        <td><h3>Drs. Lili Sukmana</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/LS" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                   <tr>
                                        <td><img src="{{asset("/assets/dosen/AL.jpg")}}" width="40%"></td>
                                        <td><h3>Dr.Ahmad Lukman Nugraha, M.A.</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/AL" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                   <tr>
                                        <td><img src="{{asset("/assets/dosen/KH.jpg")}}" width="40%"></td>
                                        <td><h3>Kushadoyo, S.T</h3></td>
                                        <td>
                                            <span>Lecturer</span><br>
                                            <span><i class="fa-solid fa-envelope"></i> </span> <br>
                                            <span><i class="fa-brands fa-linkedin"></i></span><br>
                                            <span><i class="fa-solid fa-book"></i></span>
                                        </td>
                                        <td><a href="/dosen/KH" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- /col end-->
        </div>
        <!-- /row end-->
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>


</section>
</br>

@endsection