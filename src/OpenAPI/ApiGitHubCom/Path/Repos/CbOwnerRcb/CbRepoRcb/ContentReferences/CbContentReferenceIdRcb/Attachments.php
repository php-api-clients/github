<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb;

final class Attachments
{
    function post($owner, $repo, $content_reference_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateContentAttachment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateContentAttachment($owner, $repo, $content_reference_id);
    }
}
