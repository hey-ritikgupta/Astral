<?php include('header.php') ?>

<!-- Page Title START -->
<div class="page-title-section" style="background-image:url('img/reg.jpg');">
	<div class="black-overlay-70"></div>
	<div class="container">
		<h1>CORE EXPERTISE</h1>
		<p>Regulatory</p>
	</div>
</div>
<!-- Page Title END -->
<!-- Serive Start -->
<section class="section" id="legacy" style="padding: 0px; margin-top: 5%;">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-8 service-text"><br>
      <h2 class="section-title textcolor">Regulatory</h2><hr class="title-hr" ><br>
            <p>Astral SteriTech operates in the regulated environment and has the capability to support a broad range of development stages.  We are committed to provide our clients with our regulatory expertise and international experience all along the product development, from early stage of API source identification, component identification, dossier preparation and submission, to late stage of commercial supply and post approval management. 
<br><br>
Regulatory support is available across the spectrum of our CDMO activities and targets the preparation of your product for the market with the correct level of control, supportive information and Quality & Regulatory oversight.
<br><br>
We have the capability to assess your project from a regulatory perspective, provide technical advice on your development program, including batch manufacturing, and prepare the regulatory documents in compliance with the latest international standards and product registration. Whatever the stage of your product development, a skilled team of experts will be able to answer your question and provide the best advice.
<br><br>
The scope of Astral SteriTech’s CDMO Regulatory Services covers Product Lifecycle Management enabling activities through:
<br><br>

<div class="row services-main">        
<div class="col-2 col-md-2 list-img" style="max-width: 12%;">
  <img src="img/points.png">
</div>
<div class="col-10 col-md-10  lists" >
  <ol class="service-list">
<li style="list-style-type: none; ">  Evaluation of and advice to development programs related to chemical, manufacturing and control aspects considering development stage and intended use of the product
</li>
<li style="list-style-type: none; ">Technical and regulatory assistance for the definition of specifications and stability protocol
</li><li style="list-style-type: none; ">Regulatory review of technical reports
</li><li style="list-style-type: none; ">Preparation of compliant regulatory documents for international registrations
</li><li style="list-style-type: none;  ">Expertise and Quality Overall Summaries
</li><li style="list-style-type: none;  ">Responses to queries and deficiencies from regulatory authorities
</li><li style="list-style-type: none;  ">  Life Cycle Submissions (amendments, variations, annual reports, etc.)
</li><li style="list-style-type: none;  ">Regulatory services are conducted in compliance with the international environment (ICH, EMA, FDA, USP/PE, etc.) </li>
  </ol>
</div>
  </div>
    <div class="row services-main2">    
      <h2>SERVICES</h2>    
<div class="col-12 col-md-12  lists" >
  <ol class="service-list">
<li style="list-style-type: none; ">Study of active ingredients
</li>
<li style="list-style-type: none; ">Formulation screening and development
</li><li style="list-style-type: none; ">Development and validation of analytical methods for drug products, raw materials and cleaning methods
</li><li style="list-style-type: none; ">Development and update of analytical methods for degradation products
</li><li style="list-style-type: none;  ">Technical transfer and validation
</li><li style="list-style-type: none;  ">Design, execute and analyze pre-stability / regulatory or commercial stability studies
</li><li style="list-style-type: none;  ">Thermal excursion studies
</li><li style="list-style-type: none;  ">Primary and secondary packaging identification and evaluation </li>
  </ol>
</div>
  </div>
                      <div style="margin-top:10%;">
      <script>
        $(document).ready(function () {
            $(window).resize(function () {
                drawRegionsMap();
            });
        });
    </script>
    <style>
        .chart {
            width: 100%;
            height: 400px;
        }
    </style>
    <div class="chart" id="regions_div"> </div>
      </div>

      </div>
        <div class="col-md-4">
          <?php include('sidebtn.php') ?>
        </div>
  
      </div></div>
</section>
<br><br><br>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['geochart', 'corechart'] });
        google.charts.setOnLoadCallback(drawRegionsMap);
        google.charts.setOnLoadCallback(drawChart);

        function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
                ['Country', 'Customer Count', 'Agent Count'],
                ['Canada', 999000, 100],
                ['Usa', 969000, 450],
                ['Mexico', 12000, 200],
                ['Jamaica', 850000, 250],
                ['T & T countries', 1110000, 590],
                ['Peru', 3975000, 690],
                ['Brazil', 4500, 100],
                ['Venezuela', 78600, 150],
                ['Ecuador', 67000, 400],
                ['El Salvador', 140000, 550],
                ['Guatemala', 1060000, 560],
                ['Romania', 60000, 420],
                ['South Africa', 1054000, 305],
                ['Zambia', 120000, 230],
                ['Ivory cost', 2904000, 180],
                ['Congo', 79000, 450],
                ['Albania', 15000, 290],
                ['Tanzania', 35000, 230],
                ['Uganda', 4015000, 750],
                ['Zimbabwe', 5000500, 1500],
                ['Nigeria', 5000500, 1500],
                ['Malawi', 5000500, 1500],
                ['Republic of Dominica', 5000500, 1500],
                ['Kazakhstan', 5000500, 1500],
                ['Russia', 5000500, 1500],
                ['Azerbaijan', 5000500, 1500],
                ['Ukraine', 5000500, 1500],
                ['latvia', 5000500, 1500],
                ['Yemen', 5000500, 1500],
                ['Philippines', 5000500, 1500],
                ['Malaysia', 5000500, 1500],
                ['Vietnam', 5000500, 1500],
                ['Myanmar', 5000500, 1500],
                ['Sri lanka', 5000500, 1500],
                ['Thailand', 5000500, 1500],
            ]);

            var options = {
                colorAxis: { colors: ['#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e', '#0f307e'] },
                legend: 'none',
            };

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
            chart.draw(data, options);
        }
    </script>
    





<?php include('footer.php') ?>