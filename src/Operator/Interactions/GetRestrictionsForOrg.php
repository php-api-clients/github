<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Interactions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetRestrictionsForOrg
{
    public const OPERATION_ID    = 'interactions/get-restrictions-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/interaction-limits';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/interaction-limits';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<ResponseInterface>
     **/
    public function call(string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Interactions\GetRestrictionsForOrg($org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
