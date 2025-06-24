<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="bootstrap.min.css" rel="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="bootstrap.css" rel="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="icon" href="New folder\logo.jpg" />
    <title>Sahan Akalanka | Contacts </title>
</head>

<body class="background">
    <div class="container-fluid">
        <?php
        include "header.php"
        ?>
        <div class="row text-center mt-3">
            
            <h1>CONTACT</h1>

        </div>
        <div class="row justify-content-center ">
            <div class="col-12 col-lg-8 mt-4">
                <div class="row">
                    <div class="col-11 col-lg-6" style="margin-top: 100px;">
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <i class="bi bi-whatsapp fs-3 text-success"></i>
                            </div>
                            <div class="col-6 col-lg-8">
                                <p>+94 76 216 2771</p>
                            </div>

                        </div>
  
                        <div class="row mt-3">
                            <div class="col-6 col-lg-4">
                                <i class="bi bi-telephone-fill fs-3 "></i>
                            </div>
                            <div class="col-6 col-lg-8">
                                <p>+94 71 976 6060</p>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-6 col-lg-4">
                                <i class="bi bi-envelope-at-fill fs-3 text-info-emphasis"></i>
                            </div>
                            <div class="col-6 col-lg-8">
                                <p>dakalankagunasekara2003@gmail.com</p>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-6 col-lg-4">
                                <i class="bi bi-geo-alt-fill fs-3 text-danger"></i>
                            </div>
                            <div class="col-6 col-lg-8">
                                <p>170/7 Saru Uyana , Kalugamuwa</p>
                            </div>

                        </div>


                    </div>


                    <div class="col-12 col-lg-6  border-dark border-start">
                        <form class="text-dark">
                            <h5>Your Name</h5>
                            <input class="form-control" type="text" placeholder="Name" id="name" name="name">
                            <h5 class="mt-3">Your Email</h5>
                            <input class="form-control" type="email" placeholder="Email" id="email" name="email">
                            <h5 class="mt-3">Subject</h5>
                            <input class="form-control" type="test" placeholder="subject" id="subject" name="subject">
                            <h5 class="mt-3">Your message</h5>

                            <textarea class="form-control" placeholder="Your message here" id="message" style="height: 100px" name="message"> </textarea><br/>
                        <div class="text-center d-grid">
                            <button class="btn btn-success" onclick="contact();">Submit</button>
                        </div>

                        </form>
                    </div>


                </div>
            </div>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>