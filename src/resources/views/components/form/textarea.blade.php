@props(['id', 'name', 'placeholder' => '', 'label', 'value' => ''])
<div class="py-4 border-0 border-b md:flex">
    <label for="{{$id}}" class="block text-sm font-medium text-gray-700 mt-3 md:w-1/3 lg:w-3/4">
        {{$label}}
    </label>
    <div class="lg:w-full">
        <div class="mt-1 lg:w-full">
                            <textarea id="{{$id}}"
                                      name="{{$name}}"
                                      rows="3"
                                      class="focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                      placeholder="{{$placeholder}}">{{$value}}</textarea>
        </div>
        @error($name)
        <div class="text-red-700 text-sm mt-3">
            {{$message}}
        </div>
        @enderror
    </div>
</div>