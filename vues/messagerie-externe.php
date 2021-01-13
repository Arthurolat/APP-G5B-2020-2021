<div id="corps">
    <div id="titre_contact">
        <h1>Formulaire de contact</h1>
        <h2>Envoyez-nous un petit message !</h2>
    </div>
    
    <h2>
    </h2>
    <div id="formulaire_contact">
        <form action="../APP-G5B-2020-2021/modele/envoi_mail.php" method="POST"">
            <input type="text" name="nom" id="form_control" placeholder="Nom" required pattern="^[A-Za-z '-]+$" required /></br>
            <input type="email" name="email" id="form_control" placeholder="Mail" required pattern="^[A-Za-z .]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$" required /></br>
            <textarea name="message" id="form_control" placeholder="Message" row="4" required></textarea></br>
            <input type="submit" name="submit" id="bouton_envoyer" value="ENVOYER" />
        </form>
    </div>
</div>

