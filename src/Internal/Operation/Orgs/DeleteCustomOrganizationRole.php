<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteCustomOrganizationRole
{
    public const OPERATION_ID    = 'orgs/delete-custom-organization-role';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/organization-roles/{role_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the role. **/
    private int $roleId;

    public function __construct(string $org, int $roleId)
    {
        $this->org    = $org;
        $this->roleId = $roleId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{org}', '{role_id}'], [$this->org, $this->roleId], '/orgs/{org}/organization-roles/{role_id}'));
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
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
