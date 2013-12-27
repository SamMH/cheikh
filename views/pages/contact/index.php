<div class="container">
    <div class="row">
        <div class="col-md-9">
            <form method="POST" action="/contact" role="form" class="form-<?= $_GET['p']; ?>">
                <input class="form-control requis" type="text" placeholder="Nom prénom... " name="name" autofocus=""/>
                <input class="form-control" type="text" placeholder="Objet... " name="objet"/>
                <input id="email" class="form-control requis" type="email" placeholder="Email... " name="email" />
                <textarea class="form-control requis" name="message" style="height:162px" cols="10" ></textarea>
                <button type="submit" class="btn btn-primary">Envoyer mon message</button>
            </form>
        </div>
        <div class="col-md-3">
            <p class="well-sm well">
            Tel: 0987654321 
            <br />Email: samir_mh@samir.com 
            <br />13 rue AZERTYUI SDFGHJ 12345
            </p>
            <?php if (isset($sendMail)): ?>
            <?php if (!$sendMail['isSend']): ?>
            <p class="alert alert-danger sendMail">Sorry <strong><?= $sendMail['fromName']; ?></strong>!! Votre message n'a pas pu être envoyer veuillez faire une autre tentative plustard.</p>
            <?php else: ?>
            <p class="alert alert-success sendMail">Well <strong><?= $sendMail['fromName']; ?></strong>!! Je vous remercie.</p>
            <?php endif; ?>
            <?php endif; ?>
            <p class='alert alert-danger' style="display: none;">Vérifier bien les champs obligatoire.</p>
        </div>
    </div>
</div>