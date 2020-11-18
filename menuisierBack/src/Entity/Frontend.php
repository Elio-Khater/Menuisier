<?php

/**
 * Created by PhpStorm.
 * User: Elio Khater
 * Date: 8/2/2018
 * Time: 10:59 PM
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Frontend")
 */
class Frontend {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $key;
    /**
     * @ORM\Column(type="text")
     */
    public $text;

    public function getText()
    {

        return $this->text;
    }
    public function setText($text)
    {
        $this->text = $text;
    }
}
?>