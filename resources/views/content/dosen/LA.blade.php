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
				<img src="{{asset("/assets/dosen/LA.jpg")}}">				
			</div>
 
			<div class="kanan">
                <h3 style="margin-top: 0px;margin-bottom: 0px;">Linda Apriyanti, M.T</h3>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Assistant Professor</p></label>
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung </p>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Vice Chairman of Human Resources and Finance at STMIK Bandung</p>
			    
                <p style="margin-top: 0px;margin-bottom: 0px;"><b>Email : </b>lindaapriyanti@stmik-bandung.ac.id</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Research : </b> Information Systems</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Office Address : </b> Jl. Cikutra No. 113 Bandung, West Java, Indonesia</p>
				
			</div>
 
		</div>		
 
		<div class="blok">
			<h2>Profile</h2>
            <div>
                <ul>
                    <p>Linda Apriyanti, a Master of Informatics Engineering degree holder from Universitas Langlangbuana Bandung, currently serves as Deputy Chair 2 for Finance and Human Resources at STMIK Bandung.
With a background in Information Systems, Linda has successfully optimized financial and human resource management at STMIK Bandung. Her experience in research and development has contributed significantly to improving the quality of education and research on campus.</span></p>
                <button onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</button>
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
                <td>SI1102</td>
                    <td>Pengantar Sistem Informasi</td>
                </tr>
                <tr>
                <td>KD1207</td>
                    <td>Sistem Informasi Manajemen</td>
                </tr>
                <tr>
                <td>KD1103</td>
                    <td>Paket Aplikasi</td>
                </tr>
                <tr>
                <td>KU1306</td>
                    <td>Manajemen Komunikasi</td>
                </tr>
                <tr>
                <td>SI1203</td>
                    <td>Proses Bisnis</td>
                </tr>
                <tr>
                <td>SI1204</td>
                    <td>Bisnis Berbasis Elektronik</td>
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
                    <td>Master of Informatics Engineeting at Universitas Langlangbuana Bandung</td>
                </tr>
                <tr>
                    <td>2003</td>
                    <td>Bachelor of information Systems at STMIK Bandung<td>
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
                    <td>KLASIFIKASI AWAL PENANGANAN DIAGNOSA KESEHATAN MENTAL MAHASISWA MENGGUNAKAN METODE FORWARD CHAINING BERBASIS WEB (Studi Kasus di STAI Yapata Al-Jawami) </td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>APLIKASI PEMESANAN LAPANGAN BADMINTON DENGAN FITUR PEMBAYARAN BERBASIS ANDROID DI KOTA TANJUNGPINANG</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>KONSEP MANAJEMEN PROYEK SISTEM INFORMASI</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>SISTEM INFORMASI MANAJEMEN ASET DI STMIK BANDUNG</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>ANALISIS KEPUASAN PENGGUNA TERHADAP LAYANAN LEARNING MANAJEMEN SYSTEM STMIK BANDUNG MENGUNAKAN METODE SERVQUAL</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>SISTEM INFORMASI MONITORING KERJA PRAKTEK DAN SKRIPSI (STUDI KASUS: STMIK BANDUNG)</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>SISTEM INFORMASI PENGELOLAAN KIOS BERBASIS WEBSITE PADA POLI KIOS YOGYAKARTA</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>PROTOTYPE SMARTHOME BERBASIS INTERNET OF THINGS (IOT)</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>SISTEM INFORMASI RENTAL KAMERA BERBASIS WEB (STUDI KASUS SC STUDIO)</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>SISTEM PAKAR DIAGNOSA STRESS PADA MAHASISWA TINGKAT AKHIR DENGAN MENGGUNAKAN METODE CERTAINTY FACTOR BERBASIS ANDROID</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>SISTEM PAKAR DIAGNOSA STRESS PADA MAHASISWA TINGKAT AKHIR DENGAN MENGGUNAKAN METODE CERTAINTY FACTOR BERBASIS ANDROID</td>
                </tr>
                <tr>
                    <td>202</td>
                    <td>IMPLEMENTASI FREE OPEN SOURCE ENTERPRISE RESOURCE PLANNING (ERP) ODOO STUDI KASUS PMB STMIK BANDUN</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN PELAYANAN MARKETPLACE MENGGUNAKAN METODE MOORA</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>SISTEM INFORMASI INVENTARIS ASET BERBASIS WEB PADA PT. TEGUH METTA INTERNUSA BATAM</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>SISTEM REKOMENDASI PEMILIHAN SISWA BERPRESTASI MENGGUNAKAN METODE SIMPLE ADDITIVE WEIGHTING:(STUDI KASUS: SMK WIDYA KARYA PURWOKERTO)</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>E-LEARNING SEBAGAI MEDIA PEMBELAJARAN:(STUDI KASUS: STBA TECHNOCRAT TANGERANG)</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>‘SISTEM INFORMASI RESERVASI RESTORAN (STUDI KASUS: RESTORAN OMAHKU).’</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>SISTEM INFORMASI GEOGRAFIS (GIS) PENDISTRIBUSIAN DAGING QURBAN BERBASIS APLIKASI WEB</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>SISTEM INFORMASI PEMETAAN DATA ALUMNI DAN LOWONGAN KERJA: STUDI KASUS: SMK NURUL ISLAM CIANJUR</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>SISTEM PENDUKUNG KEPUTUSAN UNTUK KELAYAKAN KELANJUTAN PENERIMAAN BEASISWA MENGGUNAKAN METODE ANALYTICAL HIERARCY PROCESS (AHP): STUDI KASUS: SMK PADAKEMBANG</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>SISTEM INFORMASI BURSA KERJA KHUSUS (BKK): STUDI KASUS: SMK PADAKEMBANG</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>APLIKASI UJIAN SELEKSI MASUK MAHASISWA BARU: STUDI KASUS: KAMPUS STMIK BANDUNG</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>SISTEM INFORMASI BURSA KERJA KHUSUS (BKK): STUDI KASUS: SMK PADAKEMBANG</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>PENGEMBANGAN MEDIA PEMBELAJARAN TEKS DESKRIPSI BERBASIS MULTIMEDIA INTERAKTIF UNTUK SISWA KELAS VII</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>APLIKASI MOBILE PENGELOLAAN KALORI HARIAN UNTUK PENDERITA OBESITAS</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>PEMBANGUNAN E-COMMERCE DISTRO IT UNTUK FASHION: DI TOKO DEFFA COLLECTION</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>SISTEM INFORMASI PENGHITUNGAN ESTIMASI HASIL PANEN TANAMAN PADI: DI BADAN PENYULUHAN PERTANIAN (BPP)</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>TINDAK TUTUR ASERTIF PENJUAL DAN PEMBELI DI PASAR TEMPEL RAJABASA DAN IMPLIKASINYA</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>ANALISA DAN PERANCANGAN SISTEM INFORMASI INVENTORY BAHAN SEPATU: DI PT PRATAMA ABADI INDUSTRI</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>SISTEM INFORMASI PREDIKSI DAN REKOMENDASI LAYAK TANAM</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>PENILAIAN TINGKAT EFEKTIVITAS PENERAPAN KEAMANAN SISTEM INFORMASI MENGGUNAKAN ISO/IEC 27004: 2009 DAN ISO/SNI 27001: 2009 (STUDI</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>MAPPING DAN SCHEDULLING INFORMASI SEKOLAH MENENGAH KEJURUAN DALAM MENINGKATKAN PELAYANAN SEKOLAH BERBASIS WEB</td>
                </tr>

                <tr>
                    <td>2016</td>
                    <td>PENILAIAN TINGKAT EFEKTIVITAS PENERAPAN KEAMANAN SISTEM INFORMASI MENGGUNAKAN ISO/IEC 27004: 2009 DAN ISO/SNI 27001: 2009</td>
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