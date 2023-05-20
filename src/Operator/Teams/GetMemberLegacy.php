<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetMemberLegacy
{
    public const OPERATION_ID    = 'teams/get-member-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/members/{username}';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/members/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $teamId, string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\GetMemberLegacy($teamId, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
