<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListSelectedOrganizationsEnabledGithubActionsEnterprise
{
    private const OPERATION_ID = 'enterprise-admin/list-selected-organizations-enabled-github-actions-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($enterprise, int $per_page = 30, int $page = 1)
    {
        $this->enterprise = $enterprise;
        $this->per_page   = $per_page;
        $this->page       = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{enterprise}', '{per_page}', '{page}'], [$this->enterprise, $this->per_page, $this->page], '/enterprises/{enterprise}/actions/permissions/organizations?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
