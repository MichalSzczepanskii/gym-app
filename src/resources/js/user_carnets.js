require('datatables.net-bs5');

$(() => {
    $('table').DataTable({
        ajax: {
            url: 'contracts/datatable',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        },
        columns: [
            { data: 'id', name: 'id'},
            { data: 'name', name: 'name'},
            { data: 'price', name: 'price'},
            { data: 'user.name', name: 'user.name'},
            { data: 'start_date', name: 'start_date'},
            { data: 'end_date', name: 'end_date'},
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