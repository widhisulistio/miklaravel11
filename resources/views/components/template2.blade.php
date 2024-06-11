<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
  </head>
  <body>
    <x-navbar></x-navbar>
    <hr>
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    <script>
      //message with sweetalert
      @if(session('success'))
          Swal.fire({
              icon: "success",
              title: "BERHASIL",
              text: "{{ session('success') }}",
              showConfirmButton: false,
              timer: 3000
          });
      @elseif(session('error'))
          Swal.fire({
              icon: "error",
              title: "GAGAL!",
              text: "{{ session('error') }}",
              showConfirmButton: false,
              timer: 2000
          });
      @endif
  </script>
  
  </body>
</html>