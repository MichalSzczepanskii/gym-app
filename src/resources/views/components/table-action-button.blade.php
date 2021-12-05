@props(['color', 'icon', 'route' => ''])
<a href="{{$route == '' ? '#' : route($route)}}"
   class="flex justify-center items-center w-8 h-8 bg-{{$color}}-500 hover:bg-{{$color}}-400 rounded text-gray-900 cursor-pointer">
    <i class="{{$icon}}"></i>
</a>