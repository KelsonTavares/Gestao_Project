@extends('../layout/layout')
@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                        alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                        alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Luís Kaquinda</span>
                            <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>

            {{-- Projects | Tasks | Teams --}}

            <div class="row m-2">

                <div class="button-container row">
                    <h1 class="col-10">Adicionar</h1>
                </div>

                <div class="row pr-0 mb-2">
                <div class="list-group list-group-horizontal col-12" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Projecto</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Tarefa</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Equipe</a>
                </div>
                </div>

                <div class="row">
                <div class="tab-content col-12 p-0" id="nav-tabContent">
                    
                    {{-- Projects --}}

                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <form>
                            @csrf

                            <div class="mb-3">

                              <div class="col">
                                <label for="exampleInputEmail1" class="form-label">Nome do Projecto</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>

                                <div class="col">
                                        <div class="input-group my-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Responsavél</label>

                                            <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Isabel Bongo</option>
                                            <option value="1">Luís Kaquinda</option>
                                            <option value="2">Gabriel Cipriano</option>
                                            <option value="3">Mandanji Bastos</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="col">
                                    <div class="input-group my-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Equipe</label>

                                        <select class="form-select" id="inputGroupSelect01">
                                        <option selected>Pings with Things</option>
                                        <option value="1">PVSix</option>
                                        <option value="2">teamCat6</option>
                                        <option value="3">P2P</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="mb-3">
                                <div class="input-group input-daterange">

                                    <div class="col">
                                        <label class="form-control-placeholder mr-2" id="start-p" for="start">Data de Início</label>
                                        <input type="date" id="start" class="form-control text-left mr-2">
                                    </div>

                                    <div class="col">
                                        <label class="form-control-placeholder mr-2" id="end-p" for="end">Data de Termino</label>
                                        <input type="date" id="end" class="form-control text-left">
                                    </div>

                                </div>
                            </div>


                            <div class="mb-3">

                                <div class="col">
                                  <div class="input-group my-3">

                                    <div class="form-group">
                                        <label class="form-check-label ml-4">
                                            <input class="form-check-input" type="checkbox" onchange="mostrarOcultarConteudo(this)">
                                            Orçamentado
                                        </label>
                                    </div>
                                  </div>
                                </div>

                                <div class="col">
                                    <div id="conteudo" style="display: none;">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="0">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="col">
                                    <div class="input-group my-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Equipe</label>

                                        <select class="form-select" id="inputGroupSelect01">
                                          <option selected>Pings with Things</option>
                                          <option value="1">PVSix</option>
                                          <option value="2">teamCat6</option>
                                          <option value="3">P2P</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Descrição</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <button type="submit" class="btn btn-success">Salvar</button>
                                <button type="submit" class="btn btn-danger">Limpar</button>
                            </div>
                        </form>
                    </div>

                    {{-- Tasks --}}

                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <form>
                            @csrf

                            <div class="mb-3">

                              <div class="col">
                                <label for="exampleInputEmail1" class="form-label">Nome da Tarefa</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>

                                <div class="col">
                                        <div class="input-group my-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Projecto</label>

                                            <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Projecto 1</option>
                                            <option value="1">Projecto 2</option>
                                            <option value="2">Projecto 3</option>
                                            <option value="3">Projecto 4</option>
                                            </select>
                                        </div>
                                </div>
                            </div>

                            {{-- Precisa estar dentro do prazo do projecto --}}

                            <div class="mb-3">
                                <div class="input-group input-daterange">

                                    <div class="col">
                                        <label class="form-control-placeholder mr-2" id="start-p" for="start">Data de Início</label>
                                        <input type="date" id="start" class="form-control text-left mr-2">
                                    </div>

                                    <div class="col">
                                        <label class="form-control-placeholder mr-2" id="end-p" for="end">Data de Termino</label>
                                        <input type="date" id="end" class="form-control text-left">
                                    </div>

                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="col">
                                        <div class="input-group my-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Assinatura</label>

                                            <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Luís Kaquinda</option>
                                            <option value="1">Mandanji Bastos</option>
                                            <option value="2">Lucas Cardoso</option>
                                            <option value="3">Kelson Ango-Sat</option>
                                            </select>
                                        </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-text">Descrição</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <button type="submit" class="btn btn-success">Salvar</button>
                                <button type="submit" class="btn btn-danger">Limpar</button>
                            </div>
                        </form>
                    </div>


                     {{-- Team --}}

                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <form>
                            @csrf

                            {{-- Acordion --}}

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Novo Membro
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="mb-3">

                                            {{-- A ideia é que para ser membro precisa ser usuário --}}

                                            <div class="col">
                                              <div class="input-group my-3">
                                                  <label class="input-group-text" for="inputGroupSelect01">Adicionar membro</label>

                                                  <select class="form-select" id="inputGroupSelect01">
                                                    <option selected>Isabel Bongo</option>
                                                    <option value="1">Luís Kaquinda</option>
                                                    <option value="2">Gabriel Cipriano</option>
                                                    <option value="3">Mandanji Bastos</option>
                                                  </select>
                                              </div>
                                            </div>

                                            <div class="col">
                                                <div class="input-group my-3">
                                                    <label class="input-group-text" for="inputGroupSelect01">Função</label>
  
                                                    <select class="form-select" id="inputGroupSelect01">
                                                      <option selected>Analista</option>
                                                      <option value="1">Pedreiro</option>
                                                      <option value="2">Electricista</option>
                                                      <option value="3">DBA</option>
                                                    </select>
                                                </div>
                                            </div>
          
                                            <div class="col">
                                              <div class="input-group my-3">
                                                  <label class="input-group-text" for="inputGroupSelect01">Equipe</label>
          
                                                  <select class="form-select" id="inputGroupSelect01">
                                                    <option selected>Pings with Things</option>
                                                    <option value="1">PVSix</option>
                                                    <option value="2">teamCat6</option>
                                                    <option value="3">P2P</option>
                                                  </select>
                                              </div>
                                            </div>

                                            <div class="col">
                                                <div class="col">
                                                    <button type="submit" class="btn btn-success">Salvar</button>
                                                    <button type="submit" class="btn btn-danger">Limpar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Nova Equipe
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="mb-3">

                                            <div class="col">
                                                <label for="exampleInputEmail1" class="form-label">Nome da Equipe</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
            
                                            <div class="col">
                                                <div class="input-group my-3">
                                                    <label class="input-group-text" for="inputGroupSelect01">Responsavél</label>
            
                                                    <select class="form-select" id="inputGroupSelect01">
                                                    <option selected>Isabel Bongo</option>
                                                    <option value="1">Luís Kaquinda</option>
                                                    <option value="2">Gabriel Cipriano</option>
                                                    <option value="3">Mandanji Bastos</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="col">
                                                    <button type="submit" class="btn btn-success">Salvar</button>
                                                    <button type="submit" class="btn btn-danger">Limpar</button>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            
                            </div>
                        </form>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
@endsection