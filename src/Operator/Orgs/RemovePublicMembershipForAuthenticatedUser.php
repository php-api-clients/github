<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RemovePublicMembershipForAuthenticatedUser
{
    public const OPERATION_ID    = 'orgs/remove-public-membership-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/public_members/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/public_members/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org, string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser($org, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
