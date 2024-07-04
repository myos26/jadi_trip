@extends('admin.index')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('pages/Iklan/iklan.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
rel="stylesheet">
@section('content')
    <section class="top-bar" id="top-bar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="iklan">Iklan</a></li>
            </ol>
        </nav>
    </section>

    <section class="konten" id="konten">
        <div class="box-besar">
            <div class="box-input">
                <div class="input-content">
                    <form action="{{ url('/inputIklan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="putInput">
                            <label for="company">Perusahaan &nbsp;&nbsp;:</label>
                            <input class="form-control" id="input1" type="text" name="perusahaan">
                        </div>

                        <div class="putInput">
                            <label for="thumbnail">Sampul &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input class="form-control" id="input3" type="file" name="sampul">
                        </div>

                        <div class="putInput">
                            <label for="link">Tautan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <input class="form-control" id="input2" type="url" name="tautan">
                        </div>

                        <div class="putInput">
                            <label for="type">Tipe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                            <select class="form-control" name="type" id="type">
                                <option value="Iklan 1">Iklan 1</option>
                                <option value="Iklan 2">Iklan 2</option>
                            </select>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn">POSTING</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="search-container">
            <label for="search-term">Cari :</label>
            <input type="text" id="search-term" placeholder="Kata Kunci">
        </div>
        <div class="box-detail">
            <table class="table1" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Perusahaan</th>
                        <th>Tautan</th>
                        <th>Tipe</th>
                        <th>Status</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php
                    $c = 1;
                @endphp
                <tbody>
                    @foreach ($iklans as $iklan)
                    <tr id="action">
                        <td>{{ $c++ }}</td>
                        <td>{{ $iklan->tanggal }}</td>
                        <td>{{ $iklan->perusahaan }}</td>
                        <td><a href="{{ $iklan->tautan }}">{{ $iklan->tautan }}</a></td>
                        <td>{{ $iklan->type }}</td>
                        <td class="status">{{ $iklan->status }}</td>
                        <td class="time">
                            @if ($iklan->status === 'Expired')
                                {{ $iklan->deleted_at }}
                            @else

                            @endif
                        </td>
                        <td id="action">
                            @if($iklan->type == 'Expired')
                                <input type="checkbox" class="status-checkbox" disabled data-id="{{ $iklan->id }}" {{ $iklan->status == 'On' ? 'checked' : '' }} {{ $iklan->status == 'Expired' ? 'disabled' : '' }}>
                                <span class="start_time" style="display: none;">{{ $iklan->time }}</span>
                            @else
                                <input type="checkbox" class="status-checkbox" data-id="{{ $iklan->id }}" {{ $iklan->status == 'On' ? 'checked' : '' }} {{ $iklan->status == 'Expired' ? 'disabled' : '' }}>
                                <span class="start_time" style="display: none;">{{ $iklan->time }}</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8" id="footer"><i><b>Jadi Trip</b></i> | Layanan perjalanan terbaik se-Indonesia</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let activeAds = {}; // Objek untuk menyimpan iklan aktif

            // Inisialisasi status iklan saat halaman dimuat
            $('.status-checkbox').each(function() {
                let id = $(this).data('id');
                let row = $(this).closest('tr');
                let type = row.find('td:nth-child(5)').text().trim(); // Ambil tipe iklan dari kolom kelima
                let cellStatus = row.find('.status');
                let cellTime = row.find('.time');
                let startTime = new Date(row.find('.start_time').text().trim()).getTime(); // Ambil waktu mulai dari kolom tersembunyi

                if (cellStatus.text().trim() === 'On') {
                    $(this).prop('checked', true);
                    startCountdown(type, cellStatus, cellTime, $(this), id, startTime);
                } else if (cellStatus.text().trim() === 'Expired') {
                    $(this).prop('disabled', true);
                }
            });

            // Ketika checkbox status diubah
            $(document).on('change', '.status-checkbox', function() {
                let id = $(this).data('id');
                let isChecked = $(this).prop('checked');
                let row = $(this).closest('tr');
                let type = row.find('td:nth-child(5)').text().trim(); // Ambil tipe iklan dari kolom kelima
                let cellStatus = row.find('.status');
                let cellTime = row.find('.time');

                if (isChecked) {
                    // Cek apakah ada iklan dengan tipe yang sama yang sedang aktif
                    if (activeAds[type]) {
                        alert('Saat ini sedang ada iklan ' + type + ' yang sedang aktif. Nonaktifkan iklan ' + type + ' yang sedang aktif terlebih dahulu.');
                        $(this).prop('checked', false);
                        return;
                    }

                    toggleStatus(id, 'On', type, cellStatus, cellTime, $(this));
                } else {
                    toggleStatus(id, 'Off', type, cellStatus, cellTime, $(this));
                }
            });

            // Fungsi untuk mengubah status iklan
            function toggleStatus(id, status, type, cellStatus, cellTime, checkbox) {
                // Kirim permintaan Ajax untuk mengubah status
                $.ajax({
                    url: '/iklan/updateStatus/' + id,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        status: status
                    },
                    success: function(response) {
                        console.log('Status updated successfully:', response);

                        // Update tampilan status di tabel
                        cellStatus.text(status);

                        if (status === 'On') {
                            startCountdown(type, cellStatus, cellTime, checkbox, id, Date.now());
                        } else {
                            stopCountdown(type);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat mengubah status iklan. Silakan coba lagi.');
                        // Reset checkbox ke status sebelumnya jika terjadi kesalahan
                        checkbox.prop('checked', !checkbox.prop('checked'));
                    }
                });
            }

            // Fungsi untuk memulai countdown
            function startCountdown(type, cellStatus, cellTime, checkbox, id, startTime) {
                let limitSeconds = (type === 'Iklan 1' ? 3600*24*3 : 3600*24); // Atur batas waktu berdasarkan tipe iklan

                function updateCount() {
                    let currentTime = Date.now();
                    let elapsedTime = Math.floor((currentTime - startTime) / 1000);
                    let remainingTime = limitSeconds - elapsedTime;

                    if (remainingTime <= 0) {
                        clearInterval(countInterval);
                        expireAd(type, cellStatus, cellTime, checkbox, id);
                        return;
                    }

                    let hours = Math.floor(remainingTime / 3600);
                    let minutes = Math.floor((remainingTime % 3600) / 60);
                    let seconds = remainingTime % 60;
                    let formattedTime = pad(hours) + ':' + pad(minutes) + ':' + pad(seconds);
                    cellTime.text(formattedTime);
                }

                updateCount();
                let countInterval = setInterval(updateCount, 1000);

                // Simpan data iklan aktif
                activeAds[type] = {
                    countInterval: countInterval,
                    startTime: startTime,
                    cellStatus: cellStatus,
                    cellTime: cellTime
                };
            }

            // Fungsi untuk menghentikan countdown
            function stopCountdown(type) {
                if (activeAds[type]) {
                    clearInterval(activeAds[type].countInterval);
                    delete activeAds[type];
                }
            }

            // Fungsi untuk menandai iklan sebagai Expired
            function expireAd(type, cellStatus, cellTime, checkbox, id) {
                let expiredAt = new Date().toLocaleString('en-ID', { timeZone: 'Asia/Jakarta' });

                $.ajax({
                    url: '/iklan/expireAd/' + id,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        expired_at: expiredAt
                    },
                    success: function(response) {
                        console.log('Ad expired successfully:', response);
                        cellStatus.text('Expired');
                        cellTime.text(response.expired_at);
                        checkbox.prop('disabled', true); // Disable checkbox saat expired
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat menghubungi server. Silakan coba lagi.');
                        // Reset checkbox ke status 'Off' jika terjadi kesalahan
                        cellTime.text(null);
                        toggleStatus(id, 'Off', type, cellStatus, cellTime, checkbox);
                        $('.status-checkbox').prop('checked', false);
                    }
                });
            }


            // Fungsi untuk menambahkan nol di depan angka jika angka < 10
            function pad(num) {
                return (num < 10 ? '0' : '') + num;
            }
        });
    </script>

    <script>
        document.getElementById('search-term').addEventListener('keyup', function() {
            var input = document.getElementById('search-term');
            var filter = input.value.toLowerCase();
            var table = document.getElementById('dataTable');
            var tr = table.getElementsByTagName('tr');
            for (var i = 1; i < tr.length; i++) {
                var kode = tr[i].getElementsByTagName('td')[1];
                var tanggal = tr[i].getElementsByTagName('td')[2];
                var perusahaan = tr[i].getElementsByTagName('td')[3];
                var link = tr[i].getElementsByTagName('td')[4];
                var tipe = tr[i].getElementsByTagName('td')[5];
                if (kode || perusahaan || link) {
                    var kodeValue = kode.textContent || kode.innerText;
                    var tanggalValue = tanggal.textContent || tanggal.innerText;
                    var perusahaanValue = perusahaan.textContent || perusahaan.innerText;
                    var linkValue = link.textContent || link.innerText;
                    var tipeValue = tipe.textContent || tipe.innerText;
                    if (kodeValue.toLowerCase().indexOf(filter) > -1 || tanggalValue.toLowerCase().indexOf(filter) > -1 || perusahaanValue.toLowerCase().indexOf(filter) > -1 || linkValue.toLowerCase().indexOf(filter) > -1 || tipeValue.toLowerCase().indexOf(filter) > -1) {
                        tr[i].style.display = '';
                    } else {
                        tr[i].style.display = 'none';
                    }
                }
            }
        });
    </script>
@endsection
