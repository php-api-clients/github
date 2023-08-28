<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Reactions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Reaction;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateForTeamDiscussionLegacy
{
    public const OPERATION_ID    = 'reactions/create-for-team-discussion-legacy';
    public const OPERATION_MATCH = 'POST /teams/{team_id}/discussions/{discussion_number}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions $hydrator)
    {
    }

    /** @return Schema\Reaction */
    public function call(int $teamId, int $discussionNumber, array $params): Reaction|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Reactions\CreateForTeamDiscussionLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $teamId, $discussionNumber);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Reaction|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
