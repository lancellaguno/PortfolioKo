
<?php

$name = "Lance Sebastian M. Llaguno";
$course = "Bachelor of Science in Information Technology";
$school = "Pamantasan ng Lungsod ng Valenzuela";
$email = "lancellaguno69@gmail.com";

$skills = [
    "HTML",
    "CSS",
    "PHP",
    "Java",
    "MySQL"
];

$projects = [
    [
        "title" => "Portfolio Website",
        "description" => "A personal website created using HTML, CSS, and PHP."
    ],
    [
        "title" => "Laundry Waiting Queue",
        "description" => "A website that allows users to organize and track the laundry of clients."
    ],
    [
        "title" => "Bus Route Finder",
        "description" => "A program that can detect the shortest and fastest routes for commuters."
    ]
];

$ironcladImages = [
    ["file" => "ironclad-01.png", "caption" => "Bow View"],
    ["file" => "ironclad-02.png", "caption" => "Port Broadside"],
    ["file" => "ironclad-03.png", "caption" => "Stern View"],
    ["file" => "ironclad-04.png", "caption" => "Starboard Broadside"],
    ["file" => "ironclad-05.png", "caption" => "Overhead View"],
    ["file" => "ironclad-06.png", "caption" => "Forward Bow and Turret"],
    ["file" => "ironclad-07.png", "caption" => "Main Deck and Ship's Boats"],
    ["file" => "ironclad-08.png", "caption" => "Superstructure Side"],
    ["file" => "ironclad-09.png", "caption" => "Casemate and Deck Gun"],
    ["file" => "ironclad-10.png", "caption" => "Stern and Aft Turret"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($name); ?> | Portfolio</title>

    <link rel="stylesheet" href="style.css?v=12">
</head>

<body>

    <!-- NAVIGATION BAR -->

    <header>
        <nav class="navbar">
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </nav>
    </header>


    <main>

        <!-- HOME SECTION -->

        <section id="home" class="hero">
            <div class="hero-content">

                <p class="eyebrow">WELCOME TO MY PORTFOLIO</p>

                <h1>
                    Hello, I'm
                    <span><?php echo htmlspecialchars($name); ?></span>
                </h1>

                <h2>
                    <?php echo htmlspecialchars($course); ?> Student
                </h2>

                <p>
                    I am a student learning web development,
                    programming, and database management.
                    I am also learning 3D modeling.
                </p>

                <a href="#projects" class="btn">
                    View My Projects
                </a>

            </div>
        </section>


        <!-- ABOUT SECTION -->

        <section id="about" class="section">

            <h2>About Me</h2>

            <p>
                My name is <?php echo htmlspecialchars($name); ?>.

                I am currently studying
                <?php echo htmlspecialchars($course); ?>
                at <?php echo htmlspecialchars($school); ?>.

                I enjoy learning about technology, programming,
                and developing useful applications and websites.
                I am continuously improving my skills as an
                aspiring IT professional.

                While IT is my main focus,
                I also want to dive into 3D modelling.
                I have begun my journey with Tinkercad,
                and maybe try out Blender for a new experience.
            </p>

            <!-- PROFILE PICTURE -->

            <div class="about-photo-container">
                <img
                    src="images/MrGwaping.jpg"
                    alt="Portrait of <?php echo htmlspecialchars($name); ?>"
                    class="about-photo"
                >
            </div>

        </section>


        <!-- SKILLS SECTION -->

        <section id="skills" class="section">

            <h2>My Skills</h2>

            <div class="skills-container">
                <span id="rotating-skill">
                    <?php echo htmlspecialchars($skills[0]); ?>
                </span>
            </div>

        </section>


        <!-- PROJECTS SECTION -->

        <section id="projects" class="section">

            <h2>My Projects</h2>

            <!-- EXISTING PROJECT CARDS -->

            <div class="projects-container">

                <?php foreach ($projects as $project): ?>

                    <article class="project-card">

                        <h3>
                            <?php echo htmlspecialchars($project["title"]); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($project["description"]); ?>
                        </p>

                    </article>

                <?php endforeach; ?>

            </div>


            <!-- IRONCLAD MODEL SHOWCASE -->

            <div class="ironclad-showcase">

                <div class="showcase-heading">

                    <p class="showcase-label">
                        3D MODELING PROJECT
                    </p>

                    <h2>
                        <i>Animosity</i>-class Ironclad
                    </h2>

                    <p class="showcase-description">
                        A 3D ship model designed and constructed
                        using Tinkercad. The model features an
                        armored hull, gun turrets, deck structures,
                        masts, funnels, and ship's boats.
                    </p>

                </div>


                <!-- IRONCLAD IMAGE GALLERY -->

                <div class="ironclad-gallery">

                    <?php foreach ($ironcladImages as $image): ?>

                        <figure class="ironclad-card">

                            <button
                                type="button"
                                class="image-open"
                                data-image="images/<?php echo htmlspecialchars($image["file"], ENT_QUOTES); ?>"
                                data-caption="<?php echo htmlspecialchars($image["caption"], ENT_QUOTES); ?>"
                                aria-label="View <?php echo htmlspecialchars($image["caption"], ENT_QUOTES); ?>"
                            >

                                <img
                                    src="images/<?php echo htmlspecialchars($image["file"], ENT_QUOTES); ?>"
                                    alt="Animosity-class Ironclad - <?php echo htmlspecialchars($image["caption"], ENT_QUOTES); ?>"
                                    loading="lazy"
                                >

                            </button>

                            <figcaption>
                                <?php echo htmlspecialchars($image["caption"]); ?>
                            </figcaption>

                        </figure>

                    <?php endforeach; ?>

                </div>

                <p class="gallery-note">
                    Click any image to view it in full size.
                    Use the arrow keys or navigation buttons to browse.
                </p>

            </div>

        </section>


        <!-- CONTACT SECTION -->

        <section id="contact" class="section contact">

            <h2>Contact Me</h2>

            <p>
                Phone No.: +63956-764-6662
            </p>

            <p>
                Email: lancellaguno69@gmail.com
            </p>

            <a
                class="btn"
                href="mailto:<?php echo htmlspecialchars($email); ?>"
            >
                Email Me
            </a>

        </section>

    </main>


    <!-- FOOTER -->

    <footer>
        <p>
            &copy; <?php echo date("Y"); ?>
            <?php echo htmlspecialchars($name); ?>.
            All rights reserved.
        </p>
    </footer>


    <!-- FLOATING IMAGE VIEWER -->

    <div
        id="image-lightbox"
        class="lightbox"
        role="dialog"
        aria-modal="true"
        aria-label="Ironclad image viewer"
        aria-hidden="true"
        inert
    >

        <!-- CLOSE BUTTON -->

        <button
            type="button"
            class="lightbox-close"
            aria-label="Close image viewer"
        >
            &times;
        </button>


        <!-- PREVIOUS IMAGE BUTTON -->

        <button
            type="button"
            class="lightbox-arrow lightbox-prev"
            aria-label="Previous image"
        >
            &#10094;
        </button>


        <!-- ENLARGED IMAGE -->

        <div class="lightbox-content">

            <img
                id="lightbox-image"
                src=""
                alt=""
            >

            <p id="lightbox-caption"></p>

            <p id="lightbox-counter"></p>

        </div>


        <!-- NEXT IMAGE BUTTON -->

        <button
            type="button"
            class="lightbox-arrow lightbox-next"
            aria-label="Next image"
        >
            &#10095;
        </button>

    </div>


    <!-- JAVASCRIPT -->

    <script>

        // ========================================
        // SKILLS ROTATION
        // ========================================

        const skills = <?php echo json_encode($skills); ?>;

        let currentSkill = 0;

        const skillElement =
            document.getElementById("rotating-skill");

        setInterval(function () {

            skillElement.classList.add("fade-out");

            setTimeout(function () {

                currentSkill = (currentSkill + 1) % skills.length;

                skillElement.textContent = skills[currentSkill];

                skillElement.classList.remove("fade-out");

            }, 800);

        }, 2500);


        // ========================================
        // IRONCLAD FLOATING IMAGE VIEWER
        // ========================================

        const lightbox =
            document.getElementById("image-lightbox");

        const lightboxImage =
            document.getElementById("lightbox-image");

        const lightboxCaption =
            document.getElementById("lightbox-caption");

        const lightboxCounter =
            document.getElementById("lightbox-counter");

        const closeButton =
            document.querySelector(".lightbox-close");

        const previousButton =
            document.querySelector(".lightbox-prev");

        const nextButton =
            document.querySelector(".lightbox-next");

        const galleryImages =
            document.querySelectorAll(".image-open");

        let currentImageIndex = 0;

        let lastFocusedElement = null;


        // ========================================
        // DISPLAY IMAGE
        // ========================================

        function showImage(index) {

            const totalImages = galleryImages.length;

            // Loop through the gallery

            currentImageIndex =
                (index + totalImages) % totalImages;

            const selectedImage =
                galleryImages[currentImageIndex];

            // Update enlarged image

            lightboxImage.src = selectedImage.dataset.image;

            lightboxImage.alt = selectedImage.dataset.caption;

            // Update caption

            lightboxCaption.textContent =
                selectedImage.dataset.caption;

            // Update image counter

            lightboxCounter.textContent =
                (currentImageIndex + 1) + " / " + totalImages;

        }


        // ========================================
        // OPEN IMAGE VIEWER
        // ========================================

        galleryImages.forEach(function (button, index) {

            button.addEventListener("click", function () {

                currentImageIndex = index;

                lastFocusedElement = button;

                showImage(currentImageIndex);

                lightbox.classList.add("active");

                lightbox.setAttribute("aria-hidden", "false");

                lightbox.inert = false;

                document.body.style.overflow = "hidden";

                closeButton.focus();

            });

        });


        // ========================================
        // NEXT IMAGE
        // ========================================

        function nextImage() {

            showImage(currentImageIndex + 1);

        }


        // ========================================
        // PREVIOUS IMAGE
        // ========================================

        function previousImage() {

            showImage(currentImageIndex - 1);

        }


        // ========================================
        // CLOSE IMAGE VIEWER
        // ========================================

        function closeLightbox() {

            if (!lightbox.classList.contains("active")) {
                return;
            }

            lightbox.classList.remove("active");

            lightbox.setAttribute("aria-hidden", "true");

            lightbox.inert = true;

            document.body.style.overflow = "";

            lightboxImage.src = "";

            lightboxCaption.textContent = "";

            lightboxCounter.textContent = "";

            if (lastFocusedElement) {
                lastFocusedElement.focus();
            }

        }


        // ========================================
        // BUTTON EVENT LISTENERS
        // ========================================

        closeButton.addEventListener("click", closeLightbox);

        nextButton.addEventListener("click", nextImage);

        previousButton.addEventListener("click", previousImage);


        // ========================================
        // CLICK OUTSIDE TO CLOSE
        // ========================================

        lightbox.addEventListener("click", function (event) {

            if (event.target === lightbox) {

                closeLightbox();

            }

        });


        // ========================================
        // KEYBOARD CONTROLS
        // ========================================

        document.addEventListener("keydown", function (event) {

            if (!lightbox.classList.contains("active")) {
                return;
            }

            // RIGHT ARROW: NEXT IMAGE

            if (event.key === "ArrowRight") {

                event.preventDefault();

                nextImage();

            }

            // LEFT ARROW: PREVIOUS IMAGE

            else if (event.key === "ArrowLeft") {

                event.preventDefault();

                previousImage();

            }

            // ESCAPE: CLOSE VIEWER

            else if (event.key === "Escape") {

                event.preventDefault();

                closeLightbox();

            }

        });

    </script>

</body>
</html>
