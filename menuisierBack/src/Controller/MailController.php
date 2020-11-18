<?php
namespace App\Controller;
use App\Entity\Accomplishements;
use App\Entity\Mails;
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
 *
 * @Route("/api/mail")
 */
class MailController extends Controller
{
    /**
     * Lists all info.
     * @FOSRest\Post("")
     *
     * @return JsonResponse
     */
    public function postMailAction(Request $request)
    {
       // $repository = $this->getDoctrine()->getRepository(Frontend::class);

        $content = $request->getContent();
        $json = json_decode($content, true);
        $data = $json['mail'];

        // $aboutus = $repository->findOneBy(['key' => 'aboutus']);
        $entityManager = $this->getDoctrine()->getManager();

        $mail = new Mails();
        $mail->setName($data['name']);
        $mail->setEmail($data['email']);
        $mail->setPhone($data['phone']);
        $mail->setRequest($data['request']);
        $mail->setMessage($data['message']);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($mail);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return new JsonResponse("Your data was sent", Response::HTTP_OK , []);

        //return new Response('Saved new product with id '.$mail->getId());
    }

}