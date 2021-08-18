<div class="container p-30">
        <div class="row">
            <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="overflow-x">
                        <table style="width:100%;" id="filtertable" class="table cust-datatable dataTable no-footer">
                            <thead>
                                <tr>
                                    <th style="min-width:50px;">ID</th>
                                    <th style="min-width:150px;">Auteur</th>
                                    <th style="min-width:100px;">Date de création</th>
                                    <th style="min-width:150px;">Statut</th>
                                    <th style="min-width:150px;">Action</th>
                                </tr>
                            </thead>
                            <?php foreach($pets as $pet): ?>
                            <tbody>
                                <tr>
                                    <td><?= $pet->ann_id ?></td>
                                    <td><?= $pet->full_name ?></td>
                                    <td><?= $pet->created_at ?></td>
                                    <td><span  id= "btn_actif" class="mode <?= $pet->actif ? 'mode_on' : 'mode_off'   ?> " data-id="<?= $pet->ann_id ?>">Active</span></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="dropdown-toggle dropdown_icon" data-toggle="dropdown">
                                            <i class="fa fa-user"></i> </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <?= $pet->full_name ?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <?= $pet->email ?>
                                                    </a>
                                                </li>  
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <?= $pet->phone_number ?>
                                                    </a>
                                                </li>  
                                            </ul>
                                        </div>
                                        <span class="actionCust" >
                                            <a href="" class="btn-green-flat-trigger" onclick="remplirFormSuppr( '<?= $pet->image ?>' , '<?= $pet->nom ?>','<?= $pet->age ?>', '<?= $pet->espece ?>','<?= $pet->race ?>','<?= $pet->ville ?>','<?= $pet->description ?>');"><i class="fa fa-eye" ></i></a>
                                        </span>
                                        <div class="btn-group">
                                            <a href="/Projet_fil_rouge/public/admin/supprimeAnnonce/<?= $pet->prm ?>" class="dropdown-toggle dropdown_icon" data-toggle="dropdown"  > 
                                                <i class="fa fa-trash"></i> 
                                            </a>
                                            <!-- <ul class="dropdown-menu dropdown_more">
                                                <li>
                                                    <a href="#" target="_black">
                                                        <i class="fa fa-clone"></i>Duplicate
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_black">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_black">
                                                        <i class="fa fa-list"></i>Activity</a>
                                                    </li>
                                            </ul> -->
                                        </div>
                                    </td>
                                </tr>  
                            </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="global-modal">
        <div class="overlay"></div>
        <div class="global-modal_contents modal-transition">
         <div class="global-modal-header">
           <span class="mobile-close"> X </span>
           <h3> <span> hey!</span> <b>vous pouvez accepter ma demande<br> Human.</b></h3>
         </div>
         <div class="global-modal-body">
           <!-- <div class='modal-content-left'>
             <img src='img/cat1.jpg' >
           </div>
          <div class='modal-content-right'>
           <ul class='box-info'>
                    <div class='box-info-item'><li>nom</li>:<span></span></div>
                    <div class='box-info-item'><li >age</li>: <span>chaimaa</span></div>
                    <div class='box-info-item'><li >espèce</li>: <span>chaimaa</span></div>
                    <div class='box-info-item'><li >race</li>: <span>cjhaimaa</span></div>
                    <div class='box-info-item'><li >ville</li>: <span>chaimaa</span></div>
                    <div class='box-info-item'><li >description</li><span class="deux">:</span> <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></div>
                </ul>
            
            
          </div> -->
        </div>
      </div>
     </div>
     <script type="text/javascript">
            function remplirFormSuppr(image, nom, age, espece, race, ville, description) {
                $(".global-modal-body").html(`<div class='modal-content-left'>
                <img src='/Projet_fil_rouge/public/uploads/${image}' >
           </div>
          <div class='modal-content-right'>
           <ul class='box-info'>
                    <div class='box-info-item'><li>nom</li>:<span>${nom}</span></div>
                    <div class='box-info-item'><li >age</li>: <span>${age}</span></div>
                    <div class='box-info-item'><li >espèce</li>: <span>${espece}</span></div>
                    <div class='box-info-item'><li >race</li>: <span>${race}</span></div>
                    <div class='box-info-item'><li >ville</li>: <span>${ville}</span></div>
                    <div class='box-info-item'><li >description</li><span class="deux">:</span> <span> ${description}</span></div>
                </ul>
            
            
          </div>`);
            }
        </script>
        <script src="/Projet_fil_rouge/public/js/actif.js"></script>
    