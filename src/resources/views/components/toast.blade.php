@props(['color' => 'red'])
<div class="toast bg-{{$color}}-100 rounded-lg py-5 px-6 mb-4 text-base text-{{$color}}-700 mb-3 flex justify-between"
     role="alert"
     aria-live="assertive"
     aria-atomic="true">
    {{ $slot }}
    <button type="button" class="ml-5 text-{{$color}}-700 hover:text-{{$color}}-500"><i class="cil cil-x"></i></button>
</div>