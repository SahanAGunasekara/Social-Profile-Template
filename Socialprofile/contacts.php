<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="icon" href="New folder\logo.jpg" />
    <title>Alan Smith | Contacts </title>
</head>

<body class="background">
    <div class="container-fluid">
        <?php
        include "header.php"
        ?>
        <div class="row text-center mt-5">
            <p>get in touch</p>
            <h1>CONTACT</h1>

        </div>
        <div class="row justify-content-center ">
            <div class="col-12 col-lg-8 mt-4">
                <div class="row">
                    <div class="col-11 col-lg-6">
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <i class="bi bi-whatsapp fs-3 text-success"></i>
                            </div>
                            <div class="col-6 col-lg-8">
                                <p>+94 12 345 6789</p>
                            </div>

                        </div>
  
                        <div class="row mt-3">
                            <div class="col-6 col-lg-4">
                                <i class="bi bi-telephone-fill fs-3 "></i>
                            </div>
                            <div class="col-6 col-lg-8">
                                <p>94 12 345 6789</p>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-6 col-lg-4">
                                <i class="bi bi-envelope-at-fill fs-3 text-info-emphasis"></i>
                            </div>
                            <div class="col-6 col-lg-8">
                                <p>example@gmail.com</p>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-6 col-lg-4">
                                <i class="bi bi-geo-alt-fill fs-3 text-danger"></i>
                            </div>
                            <div class="col-6 col-lg-8">
                                <p>120/3 Newyork, America</p>
                            </div>

                        </div>


                    </div>


                    <div class="col-12 col-lg-6  border-dark border-start">
                        <form class="text-dark">
                            <h5>Your Name</h5>
                            <input class="form-control" type="text" placeholder="Name" id="name">
                            <h5 class="mt-3">Your Email</h5>
                            <input class="form-control" type="email" placeholder="Email" id="mail">
                            <h5 class="mt-3">Your message</h5>

                            <textarea class="form-control" placeholder="Your message here" id="floatingTextarea2Disabled" style="height: 100px"> </textarea>
                            

                        </form>
                    </div>


                </div>
            </div>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>