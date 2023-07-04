<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\DeploymentStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetDeploymentStatus
{
    public const OPERATION_ID    = 'repos/get-deployment-status';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId $hydrator)
    {
    }

    /** @return PromiseInterface<DeploymentStatus> **/
    public function call(string $owner, string $repo, int $deploymentId, int $statusId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetDeploymentStatus($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $deploymentId, $statusId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DeploymentStatus {
            return $operation->createResponse($response);
        });
    }
}
