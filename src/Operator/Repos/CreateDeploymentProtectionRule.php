<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\DeploymentProtectionRule;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateDeploymentProtectionRule
{
    public const OPERATION_ID    = 'repos/create-deployment-protection-rule';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules $hydrator)
    {
    }

    /**
     * @return PromiseInterface<DeploymentProtectionRule>
     **/
    public function call(string $environmentName, string $repo, string $owner, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\CreateDeploymentProtectionRule($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $environmentName, $repo, $owner);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DeploymentProtectionRule {
            return $operation->createResponse($response);
        });
    }
}
