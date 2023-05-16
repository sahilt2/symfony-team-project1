<?php

namespace App\Controller;

use App\Service\GenreService;
use App\Service\StoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenrenatorController extends AbstractController
{
    #[Route('/', name: 'app')]
    public function index(): Response
    {
        return $this->render('genre/index.html.twig', [
            'message' => 'Welcome to your new controller!',
        ]);
    }

    #[Route('/genre', name: 'app_genre')]
    public function genre(GenreService $genreService): Response
    {
        $genres = $genreService->getGenres();
        return $this->render('genre/genre.html.twig', [
            'genres' => $genres,
        ]);
    }

    #[Route('/story', name: 'app_story')]
    public function story(StoryService $storyService): Response
    {
        $stories = $storyService->getStories();
        return $this->render('genre/story.html.twig', [
            'stories' => $stories,
        ]);
    }
}
