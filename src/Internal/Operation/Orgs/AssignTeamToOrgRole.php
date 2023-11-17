<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class AssignTeamToOrgRole
{
    public const OPERATION_ID    = 'orgs/assign-team-to-org-role';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/organization-roles/teams/{team_slug}/{role_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The unique identifier of the role. **/
    private int $roleId;

    public function __construct(string $org, string $teamSlug, int $roleId)
    {
        $this->org      = $org;
        $this->teamSlug = $teamSlug;
        $this->roleId   = $roleId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', str_replace(['{org}', '{team_slug}', '{role_id}'], [$this->org, $this->teamSlug, $this->roleId], '/orgs/{org}/organization-roles/teams/{team_slug}/{role_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Response if the organization, team or role does not exist.
             **/

            case 404:
                return new WithoutBody(404, []);
            /**
             * Response if the organization roles feature is not enabled for the organization, or validation failed.
             **/

            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
