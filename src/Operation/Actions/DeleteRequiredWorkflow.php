<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteRequiredWorkflow
{
    public const OPERATION_ID    = 'actions/delete-required-workflow';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/required_workflows/{required_workflow_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/actions/required_workflows/{required_workflow_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the required workflow. **/
    private int $requiredWorkflowId;

    public function __construct(string $org, int $requiredWorkflowId)
    {
        $this->org                = $org;
        $this->requiredWorkflowId = $requiredWorkflowId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{required_workflow_id}'], [$this->org, $this->requiredWorkflowId], self::PATH));
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
