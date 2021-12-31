<div class="flex gap-x-2">
    <x-table-action-button color="green" icon="cil-clipboard"/>
    <x-table-action-button color="yellow" icon="cil-pencil" route="{{isset($name) && isset($data) ? route($name.'.edit', $data) : ''}}"/>
    <x-table-action-button color="red" icon="cil-trash"/>
</div>
