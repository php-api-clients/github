<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UpdateAttributeForEnterpriseUser
{
    private const OPERATION_ID = 'enterprise-admin/update-attribute-for-enterprise-user';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**scim_user_id parameter**/
    public string $scim_user_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($enterprise, $scim_user_id)
    {
        $this->enterprise   = $enterprise;
        $this->scim_user_id = $scim_user_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{enterprise}', '{scim_user_id}'], [$this->enterprise, $this->scim_user_id], '/scim/v2/enterprises/{enterprise}/Users/{scim_user_id}?'));
    }

    function validateResponse(): void
    {
    }
}
