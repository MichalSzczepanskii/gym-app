@props(['errors'])

@if ($errors->any())
    <div class="bg-red-200 px-6 py-4 rounded-md absolute top-16 right-1.5 lg:top-24 lg:right-4  w-96" id="errorAlert">
        <div class="font-medium text-red-800 text-left flex justify-between items-center">
            {{ __('Whoops! Something went wrong.') }}
            <i class="cil-x cursor-pointer" id="closeErrorAlert"></i>
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-700 text-left">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
