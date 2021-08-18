

</form>

<?php if(!empty($_SESSION['erreur'])): ?>
<div class="alert alert-danger" role="alert">
 <?php echo $_SESSION['erreur']; unset($_SESSION['erreur']) ?>
</div>
<?php endif; ?>

<!-- form -->
<div class="main_container">
    <div class="member-contact-container">
        <div class="member-contact-left">
          <h2 class="h2">Se connecter à votre compte</h2>
          <div class="links">
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
           
          </div>
          </div>
        <h5 class="h"> or use your email account </h5>
        <form class="member-contact-form" method="POST">
            <div class="multiple-row">
                <input type="email" placeholder="Email" class="form-in" name="email" > 
                <input type="password" placeholder="Password" class="form-in" name="password" autofocus>
            </div>
            <button class="buttonMem">se connecter</button>
                      
          </form>

          <div class="signup">
            <p class="signup-p"> Pas de compte <a href="/Projet_fil_rouge/public/users/register">S'inscrire</a> </p>
          </div>
        </div>
      </div>
     </div>
     <!-- fin form -->