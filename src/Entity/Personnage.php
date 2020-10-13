<?

namespace App\Entity;

class Personnage
{

    public $nom;
    public $sexe;
    public $age;
    public $carac = [];

    public static $personnages = [];

    public function __construct($nom, $age, $sexe, $carac)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personnages[] =  $this;
    }

    public static function creerPersonnage()
    {
        $p1 = new Personnage("Marc", 25, true, [
            "force" => 3,
            "agi" => 2,
            "intel" => 3
        ]);

        $p2 = new Personnage("Milo", 30, true, [
            "force" => 3,
            "agi" => 2,
            "intel" => 3
        ]);

        $p3 = new Personnage("Tya", 22, false, [
            "force" => 3,
            "agi" => 2,
            "intel" => 3
        ]);
    }

    //  $j1 = [
    //         "nom" => "Marc",
    //         "age" => 25,
    //         "sexe" => true,
    //         "carac" => [
    //             "force" => 3,
    //             "agi" => 2,
    //             "intel" => 3

    //         ]
    //     ];
}
