<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="res/css/customstyle.css">
        <meta name="viewport" content="width=device-width, inital-scale=1,user-scalable=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">Veggies</a>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Food
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruits</a></li>
                            <li><a href="#">Exotic Fruits</a></li>
                            <li><a href="#">Bio</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- header -->
        <div id="headerWrapper">
            <div id="back-flower"></div>
            <div id="tattoo"></div>
        </div>

      <div class="container-fluid">
          <!-- left sidebar -->
          <div class="col-md-2">left side bar</div>

          <!-- main content -->
          <div class="col-md-8">
              <div class="row">
                  <h2 class="text-center">Featured Products</h2>
                  <div class="col-md-3">
                      <h4>Tomato</h4>
                      <img src="res/img/tomato.jpg" alt="Tomato" class="img-thumb"/>
                      <p class="list-price text-danger">List Price <s>$54.99</s></p>
                      <p class="price">Our Price $19.99</p>
                      <button type="button" class="btn btn-sm btn-success" data.toggle="modal" data target="#details-1">Details
                      </button>
                  </div>

                  <div class="col-md-3">
                      <h4>Tomato</h4>
                      <img src="res/img/tomato.jpg" alt="Tomato" class="img-thumb"/>
                      <p class="list-price text-danger">List Price <s>$54.99</s></p>
                      <p class="price">Our Price $19.99</p>
                      <button type="button" class="btn btn-sm btn-success" data.toggle="modal" data target="#details-1">Details
                      </button>
                  </div>

                  <div class="col-md-3">
                      <h4>Tomato</h4>
                      <img src="res/img/tomato.jpg" alt="Tomato" class="img-thumb"/>
                      <p class="list-price text-danger">List Price <s>$54.99</s></p>
                      <p class="price">Our Price $19.99</p>
                      <button type="button" class="btn btn-sm btn-success" data.toggle="modal" data target="#details-1">Details
                      </button>
                  </div>

                  <div class="col-md-3">
                      <h4>Tomato</h4>
                      <img src="res/img/tomato.jpg" alt="Tomato" class="img-thumb"/>
                      <p class="list-price text-danger">List Price <s>$54.99</s></p>
                      <p class="price">Our Price $19.99</p>
                      <button type="button" class="btn btn-sm btn-success" data.toggle="modal" data target="#details-1">Details
                      </button>
                  </div>

                  <div class="col-md-3">
                      <h4>Tomato</h4>
                      <img src="res/img/tomato.jpg" alt="Tomato" class="img-thumb"/>
                      <p class="list-price text-danger">List Price <s>$54.99</s></p>
                      <p class="price">Our Price $19.99</p>
                      <button type="button" class="btn btn-sm btn-success" data.toggle="modal" data target="#details-1">Details
                      </button>
                  </div>

                  <div class="col-md-3">
                      <h4>Tomato</h4>
                      <img src="res/img/tomato.jpg" alt="Tomato" class="img-thumb"/>
                      <p class="list-price text-danger">List Price <s>$54.99</s></p>
                      <p class="price">Our Price $19.99</p>
                      <button type="button" class="btn btn-sm btn-success" data.toggle="modal" data target="#details-1">Details
                      </button>
                  </div>

                  <div class="col-md-3">
                      <h4>Tomato</h4>
                      <img src="res/img/tomato.jpg" alt="Tomato" class="img-thumb"/>
                      <p class="list-price text-danger">List Price <s>$54.99</s></p>
                      <p class="price">Our Price $19.99</p>
                      <button type="button" class="btn btn-sm btn-success" data.toggle="modal" data target="#details-1">Details
                      </button>
                  </div>

                  <div class="col-md-3">
                      <h4>Tomato</h4>
                      <img src="res/img/tomato.jpg" alt="Tomato" class="img-thumb"/>
                      <p class="list-price text-danger">List Price <s>$54.99</s></p>
                      <p class="price">Our Price $19.99</p>
                      <button type="button" class="btn btn-sm btn-success" data.toggle="modal" data target="#details-1">Details
                      </button>
                  </div>

              </div>
          </div>

          <!-- right sidebar -->
          <div class="col-md-2">right sidebar</div>
      </div>

      <footer class="text-center" id="footer">&copy; Copyright 2017-2017 veggies</footer>


      <!-- details modal-->
      <div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog"
           aria-labelledby="details-1" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-header">
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title text-center">Tomato</h4>
              </div>
              <div class="modal-body">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-sm-6">
                              <div class="center-block">
                                  <img src="res/img/tomato.jpg" alt="Tomato" class="details img-responsive"/>
                              </div>
                          </div>
                          <div class="col-sm-6"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


    <script>
        $(window).scroll(function(){
           var vscroll = $(this).scrollTop();
           $('#tattoo').css({
               "transform" : "translate(0px, "+vscroll/2+"px)"
           })
        });
    </script>
    </body>
</html>
