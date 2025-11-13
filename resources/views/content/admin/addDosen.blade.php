@extends('template.adminLayout')

@section('admincontent')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Tambah Dosen</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="row">

                            <div class="col-lg-12">
                                @if (Session::get('action') == 'success')
                                <div class="alert alert-success mb-3">
                                    {{ Session::get('result') }}
                                </div>
                                @endif
                                <form method="post" enctype="multipart/form-data" action="{{ route('thumbnail.upload.post') }}">
                                    {{ csrf_field() }}
                            </div>

                            <div class="col-lg-6">
                                <label>Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Ex : fulan,S.Kom" minlength="20" maxlength="100" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label>Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Ex : Fulan@example.com" minlength="20" maxlength="100" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label>Jenis Dosen</label>
                                <select class="form-control show-tick" name="jnsDosen" required>
                                    <option value="">- Dosen -</option>
                                    <option value="IF">Teknik Informatika</option>
                                    <option value="SI">Sistem Informasi</option>
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label>Foto</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="foto" id="foto" class="form-control" placeholder="Foto Dosen" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <label>Mengajar</label>
                                <div class="form-group">
                                    <div class="form-line" id="addMk">
                                        <input type="text" name="kdMk[]" id="kdMk" class="form-control" placeholder="kode MK" >
                                        <input type="text" name="matkul[]" id="matkul" class="form-control" placeholder="Nama MK" >
                                    </div>
                                </div>
                                <button type="button" class="add_field" id="tambahMk">Tambah Matakuliah</button>
                            </div>
                            
                            <div class="col-lg-6">
                                <label>Pendidikan</label>
                                <div class="form-group">
                                    <div class="form-line" id="addPendidikan">
                                        <input type="text" name="tahun[]" id="tahun" class="form-control" placeholder="Tahun" >
                                        <input type="text" name="tempat[]" id="tempat" class="form-control" placeholder="Stmik Bandung ,bachelor , Informatics Engineering" >
                                    </div>
                                </div>
                                <button type="button" class="add_field" id="tambahPendidikan">Tambah Pendidikan</button>
                            </div>

                            <div class="col-lg-12">
                                <label>Deskripsi</label>
                                <span>(Indonesia)</span>
                                <textarea name="content_id" id="content_id"></textarea>
                            </div>
                            
                            <div class="col-lg-12" align="right">
                                <button type="submit" class="btn bg-blue waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>Publish</span>
                                </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
        $("#tambahMk").click(function(e) {
            e.preventDefault();
  
            // make a separation line
            $("#addMk").append('<hr width="300px">');
  
            // append the input field as your needs
            $("#addMk").append('<input type="text" name="kdMk[]" id="kdMk" class="form-control" placeholder="kode MK"><br>');
            $("#addMk").append('<input type="text" name="matkul[]" id="matkul" class="form-control" placeholder="Nama MK">');
        });
        $("#tambahPendidikan").click(function(e) {
            e.preventDefault();
  
            // make a separation line
            $("#addPendidikan").append('<hr width="300px">');
  
            // append the input field as your needs
            $("#addPendidikan").append('<input type="text" name="tahun[]" id="kdMk" class="form-control" placeholder="tahun"><br>');
            $("#addPendidikan").append('<input type="text" name="tempat[]" id="matkul" class="form-control" placeholder="Stmik Bandung ,bachelor , Informatics Engineering">');
        });
</script>
</section>
@endsection