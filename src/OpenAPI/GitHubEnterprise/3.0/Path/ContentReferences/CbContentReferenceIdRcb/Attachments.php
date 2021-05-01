<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path\\ContentReferences\CbContentReferenceIdRcb;

final class Attachments
{
    function post($content_reference_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Apps\CreateContentAttachmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Apps\CreateContentAttachmentOperation($content_reference_id);
    }
}
