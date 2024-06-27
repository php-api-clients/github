<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Users;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\PrivateUser;
use ApiClients\Client\GitHub\Schema\PublicUser;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetById
{
    public const OPERATION_ID    = 'users/get-by-id';
    public const OPERATION_MATCH = 'GET /user/{account_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\AccountId $hydrator)
    {
    }

    public function call(int $accountId): PrivateUser|PublicUser
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Users\GetById($this->responseSchemaValidator, $this->hydrator, $accountId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PrivateUser|PublicUser {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
