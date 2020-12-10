<div class="table">

<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
  Add user 
</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">DEL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><button class="btn btn-danger">X</button></td>
    </tr>
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
        <form method="POST" action="/admin">
          <input type="name" name="name" class="form-control" placeholder="Имя">
          <br>
          <input type="hidden" name="actionform" class="form-control" value="2">
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