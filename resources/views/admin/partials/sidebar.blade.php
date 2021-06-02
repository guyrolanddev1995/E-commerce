<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">  <span class="logo-name">ETLP</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown">
          <a href="{{ route('admin.dashbord') }}" class="nav-link"><i data-feather="monitor"></i><span>Tableau de bord</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.orders.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Commandes</span></a>
        </li>
        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Catégories</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('admin.categories.create') }}">Nouvelle catégorie</a></li>
              <li><a class="nav-link" href="{{ route('admin.categories.index') }}">Les catégories</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Marques</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('admin.brands.create') }}">Nouvelle Marque</a></li>
              <li><a class="nav-link" href="{{ route('admin.brands.index') }}">Les Marques</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Produits</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('admin.products.create') }}">Nouveau produit</a></li>
              <li><a class="nav-link" href="{{ route('admin.products.index') }}">Les produits</a></li>
            </ul>
        </li>
      </ul>
    </aside>
  </div>