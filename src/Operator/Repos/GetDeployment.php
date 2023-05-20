<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Deployment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetDeployment
{
    public const OPERATION_ID    = 'repos/get-deployment';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/deployments/{deployment_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/deployments/{deployment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Deployment>
     **/
    public function call(string $owner, string $repo, int $deploymentId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetDeployment($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $deploymentId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Deployment {
            return $operation->createResponse($response);
        });
    }
}
