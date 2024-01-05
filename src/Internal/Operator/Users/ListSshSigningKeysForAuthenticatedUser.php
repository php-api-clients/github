<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Users;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListSshSigningKeysForAuthenticatedUser
{
    public const OPERATION_ID    = 'users/list-ssh-signing-keys-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/ssh_signing_keys';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\SshSigningKeys $hydrator)
    {
    }

    /** @return iterable<int,Schema\SshSigningKey>|WithoutBody */
    public function call(int $perPage = 30, int $page = 1): iterable|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Users\ListSshSigningKeysForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
