<div class="side-menu" id="admin-side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      Quản lý Telesale
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.reportsale')}}" class="{{Nav::isRoute('manage.reportsale')}}">Danh sách khách hàng</a></li>

      <li><a href="{{route('manage.reportIT')}}" class="{{Nav::isRoute('manage.reportIT')}}">Khách hàng tiềm năng</a></li>

      <li><a href="{{route('manage.reportnx')}}" class="{{Nav::isRoute('manage.reportnx')}}">Lịch sử cuộc gọi</a></li>
    </ul>

    <p class="menu-label">
      Quản lý lead
    </p>
    <ul class="menu-list">
      <li><a href="{{route('posts.index')}}" class="{{Nav::isResource('posts', 2)}}">Lead nóng</a></li>

      <li><a href="{{route('posts.index')}}" class="{{Nav::isResource('posts', 2)}}">Lead lạnh</a></li>
      

       <!-- <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li>  -->

    </ul>

    <p class="menu-label">
      Báo cáo thống kê
    </p>
    <ul class="menu-list">
      <li><a href="{{route('post2.index')}}" class="{{Nav::isResource('post2',2)}}">Tạo báo cáo mới</a></li>
      <li><a href="{{route('post3.index')}}" class="{{Nav::isResource('post3',2)}}">Báo cáo đối soát</a></li>
      <li><a href="{{route('post2.index')}}" class="{{Nav::isResource('post2',2)}}">Báo cáo cuộc gọi</a></li>
    </ul>

    <p class="menu-label">
      Tài nguyên
    </p>
    <ul class="menu-list">
      <li><a href="{{route('post3.index')}}" class="{{Nav::isResource('post3',2)}}">Quản lý tài nguyên</a></li>
      <li><a href="{{route('post2.index')}}" class="{{Nav::isResource('post2',2)}}">Chuyển tài nguyên</a></li><li><a href="{{route('post2.index')}}" class="{{Nav::isResource('post2',2)}}">Tạo báo cáo mới</a></li>
    </ul>

    <p class="menu-label">
      Quản lý hệ thống
    </p>
    <ul class="menu-list">
      <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Quản lý tài khoản</a></li>
      <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
