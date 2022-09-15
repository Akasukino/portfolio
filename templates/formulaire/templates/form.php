<section class="form_style">
    <h2>Formulaire de contact</h2>
    <form action="form.php" method="post">
        <div>
            <label for="name">Nom / Entreprise : </label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">E-Mail : </label>
            <input type="text" id="mail" name="user_mail">
        </div>
        <div>
            <label for="objet">Objet : </label>
            <input type="text" id="objet" name="user_objet">
        </div>
        <div>
            <label for="message_form">E-Mail : </label>
            <textarea id="message_form" name="user_message"></textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</section>
