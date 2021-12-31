@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center">
        <x-dashboard.title>{{__('dashboard.contracts.title')}}</x-dashboard.title>
        @can('contracts.store')
            <x-table-add text="{{__('dashboard.contracts.add')}}" route="contracts.add"/>
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
                                <x-table-head>{{__('dashboard.carnets.attribute.price')}}</x-table-head>
                                <x-table-head>{{__('dashboard.contracts.attribute.user_name')}}</x-table-head>
                                <x-table-head>{{__('dashboard.contracts.attribute.start_date')}}</x-table-head>
                                <x-table-head>{{__('dashboard.contracts.attribute.end_date')}}</x-table-head>
                                <x-table-head>{{__('dashboard.attribute.created_at')}}</x-table-head>
                                <x-table-head>{{__('dashboard.attribute.updated_at')}}</x-table-head>
                                <x-table-head>&nbsp;</x-table-head>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-dashboard.background>
@endsection
@section('scripts')
    <script src="{{asset('/js/user_carnets.js')}}"></script>
@endsection