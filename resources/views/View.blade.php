<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
          .vertical-line {
            border-left: 2px solid #ccc; /* Adjust color and width as needed */
            height: 100vh; /* Adjust height as needed */
            position: absolute;
            top: 0;
            right: 50%; /* Center the vertical line */
            transform: translateX(50%); /* Center the vertical line */
        }

        .rectangle-box {
            background-color: #f0f0f0; /* Adjust background color as needed */
            height: 100vh; /* Adjust height as needed */
            width: 50%; /* Adjust width as needed */
            position: absolute;
            top: 0;
            left: 0;
        }

        hr {
            border-top: 2px solid #000; /* Adjust color and width for the bold horizontal line */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="rectangle-box"></div> <!-- Rectangle box to the left of the vertical line -->
        <div class="col-md-7 offset-7"> <!-- Adjusted offset to center it -->
            <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
            <h3>Data Pegawai</h3>

            <a href="/pegawai"> Kembali</a>

            <hr>
            <br/>
            <br/>
            <br/>
            <br/>

            @foreach($pegawai as $p)
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

                <div class="form-group row">
                    <label for="nama" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jabatan" class="col-md-2 col-form-label">Jabatan</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="umur" class="col-md-2 col-form-label">Umur</label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                    <div class="col-md-10">
                        <textarea class="form-control" required="required" name="alamat" readonly>{{ $p->pegawai_alamat }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-10 offset-md-2">
                        <input type="submit" class="btn btn-success" value="OK">
                    </div>
                </div>
                <!-- Remove the submit button if you don't want users to submit changes -->
            </form>
            @endforeach
        </div>

        <div class="vertical-line d-none d-md-block"></div> <!-- Vertical line, hidden on small screens -->
    </div>
</div>


</body>
</html>
