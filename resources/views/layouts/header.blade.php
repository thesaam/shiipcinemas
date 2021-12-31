

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
              <li class="nav-item px-3">
              <a class="nav-link {{ request()->is('/') ? 'active' : ''}}" aria-current="page" href="/">Ikeja</a>
              </li>
              <li class="nav-item px-3">
              <a class="nav-link {{ request()->is('maryland') ? 'active' : ''}}" href="maryland">Maryland</a>
              </li>
              <li class="nav-item px-3">
              <a class="nav-link {{ request()->is('ajah') ? 'active' : ''}}" href="ajah">Ajah</a>
              </li>
          </ul>
        </div>
    </div>
  </nav>