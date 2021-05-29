<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprise;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAnnouncementOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveAnnouncementOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetAnnouncementOperation;

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
