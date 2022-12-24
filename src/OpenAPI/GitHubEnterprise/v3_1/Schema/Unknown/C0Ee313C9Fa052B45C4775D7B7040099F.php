<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C0Ee313C9Fa052B45C4775D7B7040099F
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"reason":{"type":"string","description":"The reason the user is being unsuspended. This message will be logged in the [audit log](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/admin\\/monitoring-activity-in-your-enterprise\\/reviewing-audit-logs-for-your-enterprise\\/about-the-audit-log-for-your-enterprise). If you don\'t provide a `reason`, it will default to \\"Unsuspended via API by _SITE\\\\_ADMINISTRATOR_\\", where _SITE\\\\_ADMINISTRATOR_ is the person who performed the action."}}}';
    public const SCHEMA_TITLE = 'c_0ee313c9fa052b45c4775d7b7040099f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The reason the user is being unsuspended. This message will be logged in the [audit log](https://docs.github.com/enterprise-server@3.1/admin/monitoring-activity-in-your-enterprise/reviewing-audit-logs-for-your-enterprise/about-the-audit-log-for-your-enterprise). If you don't provide a `reason`, it will default to "Unsuspended via API by _SITE\_ADMINISTRATOR_", where _SITE\_ADMINISTRATOR_ is the person who performed the action.
     */
    private string $reason;
    /**
     * The reason the user is being unsuspended. This message will be logged in the [audit log](https://docs.github.com/enterprise-server@3.1/admin/monitoring-activity-in-your-enterprise/reviewing-audit-logs-for-your-enterprise/about-the-audit-log-for-your-enterprise). If you don't provide a `reason`, it will default to "Unsuspended via API by _SITE\_ADMINISTRATOR_", where _SITE\_ADMINISTRATOR_ is the person who performed the action.
     */
    public function reason() : string
    {
        return $this->reason;
    }
}
