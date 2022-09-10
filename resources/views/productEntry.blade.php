@extends('layouts.app')

@section('content')
<div class="container">
<div class="text-center px-xl-3">
    <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#user-form-modal"><a href="/product-list">Product List</a></button>
</div>  
<form id="productStoreId" class="form" novalidate="">
    @csrf
    <div class="card-title">
              <h2 class="mr-2"><span>Add New Product</h2>
            </div>
                <div class="row">
                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Product Name</label>
                          <input class="form-control" 
                                type="text" 
                                name="name" 
                                placeholder="Apple Mac Book Pro" 
                                value=""
                            >
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                        <label class="form-label" for="customFile">Product Image</label>
                        <input type="file" 
                                class="form-control" 
                                name="image"
                                id="customFile"
                                value= "" 
                        />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <div class="form-group">
                          <label>Product Details</label>
                          <textarea class="form-control" 
                                    rows="5" 
                                    name="description"
                                    placeholder="Details Brief of product"
                                    value= ""
                            >
                            </textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Price</label>
                          <input class="form-control" 
                                type="text" 
                                name="price"
                                placeholder="$000"
                                value= ""
                        >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Stock</label>
                          <input class="form-control" 
                                type="text"
                                name="stock" 
                                placeholder="Must be 2 integer"
                                value= ""
                            >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Discount</label>
                          <input class="form-control" 
                                type="text"
                                name="discount" 
                                placeholder="Must be 2 integer"
                                value= ""
                            >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" type="button" onClick='store()'>Save</button>
                  </div>
                </div>
              </form>
</div>
@section('js')
<script>
    function store() {
        $.ajax({
            url: "{{ route('product.store') }}",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            data: new FormData(document.getElementById("productStoreId")),
                enctype: 'multipart/form-data',
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
            success: function(response) {
                console.log(response)
                window.location.href = '/product-list'
            },
            error: function() {
            }
        })
    }
</script>
@endsection
@endsection