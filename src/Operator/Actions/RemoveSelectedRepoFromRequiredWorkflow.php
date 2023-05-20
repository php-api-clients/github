<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RemoveSelectedRepoFromRequiredWorkflow
{
    public const OPERATION_ID    = 'actions/remove-selected-repo-from-required-workflow';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org, int $requiredWorkflowId, int $repositoryId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\RemoveSelectedRepoFromRequiredWorkflow($org, $requiredWorkflowId, $repositoryId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
