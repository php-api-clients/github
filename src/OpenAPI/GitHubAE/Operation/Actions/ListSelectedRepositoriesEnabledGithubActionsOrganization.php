<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListSelectedRepositoriesEnabledGithubActionsOrganization
{
    private const OPERATION_ID = 'actions/list-selected-repositories-enabled-github-actions-organization';
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
        return new Request('get', str_replace(['{org}', '{per_page}', '{page}'], [$this->org, $this->per_page, $this->page], '/orgs/{org}/actions/permissions/repositories?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
