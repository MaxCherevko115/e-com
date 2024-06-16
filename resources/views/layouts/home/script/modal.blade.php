<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.card').on('click', function() {
            let id = $(this).data('id');

            $('#descModal .modal-title').text('Loading...');

            $.ajax({
                url: '/api/products/' + id,
                method: 'GET',
                success: function(product) {
                    $('#descModal .modal-title').text(product.title);
                    $('#descModal .modal-desc').text('Description: ' + product.description);
                    $('#descModal .modal-price').text('Price: ' + product.price + '$');

                },
                error: function() {
                    $('#descModal .modal-title').text('Error loading description.');
                }
            });
        });
    });
</script>