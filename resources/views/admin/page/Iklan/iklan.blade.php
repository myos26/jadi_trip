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
            <div class="box-judul">
                <h2>Iklan</h2>
            </div>
            <div class="box-input">
                <div class="input-content">
                    <input type="text" name="company" placeholder="Company">
                    <input type="text" name="thumbnail" placeholder="Thumbnail">
                    <input type="text" name="link" placeholder="Link">
                    <select name="type" id="type">
                        <option value="iklan1">iklan 1</option>
                        <option value="iklan2">iklan 2</option>
                    </select>
                </div>
            </div>
            <div class="box-detail">
                <table class="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Thumbnail</th>
                            <th>Tanggal</th>
                            <th>Company</th>
                            <th>Link</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('post/images/trip.jpg') }}" alt="" srcset=""></td>
                            <td>17 Agustus 1945</td>
                            <td>DPR</td>
                            <td>yandex.com</td>
                            <td>iklan 1</td>
                            <td>11:10:00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('post/images/trip.jpg') }}" alt="" srcset=""></td>
                            <td>17 Agustus 1945</td>
                            <td>DPR</td>
                            <td>yandex.com</td>
                            <td>iklan 1</td>
                            <td>11:10:00</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
