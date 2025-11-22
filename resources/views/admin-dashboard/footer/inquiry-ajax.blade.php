<script>
    // Create form removed — submission handler intentionally omitted.
    reloadTable('inquiries-tbl','inquiryTableWrapper','/inquiry-table');

    $(document).on('submit', '.delete-inquiry-form', function(e) {
        e.preventDefault();

        const form = this;
        const actionUrl = form.action || $(form).attr('action') || '/inquiries/' + $(form).data('inquiry-id');

        openLoadingModal();

        // Optional confirmation
        Swal.fire({
            title: 'Delete Inquiry?',
            text: 'This will permanently delete the inquiry.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: actionUrl,
                    method: 'POST',
                    data: $(form).serialize(),
                    headers: {
                        'X-HTTP-Method-Override': 'DELETE'
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Deleted!',
                            text: response.message || 'Inquiry deleted successfully!',
                            icon: 'success',
                            timer: 1000,
                            showConfirmButton: false
                        }).then(() => {
                            reloadTable('inquiries-tbl','inquiryTableWrapper','/inquiry-table');
                            closeLoadingModal();
                        });
                    },
                    error: function(xhr) {
                        handleAjaxError(xhr);
                        closeLoadingModal();
                    }
                });
            } else {
                closeLoadingModal();
            }
        });
    });
</script>
