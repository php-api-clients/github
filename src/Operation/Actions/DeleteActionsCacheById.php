<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
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
    private int $cache_id;
    public function __construct(string $owner, string $repo, int $cache_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->cache_id = $cache_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{cache_id}'), array($this->owner, $this->repo, $this->cache_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
