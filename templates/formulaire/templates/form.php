<section class="form_style">
    <h2>Formulaire de contact</h2>
    <form action="form.php" method="post">
        <div>
            <label for="name"></label>
            <input type="text" id="name" name="user_name" placeholder="Nom / entreprise" required>
        </div>
        <div>
            <label for="mail"></label>
            <input type="text" id="mail" name="user_mail" placeholder="E-Mail" required>
        </div>
        <div>
            <label for="objet"></label>
            <input type="text" id="objet" name="user_objet" placeholder="Objet">
        </div>
        <div>
            <label for="message_form"></label>
            <textarea id="message_form" name="user_message" cols="60" rows="10" maxlength="1024" placeholder="Votre message" required></textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</section>
