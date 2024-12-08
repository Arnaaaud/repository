<!DOCTYPE html>
<html>

    <head>
        <title>Formulaire de contact</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" >
        <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        <script type="text/javascript">
            (function() {
                emailjs.init("user_pdByzEMSssRVfAeA0uOccz"  );
            })();
            </script>

        <style type="text/css">
            .contact {
                width: 100%;
                height: 100vh;
            }
            .contact form {
                width: 600px;
                margin-top: 100px;
            }
        </style>
    </head>

<body>
    <section>
        <div class="contact d-flex justify-content-around">
            <form method="post" action="">
                <h1>Formulaire de contact</h1><br>
                <label>Prenom</label>
                <input required="" type="text" placeholder="Prenom" class="form-control">
                <label>Email</label>
                <input required="" type="text" placeholder="Email" class="form-control">
                <label>Objet</label>
                <input required="" type="text" placeholder="Objet" class="form-control">
                <label>Message</label>
                <textarea required="" placeholder="Message..." class="form-control"></textarea><br>
                <input type="submit" name="Envoyer" class="btn btn-primary">
            </form>
        </div>
    </section>
</body
    