@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center">
        <x-dashboard.title>{{__('dashboard.carnets.title')}}</x-dashboard.title>
        @can('carnets.store')
            <x-table-add text="{{__('dashboard.carnets.add')}}" route="carnets.add"/>
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
                                    <x-table-head>{{__('dashboard.carnets.attribute.name')}}</x-table-head>
                                    <x-table-head>{{__('dashboard.carnets.attribute.description')}}</x-table-head>
                                    <x-table-head>{{__('dashboard.carnets.attribute.price')}}</x-table-head>
                                    <x-table-head>{{__('dashboard.attribute.created_at')}}</x-table-head>
                                    <x-table-head>{{__('dashboard.attribute.updated_at')}}</x-table-head>
                                    <x-table-head>&nbsp;</x-table-head>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($carnets as $carnet)
                                <tr>
                                    <x-table-cell>{{ $carnet->id }}</x-table-cell>
                                    <x-table-cell>{{ $carnet->name }}</x-table-cell>
                                    <x-table-cell>{{ \Illuminate\Support\Str::limit($carnet->description, 50, $end='...') }}</x-table-cell>
                                    <x-table-cell>{{ $carnet->price }}</x-table-cell>
                                    <x-table-cell>{{ $carnet->created_at }}</x-table-cell>
                                    <x-table-cell>{{ $carnet->updated_at }}</x-table-cell>
                                    <x-table-cell>
                                        <div class="flex gap-x-2">
                                            <x-table-action-button color="green" icon="cil-clipboard"/>
                                            @can('carnets.store')
                                                <x-table-action-button color="yellow"
                                                                       icon="cil-pencil"
                                                                       route="{{route('carnets.edit', $carnet)}}"/>
                                            @endcan
                                            <x-table-action-button color="red" icon="cil-trash"/>
                                        </div>
                                    </x-table-cell>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-dashboard.background>
@endsection
@section('scripts')
    <script src="{{asset('/js/carnets.js')}}"></script>
@endsection