<!-- Navbar -->
@include('layouts.header');
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<div class="main-sidebar">
  @include('layouts.sidebar');
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard Periksa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Detail Periksa</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Tanggal</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>Tensi</th>
                <th>Keterangan</th>
                <th>Pasien</th>
                <th>Dokter</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_periksa as $periksa)
              <tr>
                <td>{{ $periksa->id }}</td>
                <td>{{ $periksa->tanggal }}</td>
                <td>{{ $periksa->berat }}</td>
                <td>{{ $periksa->tinggi }}</td>
                <td>{{ $periksa->tensi }}</td>
                <td>{{ $periksa->keterangan }}</td>
                <td>{{ $periksa->pasien_id }}</td>
                <td>{{ $periksa->dokter_id }}</td>
              </tr> <!-- Penutup tag tr yang hilang -->
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- buka modal -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer -->
@include('layouts.footer')
<!-- /.footer -->
