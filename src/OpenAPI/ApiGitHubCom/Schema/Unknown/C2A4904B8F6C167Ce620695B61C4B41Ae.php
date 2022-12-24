<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C2A4904B8F6C167Ce620695B61C4B41Ae
{
    public const SCHEMA_JSON = '{"required":["enabled_organizations"],"type":"object","properties":{"enabled_organizations":{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions."},"allowed_actions":{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}}}';
    public const SCHEMA_TITLE = 'c_2a4904b8f6c167ce620695b61c4b41ae';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions.
     */
    private string $enabled_organizations;
    /**
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
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
     * The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public function allowed_actions() : ?string
    {
        return $this->allowed_actions;
    }
}
