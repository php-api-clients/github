<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Interactions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RemoveRestrictionsForAuthenticatedUser
{
    public const OPERATION_ID    = 'interactions/remove-restrictions-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/interaction-limits';
    private const METHOD         = 'DELETE';
    private const PATH           = '/user/interaction-limits';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Interactions\RemoveRestrictionsForAuthenticatedUser();
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
