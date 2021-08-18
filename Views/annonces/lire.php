<!-- single -->

<div class="test"> 
    <div class="single-main">

      <!-- <div class="single-container a-container"> -->
       
        <img src="../../uploads/<?= $pet->image ?>" alt=""  class="single-container a-container">

      <!-- </div> -->

     

      <div class="switch">
        

          <div class="card_liste">
              
            <div class="mind"><li class="card_item" >Nom </li><span>:</span> <?= $pet->nom ?></div>
            <div class="mind"><li class="card_item" >Espèce </li><span>:</span> <?= $pet->espece ?></div>
            <div class="mind"><li class="card_item" >Genre </li><span>:</span> <?= $pet->genre ?></div>
            <div class="mind"><li class="card_item" >Race</li><span>:</span> <?= $pet->race ?></div>
            <div class="mind"><li class="card_item" >Ville </li><span>:</span> <?= $pet->ville ?></div>
            <div class="mind"><li class="card_item" >Description </li><span>:</span><p> <?= $pet->description ?></p></div>
            
         </div>
          <!-- <button class="adoptBtn">Adopter</button> -->
          <div class="mind"><li class="card_item" >Nom du maitre </li><span>:</span> <?= $pet->full_name ?></div>
          <div class="mind"><li class="card_item" >Email </li><span>:</span> <?= $pet->email ?></div>
          <div class="mind"><li class="card_item" >Numéro de téléphone </li><span>:</span> <?= $pet->phone_number ?></div>
        </div>

    </div>
</div> 




<!-- fin single -->