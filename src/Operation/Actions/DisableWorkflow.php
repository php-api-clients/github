<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DisableWorkflow
{
    public const OPERATION_ID    = 'actions/disable-workflow';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string. **/
    private $workflowId;

    public function __construct(string $owner, string $repo, $workflowId)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->workflowId = $workflowId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{workflow_id}'], [$this->owner, $this->repo, $this->workflowId], self::PATH));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
