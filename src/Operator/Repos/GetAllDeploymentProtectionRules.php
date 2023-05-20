<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAllDeploymentProtectionRules
{
    public const OPERATION_ID    = 'repos/get-all-deployment-protection-rules';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Ok>
     **/
    public function call(string $environmentName, string $repo, string $owner): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetAllDeploymentProtectionRules($this->responseSchemaValidator, $this->hydrator, $environmentName, $repo, $owner);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        });
    }
}
