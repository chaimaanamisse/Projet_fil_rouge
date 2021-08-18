<!-- liste d'annonces -->

<div class="annonces-container">
       <!-- <div class="card"> -->
       <?php foreach($pets as $pet): ?>
        <div class="grid-item">
            <span class='drop-down-window'>
            <div class="ann"><li class="card_item" >Nom </li>:<?= $pet->nom ?></div>
            <div class="ann"><li class="card_item" >Espèce </li>:<?= $pet->espece ?></div>
            <div class="ann"><li class="card_item" >Age </li>:<?= $pet->age ?></div>
            <div class="ann"><li class="card_item" >Genre </li>:<?= $pet->genre ?></div>
            <div class="ann"><li class="card_item" >Race</li>:<?= $pet->race ?></div>
            <div class="ann"><li class="card_item" >Ville </li>:<?= $pet->ville ?></div> 
            <button class="pagbtn"><a href="/Projet_fil_rouge/public/annonces/lire/<?= $pet->prm ?>">mieux me connaitre</a> </button>
            </span>
            <img class="img" src="uploads/<?= $pet->image ?>" />
     </div>
     <?php endforeach; ?>
      
      </div>



<!-- fin liste d'annonces  -->