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
			    <p style="margin-top: 0px;margin-bottom: 0px;">STMIK Bandung</p>
			    <p style="margin-top: 0px;margin-bottom: 0px;">Chairman of STMIK Bandung</p>
			    
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
            <button class="tablinks" onclick="openCity(event, 'Speaker')">Speaker</button>
            <button class="tablinks" onclick="openCity(event, 'Consulting')">Consulting IT</button>
            <button class="tablinks" onclick="openCity(event, 'PMO')">PMO & Project</button>
            <button class="tablinks" onclick="openCity(event, 'GRC')">GRC Governance, Risk Management & Compliance Consulting</button>
            <button class="tablinks" onclick="openCity(event, 'Implementation')">System Implementation</button>
            <button class="tablinks" onclick="openCity(event, 'Certification')">Executive Education and Certification</button>
            <button class="tablinks" onclick="openCity(event, 'Reviewer')">Editorial and Reviewer Activities</button>
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
                    <td>PM1920</td>
                    <td>Project Management</td>
                </tr>
                <tr>
                    <td>SE1692</td>
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
                    <td>STMIK Bandung, Bachelor, Major in Informatics Technology</td>
                </tr>
                <tr>
                    <td>2004</td>
                    <td>Bandung Institute of Technology (ITB), Magister, Major in Electrical Engineering and Informatics</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>Bandung Institute of Technology (ITB), Doctor, Major in Electrical and Informatics Engineering</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Bandung Institute of Technology (ITB), Doctor, Major in Science in Management</td>
                </tr>
            </table>
        </div>
      </div>
</div>

<div id="Speaker" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2024</td>
                    <td>Developing Organizational Capabilities to Succeed in Digital Transformation, Regional Research and Development Agency of West Java Province, May 30, 2024</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Strategy for Developing a Digital Ecosystem, Regional Research and Development Agency of West Java Province, August 29, 2024</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Action Research Capability Model for Integrating Teaching, Research, and Community Services Development, Eduvate 2024, Monash University Indonesia, 2024.</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Building Indonesia's Digital Economy, Digital Transformation Global Alliance, March 11, 2024.</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Enhancing Company Performance in the Digital Era, Bisa Academy, February 21, 2024.</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Transforming People Mindset for Digital Transformation Success, Digital Transformation Global Alliance, November 25, 2022.</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Combining Project and Change Management for Digital Transformation, Project Management Institute Indonesia, April 09, 2022.</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Strategy for Implementing Digital Transformation in Indonesian High School Education, Digital Transformation Global Alliance, March 29, 2022.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Islamic Economy and Digital Literacy During the Covid-19 Pandemic Era to Promote Economic Revival, Indonesian Ulama Council, November 18, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>The Strategic Role of Digital Maturity Assessment  for the Success of Digital Banking Transformation in Indonesia, School of Business and Management, Bandung Institute of Technology, November 30, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Pandemic Literacy and Economic Recovery Among Indonesian Muslim Millennials, Ministry of Communication and Information Technology of the Republic of Indonesia, September 04. 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>The Role and Contribution of PMO in the Success of Digital Transformation, PMO Professional Indonesia, August 7, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Reimagining Government for the Digital Era, Digital Transformation Global Alliance, June 25, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Managing Successful Digital Transformation, Digital Transformation Global Alliance, May 25, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Building New Business through Strategic Innovation, Solmit Research & Consulting, March 9, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Emerging Technology and the Need to Develop Skills, Solmit Research & Consulting, March 3, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Innovation Strategies in Digital Business, Solmit Research & Consulting, February 23, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>How a Mature Company can Respond to Disruption from New Entrants? Solmit Research & Consulting, February 16, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>IoT for Digital Business, Solmit Research & Consulting, January 19, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Data Science for Digital Business, Solmit Research & Consulting, January 25, 2021.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Artificial Intelligence for Digital Business, Solmit Research & Consulting, January 12, 2021.</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>Digital Governance: Innovation with Ethics and Integrity, Solmit Research & Consulting, November 3, 2020.</td>
                </tr>
            </table>
        </div>
      </div>
