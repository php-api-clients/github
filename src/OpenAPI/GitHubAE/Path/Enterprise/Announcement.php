<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAnnouncementOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveAnnouncementOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetAnnouncementOperation;

final class Announcement
{
    function get(): GetAnnouncementOperation
    {
        return new GetAnnouncementOperation();
    }

    function delete(): RemoveAnnouncementOperation
    {
        return new RemoveAnnouncementOperation();
    }

    function patch(): SetAnnouncementOperation
    {
        return new SetAnnouncementOperation();
    }
}
