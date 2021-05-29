<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListGlobalWebhooks
{
    private const OPERATION_ID = 'enterprise-admin/list-global-webhooks';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(string $accept = 'application/vnd.github.superpro-preview+json', int $per_page = 30, int $page = 1)
    {
        $this->accept   = $accept;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{per_page}', '{page}'], [$this->per_page, $this->page], '/admin/hooks?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
