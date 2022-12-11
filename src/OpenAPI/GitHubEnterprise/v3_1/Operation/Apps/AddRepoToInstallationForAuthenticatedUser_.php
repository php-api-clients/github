<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps;

final class AddRepoToInstallationForAuthenticatedUser_
{
    private const OPERATION_ID = 'apps/add-repo-to-installation-for-authenticated-user';
    /**The unique identifier of the installation.**/
    private readonly int $installation_id;
    /**The unique identifier of the repository.**/
    private readonly int $repository_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $installation_id, int $repository_id)
    {
        $this->installation_id = $installation_id;
        $this->repository_id = $repository_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{installation_id}', '{repository_id}'), array($this->installation_id, $this->repository_id), '/user/installations/{installation_id}/repositories/{repository_id}'));
    }
    function validateResponse()
    {
    }
}
