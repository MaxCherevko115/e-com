<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/forms.js') }}"></script>
<script>
    $(document).ready(function() {
        sendForm('#create-form', '/api/products', '#createModal');
        sendForm('#edit-form', '/api/products/update/', '#editModal');
    });
</script>