<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Users;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\GpgKey;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetGpgKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/get-gpg-key-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/gpg_keys/{gpg_key_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/user/gpg_keys/{gpg_key_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\GpgKeys\GpgKeyId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(GpgKey|array)>
     **/
    public function call(int $gpgKeyId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Users\GetGpgKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $gpgKeyId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GpgKey|array {
            return $operation->createResponse($response);
        });
    }
}
