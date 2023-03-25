<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class DeleteWorkflowRun
{
    public const OPERATION_ID = 'actions/delete-workflow-run';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/actions/runs/{run_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the workflow run.**/
    private int $runId;
    public function __construct(string $owner, string $repo, int $runId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->runId = $runId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{run_id}'), array($this->owner, $this->repo, $this->runId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
