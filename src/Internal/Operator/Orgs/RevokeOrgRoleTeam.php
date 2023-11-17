<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Orgs;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RevokeOrgRoleTeam
{
    public const OPERATION_ID    = 'orgs/revoke-org-role-team';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/organization-roles/teams/{team_slug}/{role_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    public function call(string $org, string $teamSlug, int $roleId): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Orgs\RevokeOrgRoleTeam($org, $teamSlug, $roleId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