</div>

<div id="Consulting" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2024</td>
                    <td>Review of Core Banking System, Bank Jambi (2024)</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Cyber Security Policy, Bank Jambi (2024)</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Cyber Security Maturity Assessment, Bank Papua (2024)</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>IT Audit, Bank Jambi (2023)</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>IT Security & Penetration Testing (2023)</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>IT Governance Policy, Bank Aceh Syariah (2023)</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>Development of Enterprise Architecture, PT. Gag Nikel Indonesia (2023)</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>IT Strategic Plan & Digital Transformation, Asuransi ASEI Indonesia 2023 – 2027 (2023)</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>IT Strategic Plan & Digital Transformation, Bank NTB SYARIAH 2023 – 2027 (2022)</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>IT Strategic Plan & Digital Transformation, Bank BPD Bali 2023 – 2025 (2022)</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Post Implementation Review of Core Banking System Development, Bank Jateng (2022)</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Awareness Building of Digital Transformation Framework, Telkom Satelit (2022)</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>IT Audit & Digital Transformation Readiness Assessment, Bank Jateng (2021)</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>IT Audit & Digital Transformation Readiness Assessment, Bank Sulselbar (2021)</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Penetration Testing, Bank Riau Kepri (2021)</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Assessment for CBS Managing Readiness, Bank Aceh Syariah (2021)</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Consultant for the Implementation of Open API, Virtual Account, and Digital Customer Onboarding, Bank Sumsel Babel (2021)</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>IT Risk Assessment, Bank Riau Kepri (2020)</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>Core Banking System & Mobile Banking Audit, Bank Sulselbar (2020)</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>IT Strategic Plan Development, Bank Sumsel Babel 2021 – 2025 (2020)</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>IT & CBS Audit and Penetration Testing, Bank Sumsel Babel (2019)</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>IT Strategic Plan Development, Bank Jateng 2019 – 2024 (2019)</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>IT Strategic Plan, Bank BPD Bali 2019 – 2024 (2019)</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>IT & CBS Audit and Penetration Testing, Bank Jateng (2018)</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>IT Risk Management Policy Development, Bank Aceh Syariah (2018)</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>IT Strategic Plan Development, Bank NTB Syariah 2018 – 2023 (2017)</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>E-Banking Audit & Penetration Testing, Bank Sumsel Babel (2017)</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>IT Risk Management Policy Development, Bank Papua (2017)</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>Core System Development Audit, ASEI Indonesia (2017)</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>Penetration Testing, Bank Kalteng (2017)</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>Penetration Testing, Bank Kaltim (2016)</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>Core Banking System Audit, Bank BJB Syariah (2016)</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>IT Risk Management Policy Development, Bank Maluku (2015)</td>
                </tr>
                <tr>
                    <td>2014</td>
                    <td>IT Strategic Plan, Bakrie Building Industry (April 2014)</td>
                </tr>
                <tr>
                    <td>2013</td>
                    <td>Core Banking System Audit, Babk Aceh (June 2013)</td>
                </tr>
                <tr>
                    <td>2013</td>
                    <td>IT Project Management Consulting, BPD Kaltim (Maret 2013)</td>
                </tr>
                <tr>
                    <td>2013</td>
                    <td>IT Project Management Policy Development, Bank Aceh (2013)</td>
                </tr>
                <tr>
                    <td>2013</td>
                    <td>IT Strategic Plan, Bank Aceh (Nov 2013)</td>
                </tr>
                <tr>
                    <td>2012</td>
                    <td>IT Strategic Plan, BPD Kaltim (June 2012)</td>
                </tr>
                <tr>
                    <td>2012</td>
                    <td>IT Strategic Plan, Bank NTB (June 2012)</td>
                </tr>
                <tr>
                    <td>2012</td>
                    <td>IT Audit, Bank Papua (Jan 2012)</td>
                </tr>
                <tr>
                    <td>2011</td>
                    <td>IT Strategic Plan, Bank Kalbar (Dec 2011)</td>
                </tr>
                <tr>
                    <td>2011</td>
                    <td>DRC System Design, BADAK NGL (April 2011)</td>
                </tr>
                <tr>
                    <td>2010</td>
                    <td>Project Management Consulting – Combat Management System PT. LEN INDUSTRI (November 2010)</td>
                </tr>
                <tr>
                    <td>2010</td>
                    <td>IT Audit Bank Maluku (November 2010)</td>
                </tr>
                <tr>
                    <td>2010</td>
                    <td>Validating IT Blue Print and Consulting of ERP Implementation, Perhimpunan Perkumpulan Santo Borromeus – BANDUNG, (Jan 2010)</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>Review of Information System Dana Pensiun Telkom (July 2009)</td>
                </tr>
                <tr>
                    <td>2008</td>
                    <td>IT Strategic Plan Development, Bank Maluku (March 2008)</td>
                </tr>
                <tr>
                    <td>2008</td>
                    <td>IT Strategic Plan Development, BANK SULTENG (June 2008)</td>
                </tr>
                <tr>
                    <td>2008</td>
                    <td>IT Audit Bank Sulteng (July 2008)</td>
                </tr>
                <tr>
                    <td>2008</td>
                    <td>IT Audit Bank Maluku (July 2008)</td>
                </tr>
                <tr>
                    <td>2006</td>
                    <td>Web Application Blue Print Development for TELKOM Research & Development Center (May 2006)</td>
                </tr>
                <tr>
                    <td>2006</td>
                    <td>ICT Master Plan Development for Indonesian National Police (POLRI) (National Crime Information Center, Knowledge Management) (March 2006)</td>
                </tr>
                <tr>
                    <td>2005</td>
                    <td>Study of Readiness for SAP R/3 Implementation in PT. Krakatau Steel Indonesia (December 2005)</td>
                </tr>
                <tr>
                    <td>2005</td>
                    <td>Design of Data center for PT. PLN (Indonesian Electrical Company) (May 2005)</td>
                </tr>
                <tr>
                    <td>2004</td>
                    <td>Assessment of Management Information Systems Health Services Board of Health TELKOM INDONESIA (September 2004)</td>
                </tr>
                <tr>
                    <td>2003</td>
                    <td>Study of Readiness for Enterprise Resource Planning Development PT. Semen Tonasa, South Sulawesi, (March 2003)</td>
                </tr>
                <tr>
                    <td>2002</td>
                    <td>Assessment of Management Information Systems Bank BTPN (October 2002)</td>
                </tr>
            </table>
        </div>
      </div>
