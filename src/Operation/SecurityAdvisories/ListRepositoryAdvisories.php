<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\SecurityAdvisories;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class ListRepositoryAdvisories
{
    public const OPERATION_ID = 'security-advisories/list-repository-advisories';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/security-advisories';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/security-advisories';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor.**/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor.**/
    private string $after;
    /**Filter by state of the repository advisories. Only advisories of this state will be returned.**/
    private string $state;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The property to sort the results by.**/
    private string $sort;
    /**Number of advisories to return per page.**/
    private int $perPage;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecurityAdvisories $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecurityAdvisories $hydrator, string $owner, string $repo, string $before, string $after, string $state, string $direction = 'desc', string $sort = 'created', int $perPage = 30)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->before = $before;
        $this->after = $after;
        $this->state = $state;
        $this->direction = $direction;
        $this->sort = $sort;
        $this->perPage = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{before}', '{after}', '{state}', '{direction}', '{sort}', '{per_page}'), array($this->owner, $this->repo, $this->before, $this->after, $this->state, $this->direction, $this->sort, $this->perPage), self::PATH . '?before={before}&after={after}&state={state}&direction={direction}&sort={sort}&per_page={per_page}'));
    }
    /**
     * @return \Rx\Observable<Schema\RepositoryAdvisory>
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                    **/
                    case 200:
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\RepositoryAdvisory::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\RepositoryAdvisory {
                            return $this->hydrator->hydrateObject(Schema\RepositoryAdvisory::class, $body);
                        });
                    /**
                     * Bad Request
                    **/
                    case 400:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(400, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Resource not found
                    **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
