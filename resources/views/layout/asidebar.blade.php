<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo py-0">
        <a href="{{route('admin.dashboard')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ $company['logo'] === 'logo.png' ? asset('assets/img/logo.png') : asset('assets/img/' . $company['logo'])}}" width="80" alt="Logo"><br>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2 text-capitalize">{{ $company['name'] }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('admin.mycompany.edit') ? 'active' : '' }}">
            <a href="{{ route('admin.mycompany.edit') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-globe-alt"></i>
                <div data-i18n="Company" class="text-capitalize">Company settings</div>
            </a>
        </li>
    </ul>
</aside>