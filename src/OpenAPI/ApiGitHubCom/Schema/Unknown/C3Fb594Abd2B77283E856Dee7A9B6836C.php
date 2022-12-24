<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C3Fb594Abd2B77283E856Dee7A9B6836C
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"due_on":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the due date if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the milestone if the action was `edited`."}';
    public const SCHEMA_TITLE = 'c_3fb594abd2b77283e856dee7a9b6836c';
    public const SCHEMA_DESCRIPTION = 'The changes to the milestone if the action was `edited`.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C90B64Badf15E2Fa04430Bd5A9Ee541Ed::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C90B64Badf15E2Fa04430Bd5A9Ee541Ed $description;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C10De6Fa73E98A06D7333C16D52F770Fb::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C10De6Fa73E98A06D7333C16D52F770Fb $due_on;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac3402Ac1416C73B92827C1E5472178::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac3402Ac1416C73B92827C1E5472178 $title;
    public function description() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C90B64Badf15E2Fa04430Bd5A9Ee541Ed
    {
        return $this->description;
    }
    public function due_on() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C10De6Fa73E98A06D7333C16D52F770Fb
    {
        return $this->due_on;
    }
    public function title() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac3402Ac1416C73B92827C1E5472178
    {
        return $this->title;
    }
}
