<?php
/**
 * Created by PhpStorm.
 * User: Elio Khater
 * Date: 8/6/2018
 * Time: 8:45 PM
 */
namespace App\Controller;
use App\Entity\GalleryType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Gallery;
/**
 * Brand controller.
 *
 * @Route("/api/gallery")
 */
class GalleryController extends Controller
{

      /**
     * Lists all info.
     * @FOSRest\Get("/")
     *
     * @return JsonResponse
     */
    public function getGalleryAction()
    {
        $repository = $this->getDoctrine()->getRepository(Gallery::class);


        $gallery = $repository->findAll();

        return new JsonResponse($gallery, Response::HTTP_OK , []);
    }

    /**
     * Lists all info.
     * @FOSRest\Get("/{gid}/type")
     *
     * @return JsonResponse
     */
    public function getGalleryByTypeAction($gid)
    {
        $repository = $this->getDoctrine()->getRepository(Gallery::class);


        $gallery = $repository->findBy(['gid' => $gid],null,3,null);

        return new JsonResponse($gallery, Response::HTTP_OK , []);
    }

    /**
     * Lists all info.
     * @FOSRest\Get("/type")
     *
     * @return JsonResponse
     */
    public function getTypeAction()
    {
        $repository = $this->getDoctrine()->getRepository(GalleryType::class);


        $gallery = $repository->findAll();

        return new JsonResponse($gallery, Response::HTTP_OK , []);
    }


}