<?php include_once 'assets/mainHead.php' ?>
<link rel="stylesheet" href="css/journalIndiv.css">
</head>
<body>
<?php include_once 'navbarCo.php'?>

<body>
<div class="journalIndivContainer">
<div class="searchJournal__input">
        <i class="fas fa-search" id="search__icon"></i>
        <input id="search" placeholder="Rechercher..." type="text">

      </div>
        <div class="rowJournalIndiv">
        <div class="allowed">
            <div class="journalTitre">
            <h4>
                A privilégier
                <img src="icons/winking.png">
            </h4>
           
        </div>
        <ul>
            <li>
                product1
            </li>
            <li>
                product2
            </li>
            <li>
                product3

            </li>
        </ul>
        </div>
        <div class="modere">
        <div class="journalTitre">
            <h4>
                A tolérer
                <img src="icons/neutral.png">
            </h4>
        </div>
        <ul>
            <li>
                product1
            </li>
            <li>
                product2
            </li>
            <li>
                product3

            </li>
        </ul>
        </div>
        <div class="forbidden">
        <div class="journalTitre">
            <h4>
                A interdire
                <img src="icons/angry.png">
            </h4>
        </div>
        <ul>
            <li>
                product1
            </li>
            <li>
                product2
            </li>
            <li>
                product3

            </li>
        </ul>
        </div>
    </div>
    </div>
    <?php include_once 'footer.php'?>
    <?php include_once 'assets/scripts.php' ?>

</body>
</html>