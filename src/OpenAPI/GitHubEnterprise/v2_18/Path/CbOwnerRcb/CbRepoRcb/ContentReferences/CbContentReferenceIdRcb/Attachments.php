<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\CreateContentAttachmentOperation;

final class Attachments
{
    function post($owner, $repo, $content_reference_id): CreateContentAttachmentOperation
    {
        return new CreateContentAttachmentOperation($owner, $repo, $content_reference_id);
    }
}
