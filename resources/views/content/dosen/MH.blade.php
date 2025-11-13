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
                <h3 style="margin-top: 0px;margin-bottom: 0px;">Murlinah</h3>
			    <p style="margin-top: 0px;margin-bottom: 0px;">lecturer</p></label>
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung </p>
			    
                <!--<p style="margin-top: 0px;margin-bottom: 0px;"><b>Email : </b></p>-->
			    <!--<p style="margin-top: 0px;margin-bottom: 0px;"><b>Research : </b>Sistem Informasi Pelayanan dan Pelaporan tingkat kesehatan Gigi dan Mulut Studi Kasus UPTD Puskesmas Sindang Kasih Kabupaten Ciamis</p>-->
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Office Address : </b> Jl. Cikutra No. 113 Bandung, West Java, Indonesia</p>
				
			</div>
 
		</div>		
 
		<div class="blok">
			<h2>Profile</h2>
            <div>
                <ul>
                    <p></span></p>
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
                    <td>SI1101</td>
                    <td>Akuntansi</td>
                </tr>
                <tr>
                    <td>KU1102</td>
                    <td>Manajemen dan Perilaku Organisasi</td>
                </tr>
                <tr>
                    <td>KU1305</td>
                    <td>Kewirausahaan 1</td>
                </tr>
                <tr>
                    <td>KU1408</td>
                    <td>Kewirausahaan 2</td>
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
                    <td>1989</td>
                    <td>Bachelor of Economics at Universitas Islam Nusantara</td>
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
                    <td>PENERAPAN PEMBELAJARAN MESIN MENGGUNAKAN ALGORITMA REGRESI LINIER UNTUK PREDIKSI HARGA RUMAH</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>DETEKSI ALFABET BISINDO MENGGUNAKAN MEDIAPIPE HOLISTIC SECARA REAL-TIME	</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>IMPLEMENTASI ALGORITMA FUZZY C-MEANS PADA PENGELOMPOKAN SISWA PKL:(Studi Kasus: SMK MUTIARA SALAWU)	</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>SISTEM PENDUKUNG KEPUTUSAN PENENTUAN CALON KARYAWAN TETAP MENGGUNAKAN METODE SMART</td>
                </tr>
            </table>
        </div>
      </div>
</div>
	</div>-->

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