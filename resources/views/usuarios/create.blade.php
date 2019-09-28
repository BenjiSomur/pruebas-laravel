<div class="modal fade" id="createUsuario" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createUsuarioLabel">Agregar nuevo usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('usuarios.store') }}" method="POST">
          <div class="modal-body">
            @csrf
             <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Nombre:</strong>
                  <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Apellido Paterno:</strong>
                  <input type="text" name="apellidoP" class="form-control" placeholder="Apellido Paterno" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Apellido Materno:</strong>
                  <input type="text" name="apellidoM" class="form-control" placeholder="Apellido Materno" required>
                </div>
              </div>
           </div>
        </div>
        <div class="modal-footer">
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>