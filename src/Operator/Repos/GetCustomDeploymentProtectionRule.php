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

final readonly class GetCustomDeploymentProtectionRule
{
    public const OPERATION_ID    = 'repos/get-custom-deployment-protection-rule';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\ProtectionRuleId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<DeploymentProtectionRule>
     **/
    public function call(string $owner, string $repo, string $environmentName, int $protectionRuleId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetCustomDeploymentProtectionRule($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $environmentName, $protectionRuleId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DeploymentProtectionRule {
            return $operation->createResponse($response);
        });
    }
}