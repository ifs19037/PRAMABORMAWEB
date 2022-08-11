<table>
    <thead>
        <tr>
            <th>#</th>
            <th>NAMA KARYAWAN</th>
            <th>NIP</th>
            <th>JENIS KELAMIN</th>
            <th>JABATAN</th>
            <th>DIVISI</th>
            <th>LOKASI</th>
            <th>TANGGAL LAHIR</th>
            <th>TANGGAL MASUK</th>
            <th>EMAIL</th>
            <th>NO TELEPON</th>
            <th>ALAMAT KTP</th>
        </tr>
    </thead>
    <tbody>
        @foreach($DataKaryawanExportExcel as $DataKaryawan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$DataKaryawan->nama_karyawan}}</td>
            <td>{{$DataKaryawan->nik_karyawan}}</td>
            <td>{{$DataKaryawan->jenis_kelamin}}</td>
            <td>{{$DataKaryawan->jabatan}}</td>
            <td>{{$DataKaryawan->divisi}}</td>
            <td>{{$DataKaryawan->lokasi}}</td>
            <td>{{$DataKaryawan->tanggal_lahir}}</td>
            <td>{{$DataKaryawan->tanggal_masuk}}</td>
            <td>{{$DataKaryawan->email}}</td>
            <td>0{{$DataKaryawan->no_telepon}}</td>
            <td>{{$DataKaryawan->alamat_ktp}}</td>
        </tr>
        @endforeach    
    </tbody>
</table>