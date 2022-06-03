<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class GetServerStatistics_
{
    private const OPERATION_ID = 'enterprise-admin/get-server-statistics';
    /**The slug version of the enterprise name or the login of an organization.**/
    public string $enterprise_or_org;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events after this cursor.**/
    public string $date_start;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events before this cursor.**/
    public string $date_end;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise_or_org, $date_start, $date_end)
    {
        $this->enterprise_or_org = $enterprise_or_org;
        $this->date_start = $date_start;
        $this->date_end = $date_end;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise_or_org}', '{date_start}', '{date_end}'), array($this->enterprise_or_org, $this->date_start, $this->date_end), '/enterprise-installation/{enterprise_or_org}/server-statistics?date_start={date_start}&date_end={date_end}'));
    }
    function validateResponse()
    {
    }
}
