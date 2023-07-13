<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $module->title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	@include('components/loader')
	<!-- [ Pre-loader ] End -->

	<!-- [ Sidebar ] start -->
	@include('components/sidebar')
	<!-- [ Sidebar ] end -->

	<!-- [ Nav ] start -->
	@include('components/nav')
	<!-- [ Nav ] end -->
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        @include('components/breadcrumb')
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Contextual-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tabel Karyawan</h5>
                        <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addKaryawan">Add Data</button>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <div class="float-right">
                                <label for="username-filter">Filter by Username:</label>
                                <select id="username-filter">
                                    <option value="">All</option>
                                    <option value="Otto">Twitter</option>
                                    <option value="Jacob">Fat</option>
                                    <option value="Larry">Mdo</option>
                                </select>
                                <label for="search-box">Search:</label>
                                <input type="text" id="search-box">
                            </div>
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tableKaryawan as $key => $tk)
                                    <tr class="table">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $tk->name }}</td>
                                        <td>{{ $tk->email }}</td>
                                        <td>{{ $tk->phone }}</td>
                                        <td></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn-icon btn-sm btn-primary"><i class="feather icon-edit" data-toggle="modal" data-target="#editKaryawan_{{ $tk->id }}"></i></button>
                                                <button class="btn-icon btn-sm btn-info"><i class="feather icon-eye"></i></button>
                                                <button class="btn-icon btn-sm btn-danger"><i class="feather icon-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- Modal Edit --}}
                                    <div id="editKaryawan_{{ $tk->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Karyawan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="{{ route('edit.karyawan') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 text-center"> 
                                                                <div>
                                                                    @if ($tk->image > 0)
                                                                    <img src="{{ 'assets/images/user/'.$person->image }}" style="height: auto; width:150px">
                                                                    @else
                                                                    <img src="{{ 'assets/images/user/no_img.jpg' }}" class="img-radius" style="height: auto; width:150px">
                                                                    @endif
                                                                </div>
                                                                <div class="mt-2 mb-4 d-flex justify-content-center">
                                                                    <input type="file" class="form-control form-control-sm" style="width: 250px; height:40px" name="image">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 text-center"> 
                                                                <div class="mt-2 mb-4 d-flex justify-content-center">
                                                                    <label for="">Data Diri</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group row">
                                                                    <label for="name" class="col-sm-3 col-form-label">Nama</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ $tk->name }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control form-control-sm" name="address" id="address" value="{{ $tk->address }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="dob" class="col-sm-3 col-form-label">DoB</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="date" name="dob" class="form-control form-control-sm" id="dob" value="{{ $tk->dob }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group row">
                                                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="email" name="email" class="form-control form-control-sm" id="email" value="{{ $tk->email }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control form-control-sm" name="phone" id="phone" value="{{ $tk->phone }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                                                                    <div class="col-sm-9">
                                                                        <select name="gender" id="gender" class="form-control">
                                                                            <option value="">Please Select</option>
                                                                            <option value="male" @if($tk->gender == 'male') selected @endif>Male</option>
                                                                            <option value="female" @if($tk->gender == 'female') selected @endif>Female</option>
                                                                          </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 text-center"> 
                                                                <div class="mt-2 mb-4 d-flex justify-content-center">
                                                                    <label for="">Tanggungan</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group row">
                                                                    <label for="name" class="col-sm-3 col-form-label">Anak</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ $tk->name }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group row">
                                                                    <label for="name" class="col-sm-3 col-form-label">Lain-lain</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ $tk->name }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" class="form-control form-control-sm" name="id" value="{{ $tk->id }}">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Modal Edit --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Contextual-table ] end -->
            
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
{{-- Modal Karyawan --}}
<div id="addKaryawan" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('add.karyawan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 text-center"> 
                            <div class="d-flex justify-content-center">
                                <img id="default" src="assets/images/user/no_img.jpg" class="img" style="height: auto; width:150px">
                                <img id="previewImage" class="img" style="height: auto; width:150px; display:none;">
                            </div>
                            <div class="mt-2 mb-4 d-flex justify-content-center">
                                <input type="file" class="form-control form-control-sm" style="width: 250px; height: 40px" name="image" accept="image/*" onchange="previewFile(event)">
                            </div>
                        </div>
                        <div class="col-sm-12 text-center"> 
                            <div class="mt-2 mb-4 d-flex justify-content-center">
                                <label for="">Data Diri</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ $tk->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="address" id="address" value="{{ $tk->address }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dob" class="col-sm-3 col-form-label">DoB</label>
                                <div class="col-sm-9">
                                    <input type="date" name="dob" class="form-control form-control-sm" id="dob" value="{{ $tk->dob }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control form-control-sm" id="email" value="{{ $tk->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="phone" id="phone" value="{{ $tk->phone }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="male" @if($tk->gender == 'male') selected @endif>Male</option>
                                        <option value="female" @if($tk->gender == 'female') selected @endif>Female</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center"> 
                            <div class="mt-2 mb-4 d-flex justify-content-center">
                                <label for="">Tanggungan</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Anak</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ $tk->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Lain-lain</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ $tk->name }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" class="form-control form-control-sm" name="id" value="{{ $tk->id }}">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Modal Karyawan --}}
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script>
        function previewFile(event) {
          var preview = document.getElementById('previewImage');
          var defaultImage = document.getElementById('default');
          var file = event.target.files[0];
          var reader = new FileReader();
        
          reader.onloadend = function () {
            preview.src = reader.result;
            preview.style.display = 'block';
            defaultImage.style.display = 'none';
          }
        
          if (file && file.type.match('image.*')) {
            reader.readAsDataURL(file);
          } else {
            preview.src = "";
            preview.style.display = 'none';
            defaultImage.style.display = 'block';
          }
        }
        </script>
    <script>
        $(document).ready(function() {
        $('#editKaryawan').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var karyawanId = button.data('id');
            // Lakukan sesuatu dengan karyawanId, misalnya tampilkan data karyawan yang akan diedit di modal
        });
        });
    </script>
    <script>
        const select = document.getElementById('username-filter');
        const rows = document.querySelectorAll('#myTable tbody tr');
      
        select.addEventListener('change', function() {
          const selectedValue = this.value.toLowerCase();
          rows.forEach(row => {
            const username = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
            if (selectedValue === '' || username === selectedValue) {
              row.style.display = '';
            } else {
              row.style.display = 'none';
            }
          });
        });
      </script>
    <script>
        $(document).ready(function() {
          $('#search-box').on('keyup', function() {
            const searchText = $(this).val().toLowerCase();
            $('#myTable tbody tr').filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
          });
        });
    </script>
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
</body>

</html>
