<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForOrg
{
    private const OPERATION_ID = 'migrations/list-for-org';
    public string $org;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Exclude attributes from the API response to improve performance**/
    public array $exclude;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, int $per_page = 30, int $page = 1, $exclude)
    {
        $this->org      = $org;
        $this->per_page = $per_page;
        $this->page     = $page;
        $this->exclude  = $exclude;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{per_page}', '{page}', '{exclude}'], [$this->org, $this->per_page, $this->page, $this->exclude], '/orgs/{org}/migrations?per_page={per_page}&page={page}&exclude={exclude}'));
    }

    function validateResponse(): void
    {
    }
}
