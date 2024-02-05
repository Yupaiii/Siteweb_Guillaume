<?php
include 'header.html';
?>

<main>
    <p>Formulaire de contact</p>
    <form action="traitement.php" method="post">
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" required> <!--input = les champs des Formulaire pour repondre -->
        <label for="email">Email : </label>
        <input type="text" id="email" name="email" required>
        <label for="message">Message : </label>
        <textarea name="message" id="message" cols="30" rows="10" required></textarea>
        
        <button type= "submit">Envoyer</button>

    </form>


</main>


<?php
include 'footer.html';
?>