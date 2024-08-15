@extends('layouts.app')
@section('content')
<section class="section-box box-content-blog-2">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-12 text-center">
                <h2 class="display-4 text-primary">Agenda</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Tgl Mulai</th>
                            <th scope="col">Tgl Akhir</th>
                            <th scope="col">Jam</th>
                            <th scope="col">Kegiatan</th>
                        </tr>
                    </thead>
                    <tbody id="agenda">
                        <tr>
                            <td colspan="4" class="text-center">Loading...</td>
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
    fetch('https://cms.rkicoop.co.id/api.php?act=agenda&id_dekopin=11')
        .then(response => response.json())
        .then(data => {
            const agendaElement = document.getElementById('agenda');
            agendaElement.innerHTML = ''; // Clear initial loading message

            if (data.length === 0) {
                agendaElement.innerHTML = '<tr><td colspan="4" class="text-center">Belum ada agenda</td></tr>';
                return;
            }

            data.forEach(item => {
                const row = document.createElement('tr');

                const tglMulai = document.createElement('td');
                tglMulai.textContent = formatDate(item.tanggal_agenda);
                row.appendChild(tglMulai);

                const tglAkhir = document.createElement('td');
                tglAkhir.textContent = formatDate(item.tanggal_selesai);
                row.appendChild(tglAkhir);

                const jam = document.createElement('td');
                jam.textContent = item.jam;
                row.appendChild(jam);

                const kegiatan = document.createElement('td');
                kegiatan.textContent = item.nama_agenda;
                row.appendChild(kegiatan);

                agendaElement.appendChild(row);
            });
        })
        .catch(error => {
            const agendaElement = document.getElementById('agenda');
            agendaElement.innerHTML = '<tr><td colspan="4" class="text-center">Belum ada agenda</td></tr>';
            console.error('Error fetching agenda data:', error);
        });

    function formatDate(dateString) {
        const date = new Date(dateString);
        const dayNames = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const day = dayNames[date.getDay()];
        const dayNumber = String(date.getDate()).padStart(2, '0');
        const monthNumber = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();
        return `${day}, ${dayNumber}-${monthNumber}-${year}`;
    }
});
</script>
