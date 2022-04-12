<?php 
//  clients.php

function viewUsers()
{
    global $bdd; 
    $req = $bdd -> prepare('SELECT users.id,users.name,users.company,users.email,adresse.city,adresse.phone FROM users LEFT JOIN adresse on users.id = adresse.id_users'); 
    $req -> execute(array()); 
    $users = $req -> fetchAll(); 
    return $users;
}
function viewUsersIndex()
{
    global $bdd; 
    $req = $bdd -> prepare('SELECT users.id,users.name,users.company,users.email,adresse.city,adresse.phone FROM users LEFT JOIN adresse on users.id = adresse.id_users ORDER BY users.id LIMIT 5'); 
    $req -> execute(array()); 
    $users = $req -> fetchAll(); 
    return $users;
}


function viewUser($id)
{
    global $bdd;
    $req = $bdd->prepare("SELECT users.*,adresse.city,adresse.codepostal,adresse.name adresseName,adresse.phone,result.uploading,result.pdf FROM users LEFT JOIN adresse on users.id = adresse.id_users LEFT JOIN result ON users.id = result.id_users WHERE users.id= ? ");
    $req->execute(array(
       $id
    ));

    $user = $req->fetch();
    return $user;
}

// fonction pour que dans clientPerso on voit les pdf 
function viewPdf($id)
{
    global $bdd;
    $req = $bdd->prepare("SELECT users.id as uid ,result.id,result.note,result.name, result.uploading,result.pdf FROM users LEFT JOIN adresse on users.id = adresse.id_users INNER JOIN result ON users.id = result.id_users WHERE users.id= ? ");
    $req->execute(array(
        $id
    ));

    $user = $req->fetchAll();
    return $user;
}

// pour les resultats

function viewResultat()
{
    global $bdd;
    $req = $bdd -> prepare('SELECT result.*, users.company,users.name,users.email FROM result INNER JOIN users ON users.id = result.id_users'); 
    $req -> execute(array()); 
    $resultat = $req -> fetchAll();
    return $resultat; 
}

//  pour les rdv 

function viewFullRDV()
{
    global $bdd; 
    $req = $bdd -> prepare('SELECT * FROM rdv ORDER BY id DESC'); 
    $req -> execute(array()); 
    $rdvs = $req -> fetchAll();
    return $rdvs;
}
function viewRdvParentreprise($id)
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM rdv WHERE id_users = ? ORDER BY id DESC');
    $req->execute(array($id));
    $rdvs = $req->fetchAll();
    return $rdvs;
}
function viewContratParentreprise($id)
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM contrat WHERE id_users = ? ORDER BY id DESC');
    $req->execute(array($id));
    $rdvs = $req->fetchAll();
    return $rdvs;
}
function viewFactureParentreprise($id)
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM factures WHERE id_users = ? ORDER BY id DESC');
    $req->execute(array($id));
    $rdvs = $req->fetchAll();
    return $rdvs;
}
function viewFullRDVindex()
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM rdv ORDER BY id DESC LIMIT 5 ');
    $req->execute(array());
    $rdvs = $req->fetchAll();
    return $rdvs;
}
function viewRdv($id)
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM rdv WHERE id = ?');
    $req->execute(array(
        $id
    ));
    $rdvs = $req->fetch();
    return $rdvs;
}


// pour les admin 


function viewFullAdmin()
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM admin');
    $req->execute(array());
    $admins = $req->fetchAll();
    return $admins;
}



// actualiteee

function viewActualites()
{
    global $bdd;
    $req = $bdd->query("SELECT actualites.* FROM actualites ORDER BY actualites.id  desc");
    $requete = $req->fetchAll();
    return $requete;
}
// facture 

function viewFactures()
{
    global $bdd;
    $req = $bdd->prepare('SELECT factures.*, users.company,users.name,users.email FROM factures INNER JOIN users ON users.id = factures.id_users');
    $req->execute(array());
    $resultat = $req->fetchAll();
    return $resultat;
}
// Contrat
function viewContrat()
{
    global $bdd;
    $req = $bdd->prepare('SELECT contrat.*, users.company,users.name,users.email FROM contrat INNER JOIN users ON users.id = contrat.id_users');
    $req->execute(array());
    $resultat = $req->fetchAll();
    return $resultat;
}
function deleteContrat($id)
{
    global $bdd;
    $req = $bdd -> prepare('DELETE FROM contrat WHERE id = ?'); 
    $del = $req -> execute(array(
        $id
    ));
    return $del;
}

// video 

    function viewVideo(){
        global $bdd;
    $req = $bdd->prepare('SELECT * FROM video');
    $req->execute(array());
    $resultat = $req->fetch();
    return $resultat;
    }
