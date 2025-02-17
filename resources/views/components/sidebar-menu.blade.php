{{-- <aside class="d-flexs flex-column sidebar text-white" style="width: 250px"> --}}
    <nav class="p-4 menu-home">
        <div class="mb-8">
            <h1 class="h4 font-weight-bold">Teste Técnico</h1>
        </div>
        
        <ul class="nav flex-column">

            <li class="nav-item d-flex">

                <a href="{{ route('home') }}" class="nav-link d-flex align-items-center p-2 rounded {{ request()->routeIs('home') ? 'bg-white text-info' : 'hover-bg-white' }}">
                    <span class="ml-3"><i class=" mx-3"
                        data-lucide="house"></i>Início</span>
                </a>
            </li>
            <li class="nav-item">

                <a href="{{ route('medicos.home') }}" class="nav-link d-flex align-items-center p-2 rounded {{ request()->routeIs('medicos.*') ? 'bg-white text-info' : 'hover-bg-white' }}">
                    <span class="ml-3">
                        <i class=" mx-3"
                        data-lucide="users"></i>
                        Médicos</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pacientes.home') }}" class="nav-link d-flex align-items-center p-2 rounded {{ request()->routeIs('pacientes.*') ? 'bg-white text-info' : 'hover-bg-white' }}">
                    <span class="ml-3">
                        <i class=" mx-3"
                        data-lucide="users"></i>Pacientes</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('atendimentos.home') }}" class="nav-link d-flex align-items-center p-2 rounded {{ request()->routeIs('atendimentos.*') ? 'bg-white text-info' : 'hover-bg-white' }}">
                    <span class="d-flex">
                        <i class=" mx-3"
                        data-lucide="stretch-horizontal"></i>Atendimentos</span>
                </a>
            </li>
            

            <!-- Adicione mais itens de menu conforme necessário -->
        </ul>
    </nav>
{{-- </aside> --}}
