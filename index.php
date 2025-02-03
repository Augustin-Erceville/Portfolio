<?php include("header.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <?php include "Carte.php"; ?>
        </div>
        <div class="col m-3 lh-base text-bg-dark rounded">
            <h1 class="text-center">Présentation</h1>
            <p class="fs-5">
                Bonjour, bienvenue sur mon portfolio,<br>
                Avant de découvrir mon parcours, mes compétences et mes expériences professionnel, je vais avant tout me présenter.</p>
            <p class="fs-5">
                Je m'appelle Augustin Rolland de Chambaudoin d'Erceville, mais mon nom usuel est juste d'Erceville.<br>
                Je suis née le 22 septembre 2000 à Volgograd (Russie). Durant mon enfance, j'ai rapidement été attiré par le monde de l'informatique.<br>
                Avant de me lancer dans des études, j'exerçais déjà, à l'aide de mes connaissances, des petits sites internet.
            </p>
            <p class="fs-5">
                Actuellement en première année de BTS, je me suis dirigé vers la filière SIO et plus spécialement vers l'option SLAM.<br>
                Mais je vous expliquerai en quoi consistent les différences entre cette option et les autres plus tard.
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-3">
            <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action text-start text-bg-dark" href="#BTS_SIO">BTS SIO</a>
                <a class="list-group-item list-group-item-action text-start text-bg-dark" href="#Competances">Compétences</a>
                <a class="list-group-item list-group-item-action text-start text-bg-dark" href="#Experiences">Expériences</a>
                <a class="list-group-item list-group-item-action text-start text-bg-dark" href="#Certificats">Certificats</a>
            </div>
        </div>
        <div class="col">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h1 id="BTS_SIO" style="text-align: center">Qu'es-ce que le BTS SIO ?</h1>
                <?php include "BTS-SIO.php"?>
                <h1 id="Competances" style="text-align: center">Mes Compétences</h1>
                <?php include "Competences.php" ?>
                <h1 id="Experiences" style="text-align: center">Mes expériences professionnelles</h1>
                <?php include "Experiences.php"; ?>
                <h1 id="Certificats" style="text-align: center">Mes diplômes</h1>
                <?php include "Diplomes.php"?>
            </div>
            <hr class="mb-3">
        </div>
    </div>
</div>
</div>

<script>
    function copiertelephone() {
        var numtel = document.getElementById("tel-numero").textContent;
        navigator.clipboard.writeText(numtel).then(() => {
            alert("Numéro copié : " + numtel);
        }).catch(err => {
            console.error("Erreur lors de la copie", err);
        });
    }
    function copierEmail() {
        var email = document.getElementById("email-address").textContent;
        navigator.clipboard.writeText(email).then(() => {
            alert("Email copié : " + email);
        }).catch(err => {
            console.error("Erreur lors de la copie", err);
        });
    }

</script>
<?php include("footer.php"); ?>
