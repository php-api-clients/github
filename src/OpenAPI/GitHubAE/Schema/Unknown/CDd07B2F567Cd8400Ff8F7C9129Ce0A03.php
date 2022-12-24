<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CDd07B2F567Cd8400Ff8F7C9129Ce0A03
{
    public const SCHEMA_JSON = '{"required":["enabled_organizations"],"type":"object","properties":{"enabled_organizations":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run."}}}';
    public const SCHEMA_TITLE = 'c_dd07b2f567cd8400ff8f7c9129ce0a03';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions.
     */
    private string $enabled_organizations;
    /**
     * The permissions policy that controls the actions that are allowed to run.
     */
    private ?string $allowed_actions = null;
    /**
     * The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions.
     */
    public function enabled_organizations() : string
    {
        return $this->enabled_organizations;
    }
    /**
     * The permissions policy that controls the actions that are allowed to run.
     */
    public function allowed_actions() : ?string
    {
        return $this->allowed_actions;
    }
}
