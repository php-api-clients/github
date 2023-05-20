<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Interactions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetRestrictionsForRepo
{
    public const OPERATION_ID    = 'interactions/get-restrictions-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/interaction-limits';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/interaction-limits';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<ResponseInterface>
     **/
    public function call(string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Interactions\GetRestrictionsForRepo($owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
