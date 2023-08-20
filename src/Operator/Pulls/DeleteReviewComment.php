<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Pulls;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteReviewComment
{
    public const OPERATION_ID    = 'pulls/delete-review-comment';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/pulls/comments/{comment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $owner, string $repo, int $commentId): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Pulls\DeleteReviewComment($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $commentId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
