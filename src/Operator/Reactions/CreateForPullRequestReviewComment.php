<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Reactions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Reaction;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateForPullRequestReviewComment
{
    public const OPERATION_ID    = 'reactions/create-for-pull-request-review-comment';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions $hydrator)
    {
    }

    /** @return PromiseInterface<Reaction> **/
    public function call(string $owner, string $repo, int $commentId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Reactions\CreateForPullRequestReviewComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $commentId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Reaction {
            return $operation->createResponse($response);
        });
    }
}
