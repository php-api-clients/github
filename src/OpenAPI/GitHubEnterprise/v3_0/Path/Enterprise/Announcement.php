<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprise;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetAnnouncement;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\RemoveAnnouncement;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\SetAnnouncement;

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
