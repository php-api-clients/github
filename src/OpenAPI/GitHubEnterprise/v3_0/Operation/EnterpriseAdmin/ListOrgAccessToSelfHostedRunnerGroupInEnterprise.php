<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListOrgAccessToSelfHostedRunnerGroupInEnterprise
{
    private const OPERATION_ID = 'enterprise-admin/list-org-access-to-self-hosted-runner-group-in-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    public int $runner_group_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($enterprise, $runner_group_id, int $per_page = 30, int $page = 1)
    {
        $this->enterprise      = $enterprise;
        $this->runner_group_id = $runner_group_id;
        $this->per_page        = $per_page;
        $this->page            = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{enterprise}', '{runner_group_id}', '{per_page}', '{page}'], [$this->enterprise, $this->runner_group_id, $this->per_page, $this->page], '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
