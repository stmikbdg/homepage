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
				<img src="{{asset("/assets/dosen/MN.jpg")}}">				
			</div>
 
			<div class="kanan">
                <h3 style="margin-top: 0px;margin-bottom: 0px;">Mina Ismu Rahayu, M.T</h3>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Lecturer</p></label>
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Head of Informatics Engineering and Information Systems Study Program of STMIK Bandung</p>
			    
                <p style="margin-top: 0px;margin-bottom: 0px;"><b>Email : </b>mina@stmik-bandung.ac.id</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Research : </b> Artificial Intelligence, Data Mining.</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Office Address : </b> Jl. Cikutra No. 113 Bandung, West Java, Indonesia</p>
				
			</div>
 
		</div>		
 
		<div class="blok">
			<h2>Profile</h2>
            <div>
                <ul>
                    <p>Mina Ismu Rahayu who is currently continuing her Doctoral Degree studies – Bandung Institute of Technology – Electrical engineering and Informatics and graduated with a Masters in Informatics Engineering from Bandung Institute of Technology in 2010, currently serves as Head of the Informatics Engineering and Information Systems Study Program at STMIK Bandung. With a background in Informatics Engineering, Mina has succeeded in optimizing the management of the Study Program at STMIK Bandung. Her experience in research and development has made a significant contribution to improving the quality of education and research on campus.</p>
                    <!--<button onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</button>-->
                </ul>
            </div>			
		</div>
		<br>
		<div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Teaching')">Teaching</button>
            <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
            <button class="tablinks" onclick="openCity(event, 'Journal')" id="defaultOpen">Journal Articles</button>
            <button class="tablinks" onclick="openCity(event, 'PMO')">PMO & Project</button>
         </div>

        
 <div id="Teaching" class="tabcontent">
    <div class="blok">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2005 - 2011</td>    
                    <td>Tenured Faculty - STMIK Bandung Bali</td>
                </tr>
                <tr>
                    <td>2007 – 2011</td>    
                    <td>Tenure-track Faculty – STMIK Bandung</td>
                </tr>
                <tr>
                    <td>2010</td>    
                    <td>Tenure-track Faculty - Universitas Komputer</td>
                </tr>
                <tr>
                    <td>2011</td>    
                    <td>Tenure-track Faculty - STT Telkom </td>
                </tr>
                <tr>
                    <td>2012 - Now</td>    
                    <td>Tenured Faculty - STMIK Bandung</td>
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
                    <td>2001 - 2005</td>    
                    <td>Bachelor Degree – STMIK Bandung – Informatics Engineering</td>
                </tr>
                <tr>
                    <td>2008 - 2010</td>    
                    <td>Magister Degree – Bandung Institute of Technology – Informatics (Software Engineering and Data)</td>
                </tr>
                <tr>
                    <td>2021 – Now</td>    
                    <td>Doctoral Degree – Bandung Institute of Technology – Electrical engineering and Informatics</td>
                </tr>
            </table>
        </div>
      </div>
</div>

