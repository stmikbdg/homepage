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
				<img src="{{asset("/assets/dosen/DV.jpg")}}">				
			</div>
 
			<div class="kanan">
                <h3 style="margin-top: 0px;margin-bottom: 0px;">Dayanni Vera Versanika, M.Kom</h3>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Assistant Professor</p></label>
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung </p>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Head of the Research and Community Service Institute at STMIK Bandung</p>
			    
                <p style="margin-top: 0px;margin-bottom: 0px;"><b>Email : </b>dayannivv@stmik-bandung.ac.id</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Research : </b> Information System Audit, Data Mining, Android, Information Systems.</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Office Address : </b> Jl. Cikutra No. 113 Bandung, West Java, Indonesia</p>
				
			</div>
 
		</div>		
 
		<div class="blok">
			<h2>Profile</h2>
            <div>
                <ul>
                    <p>Dayanni Vera Versanika is currently the Head of the Research and Community Service Institute (LPPM) at STMIK Bandung, a position Dayanni assumed in December 2022. Prior to this role, Dayanni served as the Secretary of the Informatics Engineering and Information Systems Study Program at STMIK Bandung, beginning in M arch 2022.
                <br> Dayanni holds a Master's degree in Information Systems from STMIK LIKMI Bandung, which Dayanni completed in 2020. Dayanni brings a wealth of experience from various sectors, including state-owned enterprises, private companies, and government agencies, where Dayanni has held roles such as IT Staff, Help Desk Technician, and Public Relations Officer. From February 2021 to June 2021, Dayanni served as an adjunct lecturer at STTBandung.</span></p>
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
                    <td>KD1519</td>
                    <td>Pemrograman 5 Android</td>
                </tr>
                <tr>
                    <td>SI1507</td>
                    <td>Data Mining</td>
                </tr>
                <tr>
                    <td>SI1710</td>
                    <td>Audit Sistem Informasi</td>
                </tr>
                <tr>
                    <td>IF1711</td>
                    <td>Sistem Terdistribusi dan Komputasi Paralel</td>
                </tr>
                <tr>
                    <td>KD1417</td>
                    <td>Perancangan Basis Data</td>
                </tr>
                <tr>
                    <td>SI1709</td>
                    <td>Big Data Analysis</td>
                </tr>
                <tr>
                    <td>KD1416</td>
                    <td>Pemrograman 4</td>
                </tr>
                <tr>
                    <td>KD1416</td>
                    <td>Paket Aplikasi</td>
                </tr>
                <tr>
                    <td>KD1103</td>
                    <td>Pemrograman 4</td>
                </tr>
                <tr>
                    <td>SI1508</td>
                    <td>Perencanaan Strategis Teknologi Informasi</td>
            </table>
            
        </div>

    </div>
</div>
  
<div id="Education" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2012</td>
                    <td>Telkom University, Associate Degree, Major in Informatics Engineering</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>STMIK Bandung, Bachelor, Major in Informatics Engineering</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>STMIK LIKMI Bandung, Magister, Major in Information System </td>
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
                    <td>APLIKASI MEDIA PEMBELAJARAN KISAH NABI DAN RASUL BERGELAR ULUL AZMI BERBASIS ANDROID (STUDI KASUS: MI TANWIRIYYAH) </td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>ANALISIS DAN IMPLEMENTASI LIP READING (GERAKAN BIBIR) MENJADI TEXT PADA PENGGUNAAN BAHASA INGGRIS </td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>Menentukan Purchase Order Dengan Metode Weighted Moving Average Berbasis Web (Studi Kasus: CV. Gilang Mandiri Tasik)</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>ENGLISH EDUCATIONAL GAMES FOR STUDENTS BASED ON ANDROID</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Implementasi Metode First Come First Served Pada Platform Reservasi Lapangan Badminton Berbasis Mobile</td>
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