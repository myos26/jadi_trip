@extends('admin.index')
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
                                <option value="iklan1">Iklan 1</option>
                                <option value="iklan2">Iklan 2</option>
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
                        <th>Kode</th>
                        <th>Tanggal</th>
                        <th>Perusahaan</th>
                        <th>Link</th>
                        <th>Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                @php
                    $c = 1;
                @endphp
                <tbody>
                    {{-- @foreach ($iklan as $ad)
                    <tr>
                        <td>{{ $c++ }}</td>
                        <td>{{ $ad->kode }}</td>
                        <td>{{ $ad->tanggal }}</td>
                        <td>{{ $ad->perusahaan }}</td>
                        <td>{{ $ad->tautan }}</td>
                        <td>{{ $ad->type }}</td>
                        <td>
                            on
                        </td>
                    </tr>
                    @endforeach --}}
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7" id="footer"><i><b>Jadi Trip</b></i> | Layanan perjalanan terbaik se-Indonesia</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
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
