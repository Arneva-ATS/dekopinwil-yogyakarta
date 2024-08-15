@extends('layouts.app')
@section('content')
<section class="section-box box-content-blog-2">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-12 text-center">
                <h2 class="display-4 text-primary">SUSUNAN PENGURUS</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Bidang / Jabatan</th>
                            <th scope="col">Nama</th>
                        </tr>
                    </thead>
                    <tbody id="pengurus-list">
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
.font-weight-bold {
    font-weight: bold;
    background-color: #f2f2f2;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    fetch('https://cms.rkicoop.co.id/pengurus')  // Update this path to your actual data endpoint
        .then(response => response.json())
        .then(data => {
            const pengurusListElement = document.getElementById('pengurus-list');
            pengurusListElement.innerHTML = ''; // Clear initial loading message

            if (data.length === 0) {
                pengurusListElement.innerHTML = '<tr><td colspan="3" class="text-center">Belum ada data</td></tr>';
                return;
            }

            data.forEach(group => {
                const sectionRow = document.createElement('tr');
                const sectionCell = document.createElement('td');
                sectionCell.setAttribute('colspan', '3');
                sectionCell.classList.add('font-weight-bold');
                sectionCell.textContent = group.section;
                sectionRow.appendChild(sectionCell);
                pengurusListElement.appendChild(sectionRow);

                group.members.forEach(member => {
                    const row = document.createElement('tr');

                    const no = document.createElement('td');
                    no.textContent = member.no;
                    row.appendChild(no);

                    const jabatan = document.createElement('td');
                    jabatan.textContent = member.jabatan;
                    row.appendChild(jabatan);

                    const nama = document.createElement('td');
                    nama.textContent = member.nama;
                    row.appendChild(nama);

                    pengurusListElement.appendChild(row);
                });
            });
        })
        .catch(error => {
            const pengurusListElement = document.getElementById('pengurus-list');
            pengurusListElement.innerHTML = '<tr><td colspan="3" class="text-center">Error fetching data</td></tr>';
            console.error('Error fetching pengurus data:', error);
        });
});
</script>
