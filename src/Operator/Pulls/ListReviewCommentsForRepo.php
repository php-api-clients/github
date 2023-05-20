<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Pulls;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListReviewCommentsForRepo
{
    public const OPERATION_ID    = 'pulls/list-review-comments-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/comments';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls/comments';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<ResponseInterface>
     **/
    public function call(string $owner, string $repo, string $sort, string $direction, string $since, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Pulls\ListReviewCommentsForRepo($owner, $repo, $sort, $direction, $since, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