</div>

<div id="PMO" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2018</td>
                    <td>IT Project Management Policy Development, Bank Aceh Syariah, 2018</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>Project Management Policy Development, Bank Papua, 2016</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>IT Project Management Policy Development, Bank Kalteng, 2016</td>
                </tr>
                <tr>
                    <td>2013</td>
                    <td>IT Project Management Policy Development, Bank Kaltim, 2013</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>Rollout CCF & CABINS TELKOM, 2009</td>
                </tr>
                <tr>
                    <td>2007</td>
                    <td>Setup PMO Implementation, PT. Badak NGL, 2007</td>
                </tr>
                <tr>
                    <td>2004-2006</td>
                    <td>Setup IT PMO Implementation, Telkom IS Center, 2004 – 2006</td>
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
                    <td>Impact of Dynamic Capabilities on Digital Transformation and Innovation to Improve Banking Performance: A TOE Framework Study. Journal of Open Innovation: Technology, Market, and Complexity, 111476. <a href="https://doi.org/10.1016/j.joitmc.2024.100215">https://doi.org/10.1016/j.joitmc.2024.100215</a>.</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Exploring barriers, drivers , and routines of dynamic capabilities in Indonesian digital banking transformation : A qualitative study based on the TOE framework. The Electronic Journal of Information Systems in Developing Countries, March, 1–21. <a href="https://doi.org/10.1002/isd2.12329">https://doi.org/10.1002/isd2.12329</a>.</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>Enhancing banking performance through dynamic digital transformation capabilities and governance, risk management, and compliance: Insights from the Indonesian context. The Electronic Journal of Information Systems in Developing Countries, Willey & Sons. July, 1–20. <a href="https://doi.org/10.1002/isd2.12299">https://doi.org/10.1002/isd2.12299</a></td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>Accelerating digital transformation through the development of dynamic capabilities and governance, risk management, and compliance: A case study of the banking industry in Indonesia. The International Journal of Business Information Systems, <a href="https://doi.org/10.1504/ijbis.2023.10062082">https://doi.org/10.1504/ijbis.2023.10062082</a>.</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Designing an Open Innovation Framework for Digital Transformation Based on Systematic Literature Review. Journal of Information Systems Engineering and Business Intelligence, 8(2), 100–108. <a href="https://doi.org/10.20473/jisebi.8.2.100-108">https://doi.org/10.20473/jisebi.8.2.100-108</a>.</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Designing a Performance Management System for the Digital Transformation of the Indonesian Banking Industry. 655–671. <a href="https://doi.org/10.46254/na07.20220187">https://doi.org/10.46254/na07.20220187</a>.</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>cAnt-WUM: cANT WUM: Web Users Classification Using Ant Colony Optimization Algorithm, International Journal of Information Technology & Business, 2021.</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>Study of Performance IT Company Using IT Balanced Score Card (IEEEExplore, 2019).</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>Development of Data Preprocessing for Web Usage Mining Using Ant Miner Algorithm, Jurnal Teknologi Sekolah Tinggi Teknologi Jakarta,Volume 14 No 2 Juli 2009.</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>ANT-WUM : Ant Colony Optimization Algorithm for Web Usage Mining, Jurnal TechnoScientia Institut Sains dan Teknologi AKPRIND Yogyakatya, Edisi Agustus 2009.</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>Enhancement Ant Miner Algorithm for Web Usage Mining, Jurnal Telekomunikasi Institut Teknologi TELKOM, 2009.</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>Web Users in Web Usage Mining Using Ant Colony Optimization Algorithm, International Journal Applied Soft Computing, 2009.</td>
                </tr>
                <tr>
                    <td>2008</td>
                    <td>Implementation Ant Colony Algorithm for Web Usage Mining (e-Indonesia Initiative Forum IV & International Conference for Chief Information Officer, May 2008).</td>
                </tr>
                <tr>
                    <td>2007</td>
                    <td>Web Usage Mining for Analysis Unique Behavior Web User (International Conference on Electrical Engineering & Informatics 2007, June 2007).</td>
                </tr>
                <tr>
                    <td>2006</td>
                    <td>Web Usage Mining : Research Chance & its Challenge, May 2006 (International Conference on Electrical Power, Electronics, Control. Communication, and Informatics-University of Brawijaya).</td>
                </tr>
                <tr>
                    <td>2006</td>
                    <td>Modeling Web Usage Mining for Supporting e-Commerce Governance, May 2006 (National Conference e-Indonesia Initiative, Bandung Institute of Technology-ITB)
                    Modeling Customer Churn Management Based on Customer Relationship Management, Case Study TELKOM INDONESIA, February 2006 (National Conference on Information System, conducted by Bandung Pasundan University and Department of Informatics Engineering ITB).</td>
                </tr>
                <tr>
                    <td>2006</td>
                    <td>Modeling Data Warehouse for Web Usage Mining Preprocessing for Business Intelligence, February 2006 (National Conference on Information System, conducted by Bandung Pasundan University and Department of Informatics Engineering ITB).</td>
                </tr>
            </table>
        </div>
      </div>
