<!-- <th scope="col">No</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Gender</th>
      <th scope="col">KTP</th> -->

  <!-- <h1>Halaman Profile</h1>
      <img src="/img/{{$user->image}}" alt="hanggitya" width='200px' class="rounded-circle">
      </td>
      <h2>{{ $user->name }}</h2>
      <h2>{{ $user->email }}</h2>
      <h2>{{ $user->phone }}</h2>
      <h2>{{ $user->date }}</h2>
      <h2>{{ $user->gender }}</h2>
      <h2>{{ $user->ktp }}</h2>
      <h2>
        <a href="/edit/{{ $user->id }}">Edit</a>
        <form action="" method="post"></form>
        <a href="/user/{{ $user->id }}">Hapus</a>
      </h2> -->
<center>
  <div class="card">
    <h1 class="card-title">Profile</h1>
    <center><img src="/img/{{$user->image}}" alt="hanggitya" width='200px' class="rounded-circle"></center>
      <p>Nama : {{ $user->name }}</p>
      <p>Email : {{ $user->email }}</p>
      <p>Phone : {{ $user->phone }}</p>
      <p>Birth Date : {{ $user->date }}</p>
      <p>Gender : {{ $user->gender }}</p>
      <p>NoKTP : {{ $user->ktp }}</p>
      <form action="" method="post"></form>
    <a href="/edit/{{ $user->id }}" class="btn btn-primary">Edit</a>
</div>
</center>