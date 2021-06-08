<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateContentAttachment;

final class Attachments
{
    function post($owner, $repo, $content_reference_id): CreateContentAttachment
    {
        return new CreateContentAttachment($owner, $repo, $content_reference_id);
    }
}
