<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4c44cda4ea.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    <style>
      .div_center{
        text-align: center;
        padding-top: 40px;
        color: white;
      }
      .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
      }
      .input_color{
        color: black;
      }
      .div_center_form{
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
</head>
  <body>
    <div class="row min-vh-100">
        {{-- sidebar --}}
        @include('admin.sidebar')
        <div class="col-md-10">
          {{-- navbar --}}
           @include('admin.navbar') 
           @if(session()->has('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close btn-success" data-bs-dismiss="alert" aria-label="Close">X</button>
              </div>
              @endif
            <div class="row min-vh-100 bg-black">
              
              
              <div class="div_center">
                <h2 class="h2_font">Edit Food</h2>
                <form action="{{url('update_product',$product->id)}}" method="POST" enctype="multipart/form-data" class="col-md-5 div_center_form">
                  @csrf
                  <div class="mb-3">
                    <label for="title" class="form-label">Food Title</label>
                    <input type="text" class="form-control" name="title" id="" placeholder="Write Product title" value="{{$product->title}}" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Add Description</label>
                    <textarea class="form-control" id="code" name="comment" rows="3" >{{$product->description}}</textarea>
                </div>
                <script>
                  CKEDITOR.replace('code');
                </script>
                  <div class="mb-3">
                    <label for="price" class="form-label">Food Price</label>
                    <input type="number" min="0" class="form-control" name="price" id="" placeholder="Product Price" value="{{$product->price}}" required>
                  </div>
                  <div class="mb-3">
                    <label for="Price" class="form-label">Discount Price</label>
                    <input type="number" min="0" class="form-control" name="dis_price" id="" placeholder="Write if any discount available" value="{{$product->discount_price}}">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Current Food Image</label>
                    <img class="images" style="margin-left: auto;
                    margin-right: auto;" height="100" width="100" src="/product_picture/{{$product->image}}" alt="">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Change Food Image Here</label>
                    <input class="form-control" type="file" name="image" id="formFile">
                  </div>
                  
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              
                             
            </div>
              
          </div>
          
    </div> 
        <div class="container-fluid bg-dark text-light ">
            <p class="text-center mb-0">Copyright 2023 | All right reserved</p>
        </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>