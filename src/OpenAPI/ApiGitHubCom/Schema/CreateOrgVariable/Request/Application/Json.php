<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateOrgVariable\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["name","value","visibility"],"type":"object","properties":{"name":{"type":"string","description":"The name of the variable."},"value":{"type":"string","description":"The value of the variable."},"visibility":{"enum":["all","private","selected"],"type":"string","description":"The type of repositories in the organization that can access the variable. `selected` means only the repositories specified by `selected_repository_ids` can access the variable."},"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"An array of repository ids that can access the organization variable. You can only provide a list of repository ids when the `visibility` is set to `selected`."}}}';
    public const SCHEMA_TITLE = 'CreateOrgVariable\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the variable.
     */
    public readonly string $name;
    /**
     * The value of the variable.
     */
    public readonly string $value;
    /**
     * The type of repositories in the organization that can access the variable. `selected` means only the repositories specified by `selected_repository_ids` can access the variable.
     */
    public readonly string $visibility;
    /**
     * An array of repository ids that can access the organization variable. You can only provide a list of repository ids when the `visibility` is set to `selected`.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     */
    public readonly array $selected_repository_ids;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat> $selected_repository_ids
     */
    public function __construct(string $name, string $value, string $visibility, array $selected_repository_ids)
    {
        $this->name = $name;
        $this->value = $value;
        $this->visibility = $visibility;
        $this->selected_repository_ids = $selected_repository_ids;
    }
}