</div>

<div id="GRC" class="tabcontent">
    <div class="block">
        <div>
            <ol>
                <li>Review of Risk Management Implementation, Bank Riau Kepri Syariah (2024)</li>
                <li>Development of GCG Policy, Bank Aceh Syariah (2024)</li>
                <li>Development of Operational Risk Self Assessment dan Company Healthy Level, BP Tapera (2023)</li>
                <li>Development of Risk Catalogue for Digital Transformation, Bank Jateng (2022) </li>
                <li>Development of Risk Management Blue Print, Bank BPD Bali (2022)</li>
                <li>The Strategy of GRC Implementation for Bank Muamalat Indonesia (2021)</li>
                <li>Development of RBBR and ICAAP, Bank Daerah Istimewa Yogyakarta (2019)</li>
                <li>Portfolio Guideline Policy Development, Bank Jateng (2020)</li>
                <li>Risk Culture Policy Development, Bank Jateng (2020)</li>
                <li>Internal Risk Rating Policy Development, Bank Jateng (2020)</li>
                <li>Review of Risk Management Bank Lampung (2018)</li>
                <li>GCG Consulting, Bank Aceh Syariah (2018)</li>
                <li>Review of Intern Audit Policies, Bank Jateng (2018)</li>
                <li>Review & Update of Intern Audit Policies, J Trust Bank (2018)</li>
                <li>Review & Update of Intern Audit Policies, Bank Papua (2011, 2017)</li>
                <li>Review & Update of Intern Audit Policies, Bank Maluku (2012, 2017)</li>
                <li>Risk Management Policy Development, PT. Reasuransi Indonesia Utama (Persero), 2017</li>
                <li>Risk Catalogue Policies Consulting, Bank Jateng (2017)</li>
                <li>Risk Profile Policies Consulting, Bank Jateng (2017)</li>
                <li>Assessment of Governance, Risk Management & Intern Control, Dapen Telkom (2017)</li>
                <li>RBBR Policy Development, Bank Riau Kepri (2016)</li>
                <li>Consulting on Risk Culture Development, BTN (2016)</li>
                <li>Review on Risk Profile & RBBR, BTN (2016)</li>
                <li>Integrated ICAAP Consulting, Bank Kaltim (2016)</li>
                <li>Risk Appetite, Risk Tolerance, and Risk Limit Consulting, Bank Papua (2016)</li>
                <li>BCM Policies Development, Bank BTN (2016)</li>
                <li>Risk Management Consulting, Dapen Telkom (2016)</li>
                <li>Risk Management Review, Bank Riau Kepri, 2015</li>
                <li>ICAAP Policy Development, Bank Jateng (2013)</li>
                <li>ICAAP Policy Development, Bank BPD Bali (2013)</li>
                <li>ICAAP Policy Development, Bank Papua (2013)</li>
                <li>ICAAP Policy Development, Bank Maluku (2013)</li>
                <li>ICAAP Policy Development, Bank Kaltim (2013)</li>
                <li>ICAAP Policy Development, Bank NTB (2013)</li>
                <li>ICAAP Policy Development, Bank SULUT (2014)</li>
                <li>ICAAP Policy Development, Bank Sulteng (2013)</li>
                <li>RBBR Policy Development, Bank Jatim (2011)</li>
                <li>RBBR Policy Development, Bank BPD Bali (2012)</li>
                <li>RBBR Policy Development, Bank NTB (2012)</li>
                <li>RBBR Policy Development, Bank Sulteng (2012)</li>
                <li>RBBR Policy Development, Bank Jambi (2011)</li>
                <li>RBBR Policy Development, Bank Kaltim (2012)</li>
                <li>RBBR Policy Development, Bank Kalsel (2012)</li>
                <li>RBBR Policy Development, Bank Kalbar (2012)</li>
                <li>RBBR Policy Development, Bank Kalteng (2016)</li>
                <li>RBBR Policy Development, Bank Aceh (2013)</li>
                <li>RBBR Policy Development, Bank Lampung (2016)</li>
                <li>RBBR Policy Development, Bank Papua (2011)</li>
                <li>RBBR Policy Development, Bank Jateng (2011)</li>
                <li>RBBR Policy Development, Bank Papua (2011)</li>
                <li>RBBR Policy Development, Bank Maluku (2011)</li>
            </ol>
        </div>
    </div>
