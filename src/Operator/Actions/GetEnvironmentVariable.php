<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ActionsVariable;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetEnvironmentVariable
{
    public const OPERATION_ID    = 'actions/get-environment-variable';
    public const OPERATION_MATCH = 'GET /repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private const METHOD         = 'GET';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/variables/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables\Name $hydrator)
    {
    }

    /**
     * @return PromiseInterface<ActionsVariable>
     **/
    public function call(int $repositoryId, string $environmentName, string $name): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetEnvironmentVariable($this->responseSchemaValidator, $this->hydrator, $repositoryId, $environmentName, $name);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsVariable {
            return $operation->createResponse($response);
        });
    }
}
