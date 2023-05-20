<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Git;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListMatchingRefs
{
    public const OPERATION_ID    = 'git/list-matching-refs';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/git/matching-refs/{ref}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/git/matching-refs/{ref}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<ResponseInterface>
     **/
    public function call(string $owner, string $repo, string $ref): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Git\ListMatchingRefs($owner, $repo, $ref);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
