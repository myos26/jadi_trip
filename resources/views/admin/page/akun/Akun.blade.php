@extends('admin.index')
<link rel="stylesheet" href="{{ asset('pages/akun.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<script src="https://kit.fontawesome.com/b2117167da.js" crossorigin="anonymous"></script>
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
        <div class="search-container">
            <label for="search-term">Cari :</label>
            <input type="text" id="search-term" placeholder="Kata Kunci">
        </div>
        <div class="box-detail">
            <table class="table1" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Hp/WA</th>
                        <th>Level</th>
                        <th>Aksi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                @php
                    $c = 1;
                @endphp
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $c++ }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->nomor_hp }}</td>
                            @if ($user->is_admin == 1)
                                <td>Admin</td>
                            @else
                                <td>User</td>
                            @endif
                            <td id="aksi">
                                <a href="{{ url('/akun-detail/' . $user->id) }}"><i
                                        class="fa-solid fa-circle-info"></i></a>&nbsp; | &nbsp;
                                <a href="{{ url('/akun-edit/' . $user->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>&nbsp; |
                                &nbsp;
                                <button onclick="hapus({{ $user->id }})" class="btn red"><i
                                        class="fa-solid fa-trash red"></i></button>
                            </td>
                            <td>{{ $user->status }}</td>
                        </tr>
                        <form action="{{ url('/akun-delete/' . $user->id) }}" method="POST"
                            id="delete-akun{{ $user->id }}">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="tipe" value="permanen">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                        </form>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7" id="footer"><i><b>Jadi Trip</b></i> | Layanan perjalanan terbaik
                            se-Indonesia
                        </td>
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
                    if (kodeValue.toLowerCase().indexOf(filter) > -1 || tanggalValue.toLowerCase().indexOf(filter) >
                        -1 || perusahaanValue.toLowerCase().indexOf(filter) > -1 || linkValue.toLowerCase().indexOf(
                            filter) > -1 || tipeValue.toLowerCase().indexOf(filter) > -1) {
                        tr[i].style.display = '';
                    } else {
                        tr[i].style.display = 'none';
                    }
                }
            }
        });

        // aksi hapus
        const hapus = (id) => {
            document.getElementById('delete-akun' + id).submit();
            // alert(id)
        }
    </script>
@endsection
