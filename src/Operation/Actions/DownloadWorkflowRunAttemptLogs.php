<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DownloadWorkflowRunAttemptLogs
{
    public const OPERATION_ID = 'actions/download-workflow-run-attempt-logs';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the workflow run.**/
    private int $runId;
    /**The attempt number of the workflow run.**/
    private int $attemptNumber;
    public function __construct(string $owner, string $repo, int $runId, int $attemptNumber)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->runId = $runId;
        $this->attemptNumber = $attemptNumber;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{run_id}', '{attempt_number}'), array($this->owner, $this->repo, $this->runId, $this->attemptNumber), self::PATH));
    }
    /**
     * @return array{code: int,location: string}
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : array
    {
        switch ($response->getStatusCode()) {
            /**Response**/
            case 302:
                return array('code' => 302, 'location' => $response->getHeaderLine('Location'));
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
