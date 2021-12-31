@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center">
        <x-dashboard.title>{{__('dashboard.clients.title')}}</x-dashboard.title>
        @can('clients.store')
            <x-table-add text="{{__('dashboard.clients.add')}}" route="clients.add"/>
        @endcan
    </div>
    <x-dashboard.background>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 overflow-x-visible my-4">
                            <thead class="bg-gray-50">
                            <tr>
                                <x-table-head>#</x-table-head>
                                <x-table-head>{{__('dashboard.clients.attribute.first_name')}}</x-table-head>
                                <x-table-head>{{__('dashboard.clients.attribute.last_name')}}</x-table-head>
                                <x-table-head>{{__('dashboard.clients.attribute.email')}}</x-table-head>
                                <x-table-head>{{__('dashboard.clients.attribute.pesel')}}</x-table-head>
                                <x-table-head>{{__('dashboard.attribute.created_at')}}</x-table-head>
                                <x-table-head>{{__('dashboard.attribute.updated_at')}}</x-table-head>
                                <x-table-head>&nbsp;</x-table-head>
                            </tr>
                            </thead>
    {{--                        <tbody class="bg-white divide-y divide-gray-200">--}}
    {{--                        @foreach($clients as $client)--}}
    {{--                            <tr>--}}
    {{--                                <x-table-cell>{{ $client->id }}</x-table-cell>--}}
    {{--                                <x-table-cell>{{ $client->name }}</x-table-cell>--}}
    {{--                                <x-table-cell>{{ \Illuminate\Support\Str::limit($client->description, 50, $end='...') }}</x-table-cell>--}}
    {{--                                <x-table-cell>{{ $client->price }}</x-table-cell>--}}
    {{--                                <x-table-cell>{{ $client->created_at }}</x-table-cell>--}}
    {{--                                <x-table-cell>{{ $client->updated_at }}</x-table-cell>--}}
    {{--                                <x-table-cell>--}}
    {{--                                    <div class="flex gap-x-2">--}}
    {{--                                        <a class="flex justify-center items-center w-8 h-8 bg-green-500 hover:bg-green-400 rounded text-gray-900 cursor-pointer"><i--}}
    {{--                                                    class="cil-clipboard"></i></a>--}}
    {{--                                        <a class="flex justify-center items-center w-8 h-8 bg-yellow-500 hover:bg-yellow-400  rounded text-gray-900 cursor-pointer"><i--}}
    {{--                                                    class="cil-pencil"></i></a>--}}
    {{--                                        <a class="flex justify-center items-center w-8 h-8 bg-red-500 hover:bg-red-400  rounded text-gray-900 cursor-pointer"><i--}}
    {{--                                                    class="cil-trash"></i></a>--}}
    {{--                                    </div>--}}
    {{--                                </x-table-cell>--}}
    {{--                            </tr>--}}
    {{--                        @endforeach--}}
    {{--                        </tbody>--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-dashboard.background>
@endsection
@section('scripts')
    <script src="{{asset('/js/clients.js')}}"></script>
@endsection