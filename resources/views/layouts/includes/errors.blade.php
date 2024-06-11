@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Oups!</strong> Hubo algunos problemas con el servidor.<br><br>
    <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>Las credenciales no coinciden con nuestros registros.</li>
        @endforeach
    </ul>
</div>
@endif


