<!DOCTYPE html>
<html>

<head>
    <title>Instance Dolibarr Créée</title>
</head>

<body>
    <h1>Bonjour {{ $user->name }},</h1>
    <p>Votre instance Dolibarr a été créée avec succès.</p>
    <p>Voici les détails :</p>
    <ul>
        <li>URL de l'instance : {{ $instance->url }}</li>
        <li>Statut : {{ $instance->status }}</li>
    </ul>
    <p>Merci de votre confiance.</p>
</body>

</html>