@extends('layouts.app')
@section('content')
    <x-dashboard.title>{{__('dashboard.contracts.add')}}</x-dashboard.title>
    <x-form.card id="contractForm"
                 action="contracts.store"
                 method="POST"
                 cancel="contracts.index">
        <div class="pt-8"><h3 class="text-2xl font-medium leading-6 text-gray-900 pb-5 border-0 border-b">{{__('dashboard.contracts.form.title')}}</h3></div>
        <x-form.input type="text" id="firstName" name="first_name"
                      label="{{__('dashboard.contracts.attribute.client')}}"
                      placeholder="{{__('dashboard.contracts.attribute.client')}}"
                      value="{{old('firstName')}}"/>
        <x-form.input type="text" id="lastName" name="last_name" label="{{__('dashboard.contracts.attribute.carnet')}}"
                      placeholder="{{__('dashboard.contracts.attribute.carnet')}}"
                      value="{{old('lastName')}}"/>
    </x-form.card>
@endsection