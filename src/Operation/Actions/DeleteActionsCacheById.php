<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteActionsCacheById
{
    public const OPERATION_ID    = 'actions/delete-actions-cache-by-id';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/caches/{cache_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/actions/caches/{cache_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the GitHub Actions cache.**/
    private int $cacheId;

    public function __construct(string $owner, string $repo, int $cacheId)
    {
        $this->owner   = $owner;
        $this->repo    = $repo;
        $this->cacheId = $cacheId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{cache_id}'], [$this->owner, $this->repo, $this->cacheId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
