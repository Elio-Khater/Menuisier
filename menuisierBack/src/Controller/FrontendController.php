<?php
namespace App\Controller;
use App\Entity\Accomplishements;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;


use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Frontend;
/**
 * Brand controller.
 *`````````````````````````
 * @Route("/api/info")
 */
class FrontendController extends Controller
{
     /**
     * Lists all info.
     * @FOSRest\Get("/aboutus")
     *
     * @return JsonResponse
     */
    public function getAboutusAction()
    {
        $repository = $this->getDoctrine()->getRepository(Frontend::class);


        $aboutus = $repository->findOneBy(['key' => 'aboutus']);

        return new JsonResponse($aboutus, Response::HTTP_OK , []);
    }

    /**
     * Lists all info.
     * @FOSRest\Get("/contactus")
     *
     * @return JsonResponse
     */
    public function getContactusAction()
    {
        $repository = $this->getDoctrine()->getRepository(Frontend::class);


        $contactus = $repository->findOneBy(['key' => 'contactus']);

        return new JsonResponse($contactus, Response::HTTP_OK , []);
    }

    /**
     * Lists all info.
     * @FOSRest\Get("/accomplishements")
     *
     * @return JsonResponse
     */
    public function getAccomplishementsAction()
    {
        $repository = $this->getDoctrine()->getRepository(Accomplishements::class);


        $accomplishements = $repository->findAll();

        return new JsonResponse($accomplishements, Response::HTTP_OK , []);
    }


}