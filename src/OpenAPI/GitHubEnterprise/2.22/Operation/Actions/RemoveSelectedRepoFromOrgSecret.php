<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Actions;

final class RemoveSelectedRepoFromOrgSecret
{
    private const OPERATION_ID = 'actions/remove-selected-repo-from-org-secret';
    /****/
    public string $org;
    /**secret_name parameter**/
    public string $secret_name;
    /****/
    public int $repository_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $secret_name, $repository_id)
    {
        $this->org = $org;
        $this->secret_name = $secret_name;
        $this->repository_id = $repository_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{secret_name}', '{repository_id}'), array($this->org, $this->secret_name, $this->repository_id), '/orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}?'));
    }
    function validateResponse()
    {
    }
}
