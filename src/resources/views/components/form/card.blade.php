@props(['action', 'cancel', 'method', 'id', 'edit' => false])
<div class="flex justify-center">
    <div class="shadow bg-white rounded w-full lg:w-2/4">
        <form id="{{$id}}" action="{{$action}}" method="{{$method}}">
            @csrf
            @if(isset($edit) && $edit)
                @method('PATCH')
            @endif
            <div class="px-4 md:px-6">
                    {{$slot}}
            </div>
            <div class="px-4 py-3 text-right sm:px-6 rounded-none rounded-b-md">
                <button type="submit"
                        class="
                            inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm
                            font-medium rounded-md text-white bg-purple-700 hover:bg-purple-600 focus:outline-none
                            focus:ring-1 focus:ring-offset focus:ring-purple-400">
                    {{__('dashboard.buttons.save')}}
                </button>
                <a href="{{route($cancel)}}"
                   class="
                            inline-flex justify-center py-2 px-4 border border-purple-700 shadow-sm text-sm
                            font-medium rounded-md text-purple-700 hover:bg-purple-50 focus:outline-none
                            focus:ring-1 focus:ring-offset focus:ring-purple-500">
                    {{__('dashboard.buttons.cancel')}}
                </a>
            </div>
        </form>
    </div>
</div>