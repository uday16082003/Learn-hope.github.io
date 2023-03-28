<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteers</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="stylenew3.css" rel="styleSheet">
    <!-- This is for css of aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <section class="textsection" style="background: #e5e5e5; margin: 0px;  border: 1px solid  #e5e5e5; ">
        <div id="texts" style="display: block; margin: auto; width: fit-content;">
            <h1 class="ml12">Volunteers</h1>
        </div>
    </section>



    <section class="header" id="header">
        <div class="container">
            <div class="info text-center">

            </div>
        </div>
    </section>
    <!--End Section Header-->

    <br>
    <br>
    <br>
    <br>

    <section class="past">

        <h1 style="text-align: center; font-family:'Rancho,cursive'; " data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="1000" class="ml12">Past Events</h1>

        <div class="cardholder" style="margin-bottom:10px; border:3px solid #e5e5e5;">

            <div id="container1" data-aos="fade-up-right" data-aos-easing="linear" data-aos-duration="1000">
                <div class="product-details">

                    <h1>Book Donation</h1>

                    <!-- The most important information about the product -->
                    <p class="information" style="font-family:'Rancho,cursive';"> Book donation camp, organised by
                        Social Activity Club of AIB College, Dhule.</p>

                </div>


                <div class="product-image">

                    <img src="./v2.png" alt="Omar Dsoky">

                </div>
                <!--  End product image  -->

            </div>

            <!-- This is for the second cards  -->
            <div id="container2" data-aos="fade-up-left" data-aos-easing="linear" data-aos-duration="1000"
                style="margin-top: 20px;">

                <div class="product-details">

                    <h1>Educational Camp</h1>

                    <!-- The most important information about the product -->
                    <p class="information" style="font-family:'Rancho,cursive';">

                        A teaching camp was organised by Teaching Society of AET, Pune.

                    </p>

                </div>


                <div class="product-image">

                    <img src="./v31.png" alt="Omar Dsoky">

                </div>
                <!--  End product image  -->

            </div>
            <!-- This is  end for the second cards  -->

        </div>

    </section>


    <hr style="
    border: dotted #ff5f9e 6px;
    border-bottom: none;
    width: 4%;
    margin-right: auto;
    margin-left: auto;
    margin-top: 60px;
">
    <br>

    <br>




    <!--Start Section Gallery   -->
    <section id="" class="" style="background-color: #e5e2e2; border: 1px solid  #e5e2e2 ; margin-bottom: 4px;">

        <h1 style="text-align: center; font-family:'Rancho,cursive'; " class="ml12" data-aos="fade-up-right"
            data-aos-easing="linear" data-aos-duration="1000">Upcoming Events</h1>

        <div class="cardholder" style="margin-bottom:10px; ">

            <div id="container1" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <div class="product-details">

                    <h1>Drawing Workshop</h1>

                    <!-- The most important information about the product -->
                    <p class="information" style="font-family:'Rancho,cursive';">Organized by <a
                            href="https://www.vit.edu/" style="text-decoration: none; color: black;">VIT Pune <br> <br> Contact Details <br> SW&D </a> </p>

                </div>


                <div class="product-image">

                    <img src="./v4.png" alt="Omar Dsoky">

                </div>
                <!--  End product image  -->

            </div>


    </section>
    <!--End Section Gallery   -->

    <script>

        let header = document.getElementById("header");

        window.addEventListener('DOMContentLoaded', () => {



            setTimeout(() => {
                var textWrapper = document.querySelector('.ml12');
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                anime.timeline({ loop: false })
                    .add({
                        targets: '.ml12 .letter',
                        translateX: [40, 0],
                        translateZ: 0,
                        opacity: [0, 1],
                        easing: "easeOutExpo",
                        duration: 1200,
                        delay: (el, i) => 500 + 30 * i
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
                window.open("dashboard4.html");
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