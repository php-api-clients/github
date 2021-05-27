<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps;

final class CreateContentAttachment
{
    private const OPERATION_ID = 'apps/create-content-attachment';
    /**The owner of the repository. Determined from the `repository` `full_name` of the `content_reference` event.**/
    public string $owner;
    /**The name of the repository. Determined from the `repository` `full_name` of the `content_reference` event.**/
    public string $repo;
    /**The `id` of the `content_reference` event.**/
    public int $content_reference_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $content_reference_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->content_reference_id = $content_reference_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{content_reference_id}'), array($this->owner, $this->repo, $this->content_reference_id), '/{owner}/{repo}/content_references/{content_reference_id}/attachments?'));
    }
    function validateResponse()
    {
    }
}
