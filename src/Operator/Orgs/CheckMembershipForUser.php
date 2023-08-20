<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CheckMembershipForUser
{
    public const OPERATION_ID    = 'orgs/check-membership-for-user';
    public const OPERATION_MATCH = 'GET /orgs/{org}/members/{username}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/members/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (array{code: int} | array{code: int, location: string}) */
    public function call(string $org, string $username): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\CheckMembershipForUser($org, $username);
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
