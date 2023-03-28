<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="stylenew2.css" rel="styleSheet">
    <!-- This is for css of aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>


<body>

    <section class="header" id="header">
        <div class="container">
            <div class="info text-center">
                <h2 id="ngo" class="ml2">Communities</h2>
                <p>
            
                </p>

            </div>
        </div>
    </section>
    <!--End Section Header-->

    <!--Start Section Gallery   -->
    <section id="gallery" class="gallery text-center">
        <div class="container1">
            <h1 class="main-h1" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Communities
                Impacted</h1>
            <p class="main-p" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                Have a look at the communities that have been Impacted by Our Platform
            </p>
            <div class="ga-box" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="c1.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Disabled women</h4>
                    <i class="fa fa-camera " aria-hidden="true"></i>
                </div>
            </div>
            <div class="ga-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="c2.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Senior citizens</h4>
                    <i class="fa fa-fire " aria-hidden="true"></i>
                </div>
            </div>
            <div class="ga-box" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="c3.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Tribal Community</h4>
                    <i class="fa fa-heart " aria-hidden="true"></i>
                </div>
            </div>
            <div class="ga-box" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="c4.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Rural Children</h4>
                    <i class="fa fa-coffee " aria-hidden="true"></i>
                </div>
            </div>
            <div class="ga-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="c5.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Ethnic Minority</h4>
                    <i class="fa fa-heart " aria-hidden="true"></i>
                </div>
            </div>
            <div class="ga-box" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                <div>
                    <img src="c6.png" alt="gallery Images" />
                </div>
                <div class="dis">
                    <h4>Social marginalized groups</h4>
                    <i class="fa fa-heart " aria-hidden="true"></i>
                </div>
            </div>
    </section>
    <!--End Section Gallery   -->

    <!--Start Section Contact-->
    <section id="contact" class="contact">
        <div class="container2">
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

        let header = document.getElementById("header");

        window.addEventListener('DOMContentLoaded', () => {



            setTimeout(() => {
                var textWrapper = document.querySelector('.ml2');
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                anime.timeline({ loop: false })
                    .add({
                        targets: '.ml2 .letter',
                        scale: [4, 1],
                        opacity: [0, 1],
                        translateZ: 0,
                        easing: "easeOutExpo",
                        duration: 950,
                        delay: (el, i) => 70 * i
                    })
            }, 3000)


        })

        let button = document.getElementById('send');

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