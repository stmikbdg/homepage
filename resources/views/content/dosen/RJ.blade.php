@extends('template.layout')

@section('content')
@include('components.title')
<?php

use App\Http\Controllers\LandingPageController as LP; ?>
<body>
     <style>
 
th{
	text-align: left;
}
 
 
.kotak{
	border: 1px solid black;
	width: 60%;
	margin: 10px auto;
	padding: 20px;
}
 
 
.blok{
	overflow: hidden;
}
 
.kiri{
	width: 20%;
	float: left;
}
 
.kanan{
	width: 70%;
	padding:0px 20px;	
	float: left;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #0213fc;
  color: white;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #f7cb0a;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
#more {display: none;}
 
@media only screen and (max-width: 768px) {
	.kotak{
		width: 100%;
		padding: 0px;
		border: none;
	}
	
	.kiri{
		width: 100%;
	}
 
	.kanan{
		width: 100%;
		padding: 0;
	}
}
    </style>
	<div class="kotak">
 
		<div class="blok">		
			
			<div class="kiri">
				<!--<img src="{{asset("/assets/dosen/YJ.jpg")}}">-->				
			</div>
 
			<div class="kanan">
                <h3 style="margin-top: 0px;margin-bottom: 0px;">Rachmat Jaenal Abidin, M.T</h3>
			    <p style="margin-top: 0px;margin-bottom: 0px;"></p></label>
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung </p>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Lecturer at STMIK Bandung</p>
			    
                <!--<p style="margin-top: 0px;margin-bottom: 0px;"><b>Email : </b> - </p>-->
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Research : </b> APLIKASI MEDIA PEMBELAJARAN KISAH NABI DAN RASUL BERGELAR ULUL AZMI BERBASIS ANDROID (STUDI KASUS : MI TANWIRIYYAH). </p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Office Address : </b> Jl. Cikutra No. 113 Bandung, West Java, Indonesia</p>
				
			</div>
 
		</div>		
 
		<div class="blok">
			<h2>Profile</h2>
            <div>
                <ul>
                    <p> - </span></p>
                <!--<button onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</button>-->
                </ul>
            </div>			
		</div>
		<br>
		<div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Teaching')">Teaching</button>
            <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
            <button class="tablinks" onclick="openCity(event, 'Journal')" id="defaultOpen">Journal Articles</button>
         </div>

        
 <div id="Teaching" class="tabcontent">
    <div class="blok">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>KD1624</td>
                    <td>Sistem Pengamanan Komputer</td>
                </tr>
                <tr>
                    <td>KD1313</td>
                    <td>Sistem Operasi</td>
                </tr>
                <tr>
                    <td>KD1311</td>
                    <td>Pemrograman 3</td>
                </tr>
                <tr>
                    <td>KD1104</td>
                    <td>Pemrograman 1</td>
                </tr>
                <tr>
                    <td>KD1309</td>
                    <td>Komunikasi Data dan Jaringan</td>
                </tr>
                <tr>
                    <td>KD1624</td>
                    <td>Sistem Pengamanan Komputer</td>
                </tr>
                <tr>
                    <td>IF2303</td>
                    <td>Arsitektur Komputer</td>
                </tr>
                <tr>
                    <td>KD1519</td>
                    <td>Pemrograman 5</td>
                </tr>
                <tr>
                    <td>KU1305</td>
                    <td>Kewirausahaan 1</td>
                </tr>
            </table>
            
        </div>

    </div>
</div>
  
<div id="Education" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2015</td>
                    <td>Master of Engineering at Universitas Langlang Buana </td>
                </tr>
                <tr>
                    <td> 2010 </td>
                    <td> Bachelor of Engineering at Universitas Islam Negri Sunan Gunung Djati </td>
                </tr>
            </table>
        </div>
      </div>
</div>
  
<!--<div id="Journal" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2024</td>
                    <td>Organizational Leadership Strategies in Improving the Quality of School Education in the Digital Era </td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN BIBIT KELAPA SAWIT MENGGUNAKAN METODE PREFERENCE SELECTION INDEX (PSI)(Studi Kasus : PT Pinang Waitmas Sejati) </td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>Implementasi Standar Pendidikan Tingkat SMP/MTs di MTs Al Ihsan Baleendah </td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>Measuring Internal Customer Satisfaction Using Net Promoter Score: Case Study on Digital Product </td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>IMPLEMENTASI AUGMENTED REALITY SEBAGAI PANDUAN MAHASISWA DALAM KEGIATAN AKADEMIK: DI STMIK BANDUNG </td>
                </tr>

            </table>
        </div>
      </div>
</div>-->
	</div>

    <script>
    document.getElementById("defaultOpen").click();
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                 tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
             }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more"; 
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less"; 
                moreText.style.display = "inline";
            }
        }
        </script>
</body>

@endsection