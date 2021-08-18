  <!-- Page Wrapper -->
  <div class="page-wrapper">

   

<!-- Content -->
<div class="content clearfix">




  <!-- Main Content -->
  <div class="main-content">
    <h1 class="recent-post-title">Mes annonces</h1>
     
    <?php foreach($annonces as $annonce): ?>

    <div class="post clearfix">
      <img src="/Projet_fil_rouge/public/uploads/<?= $annonce->image ?>" alt="" class="post-image">
      <div class="post-preview">

        <div class="a"><li class="card_item" >Nom </li>:<?= $annonce->nom ?></div>
        <div class="a"><li class="card_item" >Espèce </li>:<?= $annonce->espece ?></div>
        <div class="a"><li class="card_item" >Genre </li>:<?= $annonce->genre ?></div>
        <div class="a"><li class="card_item" >Race</li>:<?= $annonce->race ?></div>
        <div class="a"><li class="card_item" >Ville </li>:<?= $annonce->ville ?></div>
        <div class="a"><li class="card_item" >Description </li>:<?= $annonce->description ?></div>
        <div class="btnAct">
        <a href="/Projet_fil_rouge/public/annonces/modifier/<?= $annonce->parametre ?>" class="btn modifier">Modifier</a>
        <a id="supp" href="" class="btn supprimer"  data-id="<?= $annonce->parametre ?>">Supprimer</a>
        </div>
      </div>
    </div>

    <?php endforeach; ?>

    <script>
      window.onload = () => {
    let boutons = document.querySelectorAll("#supp")

    for(let bouton of boutons){
        bouton.addEventListener("click", supprimer)
    }
}


function supprimer(){
    let xmlhttp = new XMLHttpRequest;

    xmlhttp.open('GET', '/Projet_fil_rouge/public/users/supprimerAnnonce/'+this.dataset.id)

    xmlhttp.send()
}
    </script>

    
    
    

  </div>
 



  </div>

</div>
<!-- // Content -->

<!-- </div> -->
<!-- // Page Wrapper -->



<!-- fin liste d'annonces  -->