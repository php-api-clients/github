<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListSelectedReposForOrgSecret
{
    private const OPERATION_ID = 'actions/list-selected-repos-for-org-secret';
    public string $org;
    /**secret_name parameter**/
    public string $secret_name;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100).**/
    public int $per_page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $secret_name, int $page = 1, int $per_page = 30)
    {
        $this->org         = $org;
        $this->secret_name = $secret_name;
        $this->page        = $page;
        $this->per_page    = $per_page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{secret_name}', '{page}', '{per_page}'], [$this->org, $this->secret_name, $this->page, $this->per_page], '/orgs/{org}/actions/secrets/{secret_name}/repositories?page={page}&per_page={per_page}'));
    }

    function validateResponse(): void
    {
    }
}
