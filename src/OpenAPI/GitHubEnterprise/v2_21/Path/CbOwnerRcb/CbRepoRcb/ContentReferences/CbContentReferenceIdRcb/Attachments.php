<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CreateContentAttachment;

final class Attachments
{
    function post($owner, $repo, $content_reference_id): CreateContentAttachment
    {
        return new CreateContentAttachment($owner, $repo, $content_reference_id);
    }
}
