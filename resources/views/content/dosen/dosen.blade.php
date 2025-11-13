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
				<img src="https://media.licdn.com/dms/image/v2/D5603AQGFkPKutG9rKA/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1693315718723?e=2147483647&v=beta&t=T9JhRDtqNzHuNKZOeA6UymAuT5fh2FrfocLcSr0GYdw">				
			</div>
 
			<div class="kanan">
                <h3 style="margin-top: 0px;margin-bottom: 0px;">Assoc. Prof. Dr. Abdurrahman, M.T.</h3>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Associate Professor</p></label>
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung | PT. Solmit Bangun Indonesia</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Chairman of STMIK Bandung</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Chairman of PT. Solmit Bangun Indonesia</p>
			    
                <p style="margin-top: 0px;margin-bottom: 0px;"><b>Email : </b>abdurrahman@stmik-bandung.ac.id</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Research : </b> Artificial Intelligence, Data Mining, Digital Transformation, Open Innovation and Technology Adoption, Customer Behaviour, New Product Development, Islamic Financial, Halal Ecosystem.</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;"><b>Office Address : </b> Jl. Cikutra No. 113 Bandung, West Java, Indonesia</p>
				
			</div>
 
		</div>		
 
		<div class="blok">
			<h2>Profile</h2>
            <div>
                <ul>
                    <p>Abdurrahman serves as the chairman of STMIK Bandung, an educational institution specializing in Information Technology. He is also the founder and chairman of PT. Solmit Bangun Indonesia (SOLMIT). His work has had a significant impact on both Indonesian and international companies, helping to drive business transformation through innovative technology solutions and strategic consulting. Furthermore, he established and leads the Digital Transformation Global Alliance (DTGA),<span id="dots">...</span><span id="more"> aiming to strengthen the digital transformation ecosystem at both local and global levels.
                <br> Abdurrahman earned his doctorate in Electrical Engineering and Informatics from ITB in 2009, specializing in data mining and artificial intelligence. In 2024, he completed a second doctorate in Science Management at ITB's School of Business and Management, focusing his research on enhancing companies' digital transformation capabilities. Drawing on his deep expertise, he leads both STMIK Bandung and SOLMIT, helping numerous companies navigate the digital economy. He has also obtained several international certifications in areas such as digital transformation, emerging technologies, Governance-Risk Management-Compliance (GRC), IT Portfolio, Program, and Project Management.
                   <br> During his academic and research career, Abdurrahman has explored diverse fields such as artificial intelligence, data mining, digital transformation, open innovation, and technology adoption. His research has been featured in national journals in Indonesia as well as in renowned international publications.</span></p>
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
                    <td>KU1712</td>
                    <td>Research Methodology</td>
                </tr>
                <tr>
                    <td>KU1725</td>
                    <td>Selected Topics in IT</td>
                </tr>
                <tr>
                    <td>KU1813</td>
                    <td>Intellectual Property Rights and Professional Ethics</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>Project Management</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>Thesis Supervisor and Examiner</td>
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
                    <td>2000</td>
                    <td>STMIK Bandung, Bachelor, Major in Informatics Technology </td>
                </tr>
                <tr>
                    <td>2004</td>
                    <td>Bandung Institute of Technology (ITB), Magister, Major in Electrical Engineering and Informatics  </td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>Bandung Institute of Technology (ITB), Doctor, Major in Electrical and Informatics Engineering </td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Bandung Institute of Technology (ITB), Doctor, Major in Science in Management </td>
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
                    <td>Exploring Barriers, Drivers, and Routines of Dynamic Capabilities in Indonesian Digital Banking Transformation: A Qualitative Study Based on the Toe Framework </td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Impact of Dynamic Capabilities on Digital Transformation and Innovation to Improve Banking Performance: A Toe Framework Study </td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>Enhancing Banking Performance through Dynamic Digital Transformation Capabilities and Governance, Risk Management, and Compliance: Insights from The Indonesian Context </td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Designing an Open Innovation Framework for Digital Transformation Based on Systematic Literature Review</td>
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