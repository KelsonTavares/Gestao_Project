@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.register_message'))

@section('auth_body')

    <form action="{{ $register_url }}" method="post">
        @csrf
        
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->

                <div class="row">
                    
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Criar uma conta!</h1>
                            </div>

                            <form class="user">

                                {{-- Input para digitar o primeiro nome --}}

                                <div class="form-group row">

                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" id="exampleFirstName" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Digite o nome completo..." autofocus>
                                    </div>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                {{-- Input para digitar o email --}}

                                <div class="form-group">
                                    <input type="email" id="exampleInputEmail" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Digite o teu email...">
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                                </div>

                                {{-- Password --}}

                                <div class="form-group row">

                                    {{-- Input para digitar a password --}}

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" id="examplePassword" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Digite a tua palavra-pase...">
                                    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- Input para confirmar a password --}}

                                    <div class="col-sm-6">

                                            <input type="password" id="exampleRepeatPassword" name="password_confirmation" class="form-control form-control-user @error('password_confirmation') is-invalid @enderror" placeholder="Confirmar a palavra-passe...">
                                    
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                </div>

                                {{-- Register button --}}
                                
                                <button type="submit" class="btn btn-user btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                    Registrar
                                </button>


                            
                                
                                <a href="{{ $login_url }}" class="btn btn-primary btn-user btn-block">
                                    Já tem uma conta? Entre!
                                </a>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </form>
@stop
