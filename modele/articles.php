<?php
/**
	 * Retourne le code, le libelle et le lieu de tout les types de praticiens
	 *
	 * @return array $resultat qui retroune le code, le libelle et le lieu de tout les types de praticiens
	*/
function getArticles(){
    try{
        $monPdo = connexionPDO();
        $req = 'SELECT id_article, nom_article, resume_article, lien_article, date_article FROM article';
        $res = $monPdo->query($req);
        $result = $res->fetchAll();
        return $result;
        
    }catch(PDOException $e){
        print "Erreur : " . $e->getMessage();
        die();
    }
}
?>