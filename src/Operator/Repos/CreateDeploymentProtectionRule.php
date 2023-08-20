<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\DeploymentProtectionRule;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateDeploymentProtectionRule
{
    public const OPERATION_ID    = 'repos/create-deployment-protection-rule';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules $hydrator)
    {
    }

    /** @return */
    public function call(string $environmentName, string $repo, string $owner, array $params): DeploymentProtectionRule|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\CreateDeploymentProtectionRule($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $environmentName, $repo, $owner);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DeploymentProtectionRule|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
