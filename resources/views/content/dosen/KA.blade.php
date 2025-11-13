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
				<img src="{{asset("/assets/dosen/KA.jpg")}}">				
			</div>
 
			<div class="kanan">
                <h3 style="margin-top: 0px;margin-bottom: 0px;">Khoirida Aelani</h3>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Lecturer</p></label>
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Lecturer at STMIK Bandung</p>
			    
                <p style="margin-top: 0px;margin-bottom: 0px;"><b>Email : </b>khoirida@stmik-bandung.ac.id</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Research : </b> Information System, Data, Science, Algorithm.</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Office Address : </b> Jl. Cikutra No. 113 Bandung, West Java, Indonesia</p>
				
			</div>
 
		</div>		
 
		<div class="blok">
			<h2>Profile</h2>
            <div>
                <ul>
                    <p>Khoirida Aelani as a lecturer from lldikti4 since 1992 who was placed at STMIK Bandung since October 2022.</p>
                    <p>Khoirida completed her master's degree in Informatics majoring in Information Systems from ITB in 2007.</p>
                    <button onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</button>
                </ul>
            </div>			
		</div>
		<br>
		<div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Teaching')">Teaching</button>
            <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
            <button class="tablinks" onclick="openCity(event, 'Journal')" id="defaultOpen">Journal Articles</button>
            <button class="tablinks" onclick="openCity(event, 'Proceedings')">Proceedings Seminar</button>
         </div>

        
 <div id="Teaching" class="tabcontent">
    <div class="blok">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>KD1107</td>
                    <td>Algoritma</td>
                </tr>
                <tr>
                    <td>IF1508</td>
                    <td>Teori Bahasa dan Otomata</td>
                </tr>
                <tr>
                    <td>SI1508</td>
                    <td>Perencanaan Strategis Teknologi Informasi</td>
                </tr>
                <tr>
                    <td>KD1207</td>
                    <td>Sistem Informasi Manajemen</td>
                </tr>
                <tr>
                    <td>KD1415</td>
                    <td>Model dan Simulasi Komputer</td>
                </tr>
                <tr>
                    <td>IF1405</td>
                    <td>Kalkulus Lanjut</td>
                </tr>
                <tr>
                    <td>KD1104</td>
                    <td>Pemrogtaman 1</td>
                </tr>
                <tr>
                    <td>KD1518</td>
                    <td>Interaksi Manusia dan Komputer</td>
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
                    <td>1986</td>    
                    <td>ITB, Associate Degree, Major in Physics</td>
                </tr>
                <tr>
                    <td>2007</td>    
                    <td>ITB, Magister, Informatic  Major in Information System</td>
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
                    <td>Sistem Informasi Pengelolaan Harta Warisan: Meningkatkan Efisiensi dan Keadilan Pemilikan dengan Aspek Syariah Islam <a href="https://ejournal.ikmi.ac.id/index.php/jict-ikmi/issue/view/11">https://ejournal.ikmi.ac.id/index.php/jict-ikmi/issue/view/11</a></td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Sistem Pendukung Keputusan Pemilihan Bibit Kelapa Sawit Menggunakan Metode Preference Selection Index (Psi) (Studi Kasus : Pt Pinang Waitmas Sejati) <a href="https://journal-stmik-bandung.ac.id/index.php/JurnalTI/article/view/187">https://journal-stmik-bandung.ac.id/index.php/JurnalTI/article/view/187</a></td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>Deteksi Dini Emosi dan Perilaku pada Remaja menggunakan Metode SIMPLE ADDICTIVE WEIGHTING (SAW) (Studi Kasus di UPTD Puskesmas Sukapakir, Bandung) <a href="https://ejournal.ikmi.ac.id/index.php/jict-ikmi/issue/view/9">https://ejournal.ikmi.ac.id/index.php/jict-ikmi/issue/view/9</a></td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Sistem Deteksi Penggunaan Masker pada Pengunjung STMIK Amikbandung menggunakan Algoritma Convolutional Neural Network (CNN) <a href="https://ejournal.ikmi.ac.id/index.php/jict-ikmi/issue/view/2">https://ejournal.ikmi.ac.id/index.php/jict-ikmi/issue/view/2</a></td>
                </tr>
            </table>
        </div>
      </div>
</div>

<div id="Proceedings" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2021</td>
                    <td>Chatbot for Information Service of New Student Admission Using Multinomial Naive Bayes Classification and TF-IDF Weighting International Seminar of Science and Applied Technology (ISSAT 2021)</td>
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