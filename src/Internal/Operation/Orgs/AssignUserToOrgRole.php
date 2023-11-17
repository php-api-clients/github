<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class AssignUserToOrgRole
{
    public const OPERATION_ID    = 'orgs/assign-user-to-org-role';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/organization-roles/users/{username}/{role_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The handle for the GitHub user account. **/
    private string $username;
    /**The unique identifier of the role. **/
    private int $roleId;

    public function __construct(string $org, string $username, int $roleId)
    {
        $this->org      = $org;
        $this->username = $username;
        $this->roleId   = $roleId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', str_replace(['{org}', '{username}', '{role_id}'], [$this->org, $this->username, $this->roleId], '/orgs/{org}/organization-roles/users/{username}/{role_id}'));
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
             * Response if the organization, user or role does not exist.
             **/

            case 404:
                return new WithoutBody(404, []);
            /**
             * Response if the organization roles feature is not enabled enabled for the organization, the validation failed, or the user is not an organization member.
             **/

            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
