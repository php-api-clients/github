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

final readonly class GetSshSigningKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/get-ssh-signing-key-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/ssh_signing_keys/{ssh_signing_key_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/user/ssh_signing_keys/{ssh_signing_key_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\SshSigningKeys\SshSigningKeyId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(SshSigningKey|array)>
     **/
    public function call(int $sshSigningKeyId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Users\GetSshSigningKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $sshSigningKeyId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): SshSigningKey|array {
            return $operation->createResponse($response);
        });
    }
}
