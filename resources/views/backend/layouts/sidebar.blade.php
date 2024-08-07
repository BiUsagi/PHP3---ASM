  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="index.html">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->



          <li class="nav-item">
              <a class="nav-link collapsed {{ Request::is('admin/posts*') ? 'active' : '' }}" data-bs-target="#posts-nav"
                  data-bs-toggle="collapse" href="#">
                  <i class="bi bi-pencil-square"></i><span>Quản lý bài viết</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="posts-nav" class="nav-content collapse {{ Request::is('admin/posts*') ? 'show' : '' }}"
                  data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('admin.posts') }}" class="{{ Request::is('admin/posts') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Danh sách bài viết</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('admin.create') }}"
                          class="{{ Request::is('admin/posts/create') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Thêm bài viết</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Loại -->



          <li class="nav-item">
              <a class="nav-link collapsed {{ Request::is('admin/posts*') ? 'active' : '' }}"
                  data-bs-target="#posts-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-pencil-square"></i><span>Quản lý bài viết</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="posts-nav" class="nav-content collapse {{ Request::is('admin/posts*') ? 'show' : '' }}"
                  data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('admin.posts') }}" class="{{ Request::is('admin/posts') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Danh sách bài viết</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('admin.create') }}"
                          class="{{ Request::is('admin/posts/create') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Thêm bài viết</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End bài viết -->



          <li class="nav-item">
              <a class="nav-link collapsed {{ Request::is('admin/comments*') ? 'active' : '' }}"
                  data-bs-target="#comment-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-chat-dots"></i><span>Quản lý bình luận</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="comment-nav" class="nav-content collapse {{ Request::is('admin/comments*') ? 'show' : '' }}"
                  data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('admin.comments') }}"
                          class="{{ Request::is('admin/comments*') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Danh sách bình luận</span>
                      </a>
                  </li>
                  <li>
                      <a href="components-accordion.html">
                          <i class="bi bi-circle"></i><span>Danh sách đen</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End bình luận -->


          <li class="nav-item">
              <a class="nav-link collapsed {{ Request::is('admin/staff*') || Request::is('admin/customer*') ? 'active' : '' }}"
                  data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-person"></i><span>Quản lý tài khoản</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="users-nav"
                  class="nav-content collapse {{ Request::is('admin/staff*') || Request::is('admin/customer*') ? 'show' : '' }}"
                  data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('admin.staff') }}" class="{{ Request::is('admin/staff*') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Quản lý nhân viên</span>
                      </a>
                      <a href="{{ route('admin.customer') }}"
                          class="{{ Request::is('admin/customer*') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Quản lý khách hàng</span>
                      </a>
                      <a href="components-alerts.html">
                          <i class="bi bi-circle"></i><span>Kiểm duyệt hồ sơ</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End users -->

      </ul>

  </aside><!-- End Sidebar-->
