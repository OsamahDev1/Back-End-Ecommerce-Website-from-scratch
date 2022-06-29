<!DOCTYPE html>
<head>
    <title>Lifestyle Store</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <!-- start of navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="{{ url('home') }}">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('cart') }}"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href=""><span class="glyphicon glyphicon-user"></span> Settings </a></li>

                        <li><a onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <span class="glyphicon glyphicon-log-in" ></span> Logout </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <form id="logoutform" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
        <!-- end of navbar -->

<form class="form-horizontal" style="margin-top: 200px;" enctype="multipart/form-data" method="POST" 
      action="{{ route('products.store') }}">
    @csrf
      <fieldset>



          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
            <div class="col-md-4">
            <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="product_name_fr">PRICE</label>  
            <div class="col-md-4">
            <input id="product_name_fr" name="price" placeholder="PRODUCT PRICE" class="form-control input-md" required="" type="text">
              
            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="product_category">PRODUCT CATEGORY</label>
            <div class="col-md-4">
              <select id="product_categorie" name="product_category" class="form-control">
                <option selected >Select a category</option>
                  @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
              </select>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity">PRODUCT IMAGE</label>  
            <div class="col-md-4">
            <input id="available_quantity" name="product_img" placeholder="PRODUCT IMAGE" class="form-control input-md" required="" type="file">
            </div>
          </div>
                @if ($errors->any())
                  @foreach ($errors as $err)
                    <span style="color:red;font-size:medium">{{ $err }}</span>
                  @endforeach
                @endif
          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">Add product</label>
            <div class="col-md-4">
              <button id="singlebutton" name="submit" class="btn btn-primary">Button</button>
            </div>
            </div>

</fieldset>
</form>

  
</body>
</html>