</div>

<div id="Implementation" class="tabcontent">
    <div class="block">
        <div>
            <ol>
                <li>Operational Risk Self Assessemt, BP Tapera (2024)</li>
                <li>Upgrade of Risk Based Bank Rating, Bank Papua (2024)</li>
                <li>Upgrade of Risk Based Bank Rating, Bank Maluku (2024)</li>
                <li>Audit Management System, Maybank Finance Indonesia (2023)</li>
                <li>Audit Management System, Bank DKI (2023)</li>
                <li>Risk Culture System Implementation, BPD Bali (2023)</li>
                <li>Anti-Money Laundering System, Finmas Indonesia (2022)</li>
                <li>Operational Risk Self-Assessment System, Bank Sumsel Babel (2022)</li>
                <li>Internal Rating System, Bank Papua (2022)</li>
                <li>Risk-Based Bank Rating, Bank Lampung (2022)</li>
                <li>Risk-Based Bank Rating, Bank Kalteng (2022)</li>
                <li>IRS Implementation, Bank Jateng (2020)</li>
                <li>Risk Culture System Implementation, Bank Jateng (2020)</li>
                <li>GRC System Implementation, PT. Reasuransi Indonesia Utama (2020)</li>
                <li>Compliance Management System Implementation, Bank Jateng (2020)</li>
                <li>Upgrade of Compliance Management System Implementation, Bank BTN (2020)</li>
                <li>Operational Risk Self-Assessment (ORSA) System Implementation, Bank Aceh Syariah (2019)  </li>
                <li>Operational Risk Self-Assessment (ORSA) System Implementation, Bank Lampung (2019)  </li>
                <li>Compliance Information System, Bank Riau Kepri (2019)</li>
                <li>Compliance Information System, Bank BTN (2018)</li>
                <li>Operational Risk Self-Assessment (ORSA) System Implementation, Bank Jateng (2018)  </li>
                <li>Governance, Risk & Compliance System Implementation, Dana Pensiun Telkom (2018)</li>
                <li>Compliance Information System, Bank Nagari (2018)</li>
                <li>Risk Management System Implementation, PT. Reasuransi Indonesia Utama (Persero) (2018)</li>
                <li>Risk Based Bank Rating (RBBR) and ICAAP Implementation, J Trust BANK, 2018</li>
                <li>Operational Risk Self Assessment (ORSA) System Implementation, Bank Sumsel Babel (2017)  </li>
                <li>Key Risk Indicators System Implementation, Bank BPD Bali (2017)</li>
                <li>Integrated Risk Management & Compliance Implementation, Bank Kaltim (2016)</li>
                <li>Ant Money Laundering System Implementation, BANK BPD Bali (2016)</li>
                <li>Loss Event Database & Branch Risk Profile Implementation, Bank NTT (2015)</li>
                <li>Risk Based Audit System Implementation, Bank Kalteng (2015)</li>
                <li>Risk Based Audit System Implementation, Bank BNP (2015)</li>
                <li>Risk Based Bank Rating (RBBR) V.2 Implementation, Bank BNP (2015)</li>
                <li>Risk Based Bank Rating (RBBR) V.2 Implementation, Bank Kaltim + UUS (2015)</li>
                <li>Risk Profile System Implementation, Bank BNP (2015)</li>
                <li>Internal Capital Adequacy Assessment Process (ICAAP) Implementation, Bank BNP (2015)</li>
                <li>Risk Based Bank Rating (RBBR) V.2 Implementation, Bank Jateng + UUS (2014)</li>
                <li>Risk Based Bank Rating (RBBR) V.2 Implementation, Bank Maluku (2014)</li>
                <li>Risk Based Bank Rating (RBBR) V.2 Implementation, Bank NTB (2014)</li>
                <li>ICAAP Implementation, Bank Aceh (Jan 2014)</li>
                <li>RBBR & Stress Test Implementation, Bank Artha Graha (2014)</li>
                <li>GCG Implementation, Bank Papua (June 2013)</li>
                <li>GCG Implementation, Bank Maluku (June 2013)</li>
                <li>GCG Implementation, Bank Jatim (June 2013)</li>
                <li>GCG Implementation, Bank Sulteng (June 2013)</li>
                <li>GCG Implementation, BPD Kaltim (June 2013)</li>
                <li>GCG Implementation, Bank Kalsel (June 2013)</li>
                <li>GCG Implementation, Bank NTB (June 2013)</li>
                <li>Loss Event Database & Risk Profile for Branches, BPD Bali (Jan 2013)</li>
                <li>Loss Event Database & Risk Profile for Branches, Bank Kalbar (Jan 2013)</li>
                <li>Risk Based Audit System Implementation, Bank Nagari (June 2013)</li>
                <li>ICAAP Implementation, BPD Kaltim (June 2013)</li>
                <li>ICAAP Implementation, Babk Kalsel (June 2013)</li>
                <li>ICAAP Implementation, BPD Bali (June 2013)</li>
                <li>ICAAP Implementation, Bank Sulut (June 2013)</li>
                <li>ICAAP Implementation, Bank Jateng (June 2013)</li>
                <li>ICAAP Implementation, Bank Jatim (June 2013)</li>
                <li>ICAAP Implementation, Bank Maluku (June 2013)</li>
                <li>ICAAP Implementation, Bank Papua (June 2013)</li>
                <li>ICAAP Implementation, Bank NTB (June 2013)</li>
                <li>Risk Based Audit System Implementation, Bank Maluku (June 2013)</li>
                <li>Anti Fraud System Implementation, BPD KALTIM (June 2012)</li>
                <li>Anti Fraud System Implementation, Bank KALBAR (June 2012)</li>
                <li>Anti Fraud System Implementation, Bank Kalsel (June 2012)</li>
                <li>Anti Fraud System Implementation, BANK Jateng (June 2012)</li>
                <li>Anti Fraud System Implementation, Bank Jatim (June 2012)</li>
                <li>Anti Fraud System Implementation, BPD Bali (June 2012)</li>
                <li>Anti Fraud System Implementation, Bank Papua (June 2012)</li>
                <li>Anti Fraud System Implementation, Bank Maluku (June 2012)</li>
                <li>Anti Fraud System Implementation, Bank Nagari (June 2012)</li>
                <li>Anti Fraud System Implementation, Bank Sumut (June 2012)</li>
                <li>Anti Fraud System Implementation, Bank Aceh (June 2012)</li>
                <li>Risk Based Audit System Implementation, Bank Papua (Dec 2011)</li>
                <li>Risk Based Bank Rating Implemenation, BPD Kaltim (Dec  2011)</li>
                <li>Risk Based Bank Rating Implemenation, Bank Kalbar (Dec 2011)</li>
                <li>Risk Based Bank Rating Implemenation, Bank KALSEL (Dec 2011)</li>
                <li>Risk Based Bank Rating Implemenation, Bank Sulteng (Dec 2011)</li>
                <li>Risk Based Bank Rating Implemenation, Bank Jambi (Dec 2011)</li>
                <li>Risk Based Bank Rating Implemenation, BPD Bali (Dec 2011)</li>
                <li>Risk Based Bank Rating Implemenation, Bank Jateng (Dec 2011)</li>
                <li>Risk Based Bank Rating Implemenation, Bank Jatim (Dec 2011)</li>
                <li>Risk Based Bank Rating Implemenation, Bank Papua (August 2011)</li>
                <li>Risk Based Bank Rating Implemenation, Bank Maluku (July 2011)</li>
                <li>Anti Money Laundering Implementation, Bank Papua(April 2011)</li>
                <li>Anti Money Laundering Implementation, Bank SULUT (November 2010)</li>
                <li>Risk Management Implementation, Bank Maluku, (Dec 2009)</li>
                <li>Risk Management Implementation, Bank Sulawesi Utara, (Jan 2010)</li>
                <li>Risk Management Implementation, Bank Papua (July 2008)</li>
                <li>Enhancement Supply Management System, TELKOM (June 2011)</li>
                <li>Enterprise Application Development Support, TELKOM (February 2011)</li>
                <li>Intranet Portal Implementation, Senayan Sport City, (Oct 2009)</li>
                <li>Enhancement HR System TELEKOMUNIKASI INDONESIA (June 2009)</li>
                <li>Monitoring Application System Development, Sekretariat Negara RI (December 2008)</li>
                <li>Roll out Implementation (Project Management Consulting) CCF System & CABINS (Payment, AR, & CC) at TELKOM DIVRE VII in Program Infusion 2008 Phase II (December 2008)</li>
                <li>Intranet Portal Development – ESDM Department (February 2008)</li>
                <li>HRMIS Implementation – Bank Maluku (February 2008)</li>
                <li>Roll out Implementation CCF System & CABINS (Payment, AR, & CC) at TELKOM DIVRE VII in Program Infusion 2008 Phase I (May 2007) </li>
                <li>IT PMO TELKOM ISC Development (July 2006)</li>
                <li>Development of Common Database TELKOM Research & Development Center (May 2006)</li>
                <li>Development of Corporate Portal for Ministry of Women and Family Malaysia (February 2005)</li>
                <li>Development of Corporate Portal and Document Management for Center of Water Resources-East Java (September 2005)</li>
                <li>Development of Web Intranet and Internet TELKOM MCC (October 2005)</li>
                <li>Development of Office Automation for PT. ICON+ (January 2006)</li>
                <li>Integrating of Information Systems Board of Pension TELKOM INDONESIA (July 2004)</li>
                <li>Inventory Information System Board of Healthy TELKOM INDONESIA (January 2004)</li>
                <li>Reengineering Portal TELKOM CDC (TELKOM COMMUNITY DEVELOPMENT CENTRE) (September 2004)</li>
                <li>Web Intranet Board of Pension TELKOM INDONESIA (August 2004)</li>
                <li>Web Development for JP2M (Network of Marginal Society Empowerment) (September 2003)</li>
                <li>Prototype of Interactive Distance Learning for Human Resource Development (2002)</li>
            </ol>
        </div>
    </div>
