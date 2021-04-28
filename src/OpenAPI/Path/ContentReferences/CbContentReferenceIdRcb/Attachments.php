<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\ContentReferences\CbContentReferenceIdRcb;

final class Attachments
{
    function post($content_reference_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\CreateContentAttachmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\CreateContentAttachmentOperation($content_reference_id);
    }
}
