<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ AdminAuth::user()->photoUrl }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>Alexander Pierce</p>
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
<ul class="sidebar-menu">
    @foreach (Admin::instance()->getMenu() as $item)
        {!! $item !!}
    @endforeach
</ul>