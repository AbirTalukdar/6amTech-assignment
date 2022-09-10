@extends('layouts.app')

@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col">
    <div class="row flex-lg-nowrap">
      <div class="col mb-3">
        <div class="e-panel card">
          <div class="card-body">
            <div class="card-title">
              <h2 class="mr-2"><span>Product List</h2>
            </div>
            <div class="e-table">
              <div class="table-responsive table-lg mt-3">
                <table class="table table-bordered">
                    <tr>
                      <td class="align-top">
                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0">
                          <input type="checkbox" class="custom-control-input" id="all-items">
                          <label class="custom-control-label" for="all-items"></label>
                        </div>
                      </td>
                      <td class="max-width">ID</td>
                      <td class="max-width">Product Name</td>
                      <td class="max-width">Product Image</td>
                      <td class="max-width">Product detail</td>
                      <td class="max-width">Product Price</td>
                      <td class="sortable">Product stock</td>
                      <td class="sortable">Product Discount</td>
                      <td>Actions</td>
                    </tr>
                  @foreach($products as $product)

                  <tr>
                        <td>
                            <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0">
                                <input type="checkbox" class="custom-control-input" id="all-items">
                                <label class="custom-control-label" for="all-items"></label>
                            </div>
                        </td>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['image']}}</td>
                        <td>{{$product['detail']}}</td>
                        <td>{{$product['price']}}</td>
                        <td>{{$product['stock']}}</td>
                        <td>{{$product['discount']}}</td>
                        <td class="text-center align-middle">
                        <div class="btn-group align-top">
                            <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal"><a href="{{ URL('/product-edit/'.$product->id )}}"
                            >Edit</a></button>
                            <button class="btn btn-sm btn-outline-secondary badge" onClick="deleteProduct({{$product}})" type="button"><i class="fa fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                </table>
                <div>
                  {{ $products->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="text-center px-xl-3">
              <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#user-form-modal"><a href="/product-entry">Add New Product</a></button>
            </div>
            <hr class="my-3">
            <div>
              <div class="form-group">
                <label>Search by Name:</label>
                <div><input class="form-control w-100" type="text" placeholder="Name" value=""></div>
              </div>
            </div>
            <hr class="my-3">
            <div class="">
              <label>Status:</label>
              <div class="px-2">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="user-status" id="users-status-disabled">
                  <label class="custom-control-label" for="users-status-disabled">Disabled</label>
                </div>
              </div>
              <div class="px-2">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="user-status" id="users-status-active">
                  <label class="custom-control-label" for="users-status-active">Active</label>
                </div>
              </div>
              <div class="px-2">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="user-status" id="users-status-any" checked="">
                  <label class="custom-control-label" for="users-status-any">Any</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@section('js')
<script>
    function deleteProduct(product) {
            id = product.id;
            $.ajax({
                url: "{{ route('product.delete') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    id: id,
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
</script>
@endsection
@endsection