<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RemoveRepoInOrg
{
    public const OPERATION_ID    = 'teams/remove-repo-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, string $teamSlug, string $owner, string $repo): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\RemoveRepoInOrg($org, $teamSlug, $owner, $repo);
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
