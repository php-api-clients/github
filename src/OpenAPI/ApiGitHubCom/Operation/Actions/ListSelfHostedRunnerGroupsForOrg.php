<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListSelfHostedRunnerGroupsForOrg
{
    private const OPERATION_ID = 'actions/list-self-hosted-runner-groups-for-org';
    public string $org;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, int $per_page = 30, int $page = 1)
    {
        $this->org      = $org;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{per_page}', '{page}'], [$this->org, $this->per_page, $this->page], '/orgs/{org}/actions/runner-groups?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
