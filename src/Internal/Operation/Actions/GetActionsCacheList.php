<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal;
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

final class GetActionsCacheList
{
    public const OPERATION_ID    = 'actions/get-actions-cache-list';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/caches';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The full Git reference for narrowing down the cache. The `ref` for a branch should be formatted as `refs/heads/<branch name>`. To reference a pull request use `refs/pull/<number>/merge`. **/
    private string $ref;
    /**An explicit key or prefix for identifying the cache **/
    private string $key;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The property to sort the results by. `created_at` means when the cache was created. `last_accessed_at` means when the cache was last accessed. `size_in_bytes` is the size of the cache in bytes. **/
    private string $sort;
    /**The direction to sort the results by. **/
    private string $direction;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches $hydrator, string $owner, string $repo, string $ref, string $key, int $perPage = 30, int $page = 1, string $sort = 'last_accessed_at', string $direction = 'desc')
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->ref       = $ref;
        $this->key       = $key;
        $this->perPage   = $perPage;
        $this->page      = $page;
        $this->sort      = $sort;
        $this->direction = $direction;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{ref}', '{key}', '{per_page}', '{page}', '{sort}', '{direction}'], [$this->owner, $this->repo, $this->ref, $this->key, $this->perPage, $this->page, $this->sort, $this->direction], '/repos/{owner}/{repo}/actions/caches' . '?ref={ref}&key={key}&per_page={per_page}&page={page}&sort={sort}&direction={direction}'));
    }

    public function createResponse(ResponseInterface $response): Schema\ActionsCacheList
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ActionsCacheList::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ActionsCacheList::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
