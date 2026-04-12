<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        // ==================================
        // DELETE CONFIRM + LOADING
        // ==================================
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function() {
                const form = this.closest('form');
                const name = this.dataset.name;

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This data will be permanently deleted',
                    icon: 'error',
                    showCancelButton: true,
                    reverseButtons: true,
                    confirmButtonColor: '#dc3546',
                    cancelButtonColor: '#6c757e',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Deleting...',
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });
                        form.submit();
                    }
                });
            });
        });
    });
</script>
