<?php
include 'header.html';
?>
    <main>
        <section>
            <article>
                <figure>
                    <a href="films.php"><li><i class="fa-solid fa-film"></i>FILMS</li> <img src="assets/img/moviefilm.png" alt="Films"></a>
                    <a href="séries.php"><li><i class="fa-solid fa-film"></i>SERIES</li> <img src="assets/img/série.png" alt="Séries"></a>
                </figure>
            </article>
        </section>
        <section>
                <h2>Bande annonce du film Joker réalisé par Manon BOUCHER, élève en première année audiovisuel à YNOV </h2>
                <p>
                    <mn>
                        <img src="assets/img/Manon.png" alt="Manon">
                    </mn>
                </p>
            <video controls width="750" height="400">
            <source src="assets/vidéos/" type="video/mp4">
         <!-- Ajoutez d'autres sources pour différents formats de vidéo si nécessaire -->
            Votre navigateur ne prend pas en charge la balise vidéo.
            </video>
        </section>
        
    </main>
<?php
include 'footer.html'
?>