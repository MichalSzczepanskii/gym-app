<div class="bg-purple-700 w-full md:w-72 h-full text-white hideMenu flex flex-col justify-between shorten" id="menu">
    <div class="w-full">
        <div class="flex items-center justify-center h-16 border-b-2 border-purple-900 bg-purple-800">
            <a href="{{route('welcome')}}">
                <h2 class="text-white text-4xl font-bold">G<span class="hideText">ood<span class="text-purple-300">lyfe</span></span></h2>
            </a>
        </div>
        <ul class="mt-1.5 py-4 p-4 text-base font-light text-gray-200">
            <x-dashboard.sidebar-link text="dashboard.home" icon="cil-home" route="dashboard"/>
            <x-dashboard.sidebar-link text="dashboard.carnets" icon="cil-weightlifitng"/>
            <x-dashboard.sidebar-link text="dashboard.contracts" icon="cil-briefcase"/>
            <x-dashboard.sidebar-link text="dashboard.clients" icon="cil-people"/>
            @can('logs')
                <x-dashboard.sidebar-link text="dashboard.logs" icon="cil-monitor" route="log-viewer::dashboard"/>
            @endcan
        </ul>
    </div>
    <div class="flex justify-end px-5 pb-3 pt-4 border-t-2 border-purple-900 bg-purple-800" id="hideContainer">
        <i class="icon-right-open text-3xl cursor-pointer hide hidden lg:inline" onclick="toggleMenuDekstop()"></i>
        <i class="icon-right-open text-3xl cursor-pointer hide lg:hidden" onclick="toggleMenu()"></i>
    </div>

</div>