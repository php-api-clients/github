<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetAuditLog
{
    private const OPERATION_ID = 'enterprise-admin/get-audit-log';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**A search phrase. For more information, see [Searching the audit log](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/reviewing-the-audit-log-for-your-organization#searching-the-audit-log).**/
    public string $phrase;
    /**The event types to include:

    - `web` - returns web (non-Git) events
    - `git` - returns Git events
    - `all` - returns both web and Git events

    The default is `web`.**/
    public string $include;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events after this cursor.**/
    public string $after;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events before this cursor.**/
    public string $before;
    /**The order of audit log events. To list newest events first, specify `desc`. To list oldest events first, specify `asc`.

    The default is `desc`.**/
    public string $order;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100).**/
    public int $per_page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($enterprise, $phrase, $include, $after, $before, $order, int $page = 1, int $per_page = 30)
    {
        $this->enterprise = $enterprise;
        $this->phrase     = $phrase;
        $this->include    = $include;
        $this->after      = $after;
        $this->before     = $before;
        $this->order      = $order;
        $this->page       = $page;
        $this->per_page   = $per_page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{enterprise}', '{phrase}', '{include}', '{after}', '{before}', '{order}', '{page}', '{per_page}'], [$this->enterprise, $this->phrase, $this->include, $this->after, $this->before, $this->order, $this->page, $this->per_page], '/enterprises/{enterprise}/audit-log?phrase={phrase}&include={include}&after={after}&before={before}&order={order}&page={page}&per_page={per_page}'));
    }

    function validateResponse(): void
    {
    }
}
