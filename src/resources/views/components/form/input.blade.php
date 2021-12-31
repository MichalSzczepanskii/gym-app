@props(['id', 'name', 'placeholder' => '', 'type' => 'text', 'label', 'value'=>''])
<div class="py-4 border-0 border-b md:flex md:items-center">
    <label for="{{$id}}" class="block text-sm font-medium text-gray-700 md:w-1/3 lg:w-3/4">
        {{$label}}
    </label>
    <div class="lg:w-full">
        <div class="mt-1 flexounded-md lg:w-full">
            <input type="{{$type}}"
                   name="{{$name}}"
                   id="{{$id}}"
                   class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                   placeholder="{{$placeholder}}"
                   value="{{$value}}">
        </div>
        @error($name)
        <div class="text-red-700 text-sm mt-3">
            {{$message}}
        </div>
        @enderror
    </div>
</div>
