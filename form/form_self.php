<?php
  error_reporting(0);
    $nom= "$_GET[nom]";
    $email= "$_GET[email]";
    $genre= "$_GET[gender]";
    $navegador= "$_GET[navegadors]";
    $check= "$_GET[agree]";
    $edad= "$_GET[edad]";
    $comentari= "$_GET[comments]";
    $assignatures= "$_GET[CFGS]";
?>

<HTML>
<head>
    <title>Un exemple amb un formulari</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
        Nom:
        <input type="text" name="nom">
        <br> Correu electrònic:
        <input type="text" name="email">
        <br> Navegadors que coneixes:
        <br>
        <select name="navegadors" multiple>
            <option value="Chrome">Chrome</option>
            <option value="MozillaFirefox">Mozilla Firefox</option>
            <option value="Safari">Safari</option>
            <option value="Opera">Opera</option>
            <option value="Lynx">Lynx</option>
        </select>
        <br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>
        <input type="checkbox" name="agree">Do you agree with our terms<br>
        <label>Password:</label> <input type="password" name="pwd"><br>
        <label for="date">Quin dia vares néixer?</label><br>
        <input type="date" name="edad"><br>
        <label for="date">Deixa el teu comentari:</label>
        <input type="text" name="comments"><br>
        <label for="CFGS">Tria una assignatura:</label>
        <select name="CFGS">
            <option value="Aplicacions web">Aplicacions web</option>
            <option value="Administració de sistemes">Administració de sistemes</option>
            <option value="Administració SGBD">Administració SGBD</option>
            <option value="Empresa">Empresa</option>
            <option value="Seguretat i Alta disponibilitat">Seguretat i Alta disponibilitat</option>
        </select><br>
        <input type="submit" value="Envia">
    </form>
    <hr>
</body>
</HTML>

<?php
            echo "El nom és " .$nom. "<br>";
            echo "L'email és " .$email. "<br>";
            echo "Heu triat aquest navegador ". $navegador . "<br>";
            echo "El seu genere és " .$genre. "<br>";
            if ($check == true) {
              echo "Ha acceptat els nostres termes<br>";
            }
            else {
              echo "No ha acceptat els nostres termes<br>";
            }
            echo "Va néixer dia:<br>" .$edad. "<br>";
            echo "Ha fet el següent comentari:<br>" .$comentari. "<br>";
            echo "Heu triat l'assignatura següent:<br>" . $assignatures . "<br>";
?>
