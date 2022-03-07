<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
<h2> {{$modo}} plato</h2>

<div class="form-group">
<label for="Nombre"> Nombre: </label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($catalogo->Nombre)?$catalogo->Nombre:'' }}" id="Nombre">
</div>

<div class="form-group">
<label for="Categoria"> Categoria: </label>
<input type="text" name="Categoria" class="form-control" value="{{ isset($catalogo->Categoria)?$catalogo->Categoria:'' }}" id="Categoria">
</div>

<div class="form-group">
<label for="Fotografia"> Foto: </label>
@if(isset($catalogo->Fotografia))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$catalogo->Fotografia }}" width="100px" alt="">
@endif
<input type="file" name="Fotografia" class="form-control" value="" id="Fotografia">
</div>


<div class="form-group">
<label for="Precio"> Precio: </label>
<input type="number" class="form-control" name="Precio" value="{{ isset($catalogo->Precio)?$catalogo->Precio:'' }}" id="Precio">
</div>

<input type="submit" value="{{$modo}}" class="btn btn-success">
<a href="{{ url('catalogo/') }}" class="btn btn-info">Volver</a><br><br>
</div>