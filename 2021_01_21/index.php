<?php
require('controleur/Controlchapter.php');

echo 'publisher = ' . $_POST['public'] . '</br>';
echo 'chatper = ' . $_GET['id_chapter'] . ' / ' . $_POST['titlechapter'] . ' / ' . $_POST['textchapter'] . ' - ' . $_POST['Enregistrer'] .'</br>';



if(isset($_POST['textchapter']) && isset($_POST['Enregistrer'])) {
    echo 'bonjour postnouveauchap';
    newchapter();
} elseif (isset($_POST['textchapter']) && isset($_POST['Modifier'])) {
    echo 'bonjour postmodifchap';

    savemoditchapter();
}

elseif(isset($_GET['action'])){
    echo 'bonjour affichemodifchap';

    modifchapter();
}

if (isset($_GET['id_chapter']) && $_GET['id_chapter'] > 0) {
    echo 'bonjour get ' . $_GET['id_chapter'];
    if (!empty($_POST['author']) && !empty($_POST['comment'])) {
        echo 'bonjour post ' . $_GET['id_chapter'];
        addComment();
    }

    onechapter();
} else {
    if (isset($_POST['public'])) {
        echo 'bonjour postpublish';
        changepubliserComment();
    }
    echo 'bonjour index';
    listchapter();
    listcomment();
}


?>
