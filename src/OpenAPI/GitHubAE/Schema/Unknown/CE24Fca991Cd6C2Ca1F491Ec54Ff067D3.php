<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CE24Fca991Cd6C2Ca1F491Ec54Ff067D3
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"color":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the color if the action was `edited`."}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}},"description":"The changes to the label if the action was `edited`."}';
    public const SCHEMA_TITLE = 'c_e24fca991cd6c2ca1f491ec54ff067d3';
    public const SCHEMA_DESCRIPTION = 'The changes to the label if the action was `edited`.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6F1Cfe574B21091A8E8A8D588F06Fe70::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6F1Cfe574B21091A8E8A8D588F06Fe70 $color;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C90B64Badf15E2Fa04430Bd5A9Ee541Ed::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C90B64Badf15E2Fa04430Bd5A9Ee541Ed $description;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDef8F9E083B43907F4880Aa2Bfc1F161::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDef8F9E083B43907F4880Aa2Bfc1F161 $name;
    public function color() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C6F1Cfe574B21091A8E8A8D588F06Fe70
    {
        return $this->color;
    }
    public function description() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C90B64Badf15E2Fa04430Bd5A9Ee541Ed
    {
        return $this->description;
    }
    public function name() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDef8F9E083B43907F4880Aa2Bfc1F161
    {
        return $this->name;
    }
}
