<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />    
        <title>{{ config('app.name') }} Login</title>
        <meta name="description" content="Latest updates and statistic charts"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <link href="{{ url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />		
        <link href="{{ url('assets/demo/demo6/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url({{ url('assets/app/media/img/bg/bg-3.jpg') }});">
                <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
                    <div class="m-login__container">
                        <div class="m-login__logo">
                            <a href="#">
                                <img style="width:100%" src="{{ url('assets/app/media/img/logos/logo-so.png') }}">
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">Sign In To Project Manager</h3>
                            </div>
                            <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group m-form__group {{ $errors->has('email') ? 'has-danger' : '' }}">
                                    <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                                    @if ($errors->has('email'))
                                        <div id="email-error" class="form-control-feedback">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group m-form__group {{ $errors->has('password') ? 'has-danger' : '' }}">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                                    @if ($errors->has('password'))
                                        <div id="password-error" class="form-control-feedback">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <div class="row m-login__form-sub">
                                    <div class="col m--align-left m-login__form-left">
                                        <label class="m-checkbox  m-checkbox--focus">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col m--align-right m-login__form-right">
                                        <a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_signin_submit" class="btn btn-accent m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign In</button>
                                </div>
                            </form>
                        </div>
                        <div class="m-login__forget-password">
                            <div class="m-login__head">
                                <h3 class="m-login__title">Forgotten Password ?</h3>
                                <div class="m-login__desc">Enter your email to reset your password:</div>
                            </div>
                            <form class="m-login__form m-form" action="">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">Request</button>&nbsp;&nbsp;
                                    <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ url('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/demo/demo6/base/scripts.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ url('js/login.js') }}" type="text/javascript"></script>
    </body>
</html>
