<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForOrg
{
    private const OPERATION_ID = 'projects/list-for-org';
    public string $org;
    /**Indicates the state of the projects to return. Can be either `open`, `closed`, or `all`.**/
    public string $state;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, string $state = 'open', int $per_page = 30, int $page = 1)
    {
        $this->org      = $org;
        $this->state    = $state;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{state}', '{per_page}', '{page}'], [$this->org, $this->state, $this->per_page, $this->page], '/orgs/{org}/projects?state={state}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
