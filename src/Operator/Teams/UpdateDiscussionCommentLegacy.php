<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateDiscussionCommentLegacy
{
    public const OPERATION_ID    = 'teams/update-discussion-comment-legacy';
    public const OPERATION_MATCH = 'PATCH /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber $hydrator)
    {
    }

    /**
     * @return PromiseInterface<TeamDiscussionComment>
     **/
    public function call(int $teamId, int $discussionNumber, int $commentNumber, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\UpdateDiscussionCommentLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $teamId, $discussionNumber, $commentNumber);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): TeamDiscussionComment {
            return $operation->createResponse($response);
        });
    }
}
