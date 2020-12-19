<div class="table">

<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalproduct">
  Add Product 
</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">title</th>
      <th scope="col">describe</th>
      <th scope="col">price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)    
    
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->title }}</td>
      <td>{{ $product->describe }}</td>
      <td>{{ $product->price }}</td>
      <td><a class="btn btn-danger" href="/admin/delproduct/{{ $product->id }}">X</a><button class="btn btn-success" data-toggle="modal" data-target="#exampleModalproduct{{$product->id}} ">R</button><button class="btn btn-warning" data-toggle="modal" data-target="#exampleModalproductP{{$product->id}} ">P</button><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalproductC{{$product->id}} ">C</button></td>
    </tr>


<div class="modal fade" id="exampleModalproduct{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/admin/updateproduct/" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="name" name="title" class="form-control" placeholder="Название" value="{{ $product->title }}">
          <br>
          <textarea value="{{ $product->describe }}" class="form-control" name="describe" placeholder="Описание"></textarea>
          <br>
          <input type="hidden" name="id" class="form-control" value="{{ $product->id }}">
          <input type="text" name="price" class="form-control" placeholder="Цена" value="{{ $product->price }}">
          <br>
          <input type="submit" name="" class="btn btn-primary btn-block">

        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalproductP{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload photos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/admin/uploadphoto/" enctype="multipart/form-data">
          {{ csrf_field() }}
          
          <input type="file" name="photos" class="form-control">
          <input type="hidden" name="id" class="form-control" value="{{ $product->id }}">
          <br>
          <input type="submit" name="" class="btn btn-primary btn-block">

        </form>
        <br>
        @foreach ($photos as $photo)  
          <img src="/images/product/{{ $photo->url }}" style="width: 60px; height: 60px;">
          <a class="btn btn-danger" href="/admin/delphotoproduct/{{ $photo->id }}">X</a>
        @endforeach
      </div>
    </div>
  </div>
</div>

    @endforeach
  </tbody>
</table>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalproduct" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/admin/addproduct" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="name" name="title" class="form-control" placeholder="Название">
          <br>
          <textarea name="describe" class="form-control" placeholder="Описание"></textarea>
          <br>
          <input type="text" name="price" class="form-control" placeholder="Цена">
          <br>
          <input type="submit" name="" class="btn btn-primary btn-block">

        </form>
      </div>
    </div>
  </div>
</div>