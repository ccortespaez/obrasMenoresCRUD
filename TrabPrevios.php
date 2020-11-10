<?php require_once "templates/headerindex.php"; ?>
<script type="text/javascript">(function(d, t, e, m){

    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){

        RW.init({
            huid: "460599",
            uid: "d376cea31f57c58a966e1cefe680a5bf",
            source: "website",
            options: {
                "advanced": {
                    "font": {
                        "hover": {
                            "color": "#427E53"
                        },
                        "color": "#427E53"

                    }
                },
                "label": {
                    "background": "#B7D086"
                },
                "lng": "es",
                "style": "oxygen1_green",
                "isDummy": false
            }
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() +
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>


<section id="portfolio" class="portfolio " style="position:relative;">
      <div class="container" style="height:180px">

        <div class="section-title">
          <h2>Trabajos realizados</h2>
          <p  style="font-size: 18px;"class="text-center">Obras Menores Illapel es reconocida en la localidad por su rapido servicio y sus casa de alta calidad, cuenta con un amplio catalogo de Casas las cuales presentan un modelo unico pensado para cada usuario.
           Disfruta de nuestro catalogo a continuacion:   </p>
        </div>
      </div>
 </section>

   <div class="container mb-5 text-black">
     <div class="row ml-4 justify-content-center ">

         <?php require_once "templates/cardCli.php"; ?>
     </div>

   </div>


    <div class="container   mb-5 mt-5 " style="">
              <div class="row mr-3 ml-3 " data-aos="fade-right" >
                  <div class="col-lg-12 col-md-12  col-sm-12 ml-3 " >

                      <div  class="card mt-5  " style="" >
                         <div class="card-header bg-primary text-white">
                           <strong >Seccion Google Maps</strong>
                           </div>
                       <div class="card-body" style="">
                      <h5 class="card-title mb-2">Encuentranos en la siguiente ubicacion!!</h5>
                       <div id="fb-root" ></div>
                            <iframe class="pt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2472.259227091962!2d-71.19483977023792!3d-31.640158002065764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x968ed57b950cb77f%3A0xea86089014e85f88!2sMinerva%20Cortes%20457!5e0!3m2!1ses-419!2scl!4v1592484687791!5m2!1ses-419!2scl" width="100%" height="990" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                       </div>
                       <div class="card-footer bg-primary " style="height:40px;" >

                       </div>
                       </div>


             <div class="card
              mt-4" style="" >
                <div class="card-header bg-danger text-white">
                  <strong >Seccion de Comentarios</strong>
                  </div>
              <div class="card-body" style="width:100%;">
             <h5 class="card-title">Dejenos saber su opinion!!</h5>
             <div id="fb-root"></div>
           <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0" nonce="G32BeVZ1"></script>
          <div class="fb-comments" data-href="https://localhost/ObrasMenoresCotizadorV1/TrabPrevios.php" data-numposts="90" data-width="100%"></div>

              </div>
              <div class="card-footer bg-danger " style="height:40px;" >

              </div>
              </div>
              </div>
              </div>
            </div>

    <!-- End Portfolio Section -->


  <?php require_once "templates/footerindex.php"; ?>
