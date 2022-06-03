<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs;

final class GetAuditLog_
{
    private const OPERATION_ID = 'orgs/get-audit-log';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**A search phrase. For more information, see [Searching the audit log](https://docs.github.com/github-ae@latest/github/setting-up-and-managing-organizations-and-teams/reviewing-the-audit-log-for-your-organization#searching-the-audit-log).**/
    public string $phrase;
    /**A cursor, as given in the [Link header](https://docs.github.com/github-ae@latest/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events after this cursor.**/
    public string $after;
    /**A cursor, as given in the [Link header](https://docs.github.com/github-ae@latest/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events before this cursor.**/
    public string $before;
    /**The order of audit log events. To list newest events first, specify `desc`. To list oldest events first, specify `asc`.
    
    The default is `desc`.**/
    public string $order;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $phrase, $after, $before, $order, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->phrase = $phrase;
        $this->after = $after;
        $this->before = $before;
        $this->order = $order;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{phrase}', '{after}', '{before}', '{order}', '{per_page}', '{page}'), array($this->org, $this->phrase, $this->after, $this->before, $this->order, $this->per_page, $this->page), '/orgs/{org}/audit-log?phrase={phrase}&after={after}&before={before}&order={order}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
