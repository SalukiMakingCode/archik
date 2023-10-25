<header style="background-image: url('assets/image/webp/<?php echo $jumbotron; ?>')">
    <nav>
        <h1>ARCHIK INTERIEUR</h1>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="projets.php">Projets</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><img src="assets/image/burger.png" alt="Menu"></li>
        </ul>
    </nav>
    <section class="headerSection">
        <div class="headerTitle">
            <h2><?php echo $h1 ?></h2>
            <ul>
                <li><img src="assets/image/linkedin.png" alt="archik intérieur sur linkedin"</li>
                <li><img src="assets/image/facebook.png" alt="archik intérieur sur facebook"</li>
                <li><img src="assets/image/instagram.png" alt="archik intérieur sur instagram"</li>
            </ul>
        </div>

        <?php
        if (isset($quotation)) {
            ?>
            <blockquote>
                <p><?php echo $quotation; ?></p>
                <cite><?php echo $author; ?></cite>
            </blockquote>
            <?php
        }
        ?>
    </section>
</header>
