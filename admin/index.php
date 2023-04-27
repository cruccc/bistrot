<?php 

  /*session_start();
  if(isset($_SESSION['permessi'])){
    if($_SESSION['permessi']<1){
      header("Location: ../login.php");
    }
  }else{
    header("Location: ../login.php");
  }

  $conn = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

  if(!$conn){
    echo '<script>alert("Errore nell\'accesso al database");location.replace("index.php");</script>';
  }else{

    if(isset($_POST['invia'])){
      $slctClasse = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['classe']));
      $slctData = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['data']));
      $slctStato = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['stato']));
    }else{
      $slctClasse = 'TutteLeClassi';
      $slctData = 'Oggi';
      $slctStato = 'Ricevuto';
    }

    if(isset($_POST['annulla'])||isset($_POST['ripristina'])||isset($_POST['consegna'])){
      if(isset($_POST['annulla'])){
        $stato = "A";
        $mex[0] = "Annullamento avvenuto";
        $mex[1] = "nell'annullamento";
      }elseif(isset($_POST['ripristina'])){
        $stato = "R";
        $mex[0] = "Ripristino avvenuto";
        $mex[1] = "nel ripristino";
      }elseif(isset($_POST['consegna'])){
        $mex[0] = "Consegna avvenuta";
        $mex[1] = "nella consegna";
        $stato = "C";
      }
      $codice = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['codice']));

      $query = "UPDATE Ordini SET Stato = '".$stato."', EmailOperatore = '".$_SESSION['email']."' WHERE CodOrdine = ".$codice;

      $result1 = mysqli_query($conn,$query);

      if(!$result1){
        echo '<script>alert("C\'è stato un errore '.$mex[1].' dell\'ordine \''.$codice.'\'");location.replace("index.php");</script>';
      }else{
        echo '<script>alert("'.$mex[0].' con successo!");location.replace("index.php");</script>';
      }

    }

    mysqli_close($conn);
  }*/
