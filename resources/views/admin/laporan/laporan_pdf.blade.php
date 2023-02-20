<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    {{-- <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style> --}}
    <center>
        <h3>Laporan Peminjaman Buku</h3>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Dibalikkan</th>
                <th>Kondisi Buku (saat dipinjam)</th>
                <th>Kondisi Buku (saat dikembalikan)</th>
                <th>Denda</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($peminjaman as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->user->username }}</td>
                    <td>{{ $p->buku->judul_buku }}</td>
                    <td>{{ $p->tanggal_peminjaman }}</td>
                    <td>{{ $p->tanggal_pengembalian }}</td>
                    <td>{{ $p->kondisi_saat_dipinjam }}</td>
                    <td>{{ $p->kondisi_saat_dikembalikan }}</td>
                    <td>{{ $p->denda }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
