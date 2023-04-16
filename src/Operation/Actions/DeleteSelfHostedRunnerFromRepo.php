<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class DeleteSelfHostedRunnerFromRepo
{
    public const OPERATION_ID = 'actions/delete-self-hosted-runner-from-repo';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/actions/runners/{runner_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**Unique identifier of the self-hosted runner.**/
    private int $runnerId;
    public function __construct(string $owner, string $repo, int $runnerId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->runnerId = $runnerId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{runner_id}'), array($this->owner, $this->repo, $this->runnerId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
