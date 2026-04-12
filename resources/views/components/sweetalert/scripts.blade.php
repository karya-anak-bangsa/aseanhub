{{-- sweetalert2 2.11 --}}
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('click', function(e) {

            const btn = e.target.closest('[data-confirm]');
            if (!btn) return;

            e.preventDefault();

            const form = btn.closest('form');
            if (!form) return;

            Swal.fire({
                icon: btn.dataset.icon ?? 'question',
                title: btn.dataset.title ?? 'Are you sure?',
                text: btn.dataset.text ?? '',
                showCancelButton: true,
                reverseButtons: true,
                confirmButtonText: btn.dataset.confirmText ?? 'Yes',
                confirmButtonColor: btn.dataset.confirmColor ?? '#3085d6',
                cancelButtonText: 'Back',
                cancelButtonColor: '#6c757e'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Processing...',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    form.submit();
                }
            });
        });
    </script>
@endpush
