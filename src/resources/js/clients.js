require('datatables.net-bs5');

$(() => {
    $('table').DataTable({
        ajax: {
            url: 'clients/datatable',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        },
        columns: [
            { data: 'id', name: 'id'},
            { data: 'first_name', name: 'first_name'},
            { data: 'last_name', name: 'last_name'},
            { data: 'email', name: 'email'},
            { data: 'pesel', name: 'pesel'},
            { data: 'created_at', name: 'created_at'},
            { data: 'updated_at', name: 'updated_at'},
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        "language": {
            "url": `vendor/datatables/i18n/${config.locale}.json`
        },
        processing: true,
        serverSide: true,
        pageLength: 10,
        stateSave: true,
        stateDuration: 604800,
    })
})