<x-template2>
    <x-slot:title>
        Data Pasien
    </x-slot>

    <div class="container">
      <a href="{{ route('pasien.create') }}" class="btn btn-success">Tambah Data</a>
      <hr>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">No RM</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">No HP</th>
              <th scope="col">Rujukan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
             @foreach ($pasien as $data )
                 <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->norm }}</td>
                      <td>{{ $data->nama }}</td>
                      <td>{{ $data->alamat }}</td>
                      <td>{{ $data->no_hp }}</td>
                      <td><a href="{{ '/storage/files/'.$data->file }}" target="_blank">Baca</a></td>
                      <td>
                          <div class="btn-group">
                            {{-- <button onclick="window.location.href='{{ route('pasien.edit',$data->id) }}'" class="btn btn-info">Edit</button> --}}
                            <a href="{{ route('pasien.edit',$data->id) }}" class="btn btn-info">Edit</a> &nbsp;
                            <form action="{{ route('pasien.destroy',$data->id) }}" method="post">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                          </div>
                      </td>
                 </tr>
             @endforeach
          </tbody>
        </table>
    </div>
    
    
</x-template2>


