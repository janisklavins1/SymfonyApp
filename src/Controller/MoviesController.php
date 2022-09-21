<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        //  Find all moves
        $repository = $this->em->getRepository(Movie::class);

        //  Find all items and order them
        // $movies = $repository->findBy([], ['id' => 'DESC']);

        // Find move where id is 6 and title is spiderman order it desc
        // $movies = $repository->findOneBy(['id' => 6, 'title' => 'Spider Man'], ['id' => 'DESC']);

        $movies = $repository->count([]);

        dd($movies);

        return $this->render('index.html.twig');
    }
}
