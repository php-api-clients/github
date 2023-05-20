<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Users;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\SshSigningKey;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateSshSigningKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/create-ssh-signing-key-for-authenticated-user';
    public const OPERATION_MATCH = 'POST /user/ssh_signing_keys';
    private const METHOD         = 'POST';
    private const PATH           = '/user/ssh_signing_keys';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\SshSigningKeys $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(SshSigningKey|array)>
     **/
    public function call(array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Users\CreateSshSigningKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): SshSigningKey|array {
            return $operation->createResponse($response);
        });
    }
}
