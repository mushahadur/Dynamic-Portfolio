@extends('backend.auth.layout.app')

@section('auth-contain')
<div class="account-pages sm-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="index.html" class="mb-5 d-block auth-logo">
                        <img src="assets/images/logo-dark.png" alt="" height="22" class="logo logo-dark">
                        <img src="assets/images/logo-light.png" alt="" height="22" class="logo logo-light">
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                   
                    <div class="card-body p-4"> 

                        <div class="text-center">
                            <h5 class="text-primary">Register Account</h5>
                            <p class="text-muted">Get your free Minible account now.</p>
                        </div> 
                        <div class="p-2 mt-4">
                            <form action="{{ route('store.register') }}" method="POST">
                                @csrf
                               
        
                                <div class="mb-3">
                                    <label class="form-label" >Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" >User Name</label>
                                    <input type="text" name="username" class="form-control" placeholder="Enter UserName">
                                    @error('username')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="useremail">Email</label>
                                    <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter Email">
                                    @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror        
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="rpassword" placeholder="Enter Password">
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror        
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="password">Confirmation Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="rpassword" placeholder="Enter Confirmation password">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror        
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="auth-terms-condition-check">
                                    <label class="form-check-label" for="auth-terms-condition-check">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                </div>

                            
                                
                                <div class="mt-3 text-end">
                                    <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Register</button>
                                </div>
    
                                <div class="mt-4 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="font-size-14 mb-3 title">Sign up using</h5>
                                    </div>
                                    
    
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                <i class="mdi mdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4 text-center">
                                    <p class="text-muted mb-0">Already have an account ? <a href="auth-login.html" class="fw-medium text-primary"> Login</a></p>
                                </div>
                            </form>
                        </div>
    
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>© <script>document.write(new Date().getFullYear())</script> Minible. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection