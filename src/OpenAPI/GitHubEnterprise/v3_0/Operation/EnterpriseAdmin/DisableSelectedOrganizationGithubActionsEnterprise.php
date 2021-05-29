<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DisableSelectedOrganizationGithubActionsEnterprise
{
    private const OPERATION_ID = 'enterprise-admin/disable-selected-organization-github-actions-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Unique identifier of an organization.**/
    public int $org_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($enterprise, $org_id)
    {
        $this->enterprise = $enterprise;
        $this->org_id     = $org_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{enterprise}', '{org_id}'], [$this->enterprise, $this->org_id], '/enterprises/{enterprise}/actions/permissions/organizations/{org_id}?'));
    }

    function validateResponse(): void
    {
    }
}
