<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations;

final class ListGrants_
{
    private const OPERATION_ID = 'oauth-authorizations/list-grants';
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The client ID of your GitHub app.**/
    private readonly string $client_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, int $page = 1, string $client_id)
    {
        $this->per_page = $per_page;
        $this->page = $page;
        $this->client_id = $client_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}', '{client_id}'), array($this->per_page, $this->page, $this->client_id), '/applications/grants?per_page={per_page}&page={page}&client_id={client_id}'));
    }
    function validateResponse()
    {
    }
}
