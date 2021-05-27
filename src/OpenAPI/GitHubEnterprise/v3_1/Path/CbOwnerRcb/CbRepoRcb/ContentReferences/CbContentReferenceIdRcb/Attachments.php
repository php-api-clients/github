<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb;

final class Attachments
{
    function post($owner, $repo, $content_reference_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CreateContentAttachmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CreateContentAttachmentOperation($owner, $repo, $content_reference_id);
    }
}
