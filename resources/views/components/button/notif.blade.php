<!-- jQuery -->
<script src="{{ url('public') }}/plugins/jquery/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@foreach (['success', 'warning', 'danger'] as $status)
    @if (session($status))
        <script>
            Swal.fire({
                title: "{{ $status }}",
                text: "{{ session($status) }}!",
                icon: "{{ $status }}"
            });
        </script>
    @endif
@endforeach
