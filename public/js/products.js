function products() {
    $.ajax({
        url: '/api/products',
        type: 'GET',
        success: function(products) {
            let productsTableBody = $('#products-table-body');
            let rows = '';

            productsTableBody.empty();

            products.forEach((product) => {
                rows += createProductRow(product);
            });

            productsTableBody.html(rows);

            buttonRemoveHandle()
            buttonEditHandle()
        },
    });

    function createProductRow(product) {
        return `
        <tr>
            <th scope="row">${product.id}</th>
            <td><img src="data:image/png;base64,${product.photo}" alt="${product.title}" class="img-thumbnail" width="100" height="100"></td>
            <td>${product.title}</td>
            <td>
                <button type="button" class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#editModal" data-id="${product.id}">Edit</button>
                <button type="button" class="btn btn-danger btn-remove" data-id="${product.id}">Remove</button>
            </td>
        </tr>`;
    }
}

function buttonRemoveHandle() {
    $('.btn-remove').on('click', function() {
        const id = $(this).data('id');

        $.ajax({
            url: '/api/products/remove/' + id,
            type: 'GET',
            processData: false,
            contentType: false,
            success: function () {
                $('#message').removeClass('d-none').addClass('show alert-success').html('Successfully!');

                products();
            }
        });
    });
}

function buttonEditHandle() {
    $('.btn-edit').on('click', function() {
        const id = $(this).data('id');

        const editModal = $('#editModal');

        $.ajax({
            url: '/api/products/' + id,
            type: 'GET',
            processData: false,
            contentType: false,
            success: function(product) {
                editModal.find('#edit-form').attr('data-id', id);

                editModal.find('#title').val(product.title);
                editModal.find('#description').val(product.description);
                editModal.find('#price').val(product.price);
            },
        });
    });
}
