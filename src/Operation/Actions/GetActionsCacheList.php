<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetActionsCacheList
{
    public const OPERATION_ID = 'actions/get-actions-cache-list';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/caches';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/caches';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The Git reference for the results you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    private string $ref;
    /**An explicit key or prefix for identifying the cache**/
    private string $key;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The property to sort the results by. `created_at` means when the cache was created. `last_accessed_at` means when the cache was last accessed. `size_in_bytes` is the size of the cache in bytes.**/
    private string $sort;
    /**The direction to sort the results by.**/
    private string $direction;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches $hydrator, string $owner, string $repo, string $ref, string $key, int $per_page = 30, int $page = 1, string $sort = 'last_accessed_at', string $direction = 'desc')
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
        $this->key = $key;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{ref}', '{key}', '{per_page}', '{page}', '{sort}', '{direction}'), array($this->owner, $this->repo, $this->ref, $this->key, $this->per_page, $this->page, $this->sort, $this->direction), self::PATH . '?ref={ref}&key={key}&per_page={per_page}&page={page}&sort={sort}&direction={direction}'));
    }
    /**
     * @return Schema\ActionsCacheList
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\ActionsCacheList
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ActionsCacheList::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ActionsCacheList::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
