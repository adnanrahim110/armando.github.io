<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armando</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/splide.min.css"
        integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
    <header>
        <?php include "includes/navbar.php" ?>
    </header>
    <main>
        <section class="hero-sec contact-hero d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="hs_ch-img">
                            <img src="" alt="Contact Page Image">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column align-items-center justify-content-center text-center">
                        <h1>
                            Armando. <br>
                            Lorem ipsum dolor sit, amet consectetur
                        </h1>
                        <a href="#" class="btn btn-main">Buy Now</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-sec sec-padding">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="cs-img">
                            <img src="" alt="Contact From Image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="" method="post" class="text-center">
                            <h1>Let's Get In Touch</h1>
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-6">
                                    <input class="form-control" type="text" name="f_name" placeholder="First Name">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input class="form-control" type="text" name="l_name" placeholder="Last Name">
                                </div>
                                <div class="col-12 col-lg-12">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <input class="form-control" type="email" placeholder="Enter Your Email">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <button type="submit" name="submit_btn" class="btn btn-main btn-s">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $ft_bg = "secondary-bg"; include "includes/footer.php" ?>
</body>

</html>