?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <?php require_once 'head.php';?>
  </head>
  <body class="w3-light-grey">

    <?php require_once 'sidebar.php';?>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

      <?php require_once 'header.php';?>

      <div class="container-fluid">
        <h1 style="margin-bottom: 30px">Visualizzazione ordinazioni</h1>
        <form action="index.php" method="post" style="margin-bottom: 40px;">
          <div class="row">

            <div class="col-sm-4">
              <div class="w3-container">
                <h5 style="text-align: center; margin-top: 10px">Filtri:</h5>
              </div>
            </div>
            <div class="col-sm-8">
            </div>

          </div>
          <div class="row">
            <div class="col-sm-2">
              <div class="w3-container">
                <label for="classe" class="label"><p>Classe:</p></label>
              </div>
            </div>
            <div class="col-sm-10">
              <div class="w3-container">
                <select id="classe" name="classe" style="width: 196px;height: 28px;" required>
                  <?php
                    $conn = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
                    if(!$conn){
                      echo '<option value="errore" selected disabled><p>Errore di accesso al database</p></option>';
                    }else{

                      $query = "SELECT NomeClasse FROM Classi WHERE Cancellato = 0 ORDER BY NomeClasse";

                      $result3 = mysqli_query($conn, $query);

                      $nRows = mysqli_num_rows($result3);//salvo il numero di righe della risposta

                      if($nRows>0){

                        echo '<option value="TutteLeClassi"';
                        if($slctClasse=="TutteLeClassi") echo ' selected';
                        echo '>Tutte le classi</option>';

                        for($i=0;$i<$nRows;$i++){//scorro le righe della selezione
                          $classe = mysqli_fetch_assoc($result3);
                          echo '<option value="'.$classe["NomeClasse"].'"';
                          if($slctClasse==$classe["NomeClasse"]) echo ' selected';
                          echo '><p>'.$classe["NomeClasse"].'</p></option>';
                        }

                      }else{
                        echo '<option value="errore" selected disabled><p>Nessuna categoria trovata</p></option>';
                      }
                      mysqli_close($conn);
                    }
                  ?>
                </select><br><br>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-2">
              <div class="w3-container">
                <label for="data" class="label"><p>Data:</p></label>
              </div>
            </div>
            <div class="col-sm-10">
              <div class="w3-container">
                <select id="data" name="data" style="width: 196px;height: 28px;" required>
                  <option value="Sempre"<?php if($slctData=="Sempre") echo ' selected';?>><p>Di sempre</p></option>
                  <option value="Domani"<?php if($slctData=="Domani") echo ' selected';?>><p>Di domani</p></option>
                  <option value="Oggi"<?php if($slctData=="Oggi") echo ' selected';?>><p>Di oggi</p></option>
                  <option value="Settimana"<?php if($slctData=="Settimana") echo ' selected';?>><p>Dell'ultima settimana</p></option>
                  <option value="Mese"<?php if($slctData=="Mese") echo ' selected';?>><p>Dell'ultimo mese</p></option>
                </select><br><br>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-2">
              <div class="w3-container">
                <label for="stato" class="label"><p>Stato:</p></label>
              </div>
            </div>
            <div class="col-sm-10">
              <div class="w3-container">
                <select id="stato" name="stato" style="width: 196px;height: 28px;" required>
                  <option value="Tutti"<?php if($slctStato=="Tutti") echo ' selected';?>><p>Tutti</p></option>
                  <option value="Ricevuto"<?php if($slctStato=="Ricevuto") echo ' selected';?>><p>Ricevuto</p></option>
                  <option value="Consegnato"<?php if($slctStato=="Consegnato") echo ' selected';?>><p>Consegnato</p></option>
                  <option value="Annullato"<?php if($slctStato=="Annullato") echo ' selected';?>><p>Annullato</p></option>
                </select><br><br>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-sm-4">
              <div class="w3-container">
                <h5 style="text-align: center; margin-top: 10px"><input class="submit-button" style="width: 140px" type="submit" name="invia" id="invia" value="Applica filtri"></h5>
              </div>
            </div>
            <div class="col-sm-8">
            </div>

          </div>
        </form>
        <?php 
          $conn = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

          if(!$conn){
            echo '<p>Errore nell\'accesso al database</p>';
          }else{

            $query = "SELECT O.*, U.NomeClasse FROM Ordini O INNER JOIN Utenti U ON O.EmailUtente = U.Email INNER JOIN Momenti M ON O.Momento = M.NomeMomento WHERE";

            $fquery = 0;

            if($slctClasse!="TutteLeClassi"){
              $fquery++;
              $query .= " U.NomeClasse = '".$slctClasse."' AND";
            }

            if($slctData!="Sempre"){
              $fquery++;
              switch ($slctData) {
                case 'Domani':
                  $query .= " O.DataConsegna = '".date('Y-m-d', mktime(0,0,0,date(m),date(d)+1,date(Y)))."' AND";
                  break;
                case 'Oggi':
                  $query .= " O.DataConsegna = '".date('Y-m-d')."' AND";
                  break;
                case 'Settimana':
                  $query .= " O.DataConsegna > '".date('Y-m-d', mktime(0,0,0,date(m),date(d)-7,date(Y)))."' AND";
                  break;
                case 'Mese':
                  $query .= " O.DataConsegna > '".date('Y-m-d', mktime(0,0,0,date(m),date(d)+31,date(Y)))."' AND";
                  break;
                
                default:
                  $fquery--;
                  break;
              }
            }

            if($slctStato!="Tutti"){
              $fquery++;
              switch ($slctStato) {
                case 'Ricevuto':
                  $query .= " O.Stato = 'R' AND";
                  break;
                case 'Consegnato':
                  $query .= " O.Stato = 'C' AND";
                  break;
                case 'Annullato':
                  $query .= " O.Stato = 'A' AND";
                  break;
                
                default:
                  $fquery--;
                  break;
              }
            }

            if($fquery==0){
              $query = substr($query,0,(strlen($query)-6));
            }else{
              $query = substr($query,0,(strlen($query)-4));
            }

            $query .= " ORDER BY O.DataConsegna DESC, M.OraConsegna ASC, O.Stato DESC, U.NomeClasse ASC, O.EmailUtente ASC, O.CodOrdine ASC;";

            $result3 = mysqli_query($conn,$query);

            $nRows = mysqli_num_rows($result3);

            if($nRows==0){
              echo '<p>Nessun ordine trovato</p>';
            }else{ ?>

              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Utente</th>
                      <th>Classe</th>
                      <th>DataConsegna</th>
                      <th>MomentoConsegna</th>
                      <th>DataOraOrdinazione</th>
                      <th>EmailOperatore</th>
                      <th>Stato</th>
                      <th colspan="4">Operazioni</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      for($i = 0;$i<$nRows;$i++){
                        $ordine = mysqli_fetch_assoc($result3);
                        echo '<tr>
                            <td>'.$ordine['CodOrdine'].'</td>
                            <td>'.$ordine['EmailUtente'].'</td>
                            <td>'.$ordine['NomeClasse'].'</td>
                            <td>'.$ordine['DataConsegna'].'</td>
                            <td>'.$ordine['Momento'].'</td>
                            <td>'.$ordine['DataOraOrdinazione'].'</td>
                            <td>'.$ordine['EmailOperatore'].'</td>
                            <td>'.$ordine['Stato'].'</td>
                            <td class="td-operazioni">
                              <form action="index.php" method="post">
                                <input type="number" name="codice" value="'.$ordine['CodOrdine'].'" hidden readonly>
                                <button type="submit" class="canc-button operazioni-button" name="annulla"><i class="fas fa-times"></i>    Annulla</button>
                              </form>
                            </td>
                            <td class="td-operazioni">
                              <form action="index.php" method="post">
                                <input type="number" name="codice" value="'.$ordine['CodOrdine'].'" hidden readonly>
                                <button type="submit" class="reestablish-button operazioni-button" name="ripristina"><i class="fas fa-history"></i>    Ripristina</button>
                              </form>
                            </td>
                            <td class="td-operazioni">
                              <form action="index.php" method="post">
                                <input type="number" name="codice" value="'.$ordine['CodOrdine'].'" hidden readonly>
                                <button type="submit" class="check-button operazioni-button" name="consegna"><i class="fas fa-check"></i>    Consegna</button>
                              </form>
                            </td>
                            <td class="td-operazioni">
                              <form action="visualizza_ordine.php" method="get">
                                <input type="number" name="codice" value="'.$ordine['CodOrdine'].'" hidden readonly>
                                <button type="submit" class="view-button operazioni-button" name="visualizza"><i class="fas fa-eye"></i>    Visualizza</button>
                              </form>
                            </td>
                          </tr>';
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            <?php }
            mysqli_close($conn);
          }
        ?>
      </div>

      <?php require_once 'footer.php';?>

      <!-- End page content -->
    </div>
  </body>
</html>