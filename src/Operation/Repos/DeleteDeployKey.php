<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class DeleteDeployKey
{
    public const OPERATION_ID = 'repos/delete-deploy-key';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/keys/{key_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/keys/{key_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the key.**/
    private int $key_id;
    public function __construct(string $owner, string $repo, int $key_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->key_id = $key_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{key_id}'), array($this->owner, $this->repo, $this->key_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
