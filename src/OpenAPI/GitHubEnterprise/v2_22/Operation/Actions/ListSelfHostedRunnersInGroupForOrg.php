<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListSelfHostedRunnersInGroupForOrg
{
    private const OPERATION_ID = 'actions/list-self-hosted-runners-in-group-for-org';
    public string $org;
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

    function __construct($org, $runner_group_id, int $per_page = 30, int $page = 1)
    {
        $this->org             = $org;
        $this->runner_group_id = $runner_group_id;
        $this->per_page        = $per_page;
        $this->page            = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{runner_group_id}', '{per_page}', '{page}'], [$this->org, $this->runner_group_id, $this->per_page, $this->page], '/orgs/{org}/actions/runner-groups/{runner_group_id}/runners?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
