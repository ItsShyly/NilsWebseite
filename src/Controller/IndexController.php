<?php

namespace App\Controller;

use App\Repository\LebenslaufEintragRepository;
use App\Repository\TextRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

//use Doctrine\DBAL\Types\TextType;

class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(TextRepository $textRepository, LebenslaufEintragRepository $lebenslaufEintragRepository, Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {


        $form = $this->createFormBuilder()
                     ->add('email', EmailType::class, [
                         'label' => 'E-Mail',
                         'attr'  => [
                             'class' => 'input-field',
                         ],
                     ])
                     ->add('name', TextType::class,
                         [
                             'label' => 'Name',
                             'attr'  => [
                                 'class' => 'input-field',
                             ],
                         ])
                     ->add('subject', TextType::class, [
                         'label' => 'Betreff',
                         'attr'  => [
                             'class' => 'input-field',
                         ],
                     ])
                     ->add('message', TextareaType::class, [
                         'label' => 'Nachricht',
                         'attr'  => [
                             'class' => 'input-field',
                         ],
                     ])
                     ->add('submit', SubmitType::class, [
                         'label' => 'Absenden',
                         'attr'  => [
                             'class' => 'input-field',
                         ],
                     ])
                     ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $email = (new TemplatedEmail())
                ->from('schmidtnils2607@gmail.com')
                ->to('schmidtnils2607@gmail.com')
                ->subject('Website contact formular: ' . $form->get('subject')->getData())
                ->htmlTemplate('index/email.html.twig')
                ->context([
                    'formData' => [
                        'email'   => $form->get('email')->getData(),
                        'name'    => $form->get('name')->getData(),
                        'message' => $form->get('message')->getData(),
                    ],
                ]);
//                ->text('Absender: ' . $contactFormData['email'] . \PHP_EOL .
//                    'Name: ' . $contactFormData['name'] . \PHP_EOL .
//                    \PHP_EOL .
//                    'Message: ' . $contactFormData['message'] . \PHP_EOL,
//                    'text/plain');

            try {
                $mailer->send($email);
            } catch (TransportExceptionInterface $e) {

                if ($_ENV['APP_ENV'] === 'dev') {
                    throw $e;
                }
                throw new Exception('Yo da gabs n Fehler');
            }
        }

        return $this->render('index/index.html.twig', [
            'textAbout'      => $textRepository->findOneBy(['id' => 1])->getText(),
            'textMomentan'   => $textRepository->findOneBy(['id' => 2])->getText(),
            'textLebenslauf' => $textRepository->findOneBy(['id' => 3])->getText(),
            'data'           => $lebenslaufEintragRepository->findBy([], ['id' => 'asc']),
            'form'           => $form->createView(),
        ]);
    }
}


