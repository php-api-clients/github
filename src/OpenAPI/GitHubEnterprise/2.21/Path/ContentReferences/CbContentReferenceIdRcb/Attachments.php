<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Path\\ContentReferences\CbContentReferenceIdRcb;

final class Attachments
{
    function post($content_reference_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Apps\CreateContentAttachmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Apps\CreateContentAttachmentOperation($content_reference_id);
    }
}
