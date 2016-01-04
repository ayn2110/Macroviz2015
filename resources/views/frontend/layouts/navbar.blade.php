<div class="navbar navbar-inverse">

  <div class="row">
    <div class="col-md-offset-3 col-md-9">

      <div class="collapse navbar-collapse" id="navbar-ex-collapse">

        <ul id="PrimaryNavigation" class="nav navbar-nav ">
          <li>
            <a href="#">Members</a>
          </li>
          <li>
            <a href="#">Work</a>
          </li>
          <li>
            <a href="#">Courses</a>
          </li>
          <li>
            <a href="#">R&amp;D</a>
          </li>
          <li>
            <a href="{{ route('article_list') }}">Blog</a>
          </li>
          <li>
            <a href="#">Photos</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Languages<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="javascript:;">English</a>
              </li>
              <li>
                <a href="javascript:;">日本語</a>
              </li>
              <li>
                <a href="javascript:;">中文</a>
              </li>

            </ul>
          </li>
        </ul>

        <a class="navbar-brand navbar-right" href="{{ route('home') }}">
          <img src="{{ asset('images/frontend/index_brand.gif') }}" height="50" />
        </a>


      </div>


      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- <a class="navbar-brand" href="#"><span>Brand</span></a> -->

      </div>

    </div>
  </div>






</div>
<!-- /navbar -->
