<div class="fixed bottom-4 right-10 z-10">
    <div>
        @if(session('success'))
            @if (is_array(session('success')))
                @foreach(session('success') as $msg)
                    <x-toast color="green">
                        {{$msg}}
                    </x-toast>
                @endforeach
            @else
                <x-toast color="green">
                    {{ session('success') }}
                </x-toast>
            @endif
        @endif

        @if (session('warning'))
        @if (is_array(session('warning')))
            @foreach(session('warning') as $msg)
                <x-toast color="yellow">
                    {{$msg}}
                </x-toast>
            @endforeach
        @else
            <x-toast color="yellow">
                {{ session('warning') }}
            </x-toast>
        @endif
        @endif


        @if (session('danger'))
        @if (is_array(session('danger')))
            @foreach(session('danger') as $msg)
                <x-toast color="red">
                    {{$msg}}
                </x-toast>
            @endforeach
        @else
            <x-toast color="red">
                {{ session('danger') }}
            </x-toast>
        @endif
        @endif

    </div>
</div>