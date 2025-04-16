<?php 
    $page_title = "Elfire || Add project";
    include 'common-pages/page-form.php';
    include 'conn/auth.php';
?>

<!DOCTYPE html>
<html lang="en">

   <?php echo $meta; ?>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
           <!-- header -->
            <?php echo $header; ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Elfire</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Add Data</a></li>
                                            <li class="breadcrumb-item active">Add project</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add project</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                      

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="header-title mb-0">Add project</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="rootwizard">
                                                <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                                    <li class="nav-item" data-target-form="#accountForm">
                                                        <a href="#first" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                            <i class="ri-profile-line fw-normal fs-20 align-middle me-1"></i>
                                                            <span class="d-none d-sm-inline">Data</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" data-target-form="#mediaForm">
                                                        <a href="#second" data-bs-toggle="tab" data-toggle="tab"  class="nav-link rounded-0 py-2">
                                                            <i class="ri-profile-line fw-normal fs-20 align-middle me-1"></i>
                                                            <span class="d-none d-sm-inline">Media</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" data-target-form="#otherForm">
                                                        <a href="#forth" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                            <i class="ri-check-double-line fw-normal fs-20 align-middle me-1"></i>
                                                            <span class="d-none d-sm-inline">Finish</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content mb-0 b-0">

                                                    <div class="tab-pane" id="first">
                                                        <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Project Name *</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="userName3" name="name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label class="col-md-3 col-form-label" for="description">Location </label>
                                                                        <div class="col-md-9">
                                                                            <textarea name="location" id="" style="width: 100%;" rows="10"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Owner</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="userName3" name="owner" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Consultant</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="userName3" name="Consultant" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Scope</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="userName3" name="scope" >
                                                                        </div>
                                                                    </div>
                                                                    

                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                      <!-- end of form heeeeeeere /s -->
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class="next list-inline-item float-end">
                                                                <!-- <input type="submit" name="add-blog-data" class="btn btn-info"> -->
                                                            </li>
                                                        </ul>
                                                    <!-- </form> -->
                                                    </div>

                                                  
                                                                            
                                                    <div class="tab-pane fade" id="second">
                                                        

                                                        <div class="card-body">
                                                            <div action="" method="POST" enctype="multipart/form-data" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" 
                                                                data-upload-preview-template="#uploadPreviewTemplate">
                                                                <div class="fallback">
                                                                    <input name="file" type="file" required/>
                                                                </div>
                                                                <div class="dz-message needsclick">
                                                                    <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                                                    <h3>Upload image for your project</h3>

                                                                </div>
                                                            </div>
                                                                <div class="dropzone-previews mt-3" id="file-previews"></div>  

                                                        </div>
 
                                                       
                                                    </div>
                                                    
                                                    <div class="tab-pane fade" id="forth">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="text-center">
                                                                        <h2 class="mt-0">
                                                                            <i class="ri-check-double-line"></i>
                                                                        </h2>
                                                                        <h3 class="mt-0">Thank you !</h3>
                                                        
                                                                        <p class="w-75 mb-2 mx-auto">Your project is ready to publish</p>
                                                        
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                        
                                                            <ul class="pager wizard mb-0 list-inline">
                                                            <li class="next list-inline-item float-end">
                                                                <input type="submit" name="add-main-services-data" class="btn btn-info">
                                                            </li>
                                                        </ul>   
                                                        </form>
                                                    </div>
                                                 </div> <!-- end #rootwizard-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> 
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

<?php 
// form data
if (isset($_POST['add-main-services-data'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $owner = $_POST['owner'];
    $Consultant = $_POST['Consultant'];
    $scope = $_POST['scope'];
    
    // File upload
    $file_Name = $_FILES["file"]["name"];
    $file_Type = $_FILES["file"]["type"];
    $file_Tmp = $_FILES["file"]["tmp_name"];
    
    // Compress image and get binary data
    $compressedImage = compressImage($file_Tmp, $file_Type, 60); // Compress image with 75% quality
    
    // Prepare and execute the insert statement
    $ins = $conn->prepare("INSERT INTO portfolio (`name`, `location`, `owner`, `Consultant`, `scope`, `file_Name`, `file_Type`, `file`) 
                           VALUES (:name, :location, :owner, :Consultant, :scope, :file_Name, :file_Type, :file)");

    $ins->bindParam("name", $name);
    $ins->bindParam("location", $location);
    $ins->bindParam("owner", $owner);
    $ins->bindParam("Consultant", $Consultant);
    $ins->bindParam("scope", $scope);
    $ins->bindParam("file_Name", $file_Name);
    $ins->bindParam("file_Type", $file_Type);
    $ins->bindParam("file", $compressedImage, PDO::PARAM_LOB); // Bind as a BLOB

    if ($ins->execute()) {
        echo '<script>window.alert("New project is Published Now!")</script>';
    } else {
        echo '<script>window.alert("Error, Please Try again")</script>';
        var_dump($ins->errorInfo()); // Show error details
    }
}

// Function to compress image
function compressImage($file, $fileType, $quality) {
    $image = null;

    // Load image based on type
    switch($fileType) {
        case 'image/jpeg':
        case 'image/jpg':
            $image = imagecreatefromjpeg($file);
            break;
        case 'image/png':
            $image = imagecreatefrompng($file);
            imagepalettetotruecolor($image); // Ensure PNG is in true color mode for proper compression
            break;
        case 'image/gif':
            $image = imagecreatefromgif($file);
            break;
        default:
            return false;
    }

    // Compress and output the image
    ob_start(); // Start output buffering

    switch($fileType) {
        case 'image/jpeg':
        case 'image/jpg':
            imagejpeg($image, null, $quality); // Compress JPEG to desired quality
            break;
        case 'image/png':
            imagepng($image, null, 9); // Max compression for PNG (0 to 9 scale)
            break;
        case 'image/gif':
            imagegif($image); // No compression control for GIF
            break;
    }

    $compressedImage = ob_get_contents(); // Get the compressed image data
    ob_end_clean(); // End output buffering
    
    imagedestroy($image); // Free memory

    return $compressedImage;
}
?>


<?php echo $footer; ?>