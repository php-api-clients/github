<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteActionsCacheById
{
    public const OPERATION_ID = 'actions/delete-actions-cache-by-id';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/caches/{cache_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/actions/caches/{cache_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the GitHub Actions cache.**/
    private int $cacheId;
    public function __construct(string $owner, string $repo, int $cacheId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->cacheId = $cacheId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{cache_id}'), array($this->owner, $this->repo, $this->cacheId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
