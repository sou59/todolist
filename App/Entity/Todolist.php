<?php
namespace APP\Entity;

use App\Entity\Db ;

class Todolist {

    private $id;
    private $title;
    private $fait;
    private static $db;

    public function getId(){
        return $this->id;
    }

    public function setId($id) {
        if(is_int($id) && $id > 0) {
            $this->id = $id;
        }
    }

    public function getTitle(){
        return $this->title;
    }

    public function settitle($title) {
        $this->title = $title;
    }
    public function __construct ($data) {
        $this->hydrate($data);
    }

    // hydratation
    public function hydrate($data) {
        foreach($data as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    public static function prepare() {
        // antislash ou ajouter en haut use PDO
        self::$db;
    }

}