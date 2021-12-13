<?php

namespace App\Controller;

use App\Repository\LebenslaufEintragRepository;
use App\Repository\TextRepository;
//use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Builder\Namespace_;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\Email;



class IndexController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(TextRepository $textRepository, LebenslaufEintragRepository $lebenslaufEintragRepository,Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response

   {


        $form = $this->createFormBuilder()
            ->add('email', EmailType::class,[
                'label'=>'Email Adresse',
            ])
            ->add('name', TextType::class)
            ->add('message', TextType::class)
            ->add('submit', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);



        if($form->isSubmitted() && $form->isValid()){

             $email = (new TemplatedEmail())
            ->from('schmidtnils2607@gmail.com')
            ->to('schmidtnils2607@gmail.com')
            ->subject('Website Email')
            ->htmlTemplate('index/email.html.twig');

            try {
                $mailer->send($email);
            } catch (TransportExceptionInterface $e) {

                if($_ENV['APP_ENV'] === 'dev'){
                    throw $e;
                }
                throw new \Exception('Yo da gabs n Fehler');
            }



        }




        return $this->render('index/index.html.twig', [
            'textAbout' => $textRepository->findOneBy(['id' => 1])->getText(),
            'textMomentan' => $textRepository->findOneBy(['id' => 2])->getText(),
            'textLebenslauf' => $textRepository->findOneBy(['id' => 3])->getText(),
            'data' => $lebenslaufEintragRepository->findBy([], ['id' => 'asc']),
            'form' => $form->createView(),
        ]);
    }
}


