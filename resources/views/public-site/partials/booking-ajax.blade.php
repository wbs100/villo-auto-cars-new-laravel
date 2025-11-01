<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function handleAjaxError(xhr) {

        let message = 'Something went wrong. Please try again.';

        if (xhr.responseJSON && xhr.responseJSON.errors) {
            let errors = xhr.responseJSON.errors;
            message = Object.values(errors).flat().join('\n');
        } else if (xhr.responseJSON && xhr.responseJSON.message) {
            message = xhr.responseJSON.message;
        } else if (xhr.responseText) {
            message = xhr.responseText;
        }

        Swal.fire({
            title: 'Error!',
            text: message,
            icon: 'error',
            confirmButtonText: 'OK'
        });
    }

    function reloadBookingsTable() {
        $('#bookingTableBody').load('/booking-table'); // change this route to match your partial route
    }

    // CREATE BOOKING
    $('#createBookingForm').on('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'Accept': 'application/json'
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Booking created successfully!',
                    icon: 'success',
                    timer: 1500,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = '/';
                });
            },
            error: function(xhr) {
                handleAjaxError(xhr);
            }
        });
    });

    // UPDATE BOOKING
    $('#editBookingForm').on('submit', function(e) {
        e.preventDefault();

        const form = this;
        const actionUrl = form.action;
        const formData = new FormData(form);



        formData.append('_method', 'PUT'); // method spoofing for PUT

        $.ajax({
            url: actionUrl,
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'Accept': 'application/json'
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Booking updated successfully!',
                    icon: 'success',
                    timer: 1500,
                    showConfirmButton: false
                }).then(() => {
                    reloadBookingsTable();
                    document.getElementById('editBookingForm').reset();
                    closeEditModal();

                });
            },
            error: function(xhr) {
                handleAjaxError(xhr);
                document.getElementById('editBookingForm').reset();
                closeEditModal();
            }
        });
    });

    // DELETE BOOKING
    $(document).on('submit', '.delete-booking-form', function(e) {
        e.preventDefault();

        const form = this;
        const actionUrl = form.action;



        Swal.fire({
            title: 'Are you sure?',
            text: "This booking will be permanently deleted.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            reverseButtons: true
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
                            text: 'Booking deleted successfully!',
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            reloadBookingsTable();

                        });
                    },
                    error: function(xhr) {
                        handleAjaxError(xhr);
                    }
                });
            }
        });
    });
</script>