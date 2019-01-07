<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              @if(Auth::check())
              <img src="{{asset('img/avatars/' . Auth::user()->avatar)}}" class="img-circle" alt="User Image">
              
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()->firstName , Auth::user()->lastName}}</p>
              @endif
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>


            <li>
            <a href="{{route('admin.home')}}">
                <i class="fa fa-th"></i> <span>Home</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-green">new</small>
                </span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i>
                <span>Modifier</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Catégorie</a></li>
                <li><a href="{{route('school')}}"><i class="fa fa-graduation-cap"></i> École</a></li>
                <li><a href="{{route('skill')}}"><i class="fa fa-cogs"></i> Compétences</a></li>
                <li><a href="{{route('users.display')}}"><i class="fa fa-user"></i>Usagers</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="fa fa-edit"></i>
                <span>Modifier</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Catégorie</a></li>
              <li><a href=""><i class="fa fa-circle-o"></i> École</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Compétence</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-users"></i> Usager</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="fa fa-times"></i> <span>Supprimer</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Catégorie</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> École</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Compétence</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Section</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Usager</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Portfolio</a></li>
              </ul>
            </li>

            <li>
              <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-yellow">12</small>
                  <small class="label pull-right bg-green">16</small>
                  <small class="label pull-right bg-red">5</small>
                </span>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level One
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li class="treeview">
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>