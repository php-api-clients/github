<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Users;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Key;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetPublicSshKeyForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/get-public-ssh-key-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/keys/{key_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Keys\KeyId $hydrator)
    {
    }

    /** @return Schema\Key|array{code:int} */
    public function call(int $keyId): Key|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Users\GetPublicSshKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $keyId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Key|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
