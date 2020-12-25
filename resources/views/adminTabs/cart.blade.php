<div class="table">

<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalCart">
  Add to cart 
</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">ID_user</th>
      <th scope="col">ID_product</th>
      <th scope="col">amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cart as $own)    
    <tr>
      <th scope="row">{{ $own->id }}</th>
      <td>{{ $own->id_user }}</td>
      <td>{{ $own->id_product }}</td>
      <td>{{ $own->amount }}</td>
      <td><a class="btn btn-danger" href="/admin/delcart/{{ $own->id }}">X</a></td>
    </tr>


    @endforeach
  </tbody>
</table>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/admin/addcart" enctype="multipart/form-data">
          {{ csrf_field() }}
          <span>User</span>
          <select class="form-control" name="iduser">
            @foreach ($users as $user)  
            <option value="{{$user->id}}">{{$user->id}}</option>
            @endforeach
          </select>
          <br>
          <span>Product</span>
          <select class="form-control" name="id">
            @foreach ($products as $product)  
            <option value="{{$product->id}}">{{$product->id}}</option>
            @endforeach
          </select>
          <br>
          <input type="submit" name="" class="btn btn-primary btn-block">

        </form>
      </div>
    </div>
  </div>
</div>