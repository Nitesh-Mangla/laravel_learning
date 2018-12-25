@extends('login.welcome')

@push('custome_css')
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}" rel="stylesheet" type="text/css">

@endpush
@push('customer_js')

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();

            $.ajax({
                type: "POST",
                data: { "_token": "{{ csrf_token() }}","name": profile.getName(), "email": profile.getEmail()},
                url: "{{route('userinfo')}}",
                success: function (data) {
                    if(data == 200){
                        window.location.href = "{{route('user_login')}}";
                       {{--window.location.href = "{{route('user_account')}}";--}}
                    }else{
                        window.location.href = "{{route('user_login')}}";
                    }
                },
                error:function(error){
                    console.log(error);
                }
            });
        }


    </script>
@endpush
@section('contents')



    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

@endpush
@section('contents')

    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{asset("images/signin-image.jpg")}}" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">Create an account</a>
                </div>
                <div class="signin-form">
                    <h2 class="form-title">Sign up</h2>


                    @foreach($errors->all() as $error)
                        {{$error['msg']}}
                    @endforeach
                    {!! Form::open(["route" => "user_login" ,"method" => "post","class" => "register-form"])  !!}

                    {!! Form::open(["route" => "login" ,"method" => "post","class" => "register-form"])  !!}

                    <div class="form-group">
                    {!! Form::label('') !!}
                    {!! Form::text('username',null,['id' => 'your_name' ,'placeholder' => 'your_Name']) !!}
                    </div>

                    <div class="form-group">
                    {!! Form::label('') !!}
                    {!! Form::password('pass',null,['id'=>'your_pass' , 'placeholder' =>'password']) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::checkbox('remember-me') !!}
                        {!! Form::label('remember me','',['class' => 'label-agree-term']) !!}
                    </div>
                    <div class="form-group form-button">

                        {!! Form::submit ('signin',['id' => 'signin' ,'class' => 'form-submit','name' => 'submit'])!!}

                        {!! Form::submit ('signin',['id' => 'signin' ,'class' => 'form-submit'])!!}

                    </div>
                    {!! Form::close() !!}
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">

                            <li><div class="g-signin2" data-onsuccess="onSignIn"></div></li>

                        </ul>
                    </div>

                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection

