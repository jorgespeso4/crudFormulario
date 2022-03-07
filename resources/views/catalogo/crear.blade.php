<form action="{{ url('/catalogo') }}" method="post" enctype="multipart/form-data">
@csrf
@include('catalogo.form',['modo'=>'Crear'])
</form>