<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Administrateur</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><img src="../../../image/f.jpg" alt="" width="30" height="30" > &thinsp;Administrateur</a>
  <form action="recherche.php" method="POST" class="form-inline">
    <input type="text" name="eka1" class="" placeholder="numero ou prenom">
    <input type="submit" name="eka" class="btn btn-success" value="chercher"  >
 
                </form>  
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase ">
          <span class=" text-primary  ">Utilisateur</span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              Liste
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Ajouter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              PDF
            </a>
          </li>
        
        </ul>

        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span class=" text-primary  ">Cantine</span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              Liste
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Programme
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              Compte
            </a>
          </li>
        
        </ul>

        <h5 class=" d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span class=" text-primary  ">Fichier</span>
        </h5>

        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Tous les fichier
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Supprimer
            </a>
          </li>
        </ul>
        <center><a href="#" class="btn btn-sm btn-danger"> Deconnexion</a></center>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Utilisateur</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="" class="btn btn-sm btn-secondary"> Ajouter </a>
            <a href="" class="btn btn-sm btn-danger"> PDF </a>
          </div>

          <a href="" class="btn btn-sm btn-danger"> Deconnexion</a>
        </div>
      </div>

      

<div id="popo" class="container-fluid">
  <div class="col-md-12  "> 
        <article class="col-md-12">
        <table class="table table-dark table-borderless">
                        <header>
                        <tr class="table-dark">
                               <th>Numero</th>
                               <th>Nom</th>
                               <th>Prenom</th>
                               <th>Direction</th>
                               <th>Telephone</th>
                               <th>Fady</th>
                               <th>Mots de pass</th>
                               <th>Valeur</th>
                               <th>Modifier</th>
                               <th> Supprimer</th>
                           
                           </tr>
                        </header>

                          

                           <tr class="table-primary">
                               <td>43</td>
                               <td>SOLONIRINA</td>
                               <td>Andry Sitraka</td>
                               <td>stg DTM</td>
                               <td>034 00 000 10</td>
                               <td></td>
                               <td>ada333</td>
                               <td>1</td>
                               <th><center><a href= "edit.php?edit=43"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                               <th><center><a href="supp.php?supp=43"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                           
                           </tr> 


                           <tr class="table-primary">
                               <td>47</td>
                               <td>RATARSON</td>
                               <td>Recardo</td>
                               <td>stg DTM</td>
                               <td>034 00 000 01</td>
                               <td>sans porc</td>
                               <td>1234</td>
                               <td>1</td>
                               <th><center><a href= "edit.php?edit=47"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                               <th><center><a href="supp.php?supp=47"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                           
                           </tr> 


                           <tr class="table-primary">
                               <td>45</td>
                               <td>Anjoria</td>
                               <td>Tiphanie Kone</td>
                               <td>stg</td>
                               <td>034 00 000 10</td>
                               <td>sans porc</td>
                               <td>1234</td>
                               <td>1</td>
                               <th><center><a href= "edit.php?edit=45"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                               <th><center><a href="supp.php?supp=45"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                           
                           </tr> 


                           <tr class="table-primary">
                               <td>46</td>
                               <td>RANDRIANASOLO</td>
                               <td>Samuel</td>
                               <td>DTM</td>
                               <td>034 00 000 01</td>
                               <td>sans porc</td>
                               <td>1234</td>
                               <td>1</td>
                               <th><center><a href= "edit.php?edit=46"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                               <th><center><a href="supp.php?supp=46"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                           
                           </tr> 
                           <tr class="table-primary">
                            <td>43</td>
                            <td>SOLONIRINA</td>
                            <td>Andry Sitraka</td>
                            <td>stg DTM</td>
                            <td>034 00 000 10</td>
                            <td></td>
                            <td>ada333</td>
                            <td>1</td>
                            <th><center><a href= "edit.php?edit=43"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                            <th><center><a href="supp.php?supp=43"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                        
                        </tr> 


                        <tr class="table-primary">
                            <td>47</td>
                            <td>RATARSON</td>
                            <td>Recardo</td>
                            <td>stg DTM</td>
                            <td>034 00 000 01</td>
                            <td>sans porc</td>
                            <td>1234</td>
                            <td>1</td>
                            <th><center><a href= "edit.php?edit=47"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                            <th><center><a href="supp.php?supp=47"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                        
                        </tr> 


                        <tr class="table-primary">
                            <td>45</td>
                            <td>Anjoria</td>
                            <td>Tiphanie Kone</td>
                            <td>stg</td>
                            <td>034 00 000 10</td>
                            <td>sans porc</td>
                            <td>1234</td>
                            <td>1</td>
                            <th><center><a href= "edit.php?edit=45"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                            <th><center><a href="supp.php?supp=45"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                        
                        </tr> 


                        <tr class="table-primary">
                            <td>46</td>
                            <td>RANDRIANASOLO</td>
                            <td>Samuel</td>
                            <td>DTM</td>
                            <td>034 00 000 01</td>
                            <td>sans porc</td>
                            <td>1234</td>
                            <td>1</td>
                            <th><center><a href= "edit.php?edit=46"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                            <th><center><a href="supp.php?supp=46"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                        
                        </tr>  <tr class="table-primary">
                          <td>43</td>
                          <td>SOLONIRINA</td>
                          <td>Andry Sitraka</td>
                          <td>stg DTM</td>
                          <td>034 00 000 10</td>
                          <td></td>
                          <td>ada333</td>
                          <td>1</td>
                          <th><center><a href= "edit.php?edit=43"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                          <th><center><a href="supp.php?supp=43"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                      
                      </tr> 


                      <tr class="table-primary">
                          <td>47</td>
                          <td>RATARSON</td>
                          <td>Recardo</td>
                          <td>stg DTM</td>
                          <td>034 00 000 01</td>
                          <td>sans porc</td>
                          <td>1234</td>
                          <td>1</td>
                          <th><center><a href= "edit.php?edit=47"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                          <th><center><a href="supp.php?supp=47"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                      
                      </tr> 


                      <tr class="table-primary">
                          <td>45</td>
                          <td>Anjoria</td>
                          <td>Tiphanie Kone</td>
                          <td>stg</td>
                          <td>034 00 000 10</td>
                          <td>sans porc</td>
                          <td>1234</td>
                          <td>1</td>
                          <th><center><a href= "edit.php?edit=45"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                          <th><center><a href="supp.php?supp=45"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                      
                      </tr> 


                      <tr class="table-primary">
                          <td>46</td>
                          <td>RANDRIANASOLO</td>
                          <td>Samuel</td>
                          <td>DTM</td>
                          <td>034 00 000 01</td>
                          <td>sans porc</td>
                          <td>1234</td>
                          <td>1</td>
                          <th><center><a href= "edit.php?edit=46"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                          <th><center><a href="supp.php?supp=46"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                      
                      </tr>  <tr class="table-primary">
                        <td>43</td>
                        <td>SOLONIRINA</td>
                        <td>Andry Sitraka</td>
                        <td>stg DTM</td>
                        <td>034 00 000 10</td>
                        <td></td>
                        <td>ada333</td>
                        <td>1</td>
                        <th><center><a href= "edit.php?edit=43"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                        <th><center><a href="supp.php?supp=43"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                    
                    </tr> 


                    <tr class="table-primary">
                        <td>47</td>
                        <td>RATARSON</td>
                        <td>Recardo</td>
                        <td>stg DTM</td>
                        <td>034 00 000 01</td>
                        <td>sans porc</td>
                        <td>1234</td>
                        <td>1</td>
                        <th><center><a href= "edit.php?edit=47"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                        <th><center><a href="supp.php?supp=47"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                    
                    </tr> 


                    <tr class="table-primary">
                        <td>45</td>
                        <td>Anjoria</td>
                        <td>Tiphanie Kone</td>
                        <td>stg</td>
                        <td>034 00 000 10</td>
                        <td>sans porc</td>
                        <td>1234</td>
                        <td>1</td>
                        <th><center><a href= "edit.php?edit=45"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                        <th><center><a href="supp.php?supp=45"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                    
                    </tr> 


                    <tr class="table-primary">
                        <td>46</td>
                        <td>RANDRIANASOLO</td>
                        <td>Samuel</td>
                        <td>DTM</td>
                        <td>034 00 000 01</td>
                        <td>sans porc</td>
                        <td>1234</td>
                        <td>1</td>
                        <th><center><a href= "edit.php?edit=46"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                        <th><center><a href="supp.php?supp=46"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                    
                    </tr>  <tr class="table-primary">
                      <td>43</td>
                      <td>SOLONIRINA</td>
                      <td>Andry Sitraka</td>
                      <td>stg DTM</td>
                      <td>034 00 000 10</td>
                      <td></td>
                      <td>ada333</td>
                      <td>1</td>
                      <th><center><a href= "edit.php?edit=43"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                      <th><center><a href="supp.php?supp=43"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                  
                  </tr> 


                  <tr class="table-primary">
                      <td>47</td>
                      <td>RATARSON</td>
                      <td>Recardo</td>
                      <td>stg DTM</td>
                      <td>034 00 000 01</td>
                      <td>sans porc</td>
                      <td>1234</td>
                      <td>1</td>
                      <th><center><a href= "edit.php?edit=47"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                      <th><center><a href="supp.php?supp=47"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                  
                  </tr> 


                  <tr class="table-primary">
                      <td>45</td>
                      <td>Anjoria</td>
                      <td>Tiphanie Kone</td>
                      <td>stg</td>
                      <td>034 00 000 10</td>
                      <td>sans porc</td>
                      <td>1234</td>
                      <td>1</td>
                      <th><center><a href= "edit.php?edit=45"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                      <th><center><a href="supp.php?supp=45"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                  
                  </tr> 


                  <tr class="table-primary">
                      <td>46</td>
                      <td>RANDRIANASOLO</td>
                      <td>Samuel</td>
                      <td>DTM</td>
                      <td>034 00 000 01</td>
                      <td>sans porc</td>
                      <td>1234</td>
                      <td>1</td>
                      <th><center><a href= "edit.php?edit=46"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                      <th><center><a href="supp.php?supp=46"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                  
                  </tr>  <tr class="table-primary">
                    <td>43</td>
                    <td>SOLONIRINA</td>
                    <td>Andry Sitraka</td>
                    <td>stg DTM</td>
                    <td>034 00 000 10</td>
                    <td></td>
                    <td>ada333</td>
                    <td>1</td>
                    <th><center><a href= "edit.php?edit=43"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                    <th><center><a href="supp.php?supp=43"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                
                </tr> 


                <tr class="table-primary">
                    <td>47</td>
                    <td>RATARSON</td>
                    <td>Recardo</td>
                    <td>stg DTM</td>
                    <td>034 00 000 01</td>
                    <td>sans porc</td>
                    <td>1234</td>
                    <td>1</td>
                    <th><center><a href= "edit.php?edit=47"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                    <th><center><a href="supp.php?supp=47"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                
                </tr> 


                <tr class="table-primary">
                    <td>45</td>
                    <td>Anjoria</td>
                    <td>Tiphanie Kone</td>
                    <td>stg</td>
                    <td>034 00 000 10</td>
                    <td>sans porc</td>
                    <td>1234</td>
                    <td>1</td>
                    <th><center><a href= "edit.php?edit=45"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                    <th><center><a href="supp.php?supp=45"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                
                </tr> 


                <tr class="table-primary">
                    <td>46</td>
                    <td>RANDRIANASOLO</td>
                    <td>Samuel</td>
                    <td>DTM</td>
                    <td>034 00 000 01</td>
                    <td>sans porc</td>
                    <td>1234</td>
                    <td>1</td>
                    <th><center><a href= "edit.php?edit=46"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                    <th><center><a href="supp.php?supp=46"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                
                </tr>  <tr class="table-primary">
                  <td>43</td>
                  <td>SOLONIRINA</td>
                  <td>Andry Sitraka</td>
                  <td>stg DTM</td>
                  <td>034 00 000 10</td>
                  <td></td>
                  <td>ada333</td>
                  <td>1</td>
                  <th><center><a href= "edit.php?edit=43"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                  <th><center><a href="supp.php?supp=43"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
              
              </tr> 


              <tr class="table-primary">
                  <td>47</td>
                  <td>RATARSON</td>
                  <td>Recardo</td>
                  <td>stg DTM</td>
                  <td>034 00 000 01</td>
                  <td>sans porc</td>
                  <td>1234</td>
                  <td>1</td>
                  <th><center><a href= "edit.php?edit=47"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                  <th><center><a href="supp.php?supp=47"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
              
              </tr> 


              <tr class="table-primary">
                  <td>45</td>
                  <td>Anjoria</td>
                  <td>Tiphanie Kone</td>
                  <td>stg</td>
                  <td>034 00 000 10</td>
                  <td>sans porc</td>
                  <td>1234</td>
                  <td>1</td>
                  <th><center><a href= "edit.php?edit=45"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                  <th><center><a href="supp.php?supp=45"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
              
              </tr> 


              <tr class="table-primary">
                  <td>46</td>
                  <td>RANDRIANASOLO</td>
                  <td>Samuel</td>
                  <td>DTM</td>
                  <td>034 00 000 01</td>
                  <td>sans porc</td>
                  <td>1234</td>
                  <td>1</td>
                  <th><center><a href= "edit.php?edit=46"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                  <th><center><a href="supp.php?supp=46"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
              
              </tr>  <tr class="table-primary">
                <td>43</td>
                <td>SOLONIRINA</td>
                <td>Andry Sitraka</td>
                <td>stg DTM</td>
                <td>034 00 000 10</td>
                <td></td>
                <td>ada333</td>
                <td>1</td>
                <th><center><a href= "edit.php?edit=43"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                <th><center><a href="supp.php?supp=43"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
            
            </tr> 


            <tr class="table-primary">
                <td>47</td>
                <td>RATARSON</td>
                <td>Recardo</td>
                <td>stg DTM</td>
                <td>034 00 000 01</td>
                <td>sans porc</td>
                <td>1234</td>
                <td>1</td>
                <th><center><a href= "edit.php?edit=47"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                <th><center><a href="supp.php?supp=47"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
            
            </tr> 


            <tr class="table-primary">
                <td>45</td>
                <td>Anjoria</td>
                <td>Tiphanie Kone</td>
                <td>stg</td>
                <td>034 00 000 10</td>
                <td>sans porc</td>
                <td>1234</td>
                <td>1</td>
                <th><center><a href= "edit.php?edit=45"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                <th><center><a href="supp.php?supp=45"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
            
            </tr> 


            <tr class="table-primary">
                <td>46</td>
                <td>RANDRIANASOLO</td>
                <td>Samuel</td>
                <td>DTM</td>
                <td>034 00 000 01</td>
                <td>sans porc</td>
                <td>1234</td>
                <td>1</td>
                <th><center><a href= "edit.php?edit=46"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                <th><center><a href="supp.php?supp=46"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
            
            </tr>  <tr class="table-primary">
              <td>43</td>
              <td>SOLONIRINA</td>
              <td>Andry Sitraka</td>
              <td>stg DTM</td>
              <td>034 00 000 10</td>
              <td></td>
              <td>ada333</td>
              <td>1</td>
              <th><center><a href= "edit.php?edit=43"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
              <th><center><a href="supp.php?supp=43"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
          
          </tr> 


          <tr class="table-primary">
              <td>47</td>
              <td>RATARSON</td>
              <td>Recardo</td>
              <td>stg DTM</td>
              <td>034 00 000 01</td>
              <td>sans porc</td>
              <td>1234</td>
              <td>1</td>
              <th><center><a href= "edit.php?edit=47"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
              <th><center><a href="supp.php?supp=47"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
          
          </tr> 


          <tr class="table-primary">
              <td>45</td>
              <td>Anjoria</td>
              <td>Tiphanie Kone</td>
              <td>stg</td>
              <td>034 00 000 10</td>
              <td>sans porc</td>
              <td>1234</td>
              <td>1</td>
              <th><center><a href= "edit.php?edit=45"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
              <th><center><a href="supp.php?supp=45"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
          
          </tr> 


          <tr class="table-primary">
              <td>46</td>
              <td>RANDRIANASOLO</td>
              <td>Samuel</td>
              <td>DTM</td>
              <td>034 00 000 01</td>
              <td>sans porc</td>
              <td>1234</td>
              <td>1</td>
              <th><center><a href= "edit.php?edit=46"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
              <th><center><a href="supp.php?supp=46"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
          
          </tr>  <tr class="table-primary">
            <td>43</td>
            <td>SOLONIRINA</td>
            <td>Andry Sitraka</td>
            <td>stg DTM</td>
            <td>034 00 000 10</td>
            <td></td>
            <td>ada333</td>
            <td>1</td>
            <th><center><a href= "edit.php?edit=43"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
            <th><center><a href="supp.php?supp=43"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
        
        </tr> 


        <tr class="table-primary">
            <td>47</td>
            <td>RATARSON</td>
            <td>Recardo</td>
            <td>stg DTM</td>
            <td>034 00 000 01</td>
            <td>sans porc</td>
            <td>1234</td>
            <td>1</td>
            <th><center><a href= "edit.php?edit=47"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
            <th><center><a href="supp.php?supp=47"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
        
        </tr> 


        <tr class="table-primary">
            <td>45</td>
            <td>Anjoria</td>
            <td>Tiphanie Kone</td>
            <td>stg</td>
            <td>034 00 000 10</td>
            <td>sans porc</td>
            <td>1234</td>
            <td>1</td>
            <th><center><a href= "edit.php?edit=45"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
            <th><center><a href="supp.php?supp=45"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
        
        </tr> 


        <tr class="table-primary">
            <td>46</td>
            <td>RANDRIANASOLO</td>
            <td>Samuel</td>
            <td>DTM</td>
            <td>034 00 000 01</td>
            <td>sans porc</td>
            <td>1234</td>
            <td>1</td>
            <th><center><a href= "edit.php?edit=46"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
            <th><center><a href="supp.php?supp=46"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
        
        </tr> 


                           <tr class="table-primary">
                               <td>48</td>
                               <td>HERINIAINA</td>
                               <td>Andre Marius</td>
                               <td>stg DTM</td>
                               <td>034 00 000 10</td>
                               <td>sans porc</td>
                               <td>1234</td>
                               <td>1</td>
                               <th><center><a href= "edit.php?edit=48"><img src="../image/edit.png" alt="" width="30" height="30"> </a></center></th>
                               <th><center><a href="supp.php?supp=48"><img src="../image/sip.png" alt="" width="30" height="30"></a></center></th>
                           
                           </tr> 
                                 
                    </table> 
                     <center> <div class="btn-danger">  </div> </center>
        </article>
</div>     

                 </article >


       </div>
   </div>
</div>
</div>
</div>
      
 
  </div>
</div>


    <script src="../js/bundle.min.js"></script>

      <script src="../js/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
