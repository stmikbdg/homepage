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
				<img src="{{asset("/assets/dosen/LR.jpg")}}">				
			</div>
 
			<div class="kanan">
                <h3 style="margin-top: 0px;margin-bottom: 0px;">Lia Rovianti, S.S</h3>
			    <p style="margin-top: 0px;margin-bottom: 0px;">An English Lecturer</p></label>
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung</p>
			    
                <p style="margin-top: 0px;margin-bottom: 0px;"><b>Email : </b>liarovianti@gmail.com</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Office Address : </b> Jl. Cikutra No. 113 Bandung, West Java, Indonesia</p>
				
			</div>
 
		</div>		
 
		<div class="blok">
			<h2>Profile</h2>
            <div>
                <ul>
                    <p>Passionate, committed, and experienced lecturer with over a decade of experience in teaching students with various range of ages. Skilled in delivering engaging lessons and strong communication abilities and adaptability contribute to a positive learning environment and fostering student success.</p>
                <!--<button onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</button>-->
                </ul>
            </div>			
		</div>
		<br>
		<div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Teaching')" id="defaultOpen">Teaching</button>
            <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
         </div>

        
<div id="Teaching" class="tabcontent">
    <div class="blok">
        <div>
            <table class="table table-hover">
                <th>
                    <tr>
                        <td>Code / Year</td>
                        <td>Subject</td>
                    </tr>
                    <tr>
                        <td>KU1101 / 2024</td>
                        <td>English 1</td>
                    </tr>
                    <tr>
                        <td>KU1203 / 2024</td>
                        <td>English 2</td>
                    </tr>
                </th>
            </table>
        </div>
    </div>
</div>
  
<div id="Education" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <th>
                    <tr>
                        <td>Year</td>    
                        <td>Institution, Degree, and Faculty</td>
                    </tr>
                    <tr>
                        <td>2005</td>    
                        <td>Bachelor of English, concentrating in language and literature from STBA Bandung (GPA 3.52 in the scale of 4)</td>
                    </tr>
                </th>
                
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