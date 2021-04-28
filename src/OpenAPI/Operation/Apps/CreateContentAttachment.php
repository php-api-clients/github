<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Apps;

final class CreateContentAttachment
{
    private const OPERATION_ID = 'apps/create-content-attachment';
    /****/
    public int $content_reference_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($content_reference_id)
    {
        $this->content_reference_id = $content_reference_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{content_reference_id}'), array($this->content_reference_id), '/content_references/{content_reference_id}/attachments?'));
    }
    function validateResponse()
    {
    }
}
