<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetBranchRules
{
    public const OPERATION_ID    = 'repos/get-branch-rules';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/rules/branches/{branch}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/rules/branches/{branch}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<ResponseInterface>
     **/
    public function call(string $owner, string $repo, string $branch): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetBranchRules($owner, $repo, $branch);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
