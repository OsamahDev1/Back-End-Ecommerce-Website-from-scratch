@extends('layouts.navbar')
@section('content')
        <div class="container settings" style="margin-top: 275px;">
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4 form">
                    <h1 class="password"> Change Password </h1>
                    <form>
                        <div class="form-group">
                                <input class="form-control" placeholder="Old Password" type="password" name="oldpassword" required="true">
            
                                <br>

                                <input class="form-control" placeholder="New Password" type="password" name="newpassword">
            
                                <br>
            
                                <input class="form-control" placeholder="Re-type New Password" type="password" name="retypenewpassword" required="true">

                                <br>
            
                    <button class="btn btn-primary" type="submit">Change</button>
                        </div>
                    </form>
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