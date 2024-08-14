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
              <a class="nav-link collapsed {{ Request::is('admin/theloai*') ? 'active' : '' }}"
                  data-bs-target="#loai-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-menu-button-wide"></i><span>Quản lý Thể Loại</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="loai-nav" class="nav-content collapse {{ Request::is('admin/theloai*') ? 'show' : '' }}"
                  data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('admin.theloai') }}" class="{{ Request::is('admin/theloai') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Danh sách loại tin</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('admin.theloai.create') }}"
                          class="{{ Request::is('admin/theloai/create') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Thêm loại mới</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Loại -->



          <li class="nav-item">
              <a class="nav-link collapsed {{ Request::is('admin/baiviet*') ? 'active' : '' }}"
                  data-bs-target="#posts-nav" data-bs-toggle="collapse" href="#">
                  <i class="bx bxs-book"></i><span>Quản lý bài viết</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="posts-nav" class="nav-content collapse {{ Request::is('admin/baiviet*') ? 'show' : '' }}"
                  data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('admin.baiviet') }}" class="{{ Request::is('admin/baiviet') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Danh sách bài viết</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('admin.baiviet.create') }}"
                          class="{{ Request::is('admin/baiviet/create') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Thêm bài viết</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End bài viết -->

          <li class="nav-item">
              <a class="nav-link collapsed {{ Request::is('admin/taikhoan*') ? 'active' : '' }}"
                  data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-person"></i><span>Quản lý tài khoản</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="users-nav" class="nav-content collapse {{ Request::is('admin/taikhoan*') ? 'show' : '' }}"
                  data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('admin.taikhoan') }}"
                          class="{{ Request::is('admin/taikhoan*') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Tất cả tài khoản</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End users -->


          <li class="nav-item">
              <a class="nav-link collapsed {{ Request::is('admin/binhluan*') ? 'active' : '' }}"
                  data-bs-target="#comment-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-chat-dots"></i><span>Quản lý bình luận</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="comment-nav" class="nav-content collapse {{ Request::is('admin/binhluan*') ? 'show' : '' }}"
                  data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('admin.binhluan') }}"
                          class="{{ Request::is('admin/binhluan*') ? 'active' : '' }}">
                          <i class="bi bi-circle"></i><span>Danh sách bình luận</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End bình luận -->




      </ul>

  </aside><!-- End Sidebar-->
