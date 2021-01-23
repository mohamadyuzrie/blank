let resourceDatatable = $('#resources-table').DataTable({
    serverSide: true,
    processing: true,
    ajax: { url: $('#resources-table').data('route'), 'method': 'POST' },
    columns: [
        { data: 'name', name: 'name' },
        { data: 'email', name: 'email' },
        { data: 'actions', name: 'actions', orderable: false, searchable: false },
    ],
})
