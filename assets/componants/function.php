<?php

function viewUser($id)
{
    global $bdd;
    $users = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $users->execute(array(
        $id
    ));
    $user = $users->fetch();
    return $user;
}
function viewResultatForOneUser($id)
{
    global $bdd;
    $users = $bdd->prepare('SELECT result.id rid,result.uploading,result.name,result.pdf,result.note FROM result WHERE id_users = ? ORDER BY result.id DESC');
    $users->execute(array(
        $id
    ));
    $user = $users->fetchAll();
    return $user;
}
function viewOneResultat($userid,$id)
{
    global $bdd;
    $users = $bdd->prepare('SELECT result.id rid,result.uploading,result.name,result.pdf,result.note FROM result WHERE id_users = ? AND id= ?');
    $users->execute(array(
        $userid,
        $id
    ));
    $user = $users->fetch();
    return $user;
}

function viewFullUserAdresse($id)
{
    global $bdd;
    $users = $bdd->prepare('SELECT users.id,users.name,users.company,users.email,adresse.name,adresse.adresse,adresse.city,adresse.codepostal,adresse.phone,adresse.id aid  FROM users INNER JOIN adresse ON users.id = adresse.id_users WHERE users.id = ?');
    $users->execute(array(
        $id
    ));
    $user = $users->fetch();
    return $user;
}

function viewMyRdv($id)
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM rdv WHERE id_users = ? ORDER BY id DESC');
    $req->execute(array($id));
    $rdvs = $req->fetchAll();
    return $rdvs;
}


// actua
function viewActualites()
{
    global $bdd;
    $req = $bdd->query("SELECT actualites.id, actualites.name,actualites.accroche,actualites.description,actualites.image FROM actualites ORDER BY actualites.id  desc");
    $requete = $req->fetchAll();
    return $requete;
}
function viewActuExpress()
{
    global $bdd;
    $req = $bdd->query("SELECT actualites.id, actualites.name,actualites.description,actualites.image,actualites.accroche FROM actualites ORDER BY actualites.id LIMIT 3");
    $requete = $req->fetchAll();
    return $requete;
}

// vertifier si il existe dans la base 
function verifiePost($id){
    global $bdd;
    $req = $bdd -> prepare('SELECT * FROM actualites WHERE id = ?'); 
    $req -> execute(array(
        $id
    )); 
    $requete = $req -> fetch(); 
    return $requete;
}

function viewOneActu($id)
{
    global $bdd;
    $req = $bdd->prepare("SELECT actualites.id, actualites.name,actualites.description,actualites.image FROM actualites WHERE id = ?");
    $req -> execute([
        $id
    ]); 
    $requete = $req->fetch();
    return $requete;
}



// Facture 

function viewMyFactures($id)
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM factures WHERE id_users = ? ORDER BY id DESC');
    $req->execute(array($id));
    $rdvs = $req->fetchAll();
    return $rdvs;
}

// Contrat et prestation 
function viewContratForOneUser($id)
{
    global $bdd;
    $users = $bdd->prepare('SELECT contrat.id,contrat.name,contrat.contrat FROM contrat WHERE id_users = ? ORDER BY contrat.id DESC');
    $users->execute(array(
        $id
    ));
    $user = $users->fetchAll();
    return $user;
}
// video 

function viewVideo()
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM video');
    $req->execute(array());
    $resultat = $req->fetch();
    return $resultat;
}
