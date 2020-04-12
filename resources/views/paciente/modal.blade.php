@extends('layouts.app')

@section('content')
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <!-- Botón en HTML (lanza el modal en Bootstrap) -->
    <a href="#modal" role="button"
       class="btn btn-large btn-danger" data-toggle="modal">Eliminar</a>

    <!-- Modal / Ventana / Overlay en HTML -->
    <div id="modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;
                    </button>
                    <h4 class="modal-title">¿Estás seguro?</h4>
                </div>
                <div class="modal-body">
                    <p>¿Seguro que quieres borrar este video
                        ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"
                            data-dismiss="modal">Cancelar
                    </button>
                    <a type="button" class="btn btn-danger"
                       href="">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script !src="">
    $(document).ready(function () {
        $('#modal').modal('show');
    });
</script>
@endsection
