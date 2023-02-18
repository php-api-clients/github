<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveMembershipForUserInOrg
{
    public const OPERATION_ID    = 'teams/remove-membership-for-user-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/memberships/{username}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $team_slug;
    /**The handle for the GitHub user account.**/
    private string $username;

    public function __construct(string $org, string $team_slug, string $username)
    {
        $this->org       = $org;
        $this->team_slug = $team_slug;
        $this->username  = $username;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{username}'], [$this->org, $this->team_slug, $this->username], self::PATH));
    }

    function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
