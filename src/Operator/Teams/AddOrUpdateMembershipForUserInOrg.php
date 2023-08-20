<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\TeamMembership;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class AddOrUpdateMembershipForUserInOrg
{
    public const OPERATION_ID    = 'teams/add-or-update-membership-for-user-in-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/teams/{team_slug}/memberships/{username}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/memberships/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username $hydrator)
    {
    }

    /** @return (Schema\TeamMembership | array{code: int}) */
    public function call(string $org, string $teamSlug, string $username, array $params): TeamMembership|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\AddOrUpdateMembershipForUserInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $teamSlug, $username);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): TeamMembership|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
