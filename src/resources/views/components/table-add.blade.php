@props(['text', 'route' => ''])
<a href="{{$route == '' ? '#' : route($route)}}"
   class="py-2 px-4 bg-purple-700 hover:bg-purple-600 text-white rounded flex items-center
          focus:outline-none focus:ring-1 focus:ring-offset focus:ring-purple-400">
    <i class="cil cil-plus mr-0.5"></i>{{$text}}
</a>
