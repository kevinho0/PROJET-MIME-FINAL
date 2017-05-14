
 <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <section class="content-header">
          <div class="modal-header text-center">
              <?php 
              if(isset($_GET['opt']) !=NULL){
                $option = $_GET['opt'];
               }else{
                $option = 10;
              }
              switch ($option) {
                case 0:
                   echo'<h1 class="modal-title">NOUVEN ENSEIGNANT </a></h1>';
                  break;
                case 1 :
                 echo'<h4 class="modal-title" >Modification</h4>' ;
                break;
                default:
                  echo '<script>window.location.href="backend.php?s2=compteList";</script>';
                  break;
              }
             
              ?>
     <h4 class="modal-title" > <a href="backend.php?s2=enseignantList">Retour à la liste des enseignants</a> </h4>
     <small class="font-bold">les champs marqués (*) sont obligatoires.</small>
            
          </div>
      </section>
      <form method="post" action="traitement.php">
      <div class="register-box-body">
         <input name="idUpate" type="hidden" value="<?php echo htmlspecialchars($_GET["id"]);?>"/> 
         <input name="option" type="hidden" value="<?php echo htmlspecialchars($_GET["opt"]);?>"/> 
              <div class="form-group has-feedback">
            <label class="control-label">
              Nom (*)<span class="symbol required" ></span>
          </label>
            <input type="text" placeholder="Nom" class="form-control textBox" name="name" required value="<?php echo htmlspecialchars($_GET["n"]);?>">
        </div>
         <div class="form-group has-feedback">
            <label class="control-label">
              Prénom (s) (*) <span class="symbol required"></span>
          </label>
            <input type="text" placeholder="prénom(s)" class="form-control textBox" name="lastname" required value="<?php echo htmlspecialchars($_GET["p"]);?>">
        </div>
        <div class="form-group has-feedback">
            <label class="control-label">
         Contact (*) <span class="symbol required"></span>
          </label>
            <input type="text" placeholder="00-00-00-00-00" class="form-control textBox" maxlength="10" name="number" required value="<?php echo htmlspecialchars($_GET["c"]);?>">
        </div>
      
        <div class="form-group has-feedback">
            <label class="control-label">
              Email (*)<span class="symbol required" required="true"></span>
          </label>
            <input type="text" placeholder="exemple@gmail.com" class="form-control textBox"  required="true" name="email" value="<?php echo htmlspecialchars($_GET["e"]);?>">
        </div>
        <div class="form-group has-feedback">
           
            
        </div>
       
        <div class="pull-right">
            <div class="btn-group">
           <div style="cursor:pointer" class="pull-right" >
            <input class="btn btn-success btn-block btn-signin" type="submit" value="Enregister" name="enseSave"/>
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