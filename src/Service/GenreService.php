<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use UnexpectedValueException;

class GenreService
{
    private string $genreEndpoint;

    public function __construct(private HttpClientInterface $httpClient)
    {
        $this->genreEndpoint = 'https://binaryjazz.us/wp-json/genrenator/v1/genre/10';
    }

    public function getGenres(): array
    {
        $response = $this->httpClient->request(
            Request::METHOD_GET,
            $this->genreEndpoint
        );
        $responseData = $response->toArray();

        if (empty($responseData)) {
            throw new UnexpectedValueException('No genres found.');
        }

        return $responseData;
    }
}
