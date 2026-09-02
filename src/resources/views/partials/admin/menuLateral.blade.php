      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="{{ route('admin') }}" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{ asset('atlas/upload/' . $LogoAtiva->link_logo) }}"
              alt="{{$LogoAtiva->nome_logo}}"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Search-->
        <div class="sidebar-search" role="search">
          <label for="sidebar-search-input" class="visually-hidden">Filtrar menu</label>
          <input
            type="search"
            id="sidebar-search-input"
            class="form-control form-control-sm"
            placeholder="Filtrar menu…"
            autocomplete="off"
            data-lte-toggle="sidebar-search"
            data-lte-target="#navigation"
          />
          <p class="fs-7 text-secondary mt-2 mb-0" data-lte-search-empty role="status" hidden>
            Nenhuma página encontrada.
          </p>
        </div>
        <!--end::Sidebar Search-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item">
                <a href="{{ route('admin') }}" class="nav-link {{ request()->routeIs('admin') ? 'active' : ''}}">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              <li class="nav-header">GESTÃO ESCOLAR</li>
              <li class="nav-item">
                <a href="{{ route('admin.usuario.index') }}" class="nav-link {{ request()->routeIs('admin.usuario.index') ? 'active' : ''}}">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Usuários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>
                    Alunos
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Professores</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Turmas</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Matrículas</p>
                </a>
              </li>

              <li class="nav-header">PARTIDAS</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Partidas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Times</p>
                </a>
              </li>

              <li class="nav-header">SITE</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Logos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Banners</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Sobre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Avaliações</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Galeria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Parceiros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Redes Sociais</p>
                </a>
              </li>

              <li class="nav-header">NOTÍCIAS</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Notícias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Newsletter</p>
                </a>
              </li>
            <!--end::Sidebar Menu-->
            </ul>

            <!-- Docs CTA (bottom of sidebar) -->
            <div class="p-3 mt-3 border-top border-secondary border-opacity-25">
              <a
                href="./docs/introduction.html"
                class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2"
              >
                <i class="bi bi-book" aria-hidden="true"></i>
                View documentation
              </a>
            </div>
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->