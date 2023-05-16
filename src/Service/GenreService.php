<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use UnexpectedValueException;

class GenreService
{
    private  $genreData;

    public function __construct(private HttpClientInterface $data)
    {
        $this->genreData = $data;
    }

    public function getGenres()
    {
        $response = $this->genreData->request(
            Request::METHOD_GET, 'https://binaryjazz.us/wp-json/genrenator/v1/genre/10');
        $responseData = $response->toArray();

        if (empty($responseData)) {
            throw new UnexpectedValueException('No races found.');
        }

        return $responseData;
    }
}
