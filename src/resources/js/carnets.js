require('datatables.net-bs5');

$(() => {
    $('table').DataTable({
        "language": {
            "url": `vendor/datatables/i18n/${config.locale}.json`
        },
        columnDefs: [
            {orderable: false, targets: 6}
        ]
    })
})

require('./vendor/jsvalidation/js/jsvalidation');