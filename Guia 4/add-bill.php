<?php require_once "header.php"; ?>

<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar Factura</h2>

               <form class="bg-light-alpha p-5" action ="Process/billProcess.php" method="get">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="fecha">Fecha</label>
                                   <input type="date" name="fecha" value="fecha" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <p>Tipo</p>
                                   <input type="radio" name="" class="radioSize">Factura A
                                   <input type="radio" name="" class="radioSize">Factura B
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="number">Numero</label>
                                   <input type="number" name="number" class="form-control" min="0">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

<?php require_once "footer.php"; ?>
