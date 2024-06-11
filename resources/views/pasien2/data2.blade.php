<x-template2>
    <x-slot:title>
        Data Pasien
    </x-slot>
    <h1>Ini data pasien</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">No RM</th>
            <th scope="col">Nama </th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pasien as $datas )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $datas->norm }}</td>
                    <td>{{ $datas->nama }}</td>
                    <td>{{ $datas->alamat }}</td>
                    <td>{{ $datas->no_hp }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</x-template2>