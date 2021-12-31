@extends('layouts.app')
@section('content')
    <x-dashboard.title>{{(isset($edit) && $edit) ? __('dashboard.carnets.edit') : __('dashboard.carnets.add')}}</x-dashboard.title>
    <x-form.card id="carnetForm"
                 action="{{isset($edit) && $edit ? route('carnets.update', $carnet) : route('carnets.store') }}"
                 method="POST"
                 cancel="carnets.index"
                 edit="{{isset($edit) ?? $edit}}">
        <div class="pt-8"><h3 class="text-2xl font-medium leading-6 text-gray-900 pb-5 border-0 border-b">{{__('dashboard.carnets.form.title')}}</h3></div>
        <x-form.input type="text" id="name" name="name"
                      label="{{__('dashboard.carnets.attribute.name')}}"
                      placeholder="{{__('dashboard.carnets.attribute.name')}}"
                      value="{{old('name', isset($carnet) ? $carnet->name : null)}}"/>
        <x-form.input type="number" id="price" name="price"
                      label="{{__('dashboard.carnets.attribute.price')}}"
                      placeholder="{{__('dashboard.carnets.attribute.price')}}"
                      value="{{old('price', isset($carnet) ? $carnet->price : null)}}"/>
        <x-form.textarea id="description" name="description"
                         label="{{__('dashboard.carnets.attribute.description')}}"
                         placeholder="{{__('dashboard.carnets.attribute.description')}}"
                         value="{{old('description', isset($carnet) ? $carnet->description : null)}}"/>

    </x-form.card>
@endsection
@section('scripts')
    <script src="{{asset('/js/carnets.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Carnets\CarnetsRequest') !!}
@endsection