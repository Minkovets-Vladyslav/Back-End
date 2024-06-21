<?php
session_start();

if (isset($_GET['lang'])) {
    $selectedLang = $_GET['lang'];
    setcookie('lang', $selectedLang, time() + (180 * 24 * 60 * 60));
} else {
    $selectedLang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'ukr';
}

switch ($selectedLang) {
    case 'ukr':
        $languageText = "Вибрана мова: Українська";
        $loginLabel = "Логін:";
        $passwordLabel = "Пароль:";
        $confirmPasswordLabel = "Повторний пароль:";
        $genderLabel = "Стать:";
        $maleGender = "Чоловіча";
        $femaleGender = "Жіноча";
        $cityLabel = "Місто проживання:";
        $selectCity = "Виберіть місто";
        $cityOptions = [
            'Київ' => 'Київ',
            'Львів' => 'Львів',
            'Одеса' => 'Одеса',
            'Харків' => 'Харків',
            'Дніпро' => 'Дніпро',
            'Житомир' => 'Житомир'
        ];
        $gamesLabel = "Улюблені ігри:";
        $footballGame = "Футбол";
        $volleyballGame = "Волейбол";
        $chessGame = "Шахи";
        $basketballGame = "Баскетбол";
        $aboutLabel = "Про себе:";
        $photoLabel = "Фотографія:";
        $submitButton = "Надіслати";
        $pageTitle = "Форма реєстрації";
        break;
    case 'eng':
        $languageText = "Selected language: English";
        $loginLabel = "Login:";
        $passwordLabel = "Password:";
        $confirmPasswordLabel = "Confirm Password:";
        $genderLabel = "Gender:";
        $maleGender = "Male";
        $femaleGender = "Female";
        $cityLabel = "City of residence:";
        $selectCity = "Select city";
        $cityOptions = [
            'New York City' => 'New York City',
            'Los Angeles' => 'Los Angeles',
            'Chicago' => 'Chicago',
            'Houston' => 'Houston',
            'Phoenix' => 'Phoenix',
            'Philadelphia' => 'Philadelphia'
        ];
        $gamesLabel = "Favorite games:";
        $footballGame = "Football";
        $volleyballGame = "Volleyball";
        $chessGame = "Chess";
        $basketballGame = "Basketball";
        $aboutLabel = "About yourself:";
        $photoLabel = "Photo:";
        $submitButton = "Submit";
        $pageTitle = "Registration Form";
        break;
    case 'fra':
        $languageText = "Langue sélectionnée : Français";
        $loginLabel = "Identifiant :";
        $passwordLabel = "Mot de passe :";
        $confirmPasswordLabel = "Confirmer le mot de passe :";
        $genderLabel = "Genre :";
        $maleGender = "Masculin";
        $femaleGender = "Féminin";
        $cityLabel = "Ville de résidence :";
        $selectCity = "Choisissez une ville";
        $cityOptions = [
            'Paris' => 'Paris',
            'Marseille' => 'Marseille',
            'Lyon' => 'Lyon',
            'Nice' => 'Nice',
            'Toulouse' => 'Toulouse',
            'Bordeaux' => 'Bordeaux'
        ];
        $gamesLabel = "Jeux préférés :";
        $footballGame = "Football";
        $volleyballGame = "Volley-ball";
        $chessGame = "Échecs";
        $basketballGame = "Basket-ball";
        $aboutLabel = "À propos de vous :";
        $photoLabel = "Photo :";
        $submitButton = "Envoyer";
        $pageTitle = "Formulaire d'inscription";
        break;
    case 'rus':
        $languageText = "Избранный язык: Русский";
        $loginLabel = "Логин:";
        $passwordLabel = "Пароль:";
        $confirmPasswordLabel = "Повторите пароль:";
        $genderLabel = "Пол:";
        $maleGender = "Мужской";
        $femaleGender = "Женский";
        $cityLabel = "Город проживания:";
        $selectCity = "Выберите город";
        $cityOptions = [
            'Москва' => 'Москва',
            'Санкт-Петербург' => 'Санкт-Петербург',
            'Новосибирск' => 'Новосибирск',
            'Екатеринбург' => 'Екатеринбург',
            'Казань' => 'Казань',
            'Самара' => 'Самара'
        ];
        $gamesLabel = "Любимые игры:";
        $footballGame = "Футбол";
        $volleyballGame = "Волейбол";
        $chessGame = "Шахматы";
        $basketballGame = "Баскетбол";
        $aboutLabel = "О себе:";
        $photoLabel = "Фотография:";
        $submitButton = "Отправить";
        $pageTitle = "Форма регистрации";
        break;
    case 'pol':
        $languageText = "Wybrany język: Polski";
        $loginLabel = "Login:";
        $passwordLabel = "Hasło:";
        $confirmPasswordLabel = "Potwierdź hasło:";
        $genderLabel = "Płeć:";
        $maleGender = "Mężczyzna";
        $femaleGender = "Kobieta";
        $cityLabel = "Miasto zamieszkania:";
        $selectCity = "Wybierz miasto";
        $cityOptions = [
            'Warszawa' => 'Warszawa',
            'Kraków' => 'Kraków',
            'Łódź' => 'Łódź',
            'Wrocław' => 'Wrocław',
            'Poznań' => 'Poznań',
            'Gdańsk' => 'Gdańsk'
        ];
        $gamesLabel = "Ulubione gry:";
        $footballGame = "Piłka nożna";
        $volleyballGame = "Siatkówka";
        $chessGame = "Szachy";
        $basketballGame = "Koszykówka";
        $aboutLabel = "O sobie:";
        $photoLabel = "Zdjęcie:";
        $submitButton = "Wyślij";
        $pageTitle = "Formularz rejestracyjny";
        break;
    case 'deu':
        $languageText = "Ausgewählte Sprache: Deutsch";
        $loginLabel = "Benutzername:";
        $passwordLabel = "Passwort:";
        $confirmPasswordLabel = "Passwort bestätigen:";
        $genderLabel = "Geschlecht:";
        $maleGender = "Männlich";
        $femaleGender = "Weiblich";
        $cityLabel = "Wohnort:";
        $selectCity = "Stadt auswählen";
        $cityOptions = [
            'Berlin' => 'Berlin',
            'München' => 'München',
            'Hamburg' => 'Hamburg',
            'Köln' => 'Köln',
            'Frankfurt' => 'Frankfurt',
            'Stuttgart' => 'Stuttgart'
        ];
        $gamesLabel = "Lieblingsspiele:";
        $footballGame = "Fußball";
        $volleyballGame = "Volleyball";
        $chessGame = "Schach";
        $basketballGame = "Basketball";
        $aboutLabel = "Über mich:";
        $photoLabel = "Foto:";
        $submitButton = "Absenden";
        $pageTitle = "Anmeldeformular";
        break;
    default:
        $languageText = "Вибрана мова: Українська";
        $loginLabel = "Логін:";
        $passwordLabel = "Пароль:";
        $confirmPasswordLabel = "Повторний пароль:";
        $genderLabel = "Стать:";
        $maleGender = "Чоловіча";
        $femaleGender = "Жіноча";
        $cityLabel = "Місто проживання:";
        $selectCity = "Виберіть місто";
        $cityOptions = [
            'Київ' => 'Київ',
            'Львів' => 'Львів',
            'Одеса' => 'Одеса',
            'Харків' => 'Харків',
            'Дніпро' => 'Дніпро',
            'Житомир' => 'Житомир'
        ];
        $gamesLabel = "Улюблені ігри:";
        $footballGame = "Футбол";
        $volleyballGame = "Волейбол";
        $chessGame = "Шахи";
        $basketballGame = "Баскетбол";
        $aboutLabel = "Про себе:";
        $photoLabel = "Фотографія:";
        $submitButton = "Надіслати";
        $pageTitle = "Форма реєстрації";
        break;
}

