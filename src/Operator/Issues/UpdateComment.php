<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Issues;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\IssueComment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateComment
{
    public const OPERATION_ID    = 'issues/update-comment';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/issues/comments/{comment_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/issues/comments/{comment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<IssueComment>
     **/
    public function call(string $owner, string $repo, int $commentId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Issues\UpdateComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $commentId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): IssueComment {
            return $operation->createResponse($response);
        });
    }
}
