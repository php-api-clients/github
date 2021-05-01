<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Apps;

final class RemoveRepoFromInstallation
{
    private const OPERATION_ID = 'apps/remove-repo-from-installation';
    /**installation_id parameter**/
    public int $installation_id;
    /****/
    public int $repository_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($installation_id, $repository_id)
    {
        $this->installation_id = $installation_id;
        $this->repository_id = $repository_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{installation_id}', '{repository_id}'), array($this->installation_id, $this->repository_id), '/user/installations/{installation_id}/repositories/{repository_id}?'));
    }
    function validateResponse()
    {
    }
}
