<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class StatusCheckPolicy
{
    public const SCHEMA_JSON = '{"title":"Status Check Policy","required":["url","contexts_url","strict","contexts","checks"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks"]},"strict":{"type":"boolean","examples":[true]},"contexts":{"type":"array","items":{"type":"string"},"examples":["continuous-integration\\/travis-ci"]},"checks":{"type":"array","items":{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string","examples":["continuous-integration\\/travis-ci"]},"app_id":{"type":["integer","null"]}}}},"contexts_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"]}},"description":"Status Check Policy"}';
    public const SCHEMA_TITLE = 'Status Check Policy';
    public const SCHEMA_DESCRIPTION = 'Status Check Policy';
    private string $url;
    private bool $strict;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\StatusCheckPolicy\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\StatusCheckPolicy\Contexts::class)
     */
    private array $contexts = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\StatusCheckPolicy\Checks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\StatusCheckPolicy\Checks::class)
     */
    private array $checks = array();
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
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\StatusCheckPolicy\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\StatusCheckPolicy\Checks>
     */
    public function checks() : array
    {
        return $this->checks;
    }
    public function contexts_url() : string
    {
        return $this->contexts_url;
    }
}
