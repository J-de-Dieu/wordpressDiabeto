<!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Disponibilité: Lundi - samedi de 8h à 10h
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Appelez nous maintenant +221 33 827 53 57
      </div>
    </div>
  </div>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Accueil</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('conseil-article')); ?>">Conseils et articles</a></li>
          <li class="drop-down"><a href="">Catégories</a>
          <ul>
              <?php 

                        $categories = get_categories();

                        foreach($categories as $category) {
                            $count = $category->category_count;
                            
                            if( $category->name != "blog" && $category->name != "Non classé"){
                                
                            echo '<li><a href="' . add_query_arg('c', $category->name, get_category_link($category->term_id)) . '">' . ucfirst($category->name ). '</a></li>';
                             
                            }
                        }
                       
             ?>
            
          </ul>
        </li>
          <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#" class="appointment-btn scrollto btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><span class="d-none d-md-inline">Con</span>nexion</a>
        
        <!-- Button trigger modal 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
          Connexion
        </button>-->
      
        <!-- Modal -->
        <div  class="modal fade mt-5" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                   
                  
                  <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                  
                  
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>-->
            </div>
          </div>
        </div>

    </div>
  </header><!-- Fin Header -->
