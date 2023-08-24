<?php

include("connection.php");

$msj = "";

if ($_POST) {

    $lastname = (isset($_POST["lastname"]) ? $_POST["lastname"] : "");
    $name = (isset($_POST["name"]) ? $_POST["name"] : "");
    $phone = (isset($_POST["phone"]) ? $_POST["phone"] : "");
    $message = (isset($_POST["message"]) ? $_POST["message"] : "");

    $stm = $connection->prepare("INSERT INTO contacs(id, name, lastname, message, phone)
    VALUES(null,:name,:lastname,:message,:phone)");
    $stm->bindParam(":name", $name);
    $stm->bindParam(":lastname", $lastname);
    $stm->bindParam(":message", $message);
    $stm->bindParam(":phone", $phone);
    $stm->execute();
    $msj = "Mensaje enviado correctamente";
    header("location:index.php#contact");
}

?>
<?php include("header.php"); ?>

<section class="section section-slider regular-padding">
    <div class="row">
        <div class="col-md-6">
            <div class="section-slider_info">
                <p class="text-decorator">Hello I Am</p>
                <p class="title title--white">Juliana Deantonio</p>
                <p class="text text-white">
                    Fronted Developer, Angular Coder, UX & UI Expert
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="section-slider_image"></div>
        </div>
    </div>
</section>
<section id="about" class="section section-about extra-padding">
    <div class="row">
        <div class="col-md-6">
            <div class="section-about_title">
                <p class="title title-primary">About Me</p>
                <p class="subtitle">I Like Creating</p>
            </div>
            <ul class="section-about_social">
                <li>
                    <button class="button button-primary">
                        <i class="bi bi-input-cursor-text"></i>
                        Contact Me
                    </button>
                </li>
                <li class="section-about_red">
                    <i class="bi bi-facebook"></i>
                </li>
                <li class="section-about_red">
                    <i class="bi bi-instagram"></i>
                </li>
                <li class="section-about_red">
                    <i class="bi bi-linkedin"></i>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <p class="text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati
                voluptatem reiciendis culpa itaque laudantium laborum omnis commodi,
                eum libero quasi expedita eaque alias odio numquam. Beatae rerum
                cupiditate ullam illum!
            </p>
        </div>
        <div class="col-md-6">
            <ul class="section-about_list">
                <li class="section-about_item">
                    <p class="text"><b>Age:</b> 21</p>
                </li>
                <li class="section-about_item">
                    <p class="text"><b>Recidence:</b> Colombia</p>
                </li>
                <li class="section-about_item">
                    <p class="text"><b>City:</b> Medellín</p>
                </li>
                <li class="section-about_item">
                    <p class="text"><b>Email:</b> julideantonio2002@gmail.com</p>
                </li>
                <li class="section-about_item">
                    <p class="text"><b>Phone:</b> +57 300 759 2661</p>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="section-about_skills">
                <div class="section-about_skills-item">
                    <p class="text"><b>Angular</b></p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%">25%</div>
                    </div>
                </div>
                <div class="section-about_skills-item">
                    <p class="text"><b>CSS</b></p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 35%">35%</div>
                    </div>
                </div>
                <div class="section-about_skills-item">
                    <p class="text"><b>HTML</b></p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 90%">90%</div>
                    </div>
                </div>
                <div class="section-about_skills-item">
                    <p class="text"><b>JS</b></p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 35%">35%</div>
                    </div>
                </div>
                <div class="section-about_skills-item">
                    <p class="text"><b>PHP</b></p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%">25%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="section section-services regular-padding">
    <div class="section-services_title text-center">
        <p class="title title-primary">My Services</p>
        <p class="subtitle">What I Do</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-icon">
                    <i class="bi bi-braces"></i>
                </div>
                <p class="card-title">Web Design</p>
                <p class="card-text text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consectetur doloribus aliquam suscipit sapiente quos quae
                    asperiores nemo, nobis, accusantium quasi laudantium voluptate.
                    Quasi sed placeat inventore voluptatum eligendi eos minima?
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-icon">
                    <i class="bi bi-brush"></i>
                </div>
                <p class="card-title">Interface Design</p>
                <p class="card-text text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consectetur doloribus aliquam suscipit sapiente quos quae
                    asperiores nemo, nobis, accusantium quasi laudantium voluptate.
                    Quasi sed placeat inventore voluptatum eligendi eos minima?
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-icon">
                    <i class="bi bi-laptop"></i>
                </div>
                <p class="card-title">Development</p>
                <p class="card-text text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consectetur doloribus aliquam suscipit sapiente quos quae
                    asperiores nemo, nobis, accusantium quasi laudantium voluptate.
                    Quasi sed placeat inventore voluptatum eligendi eos minima?
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-icon">
                    <i class="bi bi-braces"></i>
                </div>
                <p class="card-title">Web Design</p>
                <p class="card-text text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consectetur doloribus aliquam suscipit sapiente quos quae
                    asperiores nemo, nobis, accusantium quasi laudantium voluptate.
                    Quasi sed placeat inventore voluptatum eligendi eos minima?
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-icon">
                    <i class="bi bi-brush"></i>
                </div>
                <p class="card-title">Interface Design</p>
                <p class="card-text text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consectetur doloribus aliquam suscipit sapiente quos quae
                    asperiores nemo, nobis, accusantium quasi laudantium voluptate.
                    Quasi sed placeat inventore voluptatum eligendi eos minima?
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-icon">
                    <i class="bi bi-laptop"></i>
                </div>
                <p class="card-title">Development</p>
                <p class="card-text text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consectetur doloribus aliquam suscipit sapiente quos quae
                    asperiores nemo, nobis, accusantium quasi laudantium voluptate.
                    Quasi sed placeat inventore voluptatum eligendi eos minima?
                </p>
            </div>
        </div>
    </div>
</section>
<section id="resume" class="section section-resume regular-padding">
    <div class="section-resume_title text-center">
        <p class="title title-primary">My Resume</p>
        <p class="subtitle">Professional Experience</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="timeline-card">
                <p class="subtitle"><b>Education</b></p>
                <ul class="timeline">
                    <li class="timeline-item">
                        <p class="timeline-title">
                            Tecnico en diseño e integración de la multimedia
                        </p>
                        <p class="timeline-year">2017-2019</p>
                        <br />
                        <p class="timeline-text"><b>SENA</b></p>
                        <p class="timeline-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                            officiis possimus laudantium quisquam. Minima accusamus non
                            fugit veniam eveniet impedit totam itaque eaque optio
                            doloremque, possimus deserunt. Libero, expedita iste.
                        </p>
                    </li>
                    <li class="timeline-item">
                        <p class="timeline-title">
                            Tecnico en diseño e integración de la multimedia
                        </p>
                        <p class="timeline-year">2017-2019</p>
                        <br />
                        <p class="timeline-text"><b>SENA</b></p>
                        <p class="timeline-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                            officiis possimus laudantium quisquam. Minima accusamus non
                            fugit veniam eveniet impedit totam itaque eaque optio
                            doloremque, possimus deserunt. Libero, expedita iste.
                        </p>
                    </li>
                    <li class="timeline-item">
                        <p class="timeline-title">
                            Tecnico en diseño e integración de la multimedia
                        </p>
                        <p class="timeline-year">2017-2019</p>
                        <br />
                        <p class="timeline-text"><b>SENA</b></p>
                        <p class="timeline-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                            officiis possimus laudantium quisquam. Minima accusamus non
                            fugit veniam eveniet impedit totam itaque eaque optio
                            doloremque, possimus deserunt. Libero, expedita iste.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="timeline-card">
                <p class="subtitle"><b>Experience</b></p>
                <ul class="timeline">
                    <li class="timeline-item">
                        <p class="timeline-title">
                            Tecnico en diseño e integración de la multimedia
                        </p>
                        <p class="timeline-year">2017-2019</p>
                        <br />
                        <p class="timeline-text"><b>SENA</b></p>
                        <p class="timeline-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                            officiis possimus laudantium quisquam. Minima accusamus non
                            fugit veniam eveniet impedit totam itaque eaque optio
                            doloremque, possimus deserunt. Libero, expedita iste.
                        </p>
                    </li>
                    <li class="timeline-item">
                        <p class="timeline-title">
                            Tecnico en diseño e integración de la multimedia
                        </p>
                        <p class="timeline-year">2017-2019</p>
                        <br />
                        <p class="timeline-text"><b>SENA</b></p>
                        <p class="timeline-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                            officiis possimus laudantium quisquam. Minima accusamus non
                            fugit veniam eveniet impedit totam itaque eaque optio
                            doloremque, possimus deserunt. Libero, expedita iste.
                        </p>
                    </li>
                    <li class="timeline-item">
                        <p class="timeline-title">
                            Tecnico en diseño e integración de la multimedia
                        </p>
                        <p class="timeline-year">2017-2019</p>
                        <br />
                        <p class="timeline-text"><b>SENA</b></p>
                        <p class="timeline-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                            officiis possimus laudantium quisquam. Minima accusamus non
                            fugit veniam eveniet impedit totam itaque eaque optio
                            doloremque, possimus deserunt. Libero, expedita iste.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="section section-contact regular-padding">
    <div class="section-contact_title text-center">
        <p class="title title-primary">Contact</p>
        <p class="subtitle">Have question contact us?</p>
    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="contact-card">
                <div class="contact-card_icon">
                    <i class="bi bi-envelope"></i>
                </div>
                <div class="contact-card_info">
                    <p><b>Email</b></p>
                    <p>julid@gmail.com</p>
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-card_icon">
                    <i class="bi bi-telephone"></i>
                </div>
                <div class="contact-card_info">
                    <p><b>Phone</b></p>
                    <p>+57 300 759 2661</p>
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-card_icon">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <div class="contact-card_info">
                    <p><b>Location</b></p>
                    <p>Medellín, Colombia</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form method="post" action="" class="form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-input" id="name" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname" class="form-label">Lastame</label>
                            <input type="text" class="form-input" id="lastname" name="lastname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-input" id="email" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-input" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea type="text" class="form-input" rows="6" id="message" name="message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-end">
                        <button type="submit" class="button button-primary">Send Message</button>
                    </div>
                    <div class="col-md-12">
                        <p class="text"><?php echo $msj ?></p>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
<?php include("footer.php"); ?>