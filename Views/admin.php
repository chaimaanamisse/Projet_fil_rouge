<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.14/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="/Projet_fil_rouge/public/css/admin.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>


<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous"> -->

 


<script>
 $(function() {
                $(".toggle").on("click", function() {
                    if ($(".item").hasClass("active")) {
                        $(".item").removeClass("active");
                    } else {
                        $(".item").addClass("active");
                    }
                });
            });

</script>


<title>FurryFreinds</title>
</head>
<body>

    <!--  -->

     <!-- hedear -->
     <nav>
        <ul class="menu">
            <li class="logo"><a href="/Projet_fil_rouge/public/"><i class="fa fa-paw logo-style" aria-hidden="true" ></i>
        <span class="furryfreinds">FurryFreinds</span></a></li>
      
            <li class="item button"><a href="/Projet_fil_rouge/public/admin">Admin</a></li>
            <li class="item button secondary"><a href="/Projet_fil_rouge/public/users/logout">déconnexion</a></li>
            <li class="toggle"><span class="bars"></span></li>
           
        </ul>
    </nav>

    <!--  -->
    <?= $contenu ?>

     <script>var globalModal = $('.global-modal');
$( ".btn-green-flat-trigger" ).on( "click", function(e) {
  e.preventDefault();
  $( globalModal ).toggleClass('global-modal-show');
});
$( ".overlay" ).on( "click", function() {
  $( globalModal ).toggleClass('global-modal-show');
});
$( ".global-modal_close" ).on( "click", function() {
  $( globalModal ).toggleClass('global-modal-show');
});
$(".mobile-close").on("click", function(){
  $( globalModal ).toggleClass('global-modal-show');
});</script>
     

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.14/js/jquery.dataTables.min.js"></script>



<footer>
    <p>Copyright &copy; 2021.All Rights Reserved.</p>
</footer>
</body>
</html>

