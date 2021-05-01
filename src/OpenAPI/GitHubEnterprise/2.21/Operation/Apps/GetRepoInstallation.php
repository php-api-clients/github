<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Apps;

final class GetRepoInstallation
{
    private const OPERATION_ID = 'apps/get-repo-installation';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /****/
    public string $owner;
    /****/
    public string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.machine-man-preview+json', $owner, $repo)
    {
        $this->accept = $accept;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/installation?'));
    }
    function validateResponse()
    {
    }
}
