<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Search;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class Topics
{
    public const OPERATION_ID    = 'search/topics';
    public const OPERATION_MATCH = 'GET /search/topics';
    private const METHOD         = 'GET';
    private const PATH           = '/search/topics';
    /**The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as the web interface for GitHub. To learn more about the format of the query, see [Constructing a search query](https://docs.github.com/rest/search/search#constructing-a-search-query). **/
    private string $q;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Search\Topics $hydrator, string $q, int $perPage = 30, int $page = 1)
    {
        $this->q       = $q;
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{q}', '{per_page}', '{page}'], [$this->q, $this->perPage, $this->page], self::PATH . '?q={q}&per_page={per_page}&page={page}'));
    }

    /** @return Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|array{code: int} */
    public function createResponse(ResponseInterface $response): Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Search\Topics\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Search\Topics\Response\ApplicationJson\Ok::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Not modified
             **/
            case 304:
                return ['code' => 304];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
