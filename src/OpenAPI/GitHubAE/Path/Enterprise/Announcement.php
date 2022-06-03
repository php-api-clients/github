<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise;

final class Announcement
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAnnouncement
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAnnouncement();
    }
    function delete() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveAnnouncement
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveAnnouncement();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetAnnouncement
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetAnnouncement();
    }
}
