<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class GetAuditLog_
{
    private const OPERATION_ID = 'enterprise-admin/get-audit-log';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**A search phrase. For more information, see [Searching the audit log](https://docs.github.com/github-ae@latest/github/setting-up-and-managing-organizations-and-teams/reviewing-the-audit-log-for-your-organization#searching-the-audit-log).**/
    public string $phrase;
    /**A cursor, as given in the [Link header](https://docs.github.com/github-ae@latest/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events after this cursor.**/
    public string $after;
    /**A cursor, as given in the [Link header](https://docs.github.com/github-ae@latest/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events before this cursor.**/
    public string $before;
    /**The order of audit log events. To list newest events first, specify `desc`. To list oldest events first, specify `asc`.
    
    The default is `desc`.**/
    public string $order;
    /**Page number of the results to fetch.**/
    public int $page;
    /**The number of results per page (max 100).**/
    public int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $phrase, $after, $before, $order, int $page = 1, int $per_page = 30)
    {
        $this->enterprise = $enterprise;
        $this->phrase = $phrase;
        $this->after = $after;
        $this->before = $before;
        $this->order = $order;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}', '{phrase}', '{after}', '{before}', '{order}', '{page}', '{per_page}'), array($this->enterprise, $this->phrase, $this->after, $this->before, $this->order, $this->page, $this->per_page), '/enterprises/{enterprise}/audit-log?phrase={phrase}&after={after}&before={before}&order={order}&page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
