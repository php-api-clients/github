<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class ListSamlSsoAuthorizations_
{
    private const OPERATION_ID = 'orgs/list-saml-sso-authorizations';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page token**/
    public int $page;
    /**Limits the list of credentials authorizations for an organization to a specific login**/
    public string $login;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, int $per_page = 30, $page, $login)
    {
        $this->org = $org;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->login = $login;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{per_page}', '{page}', '{login}'), array($this->org, $this->per_page, $this->page, $this->login), '/orgs/{org}/credential-authorizations?per_page={per_page}&page={page}&login={login}'));
    }
    function validateResponse()
    {
    }
}
