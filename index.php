<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row header">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img src="./assets/images/logo.png" class="img img-fluid header-img">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner">
                    <div class="banner-text">
                        <h1 class="text">Online Patient Appointment System</h1>
                        <button class="btn btn-primary" onclick="openModal()">Schedule Appointment Now</button>
                        <p><?php
                        session_start();
                        if (isset($_SESSION['response_data'])) {
                            echo $_SESSION['response_data'];
                        }
                        ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="aboutus-header">
                        <h1>About Us</h1>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="aboutus-para p-3">
                        Welcome to Online Patient Appointment system, your one-stop solution for all your medical
                        appointment booking needs. We are a user-friendly online platform designed to simplify the
                        process of booking appointments with healthcare professionals.</p>

                    <p class="p-3">At Online Patient Appointment system, we understand the importance of your time and
                        your health. Our platform is designed to make the appointment booking process as simple and
                        convenient as possible, allowing you to book appointments at any time and from anywhere. Whether
                        you need to book an appointment with a doctor, dentist, or any other healthcare
                        professional, we have got you covered.</p>

                    <p class="p-1">
                        We are committed to providing the best possible user experience for our patients and healthcare
                        professionals. Our customer support team is available 24/7 to help you with any questions or
                        concerns you may have.

                    </p>
                    <p class="p-2">
                    Thank you for choosing Online Patient Appointment system. We look forward to helping you find
                        the healthcare professionals you need and making your healthcare journey a smooth and convenient
                        experience.
                    </p>
                </div>
            </div>
        </div>
        <?php include_once("./assets/include/footer.php")?>
    </div>
    <!-- form modal start -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formAppoi" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formAppoi">Appointment Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="appointment_form" class="py-2" method="POST"
                        action="./assets/function/appoinementForm.php">
                        <div class="row" id="appointment">
                            <div class="col-6" id="frm-field">
                                <div class="form-group">
                                    <label for="name" class="control-label">Fullname</label>
                                    <input type="text" class="form-control" name="name" value="" required=""
                                        id="fullname">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="" required="">
                                </div>
                                <div class="form-group">
                                    <label for="contact" class="control-label">Contact</label>
                                    <input type="text" class="form-control" name="contact" value="" required="">
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="control-label">Gender</label>
                                    <select type="text" class="custom-select" name="gender" required="">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dob" class="control-label">Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" value="" required="">
                                </div>
                                <div class="form-group">
                                    <label for="ailment" class="control-label">ailment</label>
                                    <textarea class="form-control" name="ailment" rows="3" required=""></textarea>
                                </div>
                            </div>

                            <div class="col-6">

                                <div class="form-group">
                                    <label for="address" class="control-label">Address</label>
                                    <textarea class="form-control" name="address" rows="3" required=""></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="date_sched" class="control-label">Appointment</label>
                                    <input type="datetime-local" class="form-control" name="date_sched" value=""
                                        required="">
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-end w-100 form-group">
                                <button class="btn-primary btn">Submit Appointment</button>
                                <button class="btn-light btn ml-2" type="button" data-dismiss="modal">Cancel</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- form modal end -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="./assets/js/main.js"></script>
</body>

</html>