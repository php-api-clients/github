<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Actions;

final class SetSelectedRepositoriesEnabledGithubActionsOrganization
{
    private const OPERATION_ID = 'actions/set-selected-repositories-enabled-github-actions-organization';
    /****/
    public string $org;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org)
    {
        $this->org = $org;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/permissions/repositories?'));
    }
    function validateResponse()
    {
    }
}
