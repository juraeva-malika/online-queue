<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <link rel="stylesheet" href="/css/OverlayScrollbars.min.css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="/admin" class="brand-link">
        <span class="brand-text font-weight-light">New Smile Clinic</span>
      </a>
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="/admin/doctors" class="nav-link">Doctors</a>
            </li>
            <li class="nav-item">
              <a href="/admin/services" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="/admin/orders" class="nav-link"> Orders</a>
            </li>
            <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-dropdown-link>
              </form>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> {{ucwords(str_replace("-", " ", last(Request::segments())))}}</h1>
            </div>
            
          </div>
        </div>
      </section>
      
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              @yield("content")
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.js"></script>
  <script src="/js/jquery.overlayScrollbars.min.js"></script>
  <script src="/js/adminlte.min.js"></script>
  <script src="/js/demo.js"></script>
</body>
</html>
