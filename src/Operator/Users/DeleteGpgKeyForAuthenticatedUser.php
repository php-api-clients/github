<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Users;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteGpgKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/delete-gpg-key-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/gpg_keys/{gpg_key_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/user/gpg_keys/{gpg_key_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\GpgKeys\GpgKeyId $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(int $gpgKeyId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Users\DeleteGpgKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $gpgKeyId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
