<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <style>
        html {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: rgb(243, 243, 243);
        }
    </style>
</head>

<body>
    <div class="container"
        style="margin-top: 20px; background-color: white; padding: 10px; border-radius: 10px; box-shadow: 1px 1px 20px -10px black;">
        <a href="{{ url('/postingan') }}" onclick="draft()" class="btn btn-md btn-primary">Kembali</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#kategori">
            + Kategori
        </button>
    </div>

    <!-- Modal -->
    <form action="{{ url('/kategori') }}" method="post">
        @csrf
        <div class="modal fade modal-dialog-centered" id="kategori" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-labelledby="kategoriLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kategoriLabel">Kategori</h5>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="input-kategori">Tambah Kategori : </label>
                            <input type="text" class="form-control" id="input-kategori" name="name"
                                placeholder="Masukkan nama kategori">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </div>
                        <hr>
                        <div class="kategoris" style="height: 200px; overflow-y: scroll;">
                            <table class="table table-md table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategoris as $kategori)
                                        <tr>
                                            <td scope="row">{{ $kategori->id }}</td>
                                            <td>{{ $kategori->name }}</td>
                                            <td><a href="{{ url('kategori/delete/' . $kategori->id) }}"
                                                    class="btn btn-sm btn-danger">Hapus</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- end modal --}}

    <div class="container" style="margin-top: 20px;">
        <form action="{{ url('/save-post') }}" method="post" id="post-form" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9"
                            style="background-color: white; padding: 30px; border-radius: 10px; box-shadow: 1px 1px 20px -10px black;">
                            <div class="form-group">
                                <label for="title" style="font-size: 20px;">Judul Artikel</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Masukkan judul artikel">
                            </div>
                            <div class="form-group">
                                <label for="thumbnail" style="font-size: 20px;">Thumbnail</label>
                                <input type="file" name="thumbnail" class="form-control"id="thumbnail">
                            </div>
                            <div class="form-group">
                                <label for="summernote" style="font-size: 20px;">Konten</label>

                                <textarea name="content" class="form-control" id="summernote" cols="30" rows="100"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3" style="">
                            <div class="flex" style="display: flex; margin-top: 34px; margin-bottom: 13px;">
                                <select name="status" id="status" class="form-control" style="margin: 0px 20px">
                                    <option value="Public" selected>Public</option>
                                    <option value="Draft">Draft</option>
                                </select>
                                <button class="btn btn-md btn-primary m-10" style="width: 250px;" type="submit"
                                    id="btn-publish">Publish</button>
                            </div>
                            <div class="form-group">
                                <label for="kategori" style="font-size: 20px;">Kategori</label>
                                <select name="kategori" id="kategori" class="form-control">
                                    {{-- <option value="">Pilih kategori</option> --}}
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="permalink" style="font-size: 20px;">Permalink</label>
                                <input type="text" class="form-control" name="slug" id="permalink"
                                    placeholder="default permalink">
                            </div>
                            <div class="form-group">
                                <label for="description" style="font-size: 20px;">Deskripsi</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" minlength="50"
                                    maxlength="200"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 400
            });
        });


        const perma = document.querySelector('#permalink');
        const draft = () => {
            const title = document.querySelector('#title');
            const content = document.querySelector('#summernote');
            document.querySelector('#status').value = 'Draft';
            // perma.value = document.querySelector('#title').value;

            if (title.value != '' || content.value != '') {
                document.querySelector('#post-form').submit();
            }

            return
        }

        // const publish = () => {
        //     perma.value = document.querySelector('#title').value;
        // }
    </script>
</body>

</html>
