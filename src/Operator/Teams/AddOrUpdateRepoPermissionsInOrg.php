<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class AddOrUpdateRepoPermissionsInOrg
{
    public const OPERATION_ID    = 'teams/add-or-update-repo-permissions-in-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, string $teamSlug, string $owner, string $repo, array $params): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\AddOrUpdateRepoPermissionsInOrg($this->requestSchemaValidator, $org, $teamSlug, $owner, $repo);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
