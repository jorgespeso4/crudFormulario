<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif
<br>
<a href="{{ url('catalogo/create') }}" class="btn btn-success">Crear nuevo plato</a>
<br><br>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($catalogo as $catalogo)
        <tr>
            <td>{{$catalogo->id}}</td>

            <td> 
            <img class="img-thumbnail img-fluid" src="{{ asset('storage/'.$catalogo->Fotografia) }}" width="100px" alt="">
            </td>

            <td>{{$catalogo->Nombre}}</td>
            <td>{{$catalogo->Categoria}}</td>
            <td>{{$catalogo->Precio}}€</td>
            <td>
                
            <a href=" {{ url('/catalogo/'.$catalogo->id.'/edit') }} " class="btn btn-primary">Editar</a> 
            |     
            <form action="{{ url('/catalogo/'.$catalogo->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres eliminar esta categoria?')" class="btn btn-danger" value="Eliminar">
            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ url('/') }}" class="btn btn-info">Pagina principal</a>
</div>