<!-- <table class="table mt-3">
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
    </tr>
  </thead>
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
    </tr>
    @endforeach
  </tbody>
</table> -->




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- My Style -->
    <link rel="stylesheet" href ="/css/style.css">
    <title>K24 | Test</title>
  </head>
  <body>


  @include('user.partials.navbar')



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
    </tr>
    @endforeach
  </tbody>
  </tbody>
</table>


<a href="/user" class="btn btn-primary">Back To Profile</a>




    <script src="/js/imageLimit.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>