<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>


<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #474e5d;
        font-family: Helvetica, sans-serif;
    }

    /* The actual timeline (the vertical ruler) */
    .timeline {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* The actual timeline (the vertical ruler) */
    .timeline::after {
        content: '';
        position: absolute;
        width: 6px;
        background-color: white;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
    }

    /* Container around content */
    .container {
        padding: 10px 40px;
        position: relative;
        background-color: inherit;
        width: 50%;
    }

    /* The circles on the timeline */
    .container::after {
        content: '';
        position: absolute;
        width: 25px;
        height: 25px;
        right: -17px;
        background-color: white;
        border: 4px solid #FF9F55;
        top: 15px;
        border-radius: 50%;
        z-index: 1;
    }

    /* Place the container to the left */
    .left {
        left: 0;
    }

    /* Place the container to the right */
    .right {
        left: 50%;
    }

    /* Add arrows to the left container (pointing right) */
    .left::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        right: 30px;
        border: medium solid white;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent white;
    }

    /* Add arrows to the right container (pointing left) */
    .right::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        left: 30px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
    }

    /* Fix the circle for containers on the right side */
    .right::after {
        left: -16px;
    }

    /* The actual content */
    .content {
        padding: 20px 30px;
        background-color: white;
        position: relative;
        border-radius: 6px;
    }

    .content_img img {
        width: 100%;
        height: 100%;
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {
        /* Place the timelime to the left */
        .timeline::after {
            left: 31px;
        }

        /* Full-width containers */
        .container {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
        }

        /* Make sure that all arrows are pointing leftwards */
        .container::before {
            left: 60px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        /* Make sure all circles are at the same spot */
        .left::after, .right::after {
            left: 15px;
        }

        /* Make all right containers behave like the left ones */
        .right {
            left: 0%;
        }
    }

    .more_view {
        margin: 0 auto;
        width: 50%;
        text-align: center;
    }

</style>

<div class="wrapper">
</div>

<div class="timeline">
    <?php for ($i = 0; $i < 16; $i++):
        ?>

        <?php if ($i % 2 == 0): ?>

        <div class="container <?php echo "right"; ?>">
            <div class="content row">
                <div class="content_img col-lg-5 pl-0 col-md-12">
                    <img src="https://iso.500px.com/wp-content/uploads/2016/03/stock-photo-142984111.jpg"
                         alt="You need to choose picture">
                </div>
                <div class="content_text col-lg-7 p-0 col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus ad blanditiis esse eum
                        excepturi exercitationem facere fuga incidunt iure magnam molestiae nam necessitatibus nobis
                        odit porro, praesentium, provident quibusdam reiciendis tempora totam vel velit voluptas.
                        Aperiam culpa debitis dolorum eligendi error fuga libero minima nostrum odit perferendis
                        provident quae, recusandae repellendus rerum, voluptate. Amet asperiores beatae debitis, minima
                        nisi rem ullam. Dicta dolorem dolorum esse fuga minus, officia quia quos sed? Nam numquam rerum
                        suscipit. Ad blanditiis laboriosam maiores neque, provident temporibus voluptatibus. Aperiam at,
                        cumque cupiditate debitis dolor ducimus eos excepturi exercitationem illo iusto libero magnam
                        minus molestias nemo nobis nulla optio, praesentium ratione repellat saepe suscipit temporibus
                        totam voluptates..</p>

                </div>
            </div>
        </div>
    <?php else: ?>
        <div  class="container <?php echo "left"; ?>">
            <div class="content row  column">
                <div class="content_img col-lg-5 col-md-12 pl-0">
                    <img src="https://images.unsplash.com/photo-1556103255-4443dbae8e5a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGhvdG9ncmFwaGVyfGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                         alt="You need to choose picture">
                </div>
                <div class="content_text col-lg-12 col-md-12 p-1 pr-4" >
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus ad blanditiis esse eum
                        excepturi exercitationem facere fuga incidunt iure magnam molestiae nam necessitatibus nobis
                        odit porro, praesentium, provident quibusdam reiciendis tempora totam vel velit voluptas.
                        Aperiam culpa debitis dolorum eligendi error fuga libero minima nostrum odit perferendis
                        provident quae, recusandae repellendus rerum, voluptate. Amet asperiores beatae debitis, minima
                        nisi rem ullam. Dicta dolorem dolorum esse fuga minus, officia quia quos sed? Nam numquam rerum
                        suscipit. Ad blanditiis laboriosam maiores neque, provident temporibus voluptatibus. Aperiam at,
                        cumque cupiditate debitis dolor ducimus eos excepturi exercitationem illo iusto libero magnam
                        minus molestias nemo nobis nulla optio, praesentium ratione repellat saepe suscipit temporibus
                        totam voluptates..</p>

                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php endfor; ?>
</div>


<div class="more_view" id="box">
    <button class="target read_more">Show more</button>
</div>


<script>
    let points = document.getElementsByClassName('container');

    //show only first 3 div from loop, rest hide
    $(points).slice(3).hide();

    //click event
    $(".target").click(function () {
        let showPoints = $(points);
        let showText = $(".read_more");

        let value = $(this).text();
        let element = document.getElementById("box");

        if (value == "Show more") {
            showPoints.show("slow");
            showText.text("Show less");
            $('html,body').animate({scrollTop: showText.offset().top}, 'slow');
        } else {
            showPoints.slice(3).hide("slow");
            showText.text("Show more");
            element.scrollIntoView({behavior: "smooth"});
        }
    });

</script>

<div class="second">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dolorem ex nesciunt obcaecati quo reiciendis sint tempora voluptate. Doloribus ex illum ipsa iste laborum nemo quisquam quod. Ab assumenda eius, exercitationem id iste mollitia numquam provident quas quisquam quod? Aliquam aliquid asperiores at autem beatae dicta earum, est ex expedita fuga fugit hic impedit itaque labore maiores nihil numquam odit, possimus quasi qui quia quibusdam quis quisquam ratione recusandae reiciendis rem rerum tenetur ullam, velit. Autem deserunt eaque molestiae nemo quam quod suscipit? Animi corporis, est itaque iusto necessitatibus sapiente sequi. Ad adipisci asperiores beatae est excepturi id nobis quia quidem quisquam sequi soluta tempora totam, vitae! Amet, animi aperiam asperiores aut commodi consequuntur corporis delectus dolor earum eligendi eos eum exercitationem expedita illum in incidunt iste nisi perspiciatis porro, quae quia quis repellat repellendus reprehenderit rerum sed sequi similique tempora ullam unde? Aperiam, illum, officiis. Asperiores blanditiis dolor dolorem, est expedita itaque, neque obcaecati reiciendis, repudiandae suscipit tempora veritatis voluptate voluptates. Architecto dolorem illo ipsam iste laudantium minima officia, sit suscipit totam velit! A, animi deserunt dicta doloribus earum eligendi eum, expedita impedit itaque laudantium minus nam necessitatibus nemo odio officiis qui recusandae repellendus sint tenetur veritatis voluptas voluptate?</p>
    
    <div>
        <img src="https://picjumbo.com/wp-content/uploads/alone-with-his-thoughts-1080x720.jpg" alt="" width="100%">
    </div>
</div>
<div class="third">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dolorem ex nesciunt obcaecati quo reiciendis sint tempora voluptate. Doloribus ex illum ipsa iste laborum nemo quisquam quod. Ab assumenda eius, exercitationem id iste mollitia numquam provident quas quisquam quod? Aliquam aliquid asperiores at autem beatae dicta earum, est ex expedita fuga fugit hic impedit itaque labore maiores nihil numquam odit, possimus quasi qui quia quibusdam quis quisquam ratione recusandae reiciendis rem rerum tenetur ullam, velit. Autem deserunt eaque molestiae nemo quam quod suscipit? Animi corporis, est itaque iusto necessitatibus sapiente sequi. Ad adipisci asperiores beatae est excepturi id nobis quia quidem quisquam sequi soluta tempora totam, vitae! Amet, animi aperiam asperiores aut commodi consequuntur corporis delectus dolor earum eligendi eos eum exercitationem expedita illum in incidunt iste nisi perspiciatis porro, quae quia quis repellat repellendus reprehenderit rerum sed sequi similique tempora ullam unde? Aperiam, illum, officiis. Asperiores blanditiis dolor dolorem, est expedita itaque, neque obcaecati reiciendis, repudiandae suscipit tempora veritatis voluptate voluptates. Architecto dolorem illo ipsam iste laudantium minima officia, sit suscipit totam velit! A, animi deserunt dicta doloribus earum eligendi eum, expedita impedit itaque laudantium minus nam necessitatibus nemo odio officiis qui recusandae repellendus sint tenetur veritatis voluptas voluptate?</p>

    <div>
</body>
</html>