<footer class="<?= $ft_bg ?>">
    <div class="ft-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="ft-info">
                        <img src="" alt="Footer Logo Image">
                        <h1>Armando</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, aperiam. Iusto,
                            temporibus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ft-links">
                        <ul>
                            <h3>Contact Details</h3>
                            <li>
                                <a href="tel:#">+1 123 456 789</a>
                            </li>
                            <li>
                                <a href="mailto:#">info@example.com</a>
                            </li>
                            <li>
                                <p>
                                    114 Lorem, ipsum Lorem, ipsum dolor.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ft-form text-center">
                        <h3>Contact Now</h3>
                        <form action="" method="post">
                            <div class="form-group">
                                <input class="w-half form-control" type="text" name="f_name" placeholder="First Name">
                                <input class="w-half form-control" type="text" name="l_name" placeholder="Last Name">
                                <textarea class=" form-control" name="message" rows="4"
                                    placeholder="Your Message"></textarea>
                                <input class=" form-control" type="email" placeholder="Enter Your Email">
                                <button type="submit" name="submit_btn"><i class="fa fa-paper-plane"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ft-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="copyright">Copyright &copy; 2025. All Rights Reserved. &nbsp;<a href="#">Armando</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/fontawesome.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
    integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="assets/js/main.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", (event) => {
    gsap.fromTo(".circle-inner .dot",
    {scale: .6},
    {
        scale: 1.1,
        duration: 2,
        repeat: -1,
        yoyo: true,
        ease: "ease"
    })
    gsap.fromTo(".ts-circle",
        { rotate: '45deg'},
        { rotate: '180deg', duration: 50, ease: "linear", repeat: -1, yoyo: true}
    )
});
</script>