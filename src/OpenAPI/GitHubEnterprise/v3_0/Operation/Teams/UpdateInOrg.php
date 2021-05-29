<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UpdateInOrg
{
    private const OPERATION_ID = 'teams/update-in-org';
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $team_slug)
    {
        $this->org       = $org;
        $this->team_slug = $team_slug;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{org}', '{team_slug}'], [$this->org, $this->team_slug], '/orgs/{org}/teams/{team_slug}?'));
    }

    function validateResponse(): void
    {
    }
}
