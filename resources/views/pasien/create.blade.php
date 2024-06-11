<x-template2>
    <x-slot:title>
        ADD Data Pasien
    </x-slot>

    <div class="container">
      <h1>Form Input Data Pasien</h1>
      <hr>
      <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="norm" class="form-label">No Rekam Medis</label>
          <input type="text" class="form-control" id="norm" name="norm" aria-describedby="NoRM" value="{{ @old('norm') }}">
          @error('norm')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" value="{{ @old('nama') }}">
            @error('nama')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="alamat" value="{{ @old('alamat') }}">
            @error('alamat')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No Handphone</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" aria-describedby="no_hp" value="{{ @old('no_hp') }}">
            @error('no_hp')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
    
    
</x-template2>



