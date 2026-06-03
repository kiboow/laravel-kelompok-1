<!DOCTYPE html>
<html>
    <head>
        <title>Biodata Mahasiswa</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Biodata Mahasiswa</h3>
                </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $biodata['nama'] }}</td>
                            </tr>
                    <tr>
                        <th>NIM</th>
                        <td>{{ $biodata['nim'] }}</td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td>{{ $biodata['prodi'] }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $biodata['alamat'] }}</td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>