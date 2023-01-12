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
    private string $machine;
    /**
     * Display name for this codespace
     */
    private string $display_name;
    /**
     * Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\RecentFolders>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\RecentFolders::class)
     */
    private array $recent_folders = array();
    /**
     * A valid machine to transition this codespace to.
     */
    public function machine() : string
    {
        return $this->machine;
    }
    /**
     * Display name for this codespace
     */
    public function display_name() : string
    {
        return $this->display_name;
    }
    /**
     * Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\RecentFolders>
     */
    public function recent_folders() : array
    {
        return $this->recent_folders;
    }
}
