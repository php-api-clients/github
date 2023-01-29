<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"machine":{"type":"string","description":"A valid machine to transition this codespace to."},"display_name":{"type":"string","description":"Display name for this codespace"},"recent_folders":{"type":"array","items":{"type":"string"},"description":"Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in."}}}';
    public const SCHEMA_TITLE = 'UpdateForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A valid machine to transition this codespace to.
     */
    public readonly string $machine;
    /**
     * Display name for this codespace
     */
    public readonly string $display_name;
    /**
     * Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\RecentFolders>
     */
    public readonly array $recent_folders;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\RecentFolders> $recent_folders
     */
    public function __construct(string $machine, string $display_name, array $recent_folders)
    {
        $this->machine = $machine;
        $this->display_name = $display_name;
        $this->recent_folders = $recent_folders;
    }
}
