<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ApiOverview
{
    public const SCHEMA_JSON = '{"title":"Api Overview","required":["verifiable_password_authentication"],"type":"object","properties":{"verifiable_password_authentication":{"type":"boolean","examples":[true]},"ssh_key_fingerprints":{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}},"ssh_keys":{"type":"array","items":{"type":"string"},"examples":["ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIOMqqnkVzrm0SdG6UOoqKLsabgH5C9okWi0dh2l9GKJl"]},"hooks":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"web":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"api":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"git":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"packages":{"type":"array","items":{"type":"string"},"examples":["13.65.0.0\\/16","157.55.204.33\\/32","2a01:111:f403:f90c::\\/62"]},"pages":{"type":"array","items":{"type":"string"},"examples":["192.30.252.153\\/32","192.30.252.154\\/32"]},"importer":{"type":"array","items":{"type":"string"},"examples":["54.158.161.132","54.226.70.38"]},"actions":{"type":"array","items":{"type":"string"},"examples":["13.64.0.0\\/16","13.65.0.0\\/16"]},"dependabot":{"type":"array","items":{"type":"string"},"examples":["192.168.7.15\\/32","192.168.7.16\\/32"]}},"description":"Api Overview"}';
    public const SCHEMA_TITLE = 'Api Overview';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    private bool $verifiable_password_authentication;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeyFingerprints::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeyFingerprints $ssh_key_fingerprints = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeys>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeys::class)
     */
    private array $ssh_keys = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Hooks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Hooks::class)
     */
    private array $hooks = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Web>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Web::class)
     */
    private array $web = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Api>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Api::class)
     */
    private array $api = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Git>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Git::class)
     */
    private array $git = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Packages>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Packages::class)
     */
    private array $packages = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Pages>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Pages::class)
     */
    private array $pages = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Importer>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Importer::class)
     */
    private array $importer = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Actions>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Actions::class)
     */
    private array $actions = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Dependabot>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Dependabot::class)
     */
    private array $dependabot = array();
    public function verifiable_password_authentication() : bool
    {
        return $this->verifiable_password_authentication;
    }
    public function ssh_key_fingerprints() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeyFingerprints
    {
        return $this->ssh_key_fingerprints;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeys>
     */
    public function ssh_keys() : array
    {
        return $this->ssh_keys;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Hooks>
     */
    public function hooks() : array
    {
        return $this->hooks;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Web>
     */
    public function web() : array
    {
        return $this->web;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Api>
     */
    public function api() : array
    {
        return $this->api;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Git>
     */
    public function git() : array
    {
        return $this->git;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Packages>
     */
    public function packages() : array
    {
        return $this->packages;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Pages>
     */
    public function pages() : array
    {
        return $this->pages;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Importer>
     */
    public function importer() : array
    {
        return $this->importer;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Actions>
     */
    public function actions() : array
    {
        return $this->actions;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Dependabot>
     */
    public function dependabot() : array
    {
        return $this->dependabot;
    }
}
