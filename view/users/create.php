<link rel="stylesheet" href="<?php echo URL ?>public/css/users.css">
<link rel="stylesheet" href="<?php echo URL ?>public/css/forms.css">
<header>
    <h1>Nieuwe Gebruiker<h1>
</header>

<main>
    <form action="addUser" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Wachtwoord" required>
        <input type="submit">
    </form>
</main>
