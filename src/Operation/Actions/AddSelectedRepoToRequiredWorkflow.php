<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class AddSelectedRepoToRequiredWorkflow
{
    public const OPERATION_ID    = 'actions/add-selected-repo-to-required-workflow';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the required workflow. **/
    private int $requiredWorkflowId;
    /**The unique identifier of the repository. **/
    private int $repositoryId;

    public function __construct(string $org, int $requiredWorkflowId, int $repositoryId)
    {
        $this->org                = $org;
        $this->requiredWorkflowId = $requiredWorkflowId;
        $this->repositoryId       = $repositoryId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{required_workflow_id}', '{repository_id}'], [$this->org, $this->requiredWorkflowId, $this->repositoryId], self::PATH));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Success
             **/
            case 204:
                return ['code' => 204];
            /**
             * Resource Not Found
             **/

            case 404:
                return ['code' => 404];
            /**
             * Validation Error
             **/

            case 422:
                return ['code' => 422];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
