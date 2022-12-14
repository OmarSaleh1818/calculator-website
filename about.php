<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Font awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
     <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
     <!-- //Font awesome -->

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <!--//Google Fonts--> 

    <link rel ="stylesheet" href="css/style.css">
    <title>ABOUT ME </title>
</head>
<body>

    <!-- HEADER -->
    <?php include("includes/header.php");?>
    <!-- /HEADER -->

    <div class="about-wthree">
        <h2 class="title" style="color: white !important;">About Me</h2>
        <div class="furniture">
            <div class="container">
                <p>

                </p>
            </div>	
        </div> 
    </div>
    <div class="statistics">
        <div class="container">
            <h2 class="w3l_head w3l_head1" style="text-align: center; background-color: #7e3333; color:white !important;">My information</h2>
            <div class="statistics-grids">
                <div class="col-md-3 statistics-grid" style="text-align: center; padding : 10px; border: 1px solid #7e3333;">
                    <h2 style="color:#7e3333">My Name</h2>
                    <h4><div class="counter numscroller"> Omar Abdullah Mahroos</div></h4>
                </div>
                <div class="col-md-3 statistics-grid "style="text-align: center; padding : 10px; border: 1px solid #7e3333;">
                    <h2 style="color:#7e3333">My Age</h2>
                    <h4><div class="counter numscroller">23 years old</div></h4>
                </div>
                <div class="col-md-3 statistics-grid" style="text-align: center; padding : 10px; border: 1px solid #7e3333;">
                    <h2 style="color:#7e3333">My UniverSity</h2>
                    <h4><div class="counter numscroller">Arab Open UniverSity</div></h4>
                </div>
                <div class="col-md-3 statistics-grid" style="text-align: center; padding : 28px; border: 1px solid #7e3333;">
                    <h2 style="color:#7e3333">My academic major</h2>
                    <h4><div class="counter numscroller">Information Technology And Computing (IT)</div></h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        const searchIcon = document.querSelector('.search-icon');
        const headerSearchForm = document.querSelector('.header-search-form');
        const searchInput = document.querSelector('.search-input');

        function toggleSearchBar() {
            searchIcon.classList.toggle('hide');
            headerSearchForm.classList.toggle('hide');
            searchInput.focus();
        }

        searchIcon.addEventListener('click', toggleSearchBar)

        searchInput.addEventListener('blur', toggleSearchBar)
    </script>

    <?php include("includes/footer.php"); ?>

</body>
</html>