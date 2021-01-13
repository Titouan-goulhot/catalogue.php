<?

include_once('class_articles.php');
class Catalogue
{
    private $articles = [];

    public function __construct()
    {
        //se connecter à la BDD
        $bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //charger les données de la table "products"
        $query = $bdd->query('SELECT * FROM products');
        $reponse = $query->fetchAll(PDO::FETCH_ASSOC);

        //Boucle qui parcours le tableau 
        foreach ($reponse as $article) {
            $nouvelArticle = new Article($bdd['id'], $bdd['name'], $bdd['price'], $bdd['picture']);
            
            $this->articles[$article['id']] = $nouvelArticle;

        }
        return $this->nouvelArticle;
    }   

}