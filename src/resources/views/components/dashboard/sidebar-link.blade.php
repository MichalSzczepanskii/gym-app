@props(['text', 'icon', 'route' => ''])
<li class="rounded transition-colors {{Route::is($route) ? 'bg-purple-800' : 'hover:bg-purple-600'}}">
    <a href="{{$route == '' ? '#' : route($route)}}" class="py-3 mt-1.5 block flex items-center"><i class="{{$icon}} px-4 py-1 text-lg"></i><span class="hideText">{{__($text)}}</span></a>
</li>