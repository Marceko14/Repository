<div class="content-wrapper">
  <div class="container-header">
    <!-- /.col-md-6 -->
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Modulo de Registrar Categorias</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <button class="btn btn-secondary" style="background-color: #343a40;" data-toggle="modal" data-target="#modalAgregarCategoria">
          <i class="nav-icon fas fa-box-open"> Agregar Categoría</i>  
          
          </button>
        </div>
        <!-- /.card-body -->

      </div>

    </div>
    <!-- /.col-md-6 -->

    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!--modal categoria-->
<!-- Modal -->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" role="form">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="nav-icon fab fa-wpforms"> Formulario Agregar Categoría</i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <div class="input-group">
                
                <input type="text" class="form-control input-lg" placeholder="Ingresar Categoria" required
                  name="nuevaCategoria">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #343a40;"><i class="nav-icon fas fa-window-close"> Cerrar</i></button>
          <button type="button" class="btn btn-primary"><i class="nav-icon fa fa-save"> Guardar</i></button>
        </div>
      </form>

    </div>
  </div>
</div>