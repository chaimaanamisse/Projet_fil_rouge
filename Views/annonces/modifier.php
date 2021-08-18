<!-- form -->
<div class="main">
    <div class="contact-container">
        <div class="contact-left">
          <h2>Remplir les informations de votre chouchou</h2>
          <form class="contact-form" action=""  method="POST" enctype="multipart/form-data">
            <div class="single-row">
                <input type="text" placeholder="Nom" class="form-in mr" name="nom" value="<?= $pet->nom ?>">
                <select name="espece"  class="form-in mr">
                    <option value="">Espèce</option>
                    <option value="chien">Chien/Chiot</option>
                    <option value="chat">Chat/Chatton</option>
                    <option value="autre">Autre espèce</option>
                    
                  </select>
            </div>
            <div class="single-row">
                <input type="text" placeholder="Race" class="form-in mr" name="race" value="<?= $pet->race ?>">
                <select name="genre" class="form-in mr">
                    <option value="">Genre</option>
                    <option value="male">Màle</option>
                    <option value="female">Femelle</option>
                  </select>
            </div>
            <div class="single-row">
                <input type="text" placeholder="Ville"class="form-in mr" name="ville" value="<?= $pet->ville ?>">
                <select name="age" class="form-in mr">
                    <option value="">Age</option>
                    <option value="bebe">Bebe</option>
                    <option value="junior">junior</option>
                    <option value="adulte">adulte</option>
                    <option value="segnior">segnior</option>
                    
                  </select>
                
            </div>
            <div class="multiple-row">
               <div class="conteneur-ajouter">
                    <div class="myform">
                      
                      <label for="inputimage"class="form-in">Select File
                        <input type="file" id="inputimage" name="profile_pic" accept=".jpg, .jpeg, .png">
                      </label>
            
                      <div class="preview-container form-in">
                        <img src="/Projet_fil_rouge/public/uploads/<?= $pet->image ?>">
                      </div>
            
                    </div>
                  </div>
                <textarea placeholder="Décrivez votre chochou" class="form-in textarea" name="description"></textarea>
                <button class="buttonAnn ">Enregistrer</button>

            </div>
                      
          </form>
        </div>
      </div>
     </div>