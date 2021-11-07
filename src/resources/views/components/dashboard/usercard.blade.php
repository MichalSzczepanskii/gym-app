<div class="absolute right-4 lg:right-10 bg-white shadow-xl border rounded profileMenu py-2 text-sm w-36 text-gray-700 hidden" id="ddUserMenu">
    <x-dashboard.usercard-link name="user.shortmenu.profile" icon="cil-user"/>
    <x-dashboard.usercard-link name="user.shortmenu.settings" icon="cil-settings"/>
    <hr/>
    <div class="px-2">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{route('logout')}}"
               class="block py-2 px-2.5 hover:bg-purple-100 mt-2 rounded transition-colors flex items-center"
               onclick="event.preventDefault(); this.closest('form').submit()">
                <i class="cil-account-logout mr-2"></i>{{__('auth.logout')}}
            </a>
        </form>
    </div>
</div>