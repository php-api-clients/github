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

final readonly class CreateForTeamDiscussionInOrg
{
    public const OPERATION_ID    = 'reactions/create-for-team-discussion-in-org';
    public const OPERATION_MATCH = 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Reaction>
     **/
    public function call(string $org, string $teamSlug, int $discussionNumber, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Reactions\CreateForTeamDiscussionInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $teamSlug, $discussionNumber);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Reaction {
            return $operation->createResponse($response);
        });
    }
}
