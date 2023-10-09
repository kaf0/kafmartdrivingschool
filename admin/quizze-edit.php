<?php
session_start();
date_default_timezone_set('UTC');
include "../config/db.php";



function queryCount($query)
{
    global $conn;
    $mysql = mysqli_query($conn, $query);
    $mysql = @mysqli_num_rows($mysql);
    return $mysql;
}
$users = queryCount('select id from users');


include 'header.php';
?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h4 class="page-title mb-0">Dashboard</h4>
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#"><?php echo $sitename;?></a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                            </ol>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="float-right d-none d-md-block">
                                                <div class="dropdown">
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        

                    
                        <!-- end row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Edit Quiestions</h4><br><br><br>
                                         <form action="users.php">
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                	<div class="form-header">
	                		<div class="avartar">
								<a href="#">
									<img src="../panel/assets/images/auto.png" class="" alt="" width:150px;>
								</a>
								<div class="avartar-picker">
									<input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1">
										<i class="zmdi zmdi-camera"></i>
										<span>Choose Picture</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="form-holder active">
									<input type="text" value="Test 1" class="form-control">
								</div>
								<div class="form-holder">
									<select name="" id="" class="form-control">
                                        <option value="">Select Region</option>
                                        <option value="" selected>Accra</option>
                                        <option value="" >Kumasi</option>
                                        <option value="" >Brong Ahafo</option>
                                        <option value="" >Volta</option>
                                        <option value="" >Northern Region</option>
                                        <option value="" >Western Region</option>
                                    </select>
								</div>
								<div class="form-holder">
									<input type="text" value="Accra" class="form-control">
								</div>
							</div>
	                	</div>
	                	<div class="form-holder">
							<input type="text" value="Questions from previous written exam tests." class="form-control">
						</div>
						
	                </section>
	                
					<!-- SECTION 2 -->
	                <h4></h4>
	                 <section>
	                	<div class="form-header">
	                		<div class="avartar">
								<a href="#">
									<img src="https://i.imgur.com/7i5pGID.png" class="" alt="">
								</a>
								<div class="avartar-picker">
									<input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1">
										<i class="zmdi zmdi-camera"></i>
										<span>Choose Picture</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="form-holder active">
									<input type="text" value="What to keep in mind in this situation?" class="form-control">
								</div>
								<div class="form-holder">
									<select name="" id="" class="form-control">
                                        <option value=""  >Question Type</option>
                                        <option value="" selected >Multiple Answer</option>
                                        <option value="" >Signle with Pic</option>
                                        <option value="" >Single without Pic</option>
                                    </select>
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1" checked>
                                <input type="text" value="Left side bypass." class="form-control">
                            </div>
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1" checked>
                                <input type="text" value="In accordance with speed." class="form-control">
                            </div>  
                        </div>
                        <div class="row">
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" value="Marked pedestrian crossing." class="form-control">
                            </div>
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" placeholder="Question Four." class="form-control">
                            </div>
                        </div>
						
	                </section>

	                <!-- SECTION 2 -->
	                <h4></h4>
	                 <section>
	                	<div class="form-header">
	                		<div class="avartar">
								<a href="#">
									<img src="https://i.imgur.com/t24r2zK.png" class="" alt="">
								</a>
								<div class="avartar-picker">
									<input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1">
										<i class="zmdi zmdi-camera"></i>
										<span>Choose Picture</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="form-holder active">
									<input type="text" value="What does this traffic sign warn?" class="form-control">
								</div>
								<div class="form-holder">
									<select name="" id="" class="form-control">
                                        <option value=""  >Question Type</option>
                                        <option value="" >Multiple Answer</option>
                                        <option value="" selected>Signle with Pic</option>
                                        <option value="" >Single without Pic</option>
                                    </select>
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" value="The proximity of the coast." class="form-control">
                            </div>
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1" checked>
                                <input type="text" value="Moving bridge." class="form-control">
                            </div>  
                        </div>
                        <div class="row">
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" value="The non -royal road." class="form-control">
                            </div>
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" placeholder="Question Four." class="form-control">
                            </div>
                        </div>
						
                    </section>
                    <!-- SECTION 2 -->
	                <h4></h4>
	                 <section>
	                	<div class="form-header">
	                		<div class="avartar">
								<a href="#">
									<img src="assets/images/users/avatar-6.jpg" class="" alt="">
								</a>
								<div class="avartar-picker">
									<input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1">
										<i class="zmdi zmdi-camera"></i>
										<span>Choose Picture</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="form-holder active">
									<input type="text" value="What tools are included in the B category?" class="form-control">
								</div>
								<div class="form-holder">
									<select name="" id="" class="form-control">
                                        <option value=""  >Question Type</option>
                                        <option value="" >Multiple Answer</option>
                                        <option value="" >Signle with Pic</option>
                                        <option value="" selected>Single without Pic</option>
                                    </select>
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" value="Travelers" class="form-control" checked>
                            </div>
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" value="Motor" class="form-control">
                            </div>  
                        </div>
                        <div class="row">
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" value="Only car" class="form-control">
                            </div>
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" value="Trucks" class="form-control">
                            </div>  
                        </div>
						
                    </section>
                    <!-- SECTION 2 -->
	                <h4></h4>
	                 <section>
	                	<div class="form-header">
	                		<div class="avartar">
								<a href="#">
									<img src="assets/images/users/avatar-6.jpg" class="" alt="">
								</a>
								<div class="avartar-picker">
									<input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1">
										<i class="zmdi zmdi-camera"></i>
										<span>Choose Picture</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="form-holder active">
									<input type="text" value="Where is the stop stopping the vehicle?" class="form-control">
								</div>
								<div class="form-holder">
									<select name="" id="" class="form-control">
                                        <option value="" selected >Question Type</option>
                                        <option value="" >Multiple Answer</option>
                                        <option value="" >Signle with Pic</option>
                                        <option value="" selected>Single without Pic</option>
                                    </select>
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1" checked>
                                <input type="text" value="In the underpass" class="form-control">
                            </div>
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" value="Over the sewer network" class="form-control">
                            </div>  
                        </div>
                        <div class="row">
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" value="Inside the urban area" class="form-control">
                            </div>
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" placeholder="Answer Four" class="form-control">
                            </div>  
                        </div>
						
                    </section>
                    <!-- SECTION 2 -->
	                <h4></h4>
	                 <section>
	                	<div class="form-header">
	                		<div class="avartar">
								<a href="#">
									<img src="https://i.imgur.com/Zv54Bzx.png" class="" alt="">
								</a>
								<div class="avartar-picker">
									<input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1">
										<i class="zmdi zmdi-camera"></i>
										<span>Choose Picture</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="form-holder active">
									<input type="text" value="The driver of the passenger vehicle enters traffic moving back. How do you evaluate this situation?" class="form-control">
								</div>
								<div class="form-holder">
									<select name="" id="" class="form-control">
                                        <option value=""  >Question Type</option>
                                        <option value="" selected>Multiple Answer</option>
                                        <option value="" >Signle with Pic</option>
                                        <option value="" >Single without Pic</option>
                                    </select>
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1" checked>
                                <input type="text" value="Straight, if it does not prevent other traffic participants." class="form-control">
                            </div>
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1" checked>
                                <input type="text" value="Straight, if it does not prevent other traffic participants and ignites all driving indicators." class="form-control">
                            </div>  
                        </div>
                        <div class="row">
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" value="Not straight!" class="form-control">
                            </div>
                            <div class="form-holder1">
                                <input type="checkbox" class="form-check-input tik" id="exampleCheck1">
                                <input type="text" placeholder="Answer Four" class="form-control">
                            </div>  
                        </div>
						
	                </section>
            	</div>
            </form>
            <script>
                
            </script>
                                        
                                         
                                                                              
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
        
                        
        
                     
                

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
<?php include 'footer.php';?>
