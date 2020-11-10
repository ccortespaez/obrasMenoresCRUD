<?php require_once "templates/headerindex.php"; ?>

<form  name="formulario" method="post"  class="cotizacion">

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Cotiza nuestros servicios</h2>

        </div>

        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
            <h2 class="float-left">Primordiales</h2><img class="img-icon float-left pl-2 mt-2" src="assets/img/estate.png">
            <label>Dormitorio principal<br>
              <select id="v1"  onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option  value="1050000">3,30 x 4,0 m2</option>
                <option  value="1150000">4,0 x 4,0 m2</option>
                <option value="1175000">4,0 x 6,0 m2</option>
              </select>
            </label>
          </p>
          <p>
            <label>Cocina<br />
              <select  id="v2" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1520000">2,70 x 3,00 m2</option>
                <option value="1575000">3,0 x 4,00 m2</option>
                <option value="1625000">4,00 x 4,00 m2</option>
              </select>
            </label>
          </p>

          <p>
            <label>Baño<br />
              <select  id="v3" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1350000">2,60 x 1,70 m2</option>
                <option value="1420000">3,00 x 3,00 m2</option>
                <option value="1450000">3,00 x 4,00 m2</option>
              </select>
            </label>
          </p>


          <p>
            <label>Sala de Estar<br />
              <select  id="v4" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1015000">2,70 x 3,00 m2</option>
                <option value="1150000">3,00 x 3,50 m2</option>
                <option value="1200000">3,50 x 4,00 m2</option>
              </select>
            </label>
          </p>
          <p>
            <label>Living<br />
              <select  id="v5" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1450000">3,60 x 4,40 m2</option>
                <option value="1500000">5,00 x 4,80 m2</option>
                <option value="1635000">5,50 x 5,0 m2</option>
              </select>
            </label>
          </p>
          <p>
            <label>Comedor<br />
              <select  id="v6" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1050000">3,00 x 4,00 m2</option>
                <option value="1175000">3,30 x 4,40 m2</option>
                <option value="1205000">3,50 X 4,80 m2</option>
              </select>
            </label>
          </p>

        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 segment-two">
          <h2 class="float-left">Secundarios</h2><img class="img-icon float-left pl-2 mt-2" src="assets/img/second.png">
          <p>

            <label>Walkin Closet<br />
              <select  id="v7" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="825000">2,0 x 2,2 m2</option>
                <option value="850000">2,5 x,3,0 m2</option>
                <option value="945000">3,0 x 6,0 m2</option>
              </select>
            </label>
          </p>

          <p>
            <label>Lavadero<br />
              <select  id="v8" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1010000">1,70 x 1,80 m2</option>
                <option value="1040000">1,70 x 2,50 m2</option>
                <option value="1170000">2,00 x 3,00 m2</option>
              </select>
            </label>
          </p>
          <p>
            <label>Dormitorios adicionales<br>
              <select  id="v9" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1100000">1</option>
                <option value="2200000">2</option>
                <option value="3300000">3</option>
                <option value="4400000">4</option>
              </select>
            </label>
          </p>
          <p>
            <label>Baños Adicionales<br>
              <select id="v10" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1075000">1</option>
                <option value="2150000">2</option>
                <option value="3225000">3</option>
              </select>
            </label>
          </p>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 segment-three">
          <h2 class="float-left">Adicionales</h2><img class="img-icon float-left pl-2 mt-2" src="assets/img/add.png">
          <p>
            <label>Piscina<br />
              <select  id="v11" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="3600000">3,00 x 6,00 m2</option>
                <option value="4600000">4,00 x 8,00 m2</option>
                <option value="5600000">4,00 x 12,00 m2</option>
                <option value="6600000">6,00 x 12,00 m2</option>

              </select>
            </label>
          </p>
          <p>
            <label>Quincho<br>
              <select id="v12" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1450000">Si</option>
                <option value="0">No</option>
              </select>
            </label>
          </p><p>
            <label>Terraza techada<br>
              <select id="v13" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1600000">3,00 x 5,00 m2</option>
                <option value="2100000">3,00 x 10,00 m2</option>
                <option value="2350000">4,00 x 10,00 m2</option>
              </select>
            </label>
          </p><p>
            <label>Terraza descubierta<br>
              <select  id="v14" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="1400000">3,00 x 5,00 m2</option>
                <option value="1850000">3,00 x 10,00 m2</option>
                <option value="2100000">4,00 x 10,00 m2</option>
              </select>
            </label>
          </p><p>
            <label>Riego automatico <br>
              <select  id="v15" onchange="operacion()" >
                <option value="0" selected="selected">Seleccione</option>
                <option value="850000">700 m2</option>
                <option value="1200000">1500 m2</option>
                <option value="2000000">3000 m2</option>
              </select>
            </label>
          </p>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 segment-three">
          <h2 class="float-left">Detalle</h2> <img class="img-icon float-left pl-2 mt-2" src="assets/img/descripcion.png">
          <table class="table">
            <thead>

              <tr>
                <th><img class="img-icon pr-2" src="assets/img/money.png">Total a pagar :
                <input class="float-left mt-2" id="resultado" type="number"   readonly name=""> <h9 class="float-left mt-1 p-2">$</h9>
                </th>

              </tr>

            </thead>

          </table>

        </div>
      </div>


    </section>
  </main>

<?php require_once "templates/footerindex.php"; ?>
