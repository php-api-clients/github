<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

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

final class ListArtifactsForRepo
{
    public const OPERATION_ID    = 'actions/list-artifacts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/artifacts';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/artifacts';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**Filters artifacts by exact match on their name field. **/
    private string $name;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts $hydrator, string $owner, string $repo, string $name, int $perPage = 30, int $page = 1)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->name                    = $name;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{name}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->name, $this->perPage, $this->page], self::PATH . '?name={name}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
