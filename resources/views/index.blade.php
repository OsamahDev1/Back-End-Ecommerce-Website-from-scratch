@extends('layouts.navbar')
@section('content')   
        <div class="container content">
            <!-- create item button -->
            @auth
                <form action="{{ route('products.create') }}" action="GET">
                <input type="submit" value = "Add a Product" class="button-34">
                </form>
            @endauth
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
			</div>	
		<!-- dropdown list -->
            <div class="dropdown show" style="position:relative;left:1151px;">
  <a style="background-color: #38363694;" class="btn btn-secondary btn-lg dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Watchs</a>
    <a class="dropdown-item" href="#">T-shirts</a>
    <a class="dropdown-item" href="#">Cameras</a>
  </div>
</div>
		<!-- start of card section -->
        
		<div class="row">
            
        	<div class="col-4">
				<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="..." alt="Card image cap">
  						<div class="card-body">
    						<h5 class="card-title">Card title</h5>
    						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    						<a href="#" class="btn btn-primary">Go somewhere</a>
  						</div>
				</div>
            </div>

        </div>

        <footer>
                <div class="container">
                    <center>
                     <p>Copyright © Lifestyle Store. All Rights
                    Reserved | Contact Us: +91 90000 00000”. </p>
                    </center>	
                </div>    
        </footer>
    </body>

</html>
@endsection
