<div class="content-wrapper">
    <div class="container-header">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="fa fa-address-book" aria-hidden="true"> Modulo de Registrar Usuarios</h3>

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
                    <button type="button" class="btn btn-secondary" data-toggle="modal"
                        style="background-color: #343a40;" data-target="#ModalAgregarUsuario" >
                        <i class="fa fa-address-book" aria-hidden="true"> Agregar Usuarios</i>
                        
                    </button>

                </div>
                <!-- /.card-body -->

            </div>

        </div>
        <!-- /.col-md-6 -->

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Modal Agregar Usuarios -->
<!-- Modal Agregar Usuarios -->
<div class="modal fade" id="ModalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form method="post" role="form">

        <div class="modal-header">
          <h5 class="modal-title" id="ModalAgregarUsuario">Formulario Agregar Usuarios</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <i class="fa fa-id-card" aria-hidden="true"> Nombre</i>
                <input type="text" class="form-control" id="nombre" placeholder="Ingresar nombre" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <i class="fa fa-user-circle" aria-hidden="true"> Usuario</i>
                <input type="text" class="form-control" id="usuario" placeholder="Ingresar usuario" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <i class="fa fa-unlock-alt" aria-hidden="true"> contraseña</i>
                <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required></select>
                <option value="">Seleccionar perfil</option>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <i class="fa fa-user" aria-hidden="true"> Perfil</i>
              <div class="input-group">
                <select class="form-control" name="seleccionarPerfil" id="SeleccionarPerfil"></select>
                <option value="">Seleccionar perfil</option>
                <option value="">Administracion</option>
              </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <div class="panel">
                  <input type="file" id="nuevaFoto" name="nuevaFoto">
                  <p class="help-block">Peso máximo de la foto 200 MB</p>
                  <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #343a40;">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>

      </form>




    </div>
  </div>
</div>