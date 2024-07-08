@extends('admin.index')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('pages/iklan/iklan.css') }}">
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
                            <span style="color: #fff;" id="fileLabel">&nbsp;&nbsp;(500 x 400)</span>
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
    <script src="{{ url('assets/js/iklan.js') }}"></script>
@endsection
