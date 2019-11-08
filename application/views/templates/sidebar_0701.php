<div class="app-sidebar sidebar-shadow">
  <div class="app-header__logo">
    <div class="logo-src"></div>
    <div class="header__pane ml-auto">
      <div>
        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>
  <div class="app-header__mobile-menu">
    <div>
      <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
  </div>
  <div class="app-header__menu">
    <span>
      <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
        <span class="btn-icon-wrapper">
          <i class="fa fa-ellipsis-v fa-w-6"></i>
        </span>
      </button>
    </span>
  </div>
  <div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
      <ul class="vertical-nav-menu">
        <li class="app-sidebar__heading">Dashboards</li>
        <li>
          <a href="#" class="<?= ($ActiveSidebar == "Dashboard" ? "mm-active" : "") ?>">
            <i class="metismenu-icon pe-7s-rocket"></i> Dashboard
          </a>
        </li>

        <li class="app-sidebar__heading">Main Navigation</li>
        <li>
          <a href="#" class="<?= ($ActiveSidebar == "Employee" ? "mm-active" : "") ?>">
            <i class="metismenu-icon fa fa-folder"></i> Maintenance
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
          </a>
          <ul class="mm-collapse mm-show">
            <li>
              <a href="#" class="<?= ($ActiveSidebar == "Employee" ? "mm-active" : "") ?>">
                <i class="metismenu-icon"></i>
                Employee
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#" class="<?= ($ActiveSidebar == "Attendance" || $ActiveSidebar == "Leave Application" ? "mm-active" : "") ?>">
            <i class="metismenu-icon fa fa-file-alt"></i> Payroll
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
          </a>
          <ul>
            <li>
              <a href="#" class="<?= ($ActiveSidebar == "Attendance" ? "mm-active" : "") ?>">
                <i class="metismenu-icon">
                </i>Attendance
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>Leave Application
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>Leave Application Approval
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>Claim
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>Claim Approval
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>Payroll Slip
              </a>
            </li>
            <li>
              <a href="#">
                <i class="metismenu-icon">
                </i>Allowance
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>