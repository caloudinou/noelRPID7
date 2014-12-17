<?php   

try{
    
    //préparation de la requete insertion dans la bdd
    $stmt = $pdo->prepare("
                            INSERT INTO participants (email, nom, prenom, ip, proxy, useragent, referror, time) 
                            VALUES (:email,:nom,:prenom,:ip,:proxy,:useragent,:referror,datetime('now', 'localtime'))
                          ");
    
    $result = $stmt->execute(
                                array(
                                    'email'         => $_POST['email'],
                                    'nom'           => $_POST['nom'],
                                    'prenom'        => $_POST['prenom'],
                                    'ip'            => $_SERVER['REMOTE_ADDR'],
                                    'proxy'         => getenv('HTTP_XROXY_CONNECTION'),
                                    'useragent'     => $_SERVER['HTTP_USER_AGENT'],
                                    'referror'      => $_SERVER['HTTP_REFERER']
                                    )
                            );
    
} 
catch(Exception $e)
{
}