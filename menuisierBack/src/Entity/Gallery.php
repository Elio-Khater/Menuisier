<?php
/**
 * Created by PhpStorm.
 * User: Elio Khater
 * Date: 8/6/2018
 * Time: 8:52 PM
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Gallery")
 */
class Gallery
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
    /**
     * @ORM\Column(type="integer", length=100)
     */
    public $gid;

    /**
     * @ORM\Column(type="text")
     */
    public $info;
    /**
     * @ORM\Column(type="text")
     */
    public $url;


    public function getInfo()
    {
        return $this->info;
    }
    public function setInfo($info)
    {
        $this->info = $info;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getgid()
    {
        return $this->gid;
    }
    public function setGid($gid)
    {
        $this->gid = $gid;
    }

    public function getPid()
    {
        return $this->pid;
    }
    public function setPid($pid)
    {
        $this->pid = $pid;
    }


}