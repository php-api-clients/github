<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Interactions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RemoveRestrictionsForOrg
{
    public const OPERATION_ID    = 'interactions/remove-restrictions-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/interaction-limits';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/interaction-limits';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Interactions\RemoveRestrictionsForOrg($org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
