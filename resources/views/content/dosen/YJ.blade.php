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
				<img src="{{asset("/assets/dosen/YJ.jpg")}}">				
			</div>
 
			<div class="kanan">
                <h3 style="margin-top: 0px;margin-bottom: 0px;">Yus Jayusman, M.T</h3>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Assistant Professor</p></label>
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung </p>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Vice Chairman of Marketing, Student Affairs and Alumni at STMIK Bandung</p>
			    
                <p style="margin-top: 0px;margin-bottom: 0px;"><b>Email : </b>yusjayusman@stmik-bandung.ac.id</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Research : </b> Information Systems, IOT.</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Office Address : </b> Jl. Cikutra No. 113 Bandung, West Java, Indonesia</p>
				
			</div>
 
		</div>		
 
		<div class="blok">
			<h2>Profile</h2>
            <div>
                <ul>
                    <p>Yus Jayusman, currently continuing his studies in management at Trisakti University and in 2015 graduated with a Masters in Informatics Engineering from Langlangbuana University Bandung, currently serves as Deputy Chair 3 for Marketing, Student Affairs and Alumni at STMIK Bandung. With a background in Information Systems, Yus has succeeded in optimizing the management of Marketing, Student Affairs and Alumni at STMIK Bandung. His experience in research and development has made a significant contribution to improving the quality of education and research on campus.</span></p>
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
                    <td>SI1203</td>
                    <td>Proses Bisnis</td>
                </tr>
                <tr>
                    <td>SI1300</td>
                    <td>Mini Project 1</td>
                </tr>
                <tr>
                    <td>SI1400</td>
                    <td>Mini Project 2</td>
                </tr>
                <tr>
                    <td>KU1306</td>
                    <td>Manajemen Komunikasi</td>
                </tr>
                <tr>
                    <td>KU1305</td>
                    <td>Kewirausahaan 1/td>
                </tr>
                <tr>
                    <td>KD1518</td>
                    <td>Interaksi Manusia Dan Komputer</td>
                </tr>
                <tr>
                    <td>SI1811</td>
                    <td>Sistem Pendukung Keputusan & Injelijensia Bisnis</td>
                </tr>
                <tr>
                    <td>IF1406</td>
                    <td>Microcontroller Dan Iot</td>
                </tr>
                <tr>
                    <td>IF1001</td>
                    <td>Multimedia</td>
                </tr>
                <tr>
                    <td>IF1003</td>
                    <td>Sistem Robotika</td>
                </tr>
                <tr>
                    <td>KU1408</td>
                    <td>Kewirausahaan 2</td>
                </tr>   
                <tr>
                    <td>KD1726</td>
                    <td>Manajemen Proyek Teknologi Informasi</td>
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
                    <td>Now</td>
                    <td>Doctor (Research) of Management at Trisakti University</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>Master of Informatics Engineeting at Universitas Langlangbuana Bandung/td>
                </tr>
                <tr>
                    <td>2001</td>
                    <td>Bachelor of information Systems at STMIK Bandung </td>
                </tr>
            </table>
        </div>
      </div>
</div>
  
<div id="Journal" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2024</td>
                    <td>IMPLEMENTASI METODE SMART DALAM SISTEM PENDUKUNG KEPUTUSAN PENILAIAN PRETASI BELAJAR SISWA PADA SMK MANDIRI</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>SISTEM MONITORING PENGGUNAAN DAYA LISTRIK BERBASIS IOT STUDI KASUS PEMBAGIAN TAGIHAN LISTRIK PENGHUNI KOST</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>PROTOTYPE SMARTHOME BERBASIS INTERNET OF THINGS (IOT) </td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>SISTEM INFORMASI PENJADWALAN PROYEK MENGGUNAKAN METODE PERT (PROGRAM EVALUATION AND REVIEW TECHNIQUE) DI CV. INFOTECHMEDIA</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>SISTEM INFORMASI PENJUALAN DAN TABUNGAN HEWAN QURBAN (STUDI KASUS: DKM MASJID BAITIRRAHMAN)</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>SISTEM INFORMASI TINDAK LANJUT DATA CALON MAHASISWA PADA DIVISI MARKETING:(STUDI KASUS: STMIK BANDUNG)</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>SISTEM INFORMASI TINDAK LANJUT DATA CALON MAHASISWA PADA DIVISI MARKETING</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>E-LEARNING SEBAGAI MEDIA PEMBELAJARAN:(STUDI KASUS: STBA TECHNOCRAT TANGERANG)</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>SISTEM PANGKALAN DATA AKADEMIK (PDA:(STUDI KASUS: LEMBAGA PENDIDIKAN SMPIT INSAN MADANI)</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>SISTEM INFORMASI GEOGRAFIS SEBARAN PERUMAHAN DI KABUPATEN CIANJUR BERBASIS WEB</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>PERANCANGAN PROTOTYPE KENDALI LAMPU BERBASIS INTERNET OF THINGS (IOT) DENGAN NODEMCU ESP8266 DAN VOICE RECOGNITION PADA SMARTPHONE</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>E-LEARNING STMIK BANDUNG</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>APLIKASI PEMBELAJARAN DASAR BAHASA INGGRIS UNTUK ANAK DENGAN METODE PQRST BERBASIS MULTIMEDIA MOBILE</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>BUKU DONGENG TIMUN MAS BERBASIS AUGMENTED REALITY SEBAGAI MEDIA PEMBELAJARAN UNTUK ANAK</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>EVALUASI TATA KELOLA TEKNOLOGI INFORMASI DAN PERANCANGAN KEBIJAKAN EVALUASI TATA KELOLA TEKNOLOGI INFORMASI DAN PERANCANG</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>APLIKASI MULTIMEDIA BELAJAR BAHASA SUNDA BERBASIS ANDROID</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>EVALUASI TATA KELOLA TEKNOLOGI INFORMASI DAN PERANCANGAN KEBIJAKAN SISTEM MANAJEMEN KEAMANAN INFORMASI BERDASARKAN KERANGKA KERJA COBIT 5 DAN SNI ISO/IEC 27001 (STUDI KASUS …</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>SISTEM KEAMANAN SHORT MESSAGE SERVICE (SMS) MENGGUNAKAN ALGORITMA KRIPTOGRAFI RSA: PADA PLATFORM ANDROID</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>SISTEM SMART HOME PENGONTROL PERALATAN ELEKTRIK RUMAH MELALUI INTERNET BERBASIS RASPBERRY PI</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>DETEKSI JARI TANGAN BERBASIS KAMERA UNTUK PENGENDALIAN ALAT MUSIK ANGKLUNG</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>SISTEM PENJADWALAN MATA PELAJARAN SMK NURUL ISLAM</td>
                </tr>

            </table>
        </div>
      </div>
</div>
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