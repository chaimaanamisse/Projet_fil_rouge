

        <!-- section cats -->

<section class="cats">

<h1>  Chats en attente d'adoption </h1>
<h2>  Trouvez votre animal maintenant sur FurryFreinds </h2>

<div class="container">
<div class="row">
    <div class="col-lg-12">
        <div id="cats-slider" class="owl-carousel">
            <!-- 1 -->
            <?php foreach($cats as $cat): ?>
            <div class="news-grid">
                <div class="news-grid-image"><img src="uploads/<?= $cat->image ?>" alt="">
                    <!-- <div class="news-grid-box">
                        <h1>19</h1>
                        <p>Sep</p>
                    </div> -->
                </div>
                <div class="news-grid-txt">
                    <span><?= $cat->nom ?></span>
                    <!-- <h2>Heading Will Be Here</h2> -->
                    <div class="div-prop">
                    <ul class="prop-info">
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?= $cat->created_at ?></li>
                        <li><i class="fa fa-user" aria-hidden="true"></i> <?= $cat->full_name ?></li>
                    </ul>
                </div>
                    <ul class="pet-info">
                        <li><i class="fa fa-birthday-cake" aria-hidden="true"></i> Age :<?= $cat->age ?></li>
                        <li><i class="fa fa-paw" aria-hidden="true"></i> Race: <?= $cat->race ?></li>
                        <li><i class="fa fa-venus-mars" aria-hidden="true"></i> Genre: <?= $cat->genre ?></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Ville: <?= $cat->ville ?></li>
                    </ul>
                    <!-- <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p> -->
                    <div class="btn-card"> <a href="/Projet_fil_rouge/public/annonces/lire/<?= $cat->prm ?>">adopter</a> </div>
                </div>
            </div>
            <?php endforeach; ?>
                
                              
                </div>
        </div>
</div>
</div>

</section>

<section class="dogs">



<h1>  Chiens en attente d'adoption </h1>
<h2>  Trouvez votre animal maintenant sur FurryFreinds </h2>

<div class="container">
<div class="row">
    <div class="col-lg-12">
        <div id="dogs-slider" class="owl-carousel">
        <?php foreach($dogs as $dog): ?>
            <div class="news-grid">
                <div class="news-grid-image"><img src="uploads/<?= $dog->image ?>" alt="">
                    <!-- <div class="news-grid-box">
                        <h1>19</h1>
                        <p>Sep</p>
                    </div> -->
                </div>
                <div class="news-grid-txt">
                    <span><?= $dog->nom ?></span>
                    <!-- <h2>Heading Will Be Here</h2> -->
                    <div class="div-prop">
                    <ul class="prop-info">
                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <?= $dog->created_at ?></li>
                        <li><i class="fa fa-user" aria-hidden="true"></i> <?= $dog->full_name ?></li>
                    </ul>
                </div>
                    <ul class="pet-info">
                        <li><i class="fa fa-birthday-cake" aria-hidden="true"></i> Age:<?= $dog->age ?></li>
                        <li><i class="fa fa-paw" aria-hidden="true"></i> Race:<?= $dog->race ?></li>
                        <li><i class="fa fa-venus-mars" aria-hidden="true"></i> Genre:<?= $dog->genre ?></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> ville:<?= $dog->ville ?></li>

                        <!-- <li><i class="fa fa-user" aria-hidden="true"></i> </li> -->
                    </ul>
                    <!-- <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p> -->
                    <div class="btn-card"> <a href="/Projet_fil_rouge/public/annonces/lire/<?= $dog->prm ?>">adopter</a> </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
</div>
</div>

</section>

    
  