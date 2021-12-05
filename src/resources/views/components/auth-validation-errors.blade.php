@props(['errors'])

@if ($errors->any())
    <div class="bg-red-500 px-6 py-4 rounded-md absolute top-16 right-1.5 lg:top-24 lg:right-4  w-96" id="errorAlert">
        <div class="font-medium text-white text-left flex justify-between items-center">
            <div>
                <i class="cil-warning leading-relaxed"></i>
                {{ __('Whoops! Something went wrong.') }}
            </div>
            <i class="cil-x cursor-pointer" id="closeErrorAlert"></i>
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-white text-left">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
