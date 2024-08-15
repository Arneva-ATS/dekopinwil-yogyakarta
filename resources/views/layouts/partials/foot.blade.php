<!--Vendors Scripts-->
<script src="{{ asset('assets/js/vendor/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<!--Other-->
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.carouselTicker.js') }}"></script>
<script src="{{ asset('assets/js/plugins/masonry.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<!-- Count down-->
<script src="{{ asset('assets/js/vendor/jquery.countdown.min.js') }}"></script>
<!--Custom script for this template-->
<script src="{{ asset('assets/js/main.js?v=1.0.0') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function createSlug(name) {
        return name
            .toLowerCase() // Mengubah semua huruf menjadi huruf kecil
            .replace(/\s+/g, "-") // Mengganti semua spasi dengan strip (-)
            .replace(/[^\w\-]+/g, ""); // Menghapus karakter non-alphanumeric kecuali strip (-) dan underscore (_)
    }

    $(document).ready(function() {
        $('#submitBtn').on('click', async function() {
            const formData = {
                nama_koperasi: $('#namaKoperasi').val(),
                username: $('#username').val(),
                password: $('#password').val(),
                confirmPassword: $('#confirmPassword').val(),
                slug: createSlug($('#namaKoperasi').val()),
                nama_ketua: $('#namaKetua').val(),
                nomer_ketua: $('#nomerKetua').val(),
                tingkatan_koperasi: parseInt($('#tingkatanKoperasi').val())
            };

            console.log(formData);

            try {
                const response = await $.ajax({
                    url: '/api/pengajuan-koperasi',
                    type: 'POST',
                    contentType: 'application/json',
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-Type': 'application/json'
                    },
                    data: JSON.stringify(formData)
                });

                $('#standardModal').modal('hide');

                Swal.fire({
                    title: 'Berhasil!',
                    html: 'Berhasil Daftar Koperasi!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                $('#otpModal').modal('show'); // Show the OTP modal
            } catch (error) {
                // console.error('Error:', error);

                let errorMessage = 'Terjadi kesalahan saat menyimpan pengajuan';
                if (error.responseJSON && error.responseJSON.errors) {
                    errorMessage = Object.values(error.responseJSON.errors).map(err =>
                        `<p>${err}</p>`).join('');
                }

                Swal.fire({
                    title: 'Gagal!',
                    html: errorMessage,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });

        $('#otpBtn').on('click', async function() {
            const formData = {
                otp: $('#otp').val(),
            };
            console.log(formData);

            try {
                const response = await $.ajax({
                    url: '/api/verifikasi-otp',
                    type: 'POST',
                    contentType: 'application/json',
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-Type': 'application/json'
                    },
                    data: JSON.stringify(formData)
                });


                // Swal.fire({
                //     title: 'Berhasil!',
                //     html: 'Berhasil Verifikasi OTP!',
                //     icon: 'success',
                //     confirmButtonText: 'OK'
                // });
                console.log(response)
                let nis = response.details['nis'];
                let slug = response.details['slug'];
                window.location.href = `http://127.0.0.1:8080/pendaftaran/koperasi/${slug}/${nis}`
            } catch (error) {
                // console.error('Error:', error);

                let errorMessage = 'Terjadi kesalahan saat menyimpan pengajuan';
                if (error.responseJSON && error.responseJSON.errors) {
                    errorMessage = Object.values(error.responseJSON.errors).map(err =>
                        `<p>${err}</p>`).join('');
                }

                Swal.fire({
                    title: 'Gagal!',
                    html: errorMessage,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
</script>
