$('.btn-search').on('click', function () {
    let route = $(this).data('route')
    $.ajax({
        url: route,
        method: 'POST',
        data: { keyword: $('#search-name').val() }
    }).done(function (response) {
        $('.names-list').find('li:not(.name-template)').remove()
        response.forEach(resource => {
            let template = $('.name-template').clone().removeClass('name-template d-none')
            template.text(resource.name)
            $('.names-list').append(template)
        })
    }).fail(function () {
        console.log('failed at ajax')
    })
})
