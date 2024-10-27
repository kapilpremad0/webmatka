
    <script type="text/javascript">
        $(document).ready(function() {
            // Check if the cookie exists and has a value of 'seen'
            if (document.cookie.indexOf('popup_seen') === -1) {
                // If the cookie doesn't exist, show the popup
                $('#noticeboard').modal('show');
            }

            // Set a cookie to indicate that the user has seen the popup
            $('#noticeboard').on('hidden.bs.modal', function() {
                var date = new Date();
                date.setTime(date.getTime() + (3 * 60 * 60 * 1000)); // Set the cookie to expire in 6 hours
                document.cookie = 'popup_seen=true; expires=' + date.toUTCString() + '; path=/';
            });
        });
        
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    @if (session('success'))
        <script>
            Toastify({
                text: `{{ session('success') }}`,
                className: "success",
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                }
            }).showToast();
        </script>
    @endif

    @if (session('error'))
        <script>
            Toastify({
                text: `{{ session('error') }}`,
                className: "error",
                style: {
                    background: "linear-gradient(to right, #b73b3c, #b73b3c)",
                }
            }).showToast();
        </script>
    @endif