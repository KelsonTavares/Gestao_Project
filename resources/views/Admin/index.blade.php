@extends('adminlte::page')

@section('title', 'Instituições de Ensino Superior - IES')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1> Lista de IES</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">IES</a></li>
                <li class="breadcrumb-item active">SGP-P5</li>
            </ol>
        </div>
    </div>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Lista de IES
            </h3>
            <div class="card-tools">
                <a href="{{ route('ies.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    Adicionar
                </a>

            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="ies" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>nome</th>
                            <th>Domínios</th>
                            <th>Status</th>
                            <th width="150">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>

    </div>
@stop

@section('css')

@stop

@section('js')
    <script>
        $(function() {
            var tableIES = $("#ies").DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                order: [
                    [1, 'asc']
                ],
                ajax: {
                    url: "{{ route('ies.index') }}",
                    method: 'GET'
                },
                columnDefs: [{
                    orderable: false,
                    targets: [0, 2]
                }],
                columns: [
                    {
                        'data': null
                    },
                    {
                        'data': 'name'
                    },
                    {
                        "data": function(data) {

                            var domains = '';
                            $.each(data.domains, function(key, value) {
                                domains += value.domain + '<br>';
                            });
                            return domains;

                        }
                    },
                    {
                        "data": function (data) {
                            return data.status ? '<span class="bg-success">Activo</span>':'<span class="bg-danger">Desativado</span>'
                        }
                    },
                    {
                        "data": function(data) {
                            return `<td  class="text-center" >
                            <div class="  btn-group btn-group-sm">
                                <a class="btn btn-info " href="#"><i class="fas fa-users"></i></a>
                                <a href="{{ url('ies/${data.id}/edit') }}" class="btn btn-primary btn-edit"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-delete" data-id="${data.id}"><i class="fas fa-trash"></i></button>
                            </div>
                            </td>`
                        }
                    }
                ]
            });

            $(document).on('click', '.btn-delete', function(e) {
                Swal.fire({
                        title: 'Você tem certeza?',
                        text: 'Você não poderá reverter isso!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, exclua!',
                        cancelButtonText: 'Cancelar',

                    })
                    .then((result) => {
                        if (result.value) {
                            $.ajax({
                                url: `{{ url('ies') }}/${$(this).attr('data-id')}`,
                                method: 'DELETE',
                            }).done((data, textStatus, jqXHR) => {
                                Toast.fire({
                                    icon: 'success',
                                    title: jqXHR.responseJSON.message,
                                });
                                console.log(jqXHR);
                                tableescritorio.ajax.reload();
                            }).fail((error) => {
                                Toast.fire({
                                    icon: 'error',
                                    title: error.responseJSON.message,
                                });
                            })
                        }
                    })
            });

            tableIES.on('draw.dt', function() {
                var PageInfo = $('#ies').DataTable().page.info();
                tableescritorio.column(0, {
                    page: 'current'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1 + PageInfo.start;
                });
            });


            tableIES.on('order.dt search.dt', () => {
                tableIES.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();

        });
    </script>
@stop
