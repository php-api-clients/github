<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CodespacesUserPublicKey;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetPublicKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/get-public-key-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/secrets/public-key';
    private const METHOD         = 'GET';
    private const PATH           = '/user/codespaces/secrets/public-key';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Codespaces\Secrets\PublicKey $hydrator)
    {
    }

    /**
     * @return PromiseInterface<CodespacesUserPublicKey>
     **/
    public function call(): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\GetPublicKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodespacesUserPublicKey {
            return $operation->createResponse($response);
        });
    }
}
