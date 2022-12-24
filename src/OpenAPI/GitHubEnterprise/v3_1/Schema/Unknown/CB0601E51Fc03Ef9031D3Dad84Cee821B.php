<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CB0601E51Fc03Ef9031D3Dad84Cee821B
{
    public const SCHEMA_JSON = '{"required":["total_count","runners"],"type":"object","properties":{"total_count":{"type":"integer"},"runners":{"type":"array","items":{"title":"Self hosted runners","required":["id","name","os","status","busy","labels"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the runner.","examples":[5]},"name":{"type":"string","description":"The name of the runner.","examples":["iMac"]},"os":{"type":"string","description":"The Operating System of the runner.","examples":["macos"]},"status":{"type":"string","description":"The status of the runner.","examples":["online"]},"busy":{"type":"boolean"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}},"description":"A self hosted runner"}}}}';
    public const SCHEMA_TITLE = 'c_b0601e51fc03ef9031d3dad84cee821b';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Runner>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Runner::class)
     */
    private array $runners = array();
    public function total_count() : int
    {
        return $this->total_count;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Runner>
     */
    public function runners() : array
    {
        return $this->runners;
    }
}