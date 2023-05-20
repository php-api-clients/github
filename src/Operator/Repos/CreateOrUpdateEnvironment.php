<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Environment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateOrUpdateEnvironment
{
    public const OPERATION_ID    = 'repos/create-or-update-environment';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/environments/{environment_name}';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/environments/{environment_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Environment>
     **/
    public function call(string $owner, string $repo, string $environmentName, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\CreateOrUpdateEnvironment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $environmentName);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Environment {
            return $operation->createResponse($response);
        });
    }
}
