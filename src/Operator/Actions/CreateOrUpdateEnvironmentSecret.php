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

final readonly class CreateOrUpdateEnvironmentSecret
{
    public const OPERATION_ID    = 'actions/create-or-update-environment-secret';
    public const OPERATION_MATCH = 'PUT /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';
    private const METHOD         = 'PUT';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\SecretName $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(EmptyObject|array)>
     **/
    public function call(int $repositoryId, string $environmentName, string $secretName, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\CreateOrUpdateEnvironmentSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $repositoryId, $environmentName, $secretName);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EmptyObject|array {
            return $operation->createResponse($response);
        });
    }
}
