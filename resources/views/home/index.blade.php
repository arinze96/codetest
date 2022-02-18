<!DOCTYPE html>
<html lang="en">

<head>
     @include('includes.home_css') 


    <title>Signin into my codetest platform</title>

   
</head>

<body>

    <div id="contentContainer" class="container">

        <div class="row justify-content-center">

            <!-- Registration Form -->
            <div class="col-sm-4 col-xs-12">
                <h1 class="text-center" class="caption" style="font-size: 80px;">shortcut</h1>
                <h1 class="text-center" class="caption1" style="color: grey; font-size: 20px;margin-bottom: 60px;">formerly clubhouse</h1>
                <div class="d-grid gap-2">
                    <button class="btn btn-light" type="button" style="margin-bottom: 30px;">
                        <i class="fa-brands fa-google" style="float: left;"></i>
                        Sign in with google <i class="fas fa-arrow-right"></i></button>
                </div>

                <form>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username or Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-5">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" style="background-color:blueviolet;   border-color: blueviolet;">Login <i class="fas fa-arrow-right"></i></button>
                    </div>
                </form>

                <p class="text-center" style="margin-top: 45px;"><a href="#" class="desc">Log in with
                        SSO</a></p>
                <p class="text-center" style="margin-top: -10px;"><a href="#" class="desc">Forgot your
                        password?</a></p>
                <p class="text-center" style="margin-top: -10px;"><a href="#" class="desc">Need to use your
                        recovery code?</a></p>
                <p class="text-center" style="margin-top:  40px;"><span class="desc1">Don't have an
                        account?</span> <span><a href="#" class="desc">Sign up here</a></span></p>

            </div>

        </div>
    </div>

    <!-- /#contentContainer -->


   
    @include('includes.home_footer') 
    
    
    @include('includes.home_script') 

    

</body>

</html>