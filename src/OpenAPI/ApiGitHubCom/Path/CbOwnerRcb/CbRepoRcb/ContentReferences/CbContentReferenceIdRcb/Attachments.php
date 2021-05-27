<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb;

final class Attachments
{
    function post($owner, $repo, $content_reference_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateContentAttachmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateContentAttachmentOperation($owner, $repo, $content_reference_id);
    }
}
