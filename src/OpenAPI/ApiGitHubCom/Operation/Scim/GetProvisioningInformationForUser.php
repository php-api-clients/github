<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetProvisioningInformationForUser
{
    private const OPERATION_ID = 'scim/get-provisioning-information-for-user';
    public string $org;
    /**scim_user_id parameter**/
    public string $scim_user_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $scim_user_id)
    {
        $this->org          = $org;
        $this->scim_user_id = $scim_user_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{scim_user_id}'], [$this->org, $this->scim_user_id], '/scim/v2/organizations/{org}/Users/{scim_user_id}?'));
    }

    function validateResponse(): void
    {
    }
}
