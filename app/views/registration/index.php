<html>
<head>
    <link rel="stylesheet" type="text/css" href="../src/styles/generalStyles.css">
    <link rel="stylesheet" type="text/css" href="../src/styles/registreren.css">
</head>

<body>
<div class="viewContainer viewContainerCustom">

    <div class="topBlock">

        <div class="Title">
            NLRANGERS
        </div>

        <div class="notification">

        </div>

    </div>

    <div class="middleBlock">
        <div class="secondTitle formTitle">
            Registreren
        </div>

        <form class="formregister" action="/registration/catchData" method="POST">
33

            <div class="inputContainer">
                <input required type="text" placeholder="Voornaam *" name="firstName">
            </div>
            <div class="inputContainer">
                <input type="text" placeholder="Tussenvoegsel" name="insertion">
            </div>
            <div class="inputContainer">
                <input required type="text" placeholder="Achternaam *" name="lastName">
            </div>
            <div class="inputContainer">
                <label class="birthdatetitle" for="birthDate">Geboortedatum: </label> <br><br>
                <input required type="date" name="birthDate">
            </div>

            <div class="inputContainer">
                <input placeholder="E-mail" type="email" />
            </div>

            <div class="inputContainer">
                <input placeholder="E-mail herhalen" type="email" />
            </div>

            <div class="inputContainer">
                <input placeholder="Wachtwoord" type="password" />
            </div>

            <div class="inputContainer">
                <input placeholder="Wachtwoord herhalen" type="password" />
            </div>

            <div class="inputContainer">
                <button type="submit">Verzenden</button>
            </div>

        </form>

    </div>

    <div class="bottomBlock">

        <div class="secondTitle">Heeft u al een account?</div>
        <div class="link"><a href="#">Inloggen</a></div>

    </div>


</div>


</body>
</html>
