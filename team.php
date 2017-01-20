<?php include('header.php'); ?>
<div class="location">About > Teams</div>
<div class="row">
  <div class="col-md-8">
    <div class="container-fluid">
      <h1>Team</h1>
      <p>The international METROPOLE transdisciplinary applied research initiative was created and implemented by a team of researchers and practitioners in Brazil, the UK and the US.
  Our team members include natural scientists (climate modelling/meteorology,) inter-disciplinary scientists (economic/finance), social scientists (human dimensions of risk and urban disasters, science communications), and practitioners with a range of expertise (civil engineering, disaster planning.)
  In each country, we developed robust collaborations with our municipal partners by integrating their environmental planning and engineering personnel into our process, and our team into their organizational practices. Drawing on their interdisciplinary experience and expertise, we created an integrated approach for engaging and collaborating with decision makers and community stakeholders.
  </br>Our team included an external Advisory Board comprised of leading experts in each region. They provided invaluable perspectives on local, state and national legislative statues, municipal processes, risk communications, and local authority to creating/revising policy to generate public funds for resiliency improvements.
   Throughout the grant, our students, researchers, and municipal practitioners were engaged in dynamic discussions.</p>
    </div>

    <div class="col-sm-12 thumbnail text-center" >


        <img src="image/teammap.jpg" alt="Team map image" class="img-responsive">
        <div class="caption">
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><a href="#uk">Selsey, UK</a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><a href="#"> </a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"><h5><a href="#us">Broward County, FL, US</a></h5></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><<a href="#brazil">Santos, Brazil</a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><a href="#"> </a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><a href="#"> </a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><a href="#"> </a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><a href="#"> </a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><a href="#"> </a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><a href="#"> </a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><a href="#"> </a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>
          <div class="row"><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"><h4><a href="#"> </a></h4></div><div class="col-xs-2"></div><div class="col-xs-2"></div><div class="col-xs-2"></div></div>


        </div>

    </div>

    <?php
      function listTeamMembers($country){
        $row = 1;
        if (($handle = fopen("files/team.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                // echo "<p> $num fields in line $row: <br /></p>\n";
                // $row++;
                // for ($c=0; $c < $num; $c++) {
                //     echo $data[$c] . "<br />\n";
                // }
                if ($data[0] == $country){
                  echo '<div class="row vertical-align" >';
                  echo '  <div class="col-sm-4">';

                  if (file_exists ('image/'.$data[1].'.jpg' )){
                      echo '  <img src="image/' . $data[1] . '.jpg" alt="Team image" class="img-responsive">';
                  }elseif (file_exists ('image/'.$data[1].'.png')){
                      echo '  <img src="image/' . $data[1] . '.png" alt="Team image" class="img-responsive">';
                  }
                  echo "  </div>";
                  echo '  <div class="col-sm-8 vcenter">';
                  echo '    <h4 id="name">' . $data[1] .' ' . $data[2];
                  echo '    <a href="mailto:' . $data[3] . '" type="button" class="btn btn-default btn-xs" aria-label="email">';
                  echo '      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>';
                  echo "    </a>";
                  echo '    </h4>';
                  echo '    <h5 id="organization"><strong>' . $data[4] . "</strong></h5>";
                  // echo '    <p><strong>Project Role:</strong> '. $data[5] . '</p>';
                  // echo '    <p><strong>Core Expertise and Interests:</strong> '. $data[6] . '</p>';
                  echo '    <p> '. $data[5] . '</p>';
                  echo '    <p> '. $data[6] . '</p>';
                  echo "  </div>";
                  echo "</div>";
                }
            }
            fclose($handle);
        }
      }

    ?>
    <div class="well" id="team">
      <h2>Research Team Members </h2>

      <div class="row" id="country">
        <div class="col-md-12">
          <h3 id="us">United States of America  </h3>
        </div>
      </div>
      <?php listTeamMembers("US") ?>



      <div class="row" id="country">
        <div class="col-md-12">
          <h3 id="uk">United Kingdom  </h3>
        </div>
      </div>
      <?php listTeamMembers("UK") ?>

      <div class="row" id="country">
        <div class="col-md-12">
          <h3 id="brazil">Brazil </h3>
        </div>
      </div>

      <?php listTeamMembers("Brazil") ?>


    </div>

    </div>
    <div class="col-md-4">
      <div class="well">
      <h3>Advisory Board Members</h3>
      <ul>
        <li>
          <a href=" http://climatelondon.org.uk/ ">Kristen Guida, London Climate Change Partnership, UK</a>
        </li>
        <li>
          <a href="http://www.floridaplanning.org/ ">Henry Bittaker, The American Planning Association – Florida</a>
        </li>
        <li>
          <a href="http://www.floridajobs.org/community-planning-and-development">Florida Department of Economic Opportunity Division of Community Planning</a>
        </li>
        <li>
          <a href="http://coast.noaa.gov/regions/gulfcoast/ ">Heidi Stiller, NOAA Gulf Coastal Services Center</a>
        </li>
        <li>
          <a href="http://www.agem.sp.gov.br/ ">Fernanda Faria Meneghello, Agencia Metropolitana da Baixada Santista (AGEM)</a>
        </li>
        <li>
          <a href="https://www.unican.es/Departamentos/dcitym/informacion_general/GEOLOGIA.htm">Planning Division, Chichester District, UK Instituto Geologico, Universidad de Cantabria, Spain</a>
        </li>
        <li>
          <a href="http://www.igc.usp.br/">Instituto de Geociencias, Universidade de Sao Paulo (USP), Brazil</a>
        </li>
        <li>
          <a href="http://www.igc.sp.gov.br/">Instituto Geográfico e Cartográfico, Sao Paulo, Brazil</a>
        </li>
        <li>
          <a href="http://www.unifesp.br/campus/san7/">Instituto do Mar, Universidade Federal de Sao Paulo (UNIFESP), Santos, Brazil</a>
        </li>
      </ul>
    </div>
    </div>



  </div>

<?php include('footer.php'); ?>
