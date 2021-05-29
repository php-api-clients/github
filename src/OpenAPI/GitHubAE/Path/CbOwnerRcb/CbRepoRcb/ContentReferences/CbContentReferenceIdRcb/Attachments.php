<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateContentAttachmentOperation;

final class Attachments
{
    function post($owner, $repo, $content_reference_id): CreateContentAttachmentOperation
    {
        return new CreateContentAttachmentOperation($owner, $repo, $content_reference_id);
    }
}
