@extends('authentication.layout.master')
@section('title','Register')
@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-8 offset-2">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action="{{ route('register') }}" method="post" class="user">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input value="{{ old('name') }}" name="name" type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="First Name">
                                        @error('name')
<small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input value="{{ old('phone') }}" name="phone" type="text" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="09 xxxxxxxx">
                                        @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>
                            < class="form-group">
                                <input value="{{old('email')}}" name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email Address">
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>

                                    @enderror
                            </  div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input name="password" type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input name="password_confirmation"  type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                               Register
                            </button>
                            <hr>
                            <a href="{{ url('auth/google/redirect') }}" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Login with Google
                            </a>
                            <a href="{{ url('auth/github/redirect') }}"  class="btn btn-github btn-user btn-block">
                                <i class="fab fa-github fa-fw"></i> Login with Github
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

