@extends('../layout/layout-login')
@section('title','login')

@section('login')

    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->

                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Vamos Começar!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp"    placeholder="Nome do locatório...">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp"    placeholder="Dominio...">
                                    </div>

                                    <div class="form-group">
                                        <label for="numero">Status</label>
                                        <input type="number" class="form-control" min="0" id="numero" placeholder="Status...">
                                    </div>
                                    
                                    <div class="mb-3 form-group">
                                        <label for="exampleFormControlTextarea1" class="form-label">Detalhes do teu locatório</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="button">Começar</button>
                                        <button class="btn btn-danger" type="button">Cancelar</button>
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
