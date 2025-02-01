<?php include("header.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="card my-3" style="width: 100%;">
                <img src="A_Erceville.png" class="rounded shadow mx-3 my-3" alt="Augustin d'Erceville">
                <div class="card-body">
                    <h5 class="card-title">Augustin d'ERCEVILLE</h5>

                    <p class="card-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                        </svg>
                        <span id="tel-numero">07 82 70 63 56</span>
                        <button class="btn btn-outline-secondary btn-sm" onclick="copiertelephone()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
                            </svg>
                        </button>
                    </p>

                    <p class="card-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                            <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                        </svg>
                        <span id="email-address">augustinderceville@gmail.com</span>
                        <button class="btn btn-outline-secondary btn-sm" onclick="copierEmail()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
                            </svg>
                        </button>
                    </p>

                    <div class="d-flex justify-content-center">
                        <a href="CV_2025.pdf" class="btn btn-primary" download="CV_2025.pdf">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                            </svg>
                            Curriculum Vitae
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col my-3 lh-base">
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
                <a class="list-group-item list-group-item-action text-center" href="#list-item-1">BTS SIO</a>
                <a class="list-group-item list-group-item-action text-center" href="#list-item-2">Item 2</a>
                <a class="list-group-item list-group-item-action text-center" href="#list-item-3">Item 3</a>
                <a class="list-group-item list-group-item-action text-center" href="#list-item-4">Item 4</a>
            </div>
        </div>
        <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h1 id="list-item-1" style="text-align: center">Qu'es-ce que le BTS SIO ?</h1>
                <p class="fs-5">
                    Le  <abbr title="Brevet de Technicien Supérieur"><button type="button" class="btn btn-outline-secondary btn-sm px-3">BTS</button></abbr> <abbr title="Services Informatiques aux Organisations"><button type="button" class="btn btn-outline-secondary btn-sm px-3">SIO</button></abbr> est une formation en deux ans qui prépare les étudiants aux métiers de l'informatique, notamment dans le développement d'applications et l'administration des systèmes et réseaux.<br>
                    Ce diplôme s'adresse aux passionnés d'informatique souhaitant acquérir des compétences techniques et professionnelles pour intégrer rapidement le marché du travail ou poursuivre leurs études dans le domaine du numérique.
                </p>
                <div class="row my-3">
                    <div class="col border border-dark rounded py-3 bg-danger bg-opacity-25 border-2 mx-3" style="text-align: justify">
                        <h3 class="text-center"><abbr title="Brevet de Technicien Supérieur"><button type="button" class="btn btn-outline-danger btn-lg px-6">SISR</button></abbr></h3>
                        <hr>
                        <p>L’option <b>S</b>olution d’<b>I</b>nfrastructure, <b>S</b>ystèmes et <b>R</b>éseaux forme des professionnels des réseaux et équipements informatiques (installation, maintenance, sécurité).</p>
                        Les techniciens supérieurs en informatique option <b>SISR</b>, peuvent accéder aux métiers de :
                        <li>&nbsp;Administrateur systèmes et réseaux</li>
                        <li>&nbsp;Informaticien support et déploiement</li>
                        <li>&nbsp;Pilote d’exploitation</li>
                        <li>&nbsp;Support systèmes et réseaux</li>
                        <li>&nbsp;Technicien d’infrastructure</li>
                        <li>&nbsp;Technicien de production</li>
                        <li>&nbsp;Technicien micro et réseaux</li>
                    </div>
                    <div class="col border border-dark rounded py-3 bg-success bg-opacity-25 border-2 mx-3" style="text-align: justify">
                        <h3 class="text-center"><abbr title="Brevet de Technicien Supérieur"><button type="button" class="btn btn-outline-success btn-lg px-6">SLAM</button></abbr></h3>
                        <hr>
                        <p>L’option <b>S</b>olutions <b>L</b>ogicielles et <b>A</b>pplications <b>M</b>étiers forme des spécialistes des logiciels (rédaction d’un cahier des charges, formulation des besoins et spécifications, développement, intégration au sein de la société).</p>
                        Les techniciens supérieurs en informatique option <b>SLAM</b>, sont préparés aux métiers de :
                        <li>&nbsp;Développeur d’applications informatiques</li>
                        <li>&nbsp;Développeur informatique</li>
                        <li>&nbsp;Analyste d’applications ou d’études</li>
                        <li>&nbsp;Analyste programmeur</li>
                        <li>&nbsp;Programmeur analyste</li>
                        <li>&nbsp;Programmeur d’applications</li>
                        <li>&nbsp;Responsable des services applicatifs</li>
                        <li>&nbsp;Technicien d’études informatiques</li>
                    </div>
                </div>
                <h4 id="list-item-2">Item 2</h4>
                <p class="fs-5">...</p>
                <h4 id="list-item-3">Item 3</h4>
                <p class="fs-5">...</p>
                <h4 id="list-item-4">Item 4</h4>
                <p class="fs-5">...</p>
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
