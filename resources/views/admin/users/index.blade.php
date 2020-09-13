@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
      <a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuarios</a>
      <table class="table table-striped">
            <thead>
            	 <th>Id</th>
            	 <th>Nombre</th>
            	 <th>Correo</th>
            	 <th>Tipo</th>
            </thead>
            <tbody>
            	@foreach($users as $user)
            	   <tr>
            	   	   <td>{{ $user->id }}</td>
            	   	   <td>{{ $user->name }}</td>
            	   	   <td>{{ $user->email }}</td>
            	   	   <td>
            	   	       @if($user->type == "admin")
            	   	           <span class="label label-danger">{{ $user->type }}</span>
            	   	       @else
            	   	           <span class="label label-primary">{{ $user->type }}</span>
            	   	       @endif
            	   	   </td>
            	   </tr>
            	@endforeach   
            </tbody>
      </table>
      {!! $users->render() !!}
@endsection