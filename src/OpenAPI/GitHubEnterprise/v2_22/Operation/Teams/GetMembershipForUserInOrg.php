<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetMembershipForUserInOrg
{
    private const OPERATION_ID = 'teams/get-membership-for-user-in-org';
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    public string $username;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $team_slug, $username)
    {
        $this->org       = $org;
        $this->team_slug = $team_slug;
        $this->username  = $username;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{team_slug}', '{username}'], [$this->org, $this->team_slug, $this->username], '/orgs/{org}/teams/{team_slug}/memberships/{username}?'));
    }

    function validateResponse(): void
    {
    }
}
