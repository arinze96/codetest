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
                <h1 class="text-center" class="caption1"
                    style="color: grey; font-size: 16px;margin-bottom: 10px;">Get started with our modern project</h1>
                <h1 class="text-center" class="caption1"
                    style="color: grey; font-size: 16px;margin-bottom: 10px;">management software</h1>
                <h1 class="text-center" class="caption1"
                    style="color: grey; font-size: 12px;margin-bottom: 40px;">14-day free trial. No credit card
                    required.</h1>
                {{-- <div class="d-grid gap-2">
                    <button class="btn btn-light" type="button" style="margin-bottom: 30px;">
                        <i class="fa-brands fa-google" style="float: left;"></i>
                        Sign in with google <i class="fas fa-arrow-right"></i></button>
                </div> --}}

                <form method="POST"  action="{{ route('user.register.post') }}" id="registerForm1">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fullname</label>
                        <input type="text" class="form-control fullname" id="exampleInputEmai1" aria-describedby="emailHelp"
                            placeholder="Name" name="fullname" value="{{ old('fullname') }}">
                            @error('fullname')
                            <p class="">{{ $message }} </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label email">Your Work Email</label>
                        <input type="email" class="form-control email" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="name@company.com" name="email" value="{{ old('email') }}">
                            @error('email')
                            <p class="">{{ $message }} </p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="exampleInputPassword1" class="form-label password">Password</label>
                        <input type="password" class="form-control password" id="exampleInputPassword1"
                            placeholder="Enter password" name="password">
                            @error('password')
                            <p class="">{{ $message }} </p>
                        @enderror
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary submitbutton" id="main_btn">Get Started for free </button>

                        <button type="submit0" class="btn btn-light submitbutton1"><i class="fa-brands fa-google"></i>Signup With Google</button>
                    </div>
                </form>

                <p class="text-center" style="margin-top: 45px;"><a href="#" class="desc5">By clicking the button, you agree to our <span class="desc3">TermsofService</span> and have read and acknowledge our <span class="desc3">PrivacyPolicy</span>.</a></p>
               
                <p class="text-center" style="margin-top:  40px;" class="desc5"><span >Already have an account?</span> <span><a href="#" class="desc3">Signin here</a></span></p>

            </div>

        </div>


        @include('includes.home_footer')




        @include('includes.home_script')

</body>

</html>
