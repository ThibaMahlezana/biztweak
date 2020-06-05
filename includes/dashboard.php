
<?php
  require 'dbh.php';
  session_start();
  // array_push($infoStuff, 'testing dashboard'."<br>"."<br>";
  $infoStuff = array();
  $capture = array();
  echo "<br>"."<br>";
  echo "<br>"."<br>";

  $sql = "SELECT * FROM users WHERE emailUsers='$_SESSION[email]'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $type = $row["typers"];
    }
  } else {
    echo "no infomation on account type";
  }

  if ($type == 'Admin') {
    # code...
    $sql = "SELECT * FROM users where emailUsers!='$_SESSION[email]' and typers!= 'Admin'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($capture, $row["emailUsers"]);
      }
    } else {
      echo "there are no users";
    }
  } else if ($type == 'Consultant') {
    $sql = "SELECT * FROM users WHERE emailUsers='$_SESSION[email]'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $consKey = $row["consultKey"];
      }
    } else {
      echo "you have no users under you";
    }
    if ($consKey!=''){
      $sql = "SELECT * FROM users WHERE emailUsers!='$_SESSION[email]' and consultKey='$consKey'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          array_push($capture, $row["emailUsers"]);
        }
      } else {
        echo "you have no users under you";
      } 
    }
    //Calculations
      $usercomplete = array();
      $userincomplete = array();
      // GRAPH VARIABLES
        $total_talent= 0;
        $total_legal= 0;
        $total_soc= 0;
        $total_strategy= 0;
        $total_org= 0;
        $total_finman= 0;
        $total_vprop= 0;
        $total_cs= 0;
        $total_cha= 0;
        $total_cusrel= 0;
        $total_revstr= 0;
        $total_keyact= 0;
        $total_keyres= 0;
        $total_keypart= 0;
        $total_coststr= 0;
        $total_curralt= 0;
        $total_sol= 0;
        $total_unfad= 0;

        $talent_av = 0;
        $legal_av  = 0;
        $soc_av  = 0;
        $org_av  = 0;
        $strategy_av  = 0;
        $finman_av  = 0;

        $vprop_av  = 0;
        $cs_av  = 0;
        $cha_av  = 0;
        $cusrel_av  = 0;

        $revstr_av  = 0;
        $keyact_av  = 0;
        $keyres_av  = 0;
        $keypart_av  = 0;

        $coststr_av  = 0;
        $curralt_av  = 0;
        $sol_av  = 0;
        $unfad_av  = 0;

      foreach($capture as $user){
        // graphs
          $sql = "SELECT * FROM bizInfo WHERE sdatauid='$user'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $bizStage = $row["sdataq6"];
            }
          }
      
          if ($bizStage == 'Idea/Concept' || $bizStage == 'Start Up (Pre-revenue)'){
            //Structure Section
              //Talent
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq9', 'sdataq10', 'sdataq11', 'sdataq12', 'sdataq13', 'sdataq14'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_talent += 3;
                      }
                    }
                  }
                  $talent_av += 3 * count($cols);
                } 
              //Legal
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq15', 'sdataq16', 'sdataq17', 'sdataq18', 'sdataq19', 'sdataq20', 'sdataq21', 'sdataq22', 'sdataq23', 'sdataq24', 'sdataq25', 'sdataq26', 'sdataq27', 'sdataq28', 'sdataq29', 'sdataq30', 'sdataq31', 'sdataq32', 'sdataq33', 'sdataq34', 'sdataq35', 'sdataq36', 'sdataq37', 'sdataq38', 'sdataq39', 'sdataq40', 'sdataq41', 'sdataq42', 'sdataq44', 'sdataq45', 'sdataq46'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_legal += 2;
                      }
                    }
                  }
                  $legal_av += 2 * count($cols);
                }
              //Service Offering Capability
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq47', 'sdataq48', 'sdataq49', 'sdataq50', 'sdataq51', 'sdataq52', 'sdataq53', 'sdataq54', 'sdataq55', 'sdataq56', 'sdataq57', 'sdataq58', 'sdataq59', 'sdataq60'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_soc += 2;
                      }
                    }
                  }
                  $soc_av += 2 * count($cols);
                }
              //Organisation
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq61', 'sdataq62', 'sdataq63', 'sdataq64', 'sdataq65', 'sdataq66', 'sdataq67', 'sdataq68', 'sdataq69', 'sdataq70'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_org += 1;
                      }
                    }
                  }
                  $org_av += 1 * count($cols);
                }
              //Strategy
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq71', 'sdataq72', 'sdataq73', 'sdataq74', 'sdataq75', 'sdataq76'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_strategy += 3;
                      }
                    }
                  }
                  $strategy_av += 3 * count($cols);
                }
              //Financial Management
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq77', 'sdataq78', 'sdataq79', 'sdataq80', 'sdataq81'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_finman += 1;
                      }
                    }
                  }
                  $finman_av += 1 * count($cols);
                }
      
            //Concept Section
              //Vprop
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq82', 'sdataq83', 'sdataq84', 'sdataq85', 'sdataq86'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_vprop += 3;
                      }
                    }
                  }
                  $vprop_av += 3 * count($cols);
                } 
              //CS
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq87', 'sdataq88', 'sdataq89', 'sdataq90', 'sdataq91', 'sdataq92', 'sdataq93', 'sdataq94' ];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_cs += 3;
                      }
                    }
                  }
                  $cs_av += 3 * count($cols);
                }
              //Cha
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq95', 'sdataq96', 'sdataq97', 'sdataq98'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_cha += 1;
                      }
                    }
                  }
                  $cha_av += 1 * count($cols);
                }
              //CusRel
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
      
                  $cols = ['sdataq99', 'sdataq100', 'sdataq101', 'sdataq102'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_cusrel += 1;
                      }
                    }
                  }
                  $cusrel_av += 1 * count($cols);
                }
              //RevStr
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
      
                  $cols = ['sdataq103', 'sdataq104', 'sdataq105', 'sdataq106'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_revstr += 1;
                      }
                    }
                  }
                  $revstr_av += 1 * count($cols);
                } 
              //KeyAct
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq107'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_keyact += 1;
                      }
                    }
                  }
                  $keyact_av += 1 * count($cols);
                }
              //KeyRes
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq108'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_keyres += 1;
                      }
                    }
                  }
                  $keyres_av += 1 * count($cols);
                }
              //KeyPart
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq109', 'sdataq110'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_keypart += 1;
                      }
                    }
                  }
                  $keypart_av += 1 * count($cols);
                }
              //CostStr
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq111', 'sdataq112', 'sdataq113', 'sdataq114'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_coststr += 1;
                      }
                    }
                  }
                  $coststr_av += 1 * count($cols);
                }
              //CurrAlt
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq115', 'sdataq116'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_curralt += 1;
                      }
                    }
                  }
                  $curralt_av += 1 * count($cols);
                }
              //Sol
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq117'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_sol += 2;
                      }
                    }
                  }
                  $sol_av += 2 * count($cols);
                } 
              //UnfAd
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq118'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_unfad += 2;
                      }
                    }
                  }
                  $unfad_av += 2 * count($cols);
                }

          } else {
            //Structure Section
              //Talent
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq9', 'sdataq10', 'sdataq11', 'sdataq12', 'sdataq13', 'sdataq14'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_talent += 3;
                      }
                    }
                  }
                  $talent_av += 3 * count($cols);
                }
              //Legal
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq15', 'sdataq16', 'sdataq17', 'sdataq18', 'sdataq19', 'sdataq20', 'sdataq21', 'sdataq22', 'sdataq23', 'sdataq24', 'sdataq25', 'sdataq26', 'sdataq27', 'sdataq28', 'sdataq29', 'sdataq30', 'sdataq31', 'sdataq32', 'sdataq33', 'sdataq34', 'sdataq35', 'sdataq36', 'sdataq37', 'sdataq38', 'sdataq39', 'sdataq40', 'sdataq41', 'sdataq42', 'sdataq44', 'sdataq45', 'sdataq46'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_legal += 1;
                      }
                    }
                  }
                  $legal_av += 1 * count($cols);
                }
              //Service Offering Capability
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq47', 'sdataq48', 'sdataq49', 'sdataq50', 'sdataq51', 'sdataq52', 'sdataq53', 'sdataq54', 'sdataq55', 'sdataq56', 'sdataq57', 'sdataq58', 'sdataq59', 'sdataq60'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_soc += 1;
                      }
                    }
                  }
                  $soc_av += 1 * count($cols);
                }
              //Organisation
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq61', 'sdataq62', 'sdataq63', 'sdataq64', 'sdataq65', 'sdataq66', 'sdataq67', 'sdataq68', 'sdataq69', 'sdataq70'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_org += 3;
                      }
                    }
                  }
                  $org_av += 3 * count($cols);
                }
              //Strategy
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq71', 'sdataq72', 'sdataq73', 'sdataq74', 'sdataq75', 'sdataq76'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_strategy += 2;
                      }
                    }
                  }
                  $strategy_av += 2 * count($cols);
                } 
              //Financial Management
                $sql = "SELECT * FROM bizStructure WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq77', 'sdataq78', 'sdataq79', 'sdataq80', 'sdataq81'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_finman += 2;
                      }
                    }
                  }
                  $finman_av += 2 * count($cols);
                }
      
            //Concept Section
              //Vprop
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq82', 'sdataq83', 'sdataq84', 'sdataq85', 'sdataq86'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_vprop += 3;
                      }
                    }
                  }
                  $vprop_av += 3 * count($cols);
                }
              //CS
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq87', 'sdataq88', 'sdataq89', 'sdataq90', 'sdataq91', 'sdataq92', 'sdataq93', 'sdataq94' ];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_cs += 3;
                      }
                    }
                  }
                  $cs_av += 3 * count($cols);
                }
              //Cha
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq95', 'sdataq96', 'sdataq97', 'sdataq98'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_cha += 2;
                      }
                    }
                  }
                  $cha_av += 2 * count($cols);
                }
              //CusRel
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq99', 'sdataq100', 'sdataq101', 'sdataq102'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_cusrel += 1;
                      }
                    }
                  }
                  $cusrel_av += 1 * count($cols);
                }
              //RevStr
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq103', 'sdataq104', 'sdataq105', 'sdataq106'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_revstr += 1;
                      }
                    }
                  }
                  $revstr_av += 1 * count($cols);
                }
              //KeyAct
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq107'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_keyact += 2;
                      }
                    }
                  }
                  $keyact_av += 2 * count($cols);
                }
              //KeyRes
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq108'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_keyres += 1;
                      }
                    }
                  }
                  $keyres_av += 1 * count($cols);
                }
              //KeyPart
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq109', 'sdataq110'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_keypart += 1;
                      }
                    }
                  }
                  $keypart_av += 1 * count($cols);
                }
              //CostStr
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq111', 'sdataq112', 'sdataq113', 'sdataq114'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_coststr += 1;
                      }
                    }
                  }
                  $coststr_av += 1 * count($cols);
                }
              //CurrAlt
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq115', 'sdataq116'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_curralt += 1;
                      }
                    }
                  }
                  $curralt_av += 1 * count($cols);
                }
              //Sol
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq117'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_sol += 1;
                      }
                    }
                  }
                  $sol_av += 1 * count($cols);
                }
              //UnfAd
                $sql = "SELECT * FROM bizConcept WHERE sdatauid='$user'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $cols = ['sdataq118'];
                  while($row = $result->fetch_assoc()) {
                    foreach($cols as $col){
                      if ($row[$col] == 'True'){
                        $total_unfad += 1;
                      }
                    }
                  }
                  $unfad_av += 1 * count($cols);
                }
                
          }
        // to check structure
          $talent_cols = ['sdataq9', 'sdataq10', 'sdataq11', 'sdataq12', 'sdataq13', 'sdataq14'];
          $legal_cols = ['sdataq15', 'sdataq16', 'sdataq17', 'sdataq18', 'sdataq19', 'sdataq20', 'sdataq21', 'sdataq22', 'sdataq23', 'sdataq24', 'sdataq25', 'sdataq26', 'sdataq27', 'sdataq28', 'sdataq29', 'sdataq30', 'sdataq31', 'sdataq32', 'sdataq33', 'sdataq34', 'sdataq35', 'sdataq36', 'sdataq37', 'sdataq38', 'sdataq39', 'sdataq40', 'sdataq41', 'sdataq42', 'sdataq44', 'sdataq45', 'sdataq46'];
          $soc_cols = ['sdataq47', 'sdataq48', 'sdataq49', 'sdataq50', 'sdataq51', 'sdataq52', 'sdataq53', 'sdataq54', 'sdataq55', 'sdataq56', 'sdataq57', 'sdataq58', 'sdataq59', 'sdataq60'];
          $organ_cols = ['sdataq61', 'sdataq62', 'sdataq63', 'sdataq64', 'sdataq65', 'sdataq66', 'sdataq67', 'sdataq68', 'sdataq69', 'sdataq70'];
          $stra_cols = ['sdataq71', 'sdataq72', 'sdataq73', 'sdataq74', 'sdataq75', 'sdataq76'];
          $finman_cols = ['sdataq77', 'sdataq78', 'sdataq79', 'sdataq80', 'sdataq81'];

          $sql = "SELECT * FROM bizstructure WHERE sdatauid!='$user'";
          $result = $conn->query($sql);
          $str_incomplete = array();
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $talent_check = 'Good';
              foreach($talent_cols as $col){
                if ($row[$col]==''){
                  $talent_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $talent_check = 'Yes';
                }
              }
              $legal_check = 'Good';
              foreach($legal_cols as $col){
                if ($row[$col]==''){
                  $legal_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $legal_check = 'Yes';
                }
              }
              $soc_check = 'Good';
              foreach($soc_cols as $col){
                if ($row[$col]==''){
                  $soc_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $soc_check = 'Yes';
                }
              }
              $organ_check = 'Good';
              foreach($organ_cols as $col){
                if ($row[$col]==''){
                  $organ_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $organ_check = 'Yes';
                }
              }
              $stra_check = 'Good';
              foreach($stra_cols as $col){
                if ($row[$col]==''){
                  $stra_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $stra_check = 'Yes';
                }
              }
              $finman_check = 'Good';
              foreach($finman_cols as $col){
                if ($row[$col]==''){
                  $finman_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $finman_check = 'Yes';
                }
              }
              array_push($str_incomplete, $talent_check, $legal_check, $soc_check, $organ_check, $stra_check, $finman_check);
            }
          }
        // to check concepts
          $vprop_cols = ['sdataq82', 'sdataq83', 'sdataq84', 'sdataq85', 'sdataq86'];
          $cs_cols = ['sdataq87', 'sdataq88', 'sdataq89', 'sdataq90', 'sdataq91', 'sdataq92', 'sdataq93', 'sdataq94'];
          $cha_cols = ['sdataq95', 'sdataq96', 'sdataq97', 'sdataq98'];
          $cusrel_cols = ['sdataq99', 'sdataq100', 'sdataq101', 'sdataq102'];
          $revstr_cols = ['sdataq103', 'sdataq104', 'sdataq105', 'sdataq106'];
          $keyact_cols = ['sdataq107'];
          $keyres_cols = ['sdataq108'];
          $keypart_cols = ['sdataq109', 'sdataq110'];
          $coststr_cols = ['sdataq111', 'sdataq112', 'sdataq113', 'sdataq114'];
          $curralt_cols = ['sdataq115', 'sdataq116'];
          $sol_cols = ['sdataq117'];
          $unfad_cols = ['sdataq118'];

          $sql = "SELECT * FROM bizconcept WHERE sdatauid!='$user'";
          $result = $conn->query($sql);
          $con_incomplete = array();
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $vprop_check = 'Good';
              foreach($vprop_cols as $col){
                if ($row[$col]==''){
                  // echo 'vprop';
                  $vprop_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $vprop_check = 'Yes';
                }
              }
              $cs_check = 'Good';
              foreach($cs_cols as $col){
                if ($row[$col]==''){
                  // echo 'cs';
                  $cs_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $cs_check = 'Yes';
                }
              }
              $cha_check = 'Good';
              foreach($cha_cols as $col){
                if ($row[$col]==''){
                  // echo 'cha';
                  $cha_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $cha_check = 'Yes';
                }
              }
              $cusrel_check = 'Good';
              foreach($cusrel_cols as $col){
                if ($row[$col]==''){
                  $cusrel_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $cusrel_check = 'Yes';
                }
              }
              $revstr_check = 'Good';
              foreach($revstr_cols as $col){
                if ($row[$col]==''){
                  $revstr_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $revstr_check = 'Yes';
                }
              }
              $keyact_check = 'Good';
              foreach($keyact_cols as $col){
                if ($row[$col]==''){
                  $keyact_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $keyact_check = 'Yes';
                }
              }
              $keyres_check = 'Good';
              foreach($keyres_cols as $col){
                if ($row[$col]==''){
                  $keyres_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $keyres_check = 'Yes';
                }
              }
              $keypart_check = 'Good';
              foreach($keypart_cols as $col){
                if ($row[$col]==''){
                  $keypart_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $keypart_check = 'Yes';
                }
              }
              $coststr_check = 'Good';
              foreach($coststr_cols as $col){
                if ($row[$col]==''){
                  $coststr_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $coststr_check = 'Yes';
                }
              }
              $curralt_check = 'Good';
              foreach($curralt_cols as $col){
                if ($row[$col]==''){
                  $curralt_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $curralt_check = 'Yes';
                }
              }
              $sol_check = 'Good';
              foreach($sol_cols as $col){
                if ($row[$col]==''){
                  $sol_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $sol_check = 'Yes';
                }
              }
              $unfad_check = 'Good';
              foreach($unfad_cols as $col){
                if ($row[$col]==''){
                  $unfad_check = 'No';
                } else if ($row[$col] == "True" || $row[$col] == "False") {
                  $unfad_check = 'Yes';
                }
              }
              array_push($con_incomplete, $vprop_check, $cs_check, $cha_check, $cusrel_check, $revstr_check, $keyact_check, $keyres_check, $keypart_check, $coststr_check, $curralt_check, $sol_check, $unfad_check);
            }
          }

        if (!in_array("No", $con_incomplete) || !in_array("No", $str_incomplete)){
          array_push($usercomplete, $user);
        }
        if (in_array("No", $con_incomplete) || in_array("No", $str_incomplete)){
          array_push($userincomplete, $user);
        }
      }
    
    $totalincomplete = 0;
    foreach($str_incomplete as $check){ 
      if ($check == "No"){
        $totalincomplete += 1;
      }
    }
    foreach($con_incomplete as $check){ 
      if ($check == "No"){
        $totalincomplete += 1;
      }
    }
    $totalcomplete = 0;
    foreach($str_incomplete as $check){ 
      if ($check == "Yes"){
        $totalcomplete += 1;
      }
    }
    foreach($con_incomplete as $check){ 
      if ($check == "Yes"){
        $totalcomplete += 1;
      }
    }

    $totalassessments = count($capture)*18;

    $str_list_consultant = array (
      array("talent", $total_talent/$talent_av*100),
      array("legal", $total_legal/$legal_av*100),
      array("service offering cabability", $total_soc/$soc_av*100),
      array("organisation", $total_org/$org_av*100),
      array("strategy", $total_strategy/$strategy_av*100),
      array("financial management", $total_finman/$finman_av*100)
    );

    $con_list_consultant = array (
      array("Value Proposition", $total_vprop/$vprop_av*100),
      array("Customer Segment", $total_cs/$cs_av*100),
      array("Channels", $total_cha/$cha_av*100),
      array("Customer relationships", $total_cusrel/$cusrel_av*100),

      array("Revenue streams", $total_revstr/$revstr_av*100),
      array("Key activities", $total_keyact/$keyact_av*100),
      array("Key Resources", $total_keyres/$keyres_av*100),
      array("Key partners", $total_keypart/$keypart_av*100),

      array("Cost structure", $total_coststr/$coststr_av*100),
      array("Current alternatives", $total_curralt/$curralt_av*100),
      array("Solution", $total_sol/$sol_av*100),
      array("Unfair Advantage", $total_unfad/$unfad_av*100)
    );

  } else if ($type == 'User') {
    $sql = "SELECT * FROM users WHERE emailUsers='$_SESSION[email]'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $consKey = $row["consultKey"];
      }
    } else {
      echo "error at consult key";
    }
    $sql = "SELECT * FROM bizInfo WHERE sdatauid='$_SESSION[email]'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        array_push($infoStuff, "Business name: " . $row["sdataq1"]. "<br>". "<br>");
        $bizStage = $row["sdataq6"];
      }
    } else {
      array_push($infoStuff, "No information found for dashboard please answer some questions under Biz Info"."<br>");
    }

    array_push($infoStuff,  "<br>". "<br>"."Business stage: " .$bizStage. "<br>". "<br>");

    if ($bizStage == 'Idea/Concept' || $bizStage == 'Start Up (Pre-revenue)'){
      //Structure Section
        //Talent
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_talent= 0;
            $cols = ['sdataq9', 'sdataq10', 'sdataq11', 'sdataq12', 'sdataq13', 'sdataq14'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_talent += 3;
                }
              }
              array_push($infoStuff, "Talent Score: ".$total_talent."<br>");
            }
            $talent_av = 3 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Talent"."<br>");
          }
        //Legal
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_legal= 0;
            $cols = ['sdataq15', 'sdataq16', 'sdataq17', 'sdataq18', 'sdataq19', 'sdataq20', 'sdataq21', 'sdataq22', 'sdataq23', 'sdataq24', 'sdataq25', 'sdataq26', 'sdataq27', 'sdataq28', 'sdataq29', 'sdataq30', 'sdataq31', 'sdataq32', 'sdataq33', 'sdataq34', 'sdataq35', 'sdataq36', 'sdataq37', 'sdataq38', 'sdataq39', 'sdataq40', 'sdataq41', 'sdataq42', 'sdataq44', 'sdataq45', 'sdataq46'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_legal += 2;
                }
              }
              array_push($infoStuff, "Legal Score: ".$total_legal."<br>");
            }
            $legal_av = 2 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Legal"."<br>");
              }
        //Service Offering Capability
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_soc= 0;
            $cols = ['sdataq47', 'sdataq48', 'sdataq49', 'sdataq50', 'sdataq51', 'sdataq52', 'sdataq53', 'sdataq54', 'sdataq55', 'sdataq56', 'sdataq57', 'sdataq58', 'sdataq59', 'sdataq60'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_soc += 2;
                }
              }
              array_push($infoStuff, "Service Offering Capability Score: ".$total_soc."<br>");
            }
            $soc_av = 2 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Service Offering Capability"."<br>");
          }
        //Organisation
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_org= 0;
            $cols = ['sdataq61', 'sdataq62', 'sdataq63', 'sdataq64', 'sdataq65', 'sdataq66', 'sdataq67', 'sdataq68', 'sdataq69', 'sdataq70'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_org += 1;
                }
              }
              array_push($infoStuff, "Organisation Score: ".$total_org."<br>");
            }
            $org_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Organisation"."<br>");
          }
        //Strategy
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_strategy= 0;
            $cols = ['sdataq71', 'sdataq72', 'sdataq73', 'sdataq74', 'sdataq75', 'sdataq76'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_strategy += 3;
                }
              }
              array_push($infoStuff, "Strategy Score: ".$total_strategy."<br>");
            }
            $strategy_av = 3 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Strategy"."<br>");
          }
        //Financial Management
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_finman= 0;
            $cols = ['sdataq77', 'sdataq78', 'sdataq79', 'sdataq80', 'sdataq81'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_finman += 1;
                }
              }
              array_push($infoStuff, "Financial Management Score: ".$total_finman."<br>");
            }
            $finman_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Financial Management"."<br>");
          }

      $structure_total = $total_talent + $total_legal + $total_soc + $total_org + $total_strategy + $total_finman;
      $structure_score = round($structure_total/142*100, 2);
      array_push($infoStuff, "<br>"."Structure % ".$structure_score."<br>"."<br>");
      //Concept Section
        //Vprop
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_vprop= 0;
            $cols = ['sdataq82', 'sdataq83', 'sdataq84', 'sdataq85', 'sdataq86'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_vprop += 3;
                }
              }
              array_push($infoStuff, "Value Proposition Score: ".$total_vprop."<br>");
            }
            $vprop_av = 3 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Value Proposition"."<br>");
          }
        //CS
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_cs= 0;
            $cols = ['sdataq87', 'sdataq88', 'sdataq89', 'sdataq90', 'sdataq91', 'sdataq92', 'sdataq93', 'sdataq94' ];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_cs += 3;
                }
              }
              array_push($infoStuff, "Customer Segment Score: ".$total_cs."<br>");
            }
            $cs_av = 3 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Customer Segment"."<br>");
          }
        //Cha
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_cha= 0;
            $cols = ['sdataq95', 'sdataq96', 'sdataq97', 'sdataq98'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_cha += 1;
                }
              }
              array_push($infoStuff, "Channels Score: ".$total_cha."<br>");
            }
            $cha_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Channels"."<br>");
          }
        //CusRel
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_cusrel= 0;
            $cols = ['sdataq99', 'sdataq100', 'sdataq101', 'sdataq102'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_cusrel += 1;
                }
              }
              array_push($infoStuff, "Customer relationships Score: ".$total_cusrel."<br>");
            }
            $cusrel_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Customer relationships"."<br>");
          }
        //RevStr
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_revstr= 0;
            $cols = ['sdataq103', 'sdataq104', 'sdataq105', 'sdataq106'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_revstr += 1;
                }
              }
              array_push($infoStuff, "Revenue streams Score: ".$total_revstr."<br>");
            }
            $revstr_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Revenue streams"."<br>");
          }
        //KeyAct
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_keyact= 0;
            $cols = ['sdataq107'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_keyact += 1;
                }
              }
              array_push($infoStuff, "Key activities Score: ".$total_keyact."<br>");
            }
            $keyact_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Key activities"."<br>");
          }
        //KeyRes
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_keyres= 0;
            $cols = ['sdataq108'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_keyres += 1;
                }
              }
              array_push($infoStuff, "Key Resources Score: ".$total_keyres."<br>");
            }
            $keyres_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Key Resources"."<br>");
          }
        //KeyPart
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_keypart= 0;
            $cols = ['sdataq109', 'sdataq110'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_keypart += 1;
                }
              }
              array_push($infoStuff, "Key partners Score: ".$total_keypart."<br>");
            }
            $keypart_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Key partners"."<br>");
          }
        //CostStr
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_coststr= 0;
            $cols = ['sdataq111', 'sdataq112', 'sdataq113', 'sdataq114'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_coststr += 1;
                }
              }
              array_push($infoStuff, "Cost structure Score: ".$total_coststr."<br>");
            }
            $coststr_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Cost structure"."<br>");
          }
        //CurrAlt
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_curralt= 0;
            $cols = ['sdataq115', 'sdataq116'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_curralt += 1;
                }
              }
              array_push($infoStuff, "Current alternatives Score: ".$total_curralt."<br>");
            }
            $curralt_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Current alternatives"."<br>");
          }
        //Sol
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_sol= 0;
            $cols = ['sdataq117'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_sol += 2;
                }
              }
              array_push($infoStuff, "Solution Score: ".$total_sol."<br>");
            }
            $sol_av = 2 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Solution"."<br>");
          }
        //UnfAd
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_unfad= 0;
            $cols = ['sdataq118'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_unfad += 2;
                }
              }
              array_push($infoStuff, "Unfair Advantage Score: ".$total_unfad."<br>");
            }
            $unfad_av = 2 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Unfair Advantage"."<br>");
          }

      $concept_total = $total_vprop + $total_cs + $total_cha + $total_cusrel + $total_revstr + $total_keyact + $total_keyres + $total_keypart + $total_coststr + $total_curralt + $total_sol + $total_unfad; 
      $concept_score = round($concept_total/66*100, 2);
      array_push($infoStuff, "<br>"."Concept % ".$concept_score."<br>"."<br>");
    } else {
      //Structure Section
        //Talent
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_talent= 0;
            $cols = ['sdataq9', 'sdataq10', 'sdataq11', 'sdataq12', 'sdataq13', 'sdataq14'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_talent += 3;
                }
              }
              array_push($infoStuff, "Talent Score: ".$total_talent."<br>");
            }
            $talent_av = 3 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Talent"."<br>");
          }
        //Legal
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_legal= 0;
            $cols = ['sdataq15', 'sdataq16', 'sdataq17', 'sdataq18', 'sdataq19', 'sdataq20', 'sdataq21', 'sdataq22', 'sdataq23', 'sdataq24', 'sdataq25', 'sdataq26', 'sdataq27', 'sdataq28', 'sdataq29', 'sdataq30', 'sdataq31', 'sdataq32', 'sdataq33', 'sdataq34', 'sdataq35', 'sdataq36', 'sdataq37', 'sdataq38', 'sdataq39', 'sdataq40', 'sdataq41', 'sdataq42', 'sdataq44', 'sdataq45', 'sdataq46'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_legal += 1;
                }
              }
              array_push($infoStuff, "Legal Score: ".$total_legal."<br>");
            }
            $legal_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Legal"."<br>");
              }
        //Service Offering Capability
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_soc= 0;
            $cols = ['sdataq47', 'sdataq48', 'sdataq49', 'sdataq50', 'sdataq51', 'sdataq52', 'sdataq53', 'sdataq54', 'sdataq55', 'sdataq56', 'sdataq57', 'sdataq58', 'sdataq59', 'sdataq60'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_soc += 1;
                }
              }
              array_push($infoStuff, "Service Offering Capability Score: ".$total_soc."<br>");
            }
            $soc_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Service Offering Capability"."<br>");
          }
        //Organisation
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_org= 0;
            $cols = ['sdataq61', 'sdataq62', 'sdataq63', 'sdataq64', 'sdataq65', 'sdataq66', 'sdataq67', 'sdataq68', 'sdataq69', 'sdataq70'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_org += 3;
                }
              }
              array_push($infoStuff, "Organisation Score: ".$total_org."<br>");
            }
            $org_av = 3 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Organisation"."<br>");
              }
        //Strategy
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_strategy= 0;
            $cols = ['sdataq71', 'sdataq72', 'sdataq73', 'sdataq74', 'sdataq75', 'sdataq76'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_strategy += 2;
                }
              }
              array_push($infoStuff, "Strategy Score: ".$total_strategy."<br>");
            }
            $strategy_av = 2 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Strategy"."<br>");
          }
        //Financial Management
          $sql = "SELECT * FROM bizStructure WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_finman= 0;
            $cols = ['sdataq77', 'sdataq78', 'sdataq79', 'sdataq80', 'sdataq81'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_finman += 2;
                }
              }
              array_push($infoStuff, "Financial Management Score: ".$total_finman."<br>");
            }
            $finman_av = 2 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Structure - Financial Management"."<br>");
          }
      
      $structure_total = $total_talent + $total_legal + $total_soc + $total_org + $total_strategy + $total_finman;
      $structure_score = round($structure_total/129*100, 2);
      array_push($infoStuff, "<br>"."Structure % ".$structure_score."<br>"."<br>");
      //Concept Section
        //Vprop
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_vprop= 0;
            $cols = ['sdataq82', 'sdataq83', 'sdataq84', 'sdataq85', 'sdataq86'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_vprop += 3;
                }
              }
              array_push($infoStuff, "Value Proposition Score: ".$total_vprop."<br>");
            }
            $vprop_av = 3 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Value Proposition"."<br>");
          }
        //CS
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_cs= 0;
            $cols = ['sdataq87', 'sdataq88', 'sdataq89', 'sdataq90', 'sdataq91', 'sdataq92', 'sdataq93', 'sdataq94' ];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_cs += 3;
                }
              }
              array_push($infoStuff, "Customer Segment Score: ".$total_cs."<br>");
            }
            $cs_av = 3 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Customer Segment"."<br>");
          }
        //Cha
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_cha= 0;
            $cols = ['sdataq95', 'sdataq96', 'sdataq97', 'sdataq98'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_cha += 2;
                }
              }
              array_push($infoStuff, "Channels Score: ".$total_cha."<br>");
            }
            $cha_av = 2 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Channels"."<br>");
          }
        //CusRel
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_cusrel= 0;
            $cols = ['sdataq99', 'sdataq100', 'sdataq101', 'sdataq102'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_cusrel += 1;
                }
              }
              array_push($infoStuff, "Customer relationships Score: ".$total_cusrel."<br>");
            }
            $cusrel_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Customer relationships"."<br>");
          }
        //RevStr
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_revstr= 0;
            $cols = ['sdataq103', 'sdataq104', 'sdataq105', 'sdataq106'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_revstr += 1;
                }
              }
              array_push($infoStuff, "Revenue streams Score: ".$total_revstr."<br>");
            }
            $revstr_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Revenue streams"."<br>");
          }
        //KeyAct
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_keyact= 0;
            $cols = ['sdataq107'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_keyact += 2;
                }
              }
              array_push($infoStuff, "Key activities Score: ".$total_keyact."<br>");
            }
            $keyact_av = 2 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Key activities"."<br>");
          }
        //KeyRes
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_keyres= 0;
            $cols = ['sdataq108'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_keyres += 1;
                }
              }
              array_push($infoStuff, "Key Resources Score: ".$total_keyres."<br>");
            }
            $keyres_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Key Resources"."<br>");
          }
        //KeyPart
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_keypart= 0;
            $cols = ['sdataq109', 'sdataq110'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_keypart += 1;
                }
              }
              array_push($infoStuff, "Key partners Score: ".$total_keypart."<br>");
            }
            $keypart_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Key partners"."<br>");
          }
        //CostStr
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_coststr= 0;
            $cols = ['sdataq111', 'sdataq112', 'sdataq113', 'sdataq114'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_coststr += 1;
                }
              }
              array_push($infoStuff, "Cost structure Score: ".$total_coststr."<br>");
            }
            $coststr_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Cost structure"."<br>");
          }
        //CurrAlt
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_curralt= 0;
            $cols = ['sdataq115', 'sdataq116'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_curralt += 1;
                }
              }
              array_push($infoStuff, "Current alternatives Score: ".$total_curralt."<br>");
            }
            $curralt_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Current alternatives"."<br>");
          }
        //Sol
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_sol= 0;
            $cols = ['sdataq117'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_sol += 1;
                }
              }
              array_push($infoStuff, "Solution Score: ".$total_sol."<br>");
            }
            $sol_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Solution"."<br>");
          }
        //UnfAd
          $sql = "SELECT * FROM bizConcept WHERE sdatauid='$_SESSION[email]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $total_unfad= 0;
            $cols = ['sdataq118'];
            while($row = $result->fetch_assoc()) {
              foreach($cols as $col){
                if ($row[$col] == 'True'){
                  $total_unfad += 1;
                }
              }
              array_push($infoStuff, "Unfair Advantage Score: ".$total_unfad."<br>");
            }
            $unfad_av = 1 * count($cols);
          } else {
            array_push($infoStuff, "No information found under Biz Concept - Unfair Advantage"."<br>");
          }

      $concept_total = $total_vprop + $total_cs + $total_cha + $total_cusrel + $total_revstr + $total_keyact + $total_keyres + $total_keypart + $total_coststr + $total_curralt + $total_sol + $total_unfad;
      $concept_score = round($concept_total/69*100, 2);
      array_push($infoStuff, "<br>"."Concept % ".$concept_score."<br>"."<br>");
    }
    

    $str_list = array (
      array("talent", $total_talent/$talent_av*100),
      array("legal", $total_legal/$legal_av*100),
      array("service offering cabability", $total_soc/$soc_av*100),
      array("organisation", $total_org/$org_av*100),
      array("strategy", $total_strategy/$strategy_av*100),
      array("financial management", $total_finman/$finman_av*100)
    );

    $con_list = array (
      array("Value Proposition", $total_vprop/$vprop_av*100),
      array("Customer Segment", $total_cs/$cs_av*100),
      array("Channels", $total_cha/$cha_av*100),
      array("Customer relationships", $total_cusrel/$cusrel_av*100),

      array("Revenue streams", $total_revstr/$revstr_av*100),
      array("Key activities", $total_keyact/$keyact_av*100),
      array("Key Resources", $total_keyres/$keyres_av*100),
      array("Key partners", $total_keypart/$keypart_av*100),

      array("Cost structure", $total_coststr/$coststr_av*100),
      array("Current alternatives", $total_curralt/$curralt_av*100),
      array("Solution", $total_sol/$sol_av*100),
      array("Unfair Advantage", $total_unfad/$unfad_av*100)
    );
    
    $str_tot_list = array (
      array("total", $structure_score),
      array("area to improve", 100-$structure_score)
    );

    $con_tot_list = array (
      array("total", $concept_score),
      array("area to improve", 100-$concept_score)
    );

    $overall_list = array (
      array("total", ($concept_score + $structure_score)/2),
      array("area to improve", 100-(($concept_score + $structure_score)/2))
    );
  }
  $conn->close();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BizTweak - Dashboard</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/flexdata.css">
    <link rel="stylesheet" href="css/Features-Boxed.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      
    <!-- USER cHARTS -->
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["aspect", "score"],
              <?php 
              foreach($con_tot_list as $item){
                echo  "["."'".$item[0]."'".", ".$item[1]."],";
              };
              ?>
          ]);
          var options = {
            title: 'Concept Score'
          };
          var chart = new google.visualization.PieChart(document.getElementById('concept_piechart'))
          chart.draw(data, options);
        }
      </script>

      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["aspect", "score"],
            <?php 
            foreach($str_tot_list as $item){
              echo  "["."'".$item[0]."'".", ".$item[1]."],";
            };
            ?>
          ]);
          var options = {
            title: 'Structure Score'
          };
          var chart = new google.visualization.PieChart(document.getElementById('structure_piechart'));
          chart.draw(data, options);
        }
      </script>

      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["aspect", "score"],
            <?php 
            foreach($overall_list as $item){
              echo  "["."'".$item[0]."'".", ".$item[1]."],";
            };
            ?>
          ]);
          var options = {
            title: 'Overall Score'
          };
          var chart = new google.visualization.PieChart(document.getElementById('overall_piechart'));
          chart.draw(data, options);
        }
      </script>

      <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["aspect", "score"],
            <?php 
            foreach($str_list as $item){
              echo  "["."'".$item[0]."'".", ".$item[1]."],";
            };
            ?>
          ]);
          var view = new google.visualization.DataView(data);
          var options = {
            title: "Precentage on Aspects of Structure",
            width: 400,
            height: 300,
            bar: {groupWidth: "70%"},
            legend: { position: "none" },
            vAxis: { gridlines: { count: 4 } }
          };
          var chart = new google.visualization.ColumnChart(document.getElementById("structure_columnchart"));
          chart.draw(view, options);
        }
      </script>

      <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["aspect", "score"],
            <?php 
            foreach($con_list as $item){
              echo  "["."'".$item[0]."'".", ".$item[1]."],";
            };
            ?>
          ]);
          var view = new google.visualization.DataView(data);
          var options = {
            title: "Precentage on Aspects of Concept",
            width: 400,
            height: 300,
            bar: {groupWidth: "80%"},
            legend: { position: "none" },
            vAxis: { gridlines: { count: 4 } }
          };
          var chart = new google.visualization.ColumnChart(document.getElementById("concept_columnchart"));
          chart.draw(view, options);
        }
      </script>

    <!-- CONSULTANT CHARTS -->
      <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["aspect", "score"],
            <?php 
            foreach($str_list_consultant as $item){
              echo  "["."'".$item[0]."'".", ".$item[1]."],";
            };
            ?>
          ]);
          var view = new google.visualization.DataView(data);
          var options = {
            title: "Average Users' Precentage on Aspects of Structure",
            width: 400,
            height: 300,
            bar: {groupWidth: "70%"},
            legend: { position: "none" },
            vAxis: { gridlines: { count: 4 } }
          };
          var chart = new google.visualization.ColumnChart(document.getElementById("structure_columnchart_consultant"));
          chart.draw(view, options);
        }
      </script>

      <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["aspect", "score"],
            <?php 
            foreach($con_list_consultant as $item){
              echo  "["."'".$item[0]."'".", ".$item[1]."],";
            };
            ?>
          ]);
          var view = new google.visualization.DataView(data);
          var options = {
            title: "Average Users' Precentage on Aspects of Concept",
            width: 400,
            height: 300,
            bar: {groupWidth: "80%"},
            legend: { position: "none" },
            vAxis: { gridlines: { count: 4 } }
          };
          var chart = new google.visualization.ColumnChart(document.getElementById("concept_columnchart_consultant"));
          chart.draw(view, options);
        }
      </script>

    <script>
      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
          document.getElementById("myForm").style.display = "none";
      }
    </script>

  </head>
  <body>
    <header>
      <!-- Collapsible Navigation Bar <div class="container-fluid">-->
      <div class="container-fluid">
      <!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
      <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#36e2ce;">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <!-- Button that toggles the navbar on and off on small screens -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <!-- Hides information from screen readers -->
      <span class="sr-only"></span>
      <!-- Draws 3 bars in navbar button when in small mode -->
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="pull-left" href="#"><img src="logo.png" style="width:50px;height:50px;"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="navbar-header">
      <a class="navbar-brand" href="#">BizTweak</a>
      </div>
      <ul class="nav navbar-nav">
      <li class="active"><a href="../dashboard.php"><i class="fas fa-chart-pie mr-3"></i>  Dashboard</a></li>
      <li><a href="../biz_info.php"><i class="fas fa-info mr-3"></i>  Biz Info</a></li>
      <li><a href="../biz_structure.php"><i class="fas fa-network-wired"></i>  Biz Structure</a></li>
      <li><a href="../biz_concept.php"><i class="fas fa-users"></i>  Biz Concept</a></li>
      </ul>
      <!-- navbar-left will move the search to the left -->
      <ul class="nav navbar-nav navbar-right" style="padding-right:5px;">
      <li><a href="../my_profile.php"><i class="fas fa-user mr-3"></i>  My Profile</a></li>
      <li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i>  Logout</a></li>
      </ul>
      </div><!-- /.navbar-collapse -->
      </nav>
      </div><!-- /.container-fluid -->
    </header>
    <main>
      <?php
      // Consultant section
        if($type == 'Consultant'){
          $consult_ui_key_quest = [
            '<div id="myForm" role="dialog">',
              '<div class="modal-dialog">',
                '<form action="biz_user_consult.php" method="post">',
                  '<div class="modal-content">',
                    '<div class="modal-header">',
                      '<button onclick="closeForm()" type="button" class="close" data-dismiss="modal">&times;</button>',
                      '<h4 class="modal-title" style="color:blue;"><b>Create a Consultant Code</b></h4>',
                    '</div>',
                    '<div class="modal-body" style="margin-left:15px;">',
                      '<div class="form-group">',
                        '<label for="conKey">',
                          '<h4>Consultant Key</h4>',
                        '</label>',
                        '<input type="text" placeholder="Enter A Consultant Key" name="conKey" class="form-control" required>',
                      '</div>',
                    '</div>',
                    '<div class="modal-footer">',
                      '<button type="submit" class="btn btn-default" name="bizconsult-update">Add</button>',
                    '</div>',
                  '</div>',
                '</form>',
              '</div>',
            '</div>'
          ];
          $consultantgraphing = 
            '
            <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-md-6">
                      <div class="card cart-block">
                        <div id="structure_columnchart_consultant" style="width: 600px; height: 300px;"></div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                      <div class="card cart-block">
                        <div id="concept_columnchart_consultant" style="width: 600px; height: 300px;"></div>
                      </div>
                  </div>
              
              </div>
            </div>
            '
          ;
          $consult_ui = 
            '
            <section class="features13 cid-s0QBo7ayVe" id="features13-1">
            <div class="container">
                <div class="media-container-row">
                    <div class="card col-12 col-md-6 align-center col-lg-4">
                        <div class="card-wrap">
                            <div class="card-box p-5">
                              <a href="dashboard.php?view=totalconsult">
                                <h4 class="card-title py-2 mbr-fonts-style align-center mbr-white display-5">
                                    '
                                    .$totalassessments.
                                    '
                                </h4>
                                <p class="mbr-text mbr-fonts-style mbr-white display-7">
                                    Total number of assessments
                                </p>
                              </a>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 align-center col-lg-4">
                        <div class="card-wrap">
                            <div class="card-box p-5">
                              <a href="dashboard.php?view=incompleteconsult">
                                <h4 class="card-title py-2 mbr-fonts-style align-center mbr-white display-5">
                                  '
                                  .$totalincomplete.
                                  '
                                </h4>
                                <p class="mbr-text mbr-fonts-style mbr-white display-7">
                                    Incomplete assessments
                                </p>
                              </a>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 align-center col-lg-4">
                        <div class="card-wrap">
                            <div class="card-box p-5">
                              <a href="dashboard.php?view=completeconsult">
                                <h4 class="card-title py-2 mbr-fonts-style align-center mbr-white display-5">
                                  '
                                  .$totalcomplete.
                                  '
                                </h4>
                                <p class="mbr-text mbr-fonts-style mbr-white display-7">
                                    Complete assessments
                                </p>
                              </a>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            </section>
            '
          ;

          if(empty($consKey) || $consKey=="" || strlen($consKey)==0){
            foreach ($consult_ui_key_quest as $line) {
              echo $line;
            }
          }
  
          $url = '';
          $url.= $_SERVER['REQUEST_URI'];    
            
          if (strpos($url, "=") !== false){
            $where = explode("=", $url);
            if ($where[1] == "totalconsult") {
              echo 
              '
              <div class="container">
              <div class="row">
                  <!--Titles-->
                  <div class="title pb-5 col-12">
                      <h2 class="align-left mbr-fonts-style m-0 display-1">
                          All Users
                      </h2>
              ';
              if (count($capture) < 1) {
                echo "You have no users";
              } else {
                foreach($capture as $userC){
                  echo 
                  '
                                <div class="card px-3 col-12">
                                <div class="card-wrapper media-container-row media-container-row">
                                    <div class="card-box">
                                        <div class="top-line pb-3">
                                            <h4 class="card-title mbr-fonts-style display-5">
                                                '.$userC.'
                                            </h4>
                                            <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                                View Report
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  ';
                }
              }
            } else if ($where[1] == "incompleteconsult"){
              echo 
              '
              <div class="container">
              <div class="row">
                  <!--Titles-->
                  <div class="title pb-5 col-12">
                      <h2 class="align-left mbr-fonts-style m-0 display-1">
                          Incomplete Assessment Users
                      </h2>
              ';
              if (count($userincomplete) < 1) {
                echo "You have no users that are incomplete";
              } else {
                foreach($userincomplete as $userI){
                  echo
                  '
                              <div class="card px-3 col-12">
                              <div class="card-wrapper media-container-row media-container-row">
                                  <div class="card-box">
                                      <div class="top-line pb-3">
                                          <h4 class="card-title mbr-fonts-style display-5">
                                              '.$userI.'
                                          </h4>
                                          <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                              View Report
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                ';
                }
              }

            } else if($where[1] == "completeconsult"){
              echo 
              '
              <div class="container">
              <div class="row">
                  <!--Titles-->
                  <div class="title pb-5 col-12">
                      <h2 class="align-left mbr-fonts-style m-0 display-1">
                        Complete Assessment Users
                      </h2>
              ';
              if (count($usercomplete) < 1) {
                echo "You have no users that are complete";
              } else {
                foreach($usercomplete as $userP){
                  echo $userP."<br>";
                  '
                              <div class="card px-3 col-12">
                              <div class="card-wrapper media-container-row media-container-row">
                                  <div class="card-box">
                                      <div class="top-line pb-3">
                                          <h4 class="card-title mbr-fonts-style display-5">
                                              '.$userP.'
                                          </h4>
                                          <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                              View Report
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                ';
                }
              }
            }
          } else {
            echo $consult_ui;
            echo $consultantgraphing;
          }
        };

      // Admin Section
        $admingraphing = 
          'this a graph for admin
          '
        ;
        if($type == 'Admin'){
          foreach ($capture as $using) {
            echo $using."<br>";
          }
          echo $admingraphing;
        }


      // User section
        $user_ui_key_quest = [
          '<div id="myForm" role="dialog">',
            '<div class="modal-dialog">',
              '<form action="biz_user_consult.php" method="post">',
                '<div class="modal-content">',
                  '<div class="modal-header">',
                    '<button onclick="closeForm()" type="button" class="close" data-dismiss="modal">&times;</button>',
                    '<h4 class="modal-title" style="color:blue;"><b>Enter Consultant Code</b></h4>',
                  '</div>',
                  '<div class="modal-body" style="margin-left:15px;">',
                    '<div class="form-group">',
                      '<label for="conKey">',
                        '<h4>Consultant Key</h4>',
                      '</label>',
                      '<input type="text" placeholder="Enter Your Consultants Key" name="conKey" class="form-control" required>',
                    '</div>',
                  '</div>',
                  '<div class="modal-footer">',
                    '<button type="submit" class="btn btn-default" name="bizconsult-update">Add</button>',
                  '</div>',
                '</div>',
              '</form>',
            '</div>',
          '</div>'
        ];
        // $important = ['keep', 'dev', 'gee'];
        // $importan_value = [30, 50, 80];
        $graphings = 
          '<div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card cart-block">
                      <div id="concept_piechart" style="width: 400px; height: 200px;"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card cart-block">
                      <div id="overall_piechart" style="width: 450px; height: 250px;"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card cart-block">
                      <div id="structure_piechart" style="width: 400px; height: 200px;"></div>
                    </div>
                </div>
            </div>
            </div>
          </div>
          
          <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card cart-block">
                      <div id="structure_columnchart" style="width: 600px; height: 300px;"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card cart-block">
                      <div id="concept_columnchart" style="width: 600px; height: 300px;"></div>
                    </div>
                </div>
            
            </div>
          </div>
          '
        ;

        if($type == 'User'){
          if(empty($consKey) || $consKey=="" || strlen($consKey)==0){
            foreach ($user_ui_key_quest as $line) {
              echo $line;
            }
          }
          echo $graphings;
        }
      ?>
    </main>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
