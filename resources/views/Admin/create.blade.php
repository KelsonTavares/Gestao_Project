@extends('adminlte::page')

@section('title', 'Instituição de Ensino Superior - IES')

@section('content_header')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Cadastrar IES</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">IES</a></li>
                        <li class="breadcrumb-item active">SGP-P5</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>


            <form action="{{ route('ies.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label >Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="exampleInputEmail1" placeholder="Nome" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Domínio</label>
                            <input type="text" class="form-control @error('domain') is-invalid @enderror"
                                id="exampleInputPassword1" value="{{ old('domain') }}" placeholder="Domínio" name="domain">
                            @error('domain')
                                <div class="invalid-feedback">{{ $message }}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Descrição</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id=""
                                    cols="30" rows="8">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status"
                                        value="{{ old('status', 1) }}" @checked(old('status') == 1 ? true : false)>
                                    <label class="form-check-label" for="exampleCheck1">activo</label>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
            </form>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
