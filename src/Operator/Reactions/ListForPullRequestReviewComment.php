<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Reactions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListForPullRequestReviewComment
{
    public const OPERATION_ID    = 'reactions/list-for-pull-request-review-comment';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $owner, string $repo, int $commentId, string $content, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Reactions\ListForPullRequestReviewComment($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $commentId, $content, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
