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
				<img src="{{asset("/assets/dosen/DP.jpg")}}">				
			</div>
 
			<div class="kanan">
                <h3 style="margin-top: 0px;margin-bottom: 0px;">Dani Pradana Kartaputra, M.T</h3>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Assistant Professor</p></label>
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung </p>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Vice Chairman of Academic Affairs at STMIK Bandung</p>
			    
                <p style="margin-top: 0px;margin-bottom: 0px;"><b>Email : </b>dani.pradana@stmik-bandung.ac.id</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Research : </b> Information Systems</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Office Address : </b> Jl. Cikutra No. 113 Bandung, West Java, Indonesia</p>
				
			</div>
 
		</div>		
 
		<div class="blok">
			<h2>Profile</h2>
            <div>
                <ul>
                    <p>Dani Pradana, a Master of Industrial Engineering graduate from the Bandung Institute of Technology, currently serves as Vice Chairman of Academic Affairs at STMIK Bandung. With a background in Information Systems, Dani has succeeded in optimizing Academic management at STMIK Bandung. His experience in research and development has contributed significantly to improving the quality of education and research on campus.</span></p>
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
                    <td>Intellectual Property Rights and Professional Ethics</td>
                </tr>
                <tr>
                    <td>Selected Topics in IT</td>
                </tr>
                <tr>
                    <td>Business Process</td>
                </tr>
                <tr>
                    <td>Management Information System</td>
                </tr>
                <tr>
                    <td>Thesis Supervisor and Examiner</td>
                </tr>
                <tr>
                    <td>Data Communication and Computer Networks</td>
                </tr>
                <tr>
                    <td>Project Management</td>
                </tr>
                <tr>
                    <td>Operation Research</td>
                </tr>
                <tr>
                    <td>Modelling and Simulations</td>
                </tr>
                <tr>
                    <td>Statistics</td>
                </tr>
                <tr>
                    <td>Theory of Languages and Automata</td>
                </tr>   
                <tr>
                    <td>Matrix and Vector Space</td>
                </tr>  
                <tr>
                    <td>Discrete Mathematics</td>
                </tr>  
                <tr>
                    <td>Matrix and Vector Space</td>
                </tr>  
                <tr>
                    <td>Numerical Analysis</td>
                </tr>  
                <tr>
                    <td>Calculus</td>
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
                    <td>1985</td>
                    <td>University of Indonesia (UI), Bachelor, Major in Mathematics</td>
                </tr>
                <tr>
                    <td>1995</td>
                    <td>Bandung Institute of Technology (ITB), Magister, Major in Industrial Engineering<td>
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
                    <td>IMPLEMENTASI METODE SPEECH RECOGNITION DALAM AL QURAN DIGITAL UNTUK MENINGKATKAN PELAFALAN</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>PERANCANGAN SISTEM INFORMASI LITERASI MENGGUNAKAN METODE R&D DI SMK GEMA PELITA</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>DETEKSI ALFABET BISINDO MENGGUNAKAN MEDIAPIPE HOLISTIC SECARA REAL-TIME </td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>SISTEM INFORMASI MANAJEMEN DISTRIBUSI (STUDI KASUS: PT ARDERAMA MANDIRI)</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>PROTOTYPE RUMAH KACA BUDIDAYA STROBERI PADA DATARAN RENDAH MENGGUNAKAN IOT</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>APLIKASI PENJUALAN TIKET SEMINAR KESEHATAN BERBASIS WEB</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>ANIMASI STANDAR OPERASIONAL PROSEDUR STMIK BANDUNG: STUDI KASUS: KAMPUS STMIK BANDUNG</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>TANTANGAN IMPLEMENTASI MANAJEMEN PROYEK TEKNOLOGI INFORMASI DALAM MASA PANDEMI COVID-19</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>APLIKASI BUKU TAMU DAN PENILAIAN KINERJA PADA SEKSI PELAYANAN INFORMASI DAN RENCANA KOTA BIDANG DOKUMENTASI DAN PELAPORAN</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>APLIKASI KAMUS ONLINE KATA INDONESIA KE KATA JAWA KRAMA DAN KATA JAWA KRAMA KE KATA INDONESIA</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>SISTEM PENDUKUNG KEPUTUSAN PENENTUAN CALON KARYAWAN TETAP MENGGUNAKAN METODE SMART: STUDI KASUS: PT. AJINOMOTO</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>APLIKASI PEMBELAJARAN MEMBACA AL-QUR’AN UNTUK ANAK MENGGUNAKAN METODE TSAQIFA</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>MAPPING DAN SCHEDULLING INFORMASI SEKOLAH MENENGAH KEJURUAN DALAM MENINGKATKAN PELAYANAN SEKOLAH BERBASIS WEB</td>
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