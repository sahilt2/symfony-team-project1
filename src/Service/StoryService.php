<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use UnexpectedValueException;

class StoryService
{
    private string $storyEndpoint;

    public function __construct(private HttpClientInterface $httpClient)
    {
        $this->storyEndpoint = 'https://binaryjazz.us/wp-json/genrenator/v1/story/10';
    }

    public function getStories(): array
    {
        $response = $this->httpClient->request(
            Request::METHOD_GET,
            $this->storyEndpoint
        );
        $responseData = $response->toArray();

        if (empty($responseData)) {
            throw new UnexpectedValueException('No stories found.');
        }

        return $responseData;
    }
}
