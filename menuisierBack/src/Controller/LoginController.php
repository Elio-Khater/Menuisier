<?php
namespace App\Controller;
use App\Entity\Accomplishements;
use App\Entity\Mails;
use App\Entity\User;
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
 * @Route("/api/admin")
 */
class LoginController extends Controller
{
    /**
     * Lists all info.
     * @FOSRest\Post("/login")
     *
     * @return JsonResponse
     */
    public function loginAction(Request $request)
    {
        // $repository = $this->getDoctrine()->getRepository(Frontend::class);

        $content = $request->getContent();
        $json = json_decode($content, true);
        $data = $json['login'];

        $passwordHash = hash("md5",$data['password']);
        $user = new User();
        $user->setUsername($data['username']);
        $user->setPassword($passwordHash);


        $repository = $this->getDoctrine()->getRepository(User::class);


        $usersFound = $repository->findOneBy(['username' => $user->getUsername(), 'password' => $user->getPassword()]);

        if($usersFound!=null){
            return new JsonResponse("success", Response::HTTP_OK , []);
        }
        else{
            return new JsonResponse("Wrong credentials, please try again.", Response::HTTP_OK , []);
        }





        //return new Response('Saved new product with id '.$mail->getId());
    }

}