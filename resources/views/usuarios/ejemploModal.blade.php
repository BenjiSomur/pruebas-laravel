<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('usuarios.store') }}" method="POST">
          @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Hay problemas con los datos ingresados.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

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