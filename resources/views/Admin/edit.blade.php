@extends('adminlte::page')

@section('title', 'Escritorio')

@section('content_header')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar Escritorios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Escritorios</a></li>
                        <li class="breadcrumb-item active">Auxilium</li>
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


            <form action="{{ route('escritorio.update', $tenant->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="exampleInputEmail1" placeholder="Nome" name="name" value="{{ old('name', $tenant->name) }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Dominio</label>
                            <input type="text" class="form-control @error('domain') is-invalid @enderror"
                                 value="{{ old('domain', $tenant->domains()->first()->domain) }}"
                                placeholder="dominio" name="domain">
                            @error('domain')
                                <div class="invalid-feedback">{{ $message }}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Descrição</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id=""
                                    cols="30" rows="8">{{ old('description', $tenant->description ) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status"
                                        value="{{ old('status', 1) }}" @checked(old('status', $tenant->status) == 1 ? true : false)>
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
