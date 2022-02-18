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
            <div class="col-sm-6 col-xs-12">
                <h1 class="text-center" class="caption" style="font-size: 80px;">shortcut</h1>
                <h1 class="text-center" class="caption1"
                    style="color: grey; font-size: 20px;margin-bottom: 60px;">formerly clubhouse</h1>
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
                        <button type="submit" class="btn btn-primary"
                            style="background-color:blueviolet;   border-color: blueviolet;">Login <i
                                class="fas fa-arrow-right"></i></button>
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

        <!-- /#contentContainer -->


        @include('includes.home_footer') 




        <script src="{{ asset('assets/js/script.js') }}"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>