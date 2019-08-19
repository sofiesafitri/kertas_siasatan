
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Kertas Siasatan
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ Request::is('home') ? 'active' : '' }}">
            <a href="{{url('home')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Homepage</p>
            </a>
          </li>
          <!--<li class="{{ Request::is('data') ? 'active' : '' }}">
            <a href="{{url('data')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Data Kertas Siasatan</p>
            </a>
          </li>-->
          <li class="{{ Request::is('data/create') ? 'active' : '' }}">
            <a href="{{url('data/create')}}">
              <i class="nc-icon nc-simple-add"></i>
              <p>Cipta Kertas Siasatan</p>
            </a>
          </li>
          <li class="{{ Request::is('pegawai') ? 'active' : '' }}">
            <a href="{{url('pegawai')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Pegawai Penyiasat</p>
            </a>
          </li>
          <li class="{{ Request::is('users') ? 'active' : '' }}">
            <a href="{{url('users')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Users</p>
            </a>
          </li>
        </ul>
      </div>
    </div>