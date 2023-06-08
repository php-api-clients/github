<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListRepositoriesForSecretForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/list-repositories-for-secret-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/secrets/{secret_name}/repositories';
    private const METHOD         = 'GET';
    private const PATH           = '/user/codespaces/secrets/{secret_name}/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Json>
     **/
    public function call(string $secretName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $secretName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Json {
            return $operation->createResponse($response);
        });
    }
}