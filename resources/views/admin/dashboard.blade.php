@extends('admin.master')

@section('container')
<a href="/admin/create" class="btn btn-success">Add New Data</a>
<table class="table">
  <thead>
  <tr>
      <th scope="col">No</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Gender</th>
      <th scope="col">KTP</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <tbody>
    @foreach($user as $u)
    <tr>
      <th scope="row">{{ $u->id }}</th>
      <td>
      <img src="/img/{{$u->image}}" alt="hanggitya" width='50px' class="rounded-circle">
      </td>
      <td>{{ $u->name }}</td>
      <td>{{ $u->email }}</td>
      <td>{{ $u->phone }}</td>
      <td>{{ $u->date }}</td>
      <td>{{ $u->gender }}</td>
      <td>{{ $u->ktp }}</td>
      <td>
      <a href="/{{$u->id}}/edit " class="btn btn-primary">edit</a><form action="/{{$u->id}}/delete"  method="post">

      @csrf
    



      {{ method_field('delete') }}
      <button class="btn btn-danger">delete</button>
      </form></td>
      
    </tr>
    @endforeach
  </tbody>
  </tbody>
</table>

<a href="/admin/datajson">menampilkan data json</a>

@endsection