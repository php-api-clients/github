<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CodespacesSecret;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetSecretForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/get-secret-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/secrets/{secret_name}';
    private const METHOD         = 'GET';
    private const PATH           = '/user/codespaces/secrets/{secret_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Codespaces\Secrets\SecretName $hydrator)
    {
    }

    /**
     * @return PromiseInterface<CodespacesSecret>
     **/
    public function call(string $secretName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\GetSecretForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $secretName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodespacesSecret {
            return $operation->createResponse($response);
        });
    }
}
