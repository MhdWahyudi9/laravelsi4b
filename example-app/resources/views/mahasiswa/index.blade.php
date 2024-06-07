@extends('layout.main')

@section('title', 'Mahasiswa')
    
@section('content')
    <h1>Data Mahasiswa</h1>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Mahasiswa</h4>
                  <p class="card-description">
                  List data Mahasiswa
                  </p>
                  {{-- tombol tambah --}}
                  <a href="{{ route('mahasiswa.create') }}" class="btn btn-rounded btn-primary">tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Npm</th>
                          <th>Nama</th>
                          <th>Foto</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Prodi Id</th>
                          <th>Url Foto</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($mahasiswa as $item)
                            <tr>
                                <td>{{ $item["npm"] }}</td>
                                <td> {{ $item["nama"] }}</td>
                                <td><img src="{{ url('foto/'.$item["url_foto"]) }}"></td>
                                <td> {{ $item["tempat_lahir"] }}</td>
                                <td> {{ $item["tanggal_lahir"] }}</td>
                                <td> {{ $item["alamat"] }}</td>
                                <td> {{ $item["prodi_id"] }}</td>
                                <td> {{ $item["url_foto"] }}</td>
                                <td>
                                  <form action="{{ route('mahasiswa.destroy', $item['id'] )}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-rounded btn-danger show_confirm" 
                                    data-name="{{ $item['nama'] }}">Hapus</button>
                                  </form>
                                </td>
                            </tr>
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
  <script>
    Swal.fire({
    title: "",
    text: "{{ session('success') }}",
    icon: "success"
  });
  </script>
@endif
<script type="text/javascript">
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
          title: "Apakah anda yakin mau menghapus?",
          text: "setelah dihapus data tidak bisa dikembalikan",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, hapus"
        })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection