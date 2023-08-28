<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Users;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeletePublicSshKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/delete-public-ssh-key-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/keys/{key_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Keys\KeyId $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(int $keyId): array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Users\DeletePublicSshKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $keyId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
