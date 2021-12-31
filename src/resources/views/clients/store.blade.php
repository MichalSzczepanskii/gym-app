@extends('layouts.app')
@section('content')
    <x-dashboard.title>{{(isset($edit) && $edit) ? __('dashboard.clients.edit') : __('dashboard.clients.add')}}</x-dashboard.title>
    <x-form.card id="clientForm"
                 action="{{isset($edit) && $edit ? route('clients.update', $client) : route('clients.store') }}"
                 method="POST"
                 cancel="clients.index"
                 edit="{{isset($edit) ?? $edit}}">
        <div class="pt-8"><h3 class="text-2xl font-medium leading-6 text-gray-900 pb-5 border-0 border-b">{{__('dashboard.clients.form.title')}}</h3></div>
        <x-form.input type="text" id="firstName" name="first_name"
                      label="{{__('dashboard.clients.attribute.first_name')}}"
                      placeholder="{{__('dashboard.clients.attribute.first_name')}}"
                      value="{{old('firstName', isset($client) ? $client->first_name : null)}}"/>
        <x-form.input type="text" id="lastName" name="last_name" label="{{__('dashboard.clients.attribute.last_name')}}"
                      placeholder="{{__('dashboard.clients.attribute.last_name')}}"
                      value="{{old('lastName', isset($client) ? $client->last_name : null)}}"/>
        <x-form.input type="text" id="pesel" name="pesel"
                      label="{{__('dashboard.clients.attribute.pesel')}}"
                      placeholder="{{__('dashboard.clients.attribute.pesel')}}"
                      value="{{old('pesel', isset($client) ? $client->pesel : null)}}"/>
        <x-form.input type="email" id="email" name="email"
                      label="{{__('dashboard.clients.attribute.email')}}"
                      placeholder="{{__('dashboard.clients.attribute.email')}}"
                      value="{{old('email', isset($client) ? $client->email : null)}}"/>
{{--        @if(isset($edit) && $edit)--}}
{{--            <x-form.input type="password" id="password" name="password"--}}
{{--                          label="{{__('dashboard.clients.attribute.password')}}"--}}
{{--                          placeholder="{{__('dashboard.clients.attribute.password')}}"/>--}}
{{--        @endif--}}
    </x-form.card>
@endsection
@section('scripts')
    <script src="{{asset('/js/clients.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Clients\ClientsRequest') !!}
@endsection