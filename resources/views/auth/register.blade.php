@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> <!-- Alterado para centralizar -->
                    {{ __('Registrar') }} <!-- Alterado para 'Registrar' -->
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Registrar') }}"> <!-- Alterado para 'Registrar' -->

                        @csrf
                        <div class="form-group row mb-6">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label> <!-- Alterado para 'Nome' -->
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-6">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-Mail') }}</label> <!-- Alterado para 'Endereço de E-Mail' -->
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-6">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label> <!-- Alterado para 'Endereço' -->
                            <div class="col-md-6">
                                <textarea id="address" class="resize-none form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required></textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-6">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label> <!-- Alterado para 'Senha' -->
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label> <!-- Alterado para 'Confirmar Senha' -->
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row ">
                            <div class="col-md-6 offset-md-4 text-center"> <!-- Alterado para text-center -->
                                <button type="submit" class="btn btn-primary active">
                                    {{ __('Registrar') }} <!-- Alterado para 'Registrar' -->
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection