{{-- <script>
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function() {
            let id = this.getAttribute('data-id');

            Swal.fire({
                title: 'Yakin hapus?',
                text: "Data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        });
    });
</script>

<script>
    document.querySelectorAll('.btn-submit').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            let form = this.closest('form');

            Swal.fire({
                title: 'Simpan perubahan?',
                text: "Pastikan data sudah benar",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, simpan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script> --}}

{{-- @push('scripts')
    <script>
        function hitungIMT() {

            let tinggi = document.querySelector('[name="tinggi"]').value;
            let berat = document.querySelector('[name="berat"]').value;

            let imtField = document.getElementById('imt');
            let kategoriField = document.getElementById('kategori');

            if (!tinggi || !berat) return;

            tinggi = parseFloat(tinggi);
            berat = parseFloat(berat);

            let imt = berat / Math.pow((tinggi / 100), 2);

            imtField.value = imt.toFixed(2);

            let kategori = '';

            if (imt < 17) kategori = 'Sangat Kurus';
            else if (imt < 18.5) kategori = 'Kurus';
            else if (imt < 25) kategori = 'Normal';
            else if (imt < 27) kategori = 'Gemuk';
            else kategori = 'Obesitas';

            kategoriField.value = kategori;
        }
    </script>
@endpush --}}

<script>
    $(document).ready(function() {
        $('#main-recent-order').DataTable({
            pageLength: 5, // jumlah data per halaman
            lengthMenu: [5, 10, 25, 50],
            ordering: true,
            searching: true,
            responsive: true,
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ data",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                paginate: {
                    next: "Next",
                    previous: "Prev"
                },
                zeroRecords: "Data tidak ditemukan"
            }
        });
    });
</script>

<script>
    document.addEventListener('input', function(e) {

        if (e.target.name === 'tinggi' || e.target.name === 'berat') {

            let tinggi = parseFloat(document.querySelector('[name="tinggi"]').value);
            let berat = parseFloat(document.querySelector('[name="berat"]').value);

            let imtField = document.getElementById('imt');
            let kategoriField = document.getElementById('kategori');
            let bar = document.getElementById('imtBar');
            let indicator = document.getElementById('imtIndicator');

            if (!imtField || !kategoriField) return;

            if (!isNaN(tinggi) && !isNaN(berat) && tinggi > 0 && berat > 0) {

                let imt = berat / Math.pow((tinggi / 100), 2);
                imtField.innerText = imt.toFixed(2);

                let kategori = '';
                let warna = '';
                let progress = Math.min(imt * 2, 100); // scaling

                if (imt < 17) {
                    kategori = 'Sangat Kurus';
                    warna = 'bg-danger';
                } else if (imt < 18.5) {
                    kategori = 'Kurus';
                    warna = 'bg-warning';
                } else if (imt < 25) {
                    kategori = 'Normal';
                    warna = 'bg-success';
                } else if (imt < 27) {
                    kategori = 'Gemuk';
                    warna = 'bg-warning';
                } else {
                    kategori = 'Obesitas';
                    warna = 'bg-danger';
                }

                kategoriField.innerText = kategori;
                kategoriField.className = 'badge fs-6 px-3 py-2 mb-3 ' + warna;

                // Update progress bar
                bar.style.width = progress + '%';
                bar.className = 'progress-bar ' + warna;

                // Update indicator
                indicator.style.left = progress + '%';
                document.getElementById('imt_input').value = imt.toFixed(2);
                document.getElementById('kategori_input').value = kategori;
            }
        }

    });
</script>

<script>
    document.addEventListener('input', function(e) {

        if (['waktu', 'denyut'].includes(e.target.name)) {

            let berat = parseFloat(document.querySelector('[name="berat"]').value);
            let umur = parseFloat(document.querySelector('[name="umur"]')?.value || 30);
            let waktu = parseFloat(document.getElementById('waktu').value);
            let denyut = parseFloat(document.getElementById('denyut').value);
            let jk = document.querySelector('[name="jenis_kelamin"]')?.value || 'P';

            let gender = (jk === 'L') ? 1 : 0;

            if (!berat || !waktu || !denyut) return;

            let vo2 = 132.853 -
                (0.0769 * berat) -
                (0.3877 * umur) +
                (6.315 * gender) -
                (3.2649 * waktu) -
                (0.1565 * denyut);

            let hasil = '';
            let warna = '';

            if (vo2 < 28) {
                hasil = 'Kurang';
                warna = 'bg-danger';
            } else if (vo2 < 34) {
                hasil = 'Cukup';
                warna = 'bg-warning';
            } else if (vo2 < 42) {
                hasil = 'Baik';
                warna = 'bg-success';
            } else {
                hasil = 'Sangat Baik';
                warna = 'bg-primary';
            }

            let frek = '',
                zona = '',
                durasi = '',
                tipe = '';

            if (hasil === 'Kurang') {
                frek = '2x/minggu';
                zona = '100-120 bpm';
                durasi = '20-30 menit';
                tipe = 'Aerobik ringan';
            } else if (hasil === 'Cukup') {
                frek = '3x/minggu';
                zona = '120-130 bpm';
                durasi = '30-40 menit';
                tipe = 'Aerobik tipe 1 & 2';
            } else if (hasil === 'Baik') {
                frek = '4-5x/minggu';
                zona = '130-150 bpm';
                durasi = '40-60 menit';
                tipe = 'Aerobik tipe 1,2,3';
            } else {
                frek = '5x/minggu';
                zona = '150-170 bpm';
                durasi = '60 menit';
                tipe = 'Intensitas tinggi';
            }

            // tampilkan ke UI
            document.getElementById('vo2Text').innerText = vo2.toFixed(2);

            let hasilEl = document.getElementById('hasilText');
            hasilEl.innerText = hasil;
            hasilEl.className = 'badge px-3 py-2 ' + warna;

            document.getElementById('zonaText').innerText = zona;
            document.getElementById('frekuensiText').innerText = frek;
            document.getElementById('durasiText').innerText = durasi;
            document.getElementById('tipeText').innerText = tipe;

            // 🔥 kirim ke hidden input
            document.getElementById('frekuensi').value = frek;
            document.getElementById('durasi').value = durasi.match(/\d+/)[0]; // ambil angka saja
            document.getElementById('tipe').value = tipe;
        }
    });
</script>

<script>
    document.querySelector('form').addEventListener('submit', function() {

        document.getElementById('frekuensi').value =
            document.getElementById('frekuensiText').innerText;

        let durasiText = document.getElementById('durasiText').innerText;
        let angka = durasiText.match(/\d+/);

        document.getElementById('durasi').value = angka ? angka[0] : 30;

        document.getElementById('tipe').value =
            document.getElementById('tipeText').innerText;
    });
</script>

<script>
    document.querySelectorAll('.btn-detail').forEach(btn => {
        btn.addEventListener('click', function() {

            // ambil data
            let data = this.dataset;

            // inject ke modal
            d_nama.innerText = data.nama;
            d_unit.innerText = data.unit;
            d_tanggal.innerText = data.tanggal;
            d_umur.innerText = data.umur;

            d_imt.innerText = data.imt;
            d_vo2.innerText = data.vo2;

            // kategori IMT warna
            let kat = data.kategori.toLowerCase();
            let warnaIMT = 'bg-secondary';

            if (kat.includes('obesitas')) warnaIMT = 'bg-dark';
            else if (kat.includes('gemuk')) warnaIMT = 'bg-danger';
            else if (kat.includes('normal')) warnaIMT = 'bg-success';

            d_kategori.innerText = data.kategori;
            d_kategori.className = 'badge ' + warnaIMT;

            // hasil fitness warna
            let hasil = data.hasil.toLowerCase();
            let warna = 'bg-secondary';

            if (hasil.includes('kurang')) warna = 'bg-danger';
            else if (hasil.includes('cukup')) warna = 'bg-warning';
            else if (hasil.includes('baik sekali')) warna = 'bg-primary';
            else if (hasil.includes('baik')) warna = 'bg-success';

            d_hasil.innerText = data.hasil;
            d_hasil.className = 'badge ' + warna;

            // latihan
            if (data.frekuensi === '-') {
                latihan_content.classList.add('d-none');
                latihan_kosong.classList.remove('d-none');
            } else {
                latihan_content.classList.remove('d-none');
                latihan_kosong.classList.add('d-none');

                d_frekuensi.innerText = data.frekuensi;
                d_durasi.innerText = data.durasi + ' menit';
                d_tipe.innerText = data.tipe;
                d_denyut.innerText = data.denyut;
            }

        });
    });
</script>

<script>
    document.querySelectorAll('.btn-detail').forEach(btn => {
        btn.addEventListener('click', function() {

            document.getElementById('nama').innerText = this.dataset.nama;
            document.getElementById('unit').innerText = this.dataset.unit;
            document.getElementById('tanggal').innerText = this.dataset.tanggal;
            document.getElementById('umur').innerText = this.dataset.umur;

            document.getElementById('imt').innerText = this.dataset.imt;
            document.getElementById('kategori').innerText = this.dataset.kategori;

            document.getElementById('vo2').innerText = this.dataset.vo2;
            document.getElementById('hasil').innerText = this.dataset.hasil;

            document.getElementById('frekuensi').innerText = this.dataset.frekuensi;
            document.getElementById('durasi').innerText = this.dataset.durasi;
            document.getElementById('tipe').innerText = this.dataset.tipe;
            document.getElementById('denyut').innerText = this.dataset.denyut;

        });
    });
</script>

<script>
    document.addEventListener('input', function() {

        let vo2 = parseFloat(document.getElementById('vo2Text').innerText);

        if (!vo2) return;

        let frek = '';
        let zona = '';
        let durasi = '';
        let tipe = '';

        if (vo2 < 28) {
            frek = '2x/minggu';
            zona = '100-120 bpm';
            durasi = '20';
            tipe = 'Aerobik ringan';
        } else if (vo2 < 34) {
            frek = '3x/minggu';
            zona = '120-130 bpm';
            durasi = '30';
            tipe = 'Aerobik + interval';
        } else if (vo2 < 42) {
            frek = '4-5x/minggu';
            zona = '130-150 bpm';
            durasi = '45';
            tipe = 'Strength + cardio';
        } else {
            frek = '5-6x/minggu';
            zona = '150-170 bpm';
            durasi = '60';
            tipe = 'HIIT';
        }

        document.querySelector('[name="frekuensi"]').value = frek;
        document.querySelector('[name="denyut_nadi"]').value = zona;
        document.querySelector('[name="durasi"]').value = durasi;
        document.querySelector('[name="tipe_latihan"]').value = tipe;

    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let firstError = document.querySelector('.is-invalid');
        if (firstError) {
            firstError.focus();
        }
    });
</script>
