<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CommitComment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetCommitComment
{
    public const OPERATION_ID    = 'repos/get-commit-comment';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/comments/{comment_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/comments/{comment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId $hydrator)
    {
    }

    /** @return PromiseInterface<CommitComment> **/
    public function call(string $owner, string $repo, int $commentId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetCommitComment($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $commentId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CommitComment {
            return $operation->createResponse($response);
        });
    }
}
