<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use UnexpectedValueException;

class CountService
{
    private string $countEndpoint;

    public function __construct(private HttpClientInterface $httpClient)
    {
        $this->countEndpoint = 'https://binaryjazz.us/wp-json/genrenator/v1/count';
    }

    public function getTotalCount()
    {
        $response = $this->httpClient->request(
            Request::METHOD_GET,
            $this->countEndpoint
        );
        $responseData = $response->getContent();
        $totalCount = str_replace(',', ' ', $responseData);
        $totalCount = trim($totalCount, '"');

        if (empty($totalCount)) {
            throw new UnexpectedValueException('No count found.');
        }

        return $totalCount;
    }
}
