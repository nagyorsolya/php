<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage", methods={"GET"})
     */
    public function index()
    {
        return $this->render('main.html.twig', []);
    }
    /**
     * @Route("/submit", name="submit")
     */
    public function showForm()
    {
        return $this->render('submit.html.twig', ['showError' => false]);
    }

    /**
     * @Route("/newPost", name="newPost")
     */
    public function submitPost(Request $request, ValidatorInterface $validator)
    {
        $post = new Post();

        if ($request->request->get('title') == "" || $request->request->get('url') == "") {
            return $this->render('submit.html.twig', [
                'showError' => true
            ]);
        }

        $post->setTitle($request->request->get('title'));
        $post->setUrl($request->request->get('url'));
        $post->setScore(0);

        $errors = $validator->validate($post);
        if (count($errors) > 0) {
            return $this->render('submit.html.twig', [
                'showError' => true
            ]);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($post);
        $entityManager->flush();

        return $this->render('submit.html.twig', [
            'showError' => false
        ]);
    }
}
