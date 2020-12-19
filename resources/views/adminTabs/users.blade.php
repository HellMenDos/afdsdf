<div class="table">

<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
  Add user 
</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Avatar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)    
    @if ($user->id != Session::get('admin')->id)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->role }}</td>
      <td><img src="/images/{{ $user->avatar }}" style="width: 50px"></td>
      <td><a class="btn btn-danger" href="/admin/del/{{ $user->id }}">X</a><button class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$user->id}} ">R</button></td>
    </tr>
    @endif

<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/admin/update/" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="name" name="name" class="form-control" placeholder="Имя" value="{{ $user->name }}">
          <br>
          <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
          <br>
          <input type="password" name="password" class="form-control" placeholder="New Password">
          <input type="hidden" name="id" class="form-control" value="{{ $user->id }}">
          <br>
          <select class="form-control" name="role" value="{{ $user->name }}">
            <option selected value="{{ $user->role }}">{{ $user->role }}</option>
            <option value="{{ ($user->role == 'admin') ? 'customer' : 'admin' }}">{{ ($user->role == 'admin') ? 'customer' : 'admin' }}</option>
          </select>
          <br>
          <input type="file" name="avatar" class="form-control">
          <br>
          <input type="submit" name="" class="btn btn-primary btn-block">

        </form>
      </div>
    </div>
  </div>
</div>

    @endforeach
  </tbody>
</table>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/admin/adduser" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="name" name="name" class="form-control" placeholder="Имя">
          <br>
          <input type="email" name="email" class="form-control" placeholder="Email">
          <br>
          <input type="password" name="password" class="form-control" placeholder="Password">
          <br>
          <select class="form-control" name="role">
            <option value="customer">customer</option>
            <option value="admin">admin</option>
          </select>
          <br>
          <input type="file" name="avatar" class="form-control">
          <br>
          <input type="submit" name="" class="btn btn-primary btn-block">

        </form>
      </div>
    </div>
  </div>
</div>