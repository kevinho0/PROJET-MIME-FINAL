
 <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <section class="content-header">
          <div class="modal-header text-center">
              
          <h1 class="modal-title">AFFECTATION DE : <h2><?php echo ''.$_GET["n"].' '.$_GET["p"].''?></h2></h1>
          <h4 class="modal-title" > <a href="backend.php?s2=enseignantList">Retour à la liste des Enseignants</a> </h4>
                
        </div>
      </section>
      <form method="post" action="traitement.php">
      <div class="register-box-body">
         <input name="idEn" type="hidden" value="<?php echo htmlspecialchars($_GET["id"]);?>"/> 
          <div class="form-group has-feedback">
            <label class="control-label">
              Nom <span class="symbol required" ></span>
          </label>
            <input type="text" class="form-control textBox" name="name" disabled  value="<?php echo htmlspecialchars($_GET["n"]);?>">
        </div>
         <div class="form-group has-feedback">
            <label class="control-label">
              Prémon(s) <span class="symbol required" ></span>
          </label>
            <input type="text" class="form-control textBox" name="prenom" disabled  value="<?php echo htmlspecialchars($_GET["p"]);?>">
        </div>
         <div class="form-group has-feedback">
            <label class="control-label">
              Filières <span class="symbol required"></span>
          </label>
          <select  class="form-control"  name="idFil" required="">
              <option  selected value="" disabled="" >Selectionner une filière</option>
             <?php
             require_once 'webApi.php';
            $req = "SELECT f.* FROM filiere f";
            $execute = mysql_query($req) or die ('erreur sql'.$req.'</br>'.mysql_error());
              while ($ligne = mysql_fetch_array($execute)) {
                if($ligne[0]){
                   echo '<option value ='.$ligne[0].'>'.$ligne[1].'</option>'; }
              }
            ?>
          </select>
        </div>
        
       <div class="form-group has-feedback">
        <div class="pull-right">
            <div class="btn-group">
           <div style="cursor:pointer" class="pull-right" >
            
            <input class="btn btn-success btn-block btn-signin" type="submit" value="AFFECTER" name="affEns"/>
          </div>
            </div>
        </div>
        </div>
        <br/><br/>
     
    </div>
  </form>
      </div>
    </div>

  </div>
</div>
<script src="js/javascripts/jquery-1.9.1.js"></script>