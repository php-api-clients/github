<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CDd5408Ca7Ccdac96E5C3833941D799A3
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"machine":{"type":"string","description":"A valid machine to transition this codespace to."},"display_name":{"type":"string","description":"Display name for this codespace"},"recent_folders":{"type":"array","items":{"type":"string"},"description":"Recently opened folders inside the codespace. It is currently used by the clients to determine the folder path to load the codespace in."}}}';
    public const SCHEMA_TITLE = 'c_dd5408ca7ccdac96e5c3833941d799a3';
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
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
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
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function recent_folders() : array
    {
        return $this->recent_folders;
    }
}
