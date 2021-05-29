<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAnnouncement;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveAnnouncement;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetAnnouncement;

final class Announcement
{
    function get(): GetAnnouncement
    {
        return new GetAnnouncement();
    }

    function delete(): RemoveAnnouncement
    {
        return new RemoveAnnouncement();
    }

    function patch(): SetAnnouncement
    {
        return new SetAnnouncement();
    }
}