</div>

<div id="Certification" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2022</td>
                    <td>PMO-CC (PMO Certified Consultant) - PMO Global Alliance, 2022</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>Certified Change Management Specialist – MSI (Management & Strategy Institute), 2022</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>PMO-CP (PMO Certified Practitioner) – PMO Global Alliance, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>P30 (Portfolio, Programme and Project Office) – AXELOS Global Best Practice, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified PRINCE2 Practitioner in Project Management – AXELOS Global Best Practice, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified PRINCE2 AGILE Practitioner in Project Management – AXELOS Global Best Practice, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified in Business Agility Foundation (ICP – BAF) – IC Agile, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified PRINCE2 Foundation in Project Management – AXELOS Global Best Practice, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified in Enterprise Risk Governance (CERG) – ERMA (ERM Academy), 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified Data Policy Solutions Engineer (CDPSE) – ISACA, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified Policy Management Professional - OCEG (Open Compliance & Ethical Group), 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified Finance Islamic Risk Assessment & Mitigation (CEIFRAM) – TAIF, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified in Emerging Technology for Business Professional – CERTNEXUS, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified Blockchain Expert – Blockchain Council, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified Digital Transformation Professional – Casugol, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified Digital Transformation Professional – Digitalization, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified Digital Business Leader – Digitalization, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>Certified TOGAF 9.2 for Enterprise Architecture – The Open Group, 2021</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>ITIL 4 Foundation – AXELOS Global Best Practice, 2021</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>Certified in Digital Business Transformation Management – CXO Transform, 2020</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>Certified in Governance, Risk Management, and Compliance Professional (GRCP) - OCEG (Open Compliance & Ethical Group), 2020</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>Certified in Governance, Risk Management, and Compliance Auditor (GRCA) -  OCEG (Open Compliance & Ethical Group), 2020</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>COBIT 5 Foundation – ISACA, 2020</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div id="Reviewer" class="tabcontent">
    <div class="block">
        <div>
            <table class="table table-hover">
                <tr>
                    <td>2024</td>
                    <td>Electronic Journal of Information Systems in Emerging Countries, Wiley, 2024</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Journal of Telecommunication and Digital Economy, 2024.</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Journal of Infrastructure, Policy, and Development, 2024.</td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td>Asian Journal of Technology Management, 2024.</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>Journal of System Engineerig and Business Intellegence, 2023.</td>
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