<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="stylenew.css" rel="styleSheet">
    <!-- This is for css of aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>


<body>

    <section class="header">
        <div class="container">
            <div class="clearFix"></div>
            <div class="info text-center">
                <h1 id="ngo" class="ml3">Non Governmental Oraganizations</h1>
                    <p>
                        Through collaboration with local communities and various college societies we strive to create a
                        world where everyone has access to quality education. Our programs try to improve the quality
                        education for all.
                    </p>


            </div>
        </div>
    </section>
    <!--End Section Header-->

    <!--Start Section Gallery   -->
    <section id="gallery" class="gallery text-center">
        <div class="container">
            <h1 class="main-h1" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Events Gallery
            </h1>
            <p class="main-p" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                Have a look at your past events gallery, see how much fun we have while helping people <br />Join our
                Programs!
            </p>
            <div class="ga-box" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="1.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Education to underprivileged</h4>
                    <i class="fa fa-camera " aria-hidden="true"></i>
                </div>
            </div>
            <div class="ga-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="2.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Promoting rural education</h4>
                    <i class="fa fa-fire " aria-hidden="true"></i>
                </div>
            </div>
            <div class="ga-box" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="3.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Education to disabled</h4>
                    <i class="fa fa-heart " aria-hidden="true"></i>
                </div>
            </div>
            <div class="ga-box" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="4.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Book donation drive</h4>
                    <i class="fa fa-coffee " aria-hidden="true"></i>
                </div>
            </div>
            <div class="ga-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="9.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Promoting girls education</h4>
                    <i class="fa fa-heart " aria-hidden="true"></i>
                </div>
            </div>
            <div class="ga-box" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="11.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Digital literacy to girls</h4>
                    <i class="fa fa-heart " aria-hidden="true"></i>
                </div>
            </div>
    </section>
    <!--End Section Gallery   -->



    <!--Start Section Contact-->
    <section id="contact" class="contact">
        <div class="container">
            <h1 class="main-h1 text-center">Contact Us</h1>
            <form class="text-center">
                <div class="in">
                    <input type="text" name="username" placeholder="Enter Your Name" autocomplete="on" />
                    <input type="email" name="username" placeholder="Enter Your Email" auto-complate="on" />
                    <input type="tel" name="username" placeholder="Enter Your Phone" autocomplete="on" />
                </div>
                <textarea placeholder="Message"></textarea>
                <button id="send">Send Message</button>
            </form>
        </div>
    </section>


    <script>

        let button = document.getElementById('send');


        window.addEventListener('DOMContentLoaded', () => {

            var textWrapper = document.querySelector('.ml3');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

            anime.timeline({ loop: false})
                .add({
                    targets: '.ml3 .letter',
                    opacity: [0, 1],
                    easing: "easeInOutQuad",
                    duration: 2250,
                    delay: (el, i) => 150 * (i + 1)
                });

        });

        button.addEventListener('click', (e) => {
            e.preventDefault();
            setTimeout(() => {
                alert("Message Sent Sucessfully");
            }, 500);

            setTimeout(() => {
                window.open("index.php");
            }, 2000)
        })



    </script>
    <!-- This is for the Animation On Scroll(AOS) Link2 -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- This is for the Anime JS link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
        integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>