<div id="PMO" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                
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
                    <td>PENERAPAN PEMBELAJARAN MESIN MENGGUNAKAN ALGORITMA REGRESI LINIER UNTUK PREDIKSI HARGA RUMAH</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>IDENTIFIKASI TANAMAN OBAT HERBAL BERBASIS CITRA</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>CAT BREED CLASSIFICATION USING KAGGLE DATASET METADATA WITH YOLO V5 FRAMEWORK</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>KLASIFIKASI RAS KUCING MENGGUNAKAN METADATA DATASET KAGGLE DENGAN FRAMEWORK YOLO V5</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>SISTEM REKOMENDASI PEMILIHAN PRODUK BASIC SKINCARE BERDASARKAN JENIS KULIT MENGGUNAKAN ALGORITMA SIMPLE ADDITIVE WEIGHTING (SAW)</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>AUGMENTED REALITY (AR) SEBAGAI MEDIA PEMBELAJARAN PERKENALAN HEWAN PURBAKALA DINOSAURUS</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>APLIKASI EVALUASI LAYANAN MAHASISWA STUDI KASUS STMIK BANDUNG</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>SISTEM PENDUKUNG KEPUTUSAN PENILAIAN KINERJA KARYAWAN KONTRAK DENGAN MENGGUNAKAN METODE SIMPLE ADDITIVE WEIGHTING:(STUDI KASUS: PT. TIRTA SUKSES PERKASA)</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>PENERAPAN MODEL PEMBELAJARAN AUDITORY INTELECTUALLY REPETITION (AIR) PADA MATA PELAJARAN AQIDAH AKHLAK KELAS VII DI MTSN 1 TANAH DATAR</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>ANIMASI STANDAR OPERASIONAL PROSEDUR STMIK BANDUNG: STUDI KASUS: KAMPUS STMIK BANDUNG</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>SISTEM REKOMENDASI PRODUK UKM DI KOTA BANDUNG MENGGUNAKAN ALGORITMA COLLABORATIVE FILTERING</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>PERANCANGAN DETEKSI PENGENALAN WAJAH MENGGUNAKAN METODE LOCAL BIANARY PATTERN (LBP)</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>SISTEM PENDUKUNG KEPUTUSAN UNTUK KELAYAKAN KELANJUTAN PENERIMAAN BEASISWA MENGGUNAKAN METODE ANALYTICAL HIERARCY PROCESS (AHP): STUDI KASUS: SMK PADAKEMBANG</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>SISTEM POINT OF SALES PRODUK IT:(STUDI KASUS: CV. KORABE MULTI TEKNIKA)</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>APLIKASI GAME “SEMAPHORE” BERBASIS ANDROID</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>APLIKASI MOBILE PENGELOLAAN KALORI HARIAN UNTUK PENDERITA OBESITAS</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>APLIKASI AUDIT INTERNAL KOPERASI MITRA DHUAFA</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>PENGEMBANGAN SISTEM INFORMASI PRESENSI PERKULIAHAN: STUDI KASUS FAKULTAS TEKNIK MESIN DAN DIRGANTARA INSTITUT TEKNOLOGI BANDUNG</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>IMPLEMENTASI AUGMENTED REALITY SEBAGAI PANDUAN MAHASISWA DALAM KEGIATAN AKADEMIK: DI STMIK BANDUNG</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>IMPLEMENTASI SISTEM PENDUKUNG KEPUTUSAN PENERIMA BANTUAN SISWA MISKIN (BSM) MENGGUNAKAN METODE SAW (SIMPLE ADDITIVE WEIGHTING)</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>SISTEM PAKAR TES PSIKOLOGI ONLINE CUSTOM DAN MULTI VARIABEL TES</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>SISTEM PENDUKUNG KEPUTUSAN POTENSI ASET LAHAN PROVINSI JAWA BARAT</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>APLIKASI PEMANDU WISATA KULINER BANDUNG BERBASIS GPS</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>PEMBANGUNAN APLIKASI PEMBELAJARAN BAHASA JEPANG PERSIAPAN UJI KEMAMPUAN JLPT (JAPANESE-LANGUAGE PROFICIENCY TEST) LEVEL N5</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>SISTEM PENGUMUMAN AKADEMIK “REMIK” TERINTEGRASI BERBASIS ANDROID</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>DETEKSI JARI TANGAN BERBASIS KAMERA UNTUK PENGENDALIAN ALAT MUSIK ANGKLUNG</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>PEMBUATAN PROTOTIPE KONTROL REL SLIDERKAMERA OTOMATIS MENGGUNAKAN MIKROKONTROLER</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>ANALISIS SENTIMEN LAPORAN PERKEMBANGAN ANAK DIDIK TAMAN KANAK KANAK DENGAN MENGGUNAKAN METODA NAIVE BAYES</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>PENGEMBANGAN SISTEM MONITORING PEMBAKARAN MATERIAL BERDASAR TEKNIK PENGOLAHAN CITRA</td>
                </tr>
                <tr>
                    <td>2013</td>
                    <td>IDENTIFIKASI OBJEK CITRA 2 DIMENSI MENGGUNAKAN BANTUAN ALGORITMA J-SEG</td>
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