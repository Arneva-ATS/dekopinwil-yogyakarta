@extends('layouts.app')
@section('content')
<section class="section-box box-content-blog-2">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-12 text-center">
                <h2 class="display-4 text-primary">Notaris Kementerian Koperasi</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody id="notaris-list">
                        <tr>
                            <td colspan="3" class="text-center">Loading...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
.section-box {
    background-color: #f9f9f9;
    padding: 40px 0;
}
.table {
    background-color: #ffffff;
}
.table thead th {
    background-color: #e9ecef;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    fetch('https://cms.rkicoop.co.id/notaris')  // Update this path to your actual data endpoint
        .then(response => response.json())
        .then(data => {
            const notarisListElement = document.getElementById('notaris-list');
            notarisListElement.innerHTML = ''; // Clear initial loading message

            if (data.length === 0) {
                notarisListElement.innerHTML = '<tr><td colspan="3" class="text-center">Belum ada data</td></tr>';
                return;
            }

            data.forEach((item, index) => {
                const row = document.createElement('tr');

                const no = document.createElement('td');
                no.textContent = index + 1;
                row.appendChild(no);

                const nama = document.createElement('td');
                nama.textContent = item.nama;
                row.appendChild(nama);

                const alamat = document.createElement('td');
                alamat.innerHTML = `${item.alamat}<br>T: ${item.telepon}<br>F: ${item.fax}`;
                row.appendChild(alamat);

                notarisListElement.appendChild(row);
            });
        })
        .catch(error => {
            const notarisListElement = document.getElementById('notaris-list');
            notarisListElement.innerHTML = '<tr><td colspan="3" class="text-center">Belum ada data</td></tr>';
            console.error('Error fetching notaris data:', error);
        });
});
</script>
