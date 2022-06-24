@extends('layouts.navbar')
@section('content')
    <div>
        <div class="banner-image">
            <div class="container">
            <center>
                <div class="banner_content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p> 
                    <a href="{{ route('index') }}" class="btn btn-danger
                    btn-lg active">Shop Now</a>  
                </div>
            </center>
            </div>
             
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" ><div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
    
                    <div class="col-sm-4">
                        <a href="products.php#watches" ><div class="thumbnail">
                                <img src="img/7.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
    
                    <div class="col-sm-4">
                        <a href="products.php#shirts" ><div class="thumbnail">
                                <img src="img/8.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
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
