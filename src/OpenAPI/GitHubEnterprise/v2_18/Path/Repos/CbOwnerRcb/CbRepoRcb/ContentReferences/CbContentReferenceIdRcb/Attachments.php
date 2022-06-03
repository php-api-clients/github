<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb;

final class Attachments
{
    function post($owner, $repo, $content_reference_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\CreateContentAttachment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\CreateContentAttachment($owner, $repo, $content_reference_id);
    }
}
