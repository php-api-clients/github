<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeleteCodespacesBillingUsers\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["selected_usernames"],"type":"object","properties":{"selected_usernames":{"maxItems":100,"type":"array","items":{"type":"string"},"description":"The usernames of the organization members whose codespaces should not be billed to the organization."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'DeleteCodespacesBillingUsers\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The usernames of the organization members whose codespaces should not be billed to the organization.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedUsernames>
     */
    public readonly array $selected_usernames;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\SelectedUsernames> $selected_usernames
     */
    public function __construct(array $selected_usernames)
    {
        $this->selected_usernames = $selected_usernames;
    }
}
