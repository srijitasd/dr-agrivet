<?php
	include('LTE-header.php');
	include('LTE-sidebar.php');
	include "./action/connection.php";
  	$sql = "SELECT * FROM client_details";
	$query = mysqli_query($conn, $sql);
?>

<style>
	
.online-status, .offline-status  {
	height: 0.5rem;
	width: 0.5rem;
	border-radius: 50%;
	margin-right: 1rem;
}
	
.online-status {
	background-color: green;
	
}
	
.offline-status {
	background-color: red;
}	
	
.status-container  {
	display: flex;
	justify-content: left;
	align-items: baseline;
}

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 font-color-grey">Client Details</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php" class="font-base-color">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="client_details.php" class="font-base-color">Client Details</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
           <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body p-2 ">
					  <div class="table-responsive ip_data_table">
						<table class="table table-hover text-nowrap" id="ip_data_table">
						  <thead>
							<tr>
							  <th>ID</th>
							  <th>CITY</th>
							  <th>IP</th>
							  <th>Date</th>
							  <th>TIME</th>
							  <th>STATUS</th>
							</tr>
						  </thead>
						  <tbody id="client-table-body">
						  </tbody>
						</table>
					  </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
        </div>
    </div>
</div>



<!--footer-->
<?php include '../../partials/footer.php';?>