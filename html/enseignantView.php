
 <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <section class="content-header">
          <div class="modal-header text-center">
              
          <h1 class="modal-title">DETAIL ENSEIGNANT </a></h1>
          <h4 class="modal-title" > <a href="backend.php?s2=enseignantList">Retour à la liste des enseignants</a> </h4>
                
        </div>
      </section>
      <form method="post" action="traitement.php">
      <div class="register-box-body">
         <input name="idDelect" type="hidden" value="<?php echo htmlspecialchars($_GET["id"]);?>"/> 
               <div class="form-group has-feedback">
            <label class="control-label">
              Nom <span class="symbol required" ></span>
          </label>
            <input type="text" class="form-control textBox" name="name" disabled  value="<?php echo htmlspecialchars($_GET["n"]);?>">
        </div>
         <div class="form-group has-feedback">
            <label class="control-label">
              Prénom (s) <span class="symbol required"></span>
          </label>
            <input type="text" disabled class="form-control textBox" name="lastname"  value="<?php echo htmlspecialchars($_GET["p"]);?>">
        </div>
        <div class="form-group has-feedback">
            <label class="control-label">
         Contact  <span class="symbol required"></span>
          </label>
            <input type="text" disabled class="form-control textBox" maxlength="10" name="number"  value="<?php echo htmlspecialchars($_GET["c"]);?>">
        </div>
      
        <div class="form-group has-feedback">
            <label class="control-label">
              Email <span class="symbol required" required="true"></span>
          </label>
            <input type="text"  disabled class="form-control textBox"  name="email" value="<?php echo htmlspecialchars($_GET["e"]);?>">
        </div>
       
        <div class="pull-right">
          <div class="row">
           <div class="col-md-6">
            <div style="cursor:pointer" class="pull-right" >            
             <button class="btn btn-alert"> <a  data-toggle="modal" data-target="#myModal">Voir plus</a></button>
            </div>
        </div>
        <div class="col-md-6">
          <div style="cursor:pointer" class="pull-right" >            
            <input class="btn btn-danger btn-block btn-signin" type="submit" value="SUPPRIMER" name="delectEns"/>
          </div>

        </div>
          </div>
            <div class="btn-group">
         
            </div>
        </div>
        <br/><br/>
     
    </div>
  </form>
      </div>
    </div>

  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Liste des enseignements de filières</h4>
      </div>
      <div class="modal-body">
       <table class="table">
    <thead>
      <tr>
        <th>Filière</th>      
        <th>Description</th>      
      </tr>
    </thead>
    <tbody>
      <?php
        require_once 'webApi.php';
        $req = "SELECT idFil from affectation where status = 1 and idEns=".$_GET["id"];
        $execute = mysql_query($req) or die ('erreur sql'.$req.'</br>'.mysql_error());

            
         while ($ligne = mysql_fetch_array($execute)) {
            if($ligne[0]){

               $reqname = "SELECT f.* FROM filiere f where f.status = 1 and f.id =".$ligne[0];
               $exe = mysql_query($reqname) or die ('erreur sql'.$reqname.'</br>'.mysql_error());
               $item = mysql_fetch_array($exe);
               echo'<tr>';
               echo'<th>'.$item[1].'</th>';
               echo'<th>'.$item[2].'</th>';            
               echo'</tr>';
              
          }
        }
              
      ?>
      
      </tbody>
  </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
     
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="js/javascripts/jquery-1.9.1.js"></script>