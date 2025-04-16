
<?php

    include 'conn/auth.php';
    $page_title = "ElFire Company || Admin dashboard";
    include 'common-pages/page-form.php';
    

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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Elfire </a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Welcome!</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Welcome!</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">

                     
                  <!-- Todo-->
                    <div class="card" style="width: 100%;">
                        <div class="card-body p-0" style="width: 100%;">
                            <div class="p-3">
                                <div class="card-widgets">
                                    <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                                    <a data-bs-toggle="collapse" href="#products-data" role="button" aria-expanded="false" aria-controls="products-data"><i class="ri-subtract-line"></i></a>
                                    <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                                </div>
                                <h5 class="header-title mb-0">Projects data</h5>
                            </div>

                            <div id="products-data" class="collapse show">
                                <!-- Search Form -->
                                <div class="p-3">
                                    <input type="text" id="product_input" class="form-control" onkeyup="search_products()" placeholder="Search for projects.." title="Search for a project ..">
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-hover mb-0" id="product_table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Title</th>
                                                <th>Location</th>
                                                <th>Owner</th>
                                                <th>Cansultant</th>
                                                <th>Scope</th>
                                                <th>Image</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $num = 1;
                                            $portfolio_sel = $conn->prepare("SELECT * FROM portfolio");
                                            $portfolio_sel->execute();
                                            foreach ($portfolio_sel as $portfolio_sq) {
                                                $product_image = "data:" . $portfolio_sq['file_Type'] . ";base64," . base64_encode($portfolio_sq['file']);

                                                echo '
                                                    <tr>
                                                        <td><b>' . $num++ . '</b></td>
                                                        <td>' . $portfolio_sq['name'] . '</td>
                                                        <td>' . $portfolio_sq['location'] . '</td>
                                                        <td>' . $portfolio_sq['owner'] . ' </td>
                                                        <td>' . $portfolio_sq['Consultant'] . '</td>
                                                        <td>' . $portfolio_sq['scope'] . '</td>
                                                        <td><img src="'.$product_image.'" width=100px></td>
                                                        <td><a href="edit-project.php?id=' . $portfolio_sq['id'] . '"><i class="fa fa-edit edit"></i></a></td>
                                                        <td><i class="fa fa-trash trash" onclick="confirmDeleteProducts(' . $portfolio_sq['id'] . ')"></i></td>
                                                    </tr>';
                                            }
                                            ?>
                                        </tbody>
                                        <button class="btn btn-primary" type="submit"><a href="projects.php" style="color:white">See all</a></button>
                                        <button class="btn btn-primary" type="submit"><a href="add-project.php" style="color:white;margin:20px">Add new  <i class="fa fa-plus"></i></a></button>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-->
                    <script>
                        function search_products() {
                            var input, filter, table, tr, td, i, j, txtValue;
                            input = document.getElementById("product_input");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("product_table");
                            tr = table.getElementsByTagName("tr");

                            // Loop through all table rows, and hide those who don't match the search query
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td");
                                for (j = 0; j < td.length; j++) {
                                    if (td[j]) {
                                        txtValue = td[j].textContent || td[j].innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                            break; // Break out of inner loop if match found
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }
                            }
                        }

                        function confirmDeleteProducts(projectId) {
                            if (confirm("Are you sure you want to delete this project entry?")) {
                                window.location.href = "deleteproject.php?project-id=" + projectId;
                            }
                        }
                    </script>



                                            </tbody>
                                           

                                        </table>
                                    </div>
                                </div>
                            </div>                           
                        </div> <!-- end card-->
                        

                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <?php echo $footer; ?>

        </div>
        <!-- wrapper -->
    </body>
</html>
