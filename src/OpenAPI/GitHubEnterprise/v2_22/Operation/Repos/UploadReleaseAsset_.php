<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos;

final class UploadReleaseAsset_
{
    private const OPERATION_ID = 'repos/upload-release-asset';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**release_id parameter**/
    public int $release_id;
    /****/
    public string $name;
    /****/
    public string $label;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $release_id, $name, $label)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->release_id = $release_id;
        $this->name = $name;
        $this->label = $label;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{release_id}', '{name}', '{label}'), array($this->owner, $this->repo, $this->release_id, $this->name, $this->label), '/repos/{owner}/{repo}/releases/{release_id}/assets?name={name}&label={label}'));
    }
    function validateResponse()
    {
    }
}
