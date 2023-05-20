<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RemoveMembershipForUserLegacy
{
    public const OPERATION_ID    = 'teams/remove-membership-for-user-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/memberships/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/teams/{team_id}/memberships/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $teamId, string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\RemoveMembershipForUserLegacy($teamId, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
