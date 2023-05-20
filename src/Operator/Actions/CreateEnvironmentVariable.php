<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateEnvironmentVariable
{
    public const OPERATION_ID    = 'actions/create-environment-variable';
    public const OPERATION_MATCH = 'POST /repositories/{repository_id}/environments/{environment_name}/variables';
    private const METHOD         = 'POST';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/variables';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables $hydrator)
    {
    }

    /**
     * @return PromiseInterface<EmptyObject>
     **/
    public function call(int $repositoryId, string $environmentName, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\CreateEnvironmentVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $repositoryId, $environmentName);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EmptyObject {
            return $operation->createResponse($response);
        });
    }
}
