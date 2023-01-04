<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class StatusCheckPolicy
{
    public const SCHEMA_JSON = '{"title":"Status Check Policy","required":["url","contexts_url","strict","contexts"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks"]},"strict":{"type":"boolean","examples":[true]},"contexts":{"type":"array","items":{"type":"string"},"examples":["continuous-integration\\/travis-ci"]},"contexts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"]}},"description":"Status Check Policy"}';
    public const SCHEMA_TITLE = 'Status Check Policy';
    public const SCHEMA_DESCRIPTION = 'Status Check Policy';
    private string $url;
    private bool $strict;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\StatusCheckPolicy\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\StatusCheckPolicy\Contexts::class)
     */
    private array $contexts = array();
    private string $contexts_url;
    public function url() : string
    {
        return $this->url;
    }
    public function strict() : bool
    {
        return $this->strict;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\StatusCheckPolicy\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
    public function contexts_url() : string
    {
        return $this->contexts_url;
    }
}
