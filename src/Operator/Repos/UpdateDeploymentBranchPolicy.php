<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\DeploymentBranchPolicy;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateDeploymentBranchPolicy
{
    public const OPERATION_ID    = 'repos/update-deployment-branch-policy';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies\BranchPolicyId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<DeploymentBranchPolicy>
     **/
    public function call(string $owner, string $repo, string $environmentName, int $branchPolicyId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\UpdateDeploymentBranchPolicy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $environmentName, $branchPolicyId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DeploymentBranchPolicy {
            return $operation->createResponse($response);
        });
    }
}
