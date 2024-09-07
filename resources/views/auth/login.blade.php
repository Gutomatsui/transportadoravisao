<!DOCTYPE html>
<!--[if IE 9]> <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="Pt-br"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Login| Transpotadora Visão</title>
        <meta name="description" content="Retifica Guarujá">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{URL::to ('backend/img/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{URL::to('backend/img/icon57.png')}}" sizes="57x57">
        <link rel="stylesheet" href="{{URL::to('backend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::to('backend/css/plugins.css')}}">
        <link rel="stylesheet" href="{{URL::to('backend/css/main.css')}}">
        <link rel="stylesheet" href="{{URL::to('backend/css/themes.css')}}">
        <script src="{{URL::to('backend/js/vendor/modernizr.min.js')}}"></script>
    </head>
    <body>
         <!-- Login Alternative Row -->
         <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div id="login-alt-container">
                        <!-- Title -->
                        <h1 class="push-top-bottom">
                          <img src="{{Url::to('/img/logo-transportadora-visao.png')}}"><br>
                            <small>Entre com seu Login e senha </small>
                        </h1>
                        <!-- END Title -->



                    </div>
                </div>
                <div class="col-md-5">
                    <!-- Login Container -->
                    <div id="login-container">
                        <!-- Login Title -->
                        <div class="login-title text-center">
                            <h1><strong>Faça o seu Login</strong></h1>
                        </div>
                        <!-- END Login Title -->

                        <!-- Login Block -->
                        <div class="block push-bit">
                            <!-- Login Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-xs-8 text-right">
                                        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Terms -->
        <div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Terms &amp; Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Title</h4>
                        <p>Terms content here...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="{{URL::to('backend/js/vendor/jquery.min.js')}}"></script>
        <script src="{{URL::to('backend/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{URL::to('backend/js/plugins.js')}}"></script>
        <script src="{{URL::to('backend/js/app.js')}}"></script>
    </body>
</html>
