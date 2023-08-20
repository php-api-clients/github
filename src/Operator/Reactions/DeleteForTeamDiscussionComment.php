<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Reactions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteForTeamDiscussionComment
{
    public const OPERATION_ID    = 'reactions/delete-for-team-discussion-comment';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, int $reactionId): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Reactions\DeleteForTeamDiscussionComment($org, $teamSlug, $discussionNumber, $commentNumber, $reactionId);
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