$login = isset($_SESSION['login']) ? $_SESSION['login'] : '';
$password = isset($_SESSION['password']) ? $_SESSION['password'] : '';
$confirmPassword = isset($_SESSION['confirm_password']) ? $_SESSION['confirm_password'] : '';
$gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : '';
$city = isset($_SESSION['city']) ? $_SESSION['city'] : '';
$games = isset($_SESSION['games']) ? $_SESSION['games'] : [];
$about = isset($_SESSION['about']) ? $_SESSION['about'] : '';

?>


<!DOCTYPE html>
<html lang="<?php echo $selectedLang; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin: 15px 0 5px;
        }
        input[type="text"], input[type="password"], textarea, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .language-icons img {
            width: 30px;
            cursor: pointer;
        }
        .language-icons {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1><?php echo $pageTitle; ?></h1>
    <p><?php echo $languageText; ?></p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="login"><?php echo $loginLabel; ?></label>
        <input type="text" id="login" name="login" value="<?php echo htmlspecialchars($login); ?>" required>

        <label for="password"><?php echo $passwordLabel; ?></label>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" required>

        <label for="confirm_password"><?php echo $confirmPasswordLabel; ?></label>
        <input type="password" id="confirm_password" name="confirm_password" value="<?php echo htmlspecialchars($confirmPassword); ?>" required>

        <label><?php echo $genderLabel; ?></label>
        <label><input type="radio" name="gender" value="<?php echo $maleGender; ?>" <?php echo ($gender === $maleGender) ? 'checked' : ''; ?>> <?php echo $maleGender; ?></label>
        <label><input type="radio" name="gender" value="<?php echo $femaleGender; ?>" <?php echo ($gender === $femaleGender) ? 'checked' : ''; ?>> <?php echo $femaleGender; ?></label>

        <label for="city"><?php echo $cityLabel; ?></label>
        <select id="city" name="city" required>
            <option value=""><?php echo $selectCity; ?></option>
            <?php foreach ($cityOptions as $optionValue => $optionLabel): ?>
                <option value="<?php echo $optionValue; ?>" <?php echo ($city === $optionValue) ? 'selected' : ''; ?>><?php echo $optionLabel; ?></option>
            <?php endforeach; ?>
        </select>

        <label><?php echo $gamesLabel; ?></label>
        <label><input type="checkbox" name="games[]" value="<?php echo $footballGame; ?>" <?php echo in_array($footballGame, $games) ? 'checked' : ''; ?>> <?php echo $footballGame; ?></label>
        <label><input type="checkbox" name="games[]" value="<?php echo $volleyballGame; ?>" <?php echo in_array($volleyballGame, $games) ? 'checked' : ''; ?>> <?php echo $volleyballGame; ?></label>
        <label><input type="checkbox" name="games[]" value="<?php echo $chessGame; ?>" <?php echo in_array($chessGame, $games) ? 'checked' : ''; ?>> <?php echo $chessGame; ?></label>
        <label><input type="checkbox" name="games[]" value="<?php echo $basketballGame; ?>" <?php echo in_array($basketballGame, $games) ? 'checked' : ''; ?>> <?php echo $basketballGame; ?></label>

        <label for="about"><?php echo $aboutLabel; ?></label>
        <textarea id="about" name="about" rows="4"><?php echo htmlspecialchars($about); ?></textarea>

        <label for="photo"><?php echo $photoLabel; ?></label>
        <input type="file" id="photo" name="photo">

        <input type="submit" value="<?php echo $submitButton; ?>">
    </form>
    <div class="language-icons">
        <a href="form.php?lang=ukr"><img src="./icons/ukraine.png" alt="Ukrainian"></a>
        <a href="form.php?lang=eng"><img src="./icons/united-states-of-america.png" alt="English"></a>
        <a href="form.php?lang=fra"><img src="./icons/france.png" alt="Français"></a>
        <a href="form.php?lang=pol"><img src="./icons/poland.png" alt="Polski"></a>
        <a href="form.php?lang=deu"><img src="./icons/germany.png" alt="Deutsch"></a>
        <a href="form.php?lang=rus"><img src="./icons/russia.png" alt="Русский"></a>
    </div>
</div>
<?php
echo "<br><a href='index.php'><button>Повернутися на головну сторінку</button></a>";
?>
</body>
</html>


