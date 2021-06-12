<?php include_once 'assets/bootstrapAsset.php';

$foodCat=new FoodCategoryRepository();
$cat=$foodCat->findBy(array('id'=> $_GET['id']));

$foodAliments=new AlimentRepository();
$foodOK=$foodAliments->findBy(array('id'=> $cat->id,'permission','true'));
$foodNOK=$foodAliments->findBy(array('id'=> $cat->id,'permission','false'));

?>
<link rel="stylesheet" href="css/journalIndiv.css">
</head>
<body>
<?php include_once 'preloader.php' ?>
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
            <?php 
                foreach($foodOK as $okfood){
            ?>
                <li>
                   <?php echo $okfood->name?>
                </li>
                <?php } ?>
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
            <?php 
                foreach($foodNOK as $nokfood){
            ?>
                <li>
                   <?php echo $nokfood->name?>
                </li>
            <?php } ?>
                
            </ul>
        </div>
    </div>
    </div>
    <?php include_once 'footer.php'?>

    <?php include_once 'assets/scripts.php' ?>
    <script src="js/main.js"></script>
   
    <script type="js/scrollUpBtn.js"></script>
    <script src="js/testnav.js"></script>

</body>
</html>