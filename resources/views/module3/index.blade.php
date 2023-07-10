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
            <!-- [ Background-Utilities ] start -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Background Utilities</h5>
                        <span class="d-block m-t-5">Regular table background variantsto achieve similar styles.</span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-primary">
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr class="bg-success">
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="bg-warning">
                                        <td>5</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="bg-danger">
                                        <td>7</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Background-Utilities ] end -->
            <!-- [ Contextual-table ] start -->
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Contextual Classes</h5>
                        <span class="d-block m-t-5">For Make row Contextual add Contextual class like <code>.table-success</code> in <code> tr tag</code> and For cell add Contextual class in <code> td or th tag</code> .</span>
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
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-active">
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr class="table-success">
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td>5</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>7</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="table-info">
                                        <td>9</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
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
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
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
