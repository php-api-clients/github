<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ApiOverview
{
    public const SCHEMA_JSON = '{"title":"Api Overview","required":["verifiable_password_authentication"],"type":"object","properties":{"verifiable_password_authentication":{"type":"boolean","examples":[true]},"ssh_key_fingerprints":{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}},"ssh_keys":{"type":"array","items":{"type":"string"},"examples":["ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIOMqqnkVzrm0SdG6UOoqKLsabgH5C9okWi0dh2l9GKJl"]},"hooks":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"web":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"api":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"git":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"packages":{"type":"array","items":{"type":"string"},"examples":["13.65.0.0\\/16","157.55.204.33\\/32","2a01:111:f403:f90c::\\/62"]},"pages":{"type":"array","items":{"type":"string"},"examples":["192.30.252.153\\/32","192.30.252.154\\/32"]},"importer":{"type":"array","items":{"type":"string"},"examples":["54.158.161.132","54.226.70.38"]},"actions":{"type":"array","items":{"type":"string"},"examples":["13.64.0.0\\/16","13.65.0.0\\/16"]},"dependabot":{"type":"array","items":{"type":"string"},"examples":["192.168.7.15\\/32","192.168.7.16\\/32"]}},"description":"Api Overview"}';
    public const SCHEMA_EXAMPLE = '{"verifiable_password_authentication":true,"ssh_keys":"ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIOMqqnkVzrm0SdG6UOoqKLsabgH5C9okWi0dh2l9GKJl","hooks":"127.0.0.1\\/32","web":"127.0.0.1\\/32","api":"127.0.0.1\\/32","git":"127.0.0.1\\/32","packages":"13.65.0.0\\/16","pages":"192.30.252.154\\/32","importer":"54.226.70.38","actions":"13.64.0.0\\/16","dependabot":"192.168.7.16\\/32"}';
    public const SCHEMA_TITLE = 'Api Overview';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    public readonly bool $verifiable_password_authentication;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeyFingerprints $ssh_key_fingerprints;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeys>
     */
    public readonly array $ssh_keys;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Hooks>
     */
    public readonly array $hooks;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Web>
     */
    public readonly array $web;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Api>
     */
    public readonly array $api;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Git>
     */
    public readonly array $git;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Packages>
     */
    public readonly array $packages;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Pages>
     */
    public readonly array $pages;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Importer>
     */
    public readonly array $importer;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Actions>
     */
    public readonly array $actions;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Dependabot>
     */
    public readonly array $dependabot;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeys> $ssh_keys
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Hooks> $hooks
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Web> $web
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Api> $api
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Git> $git
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Packages> $packages
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Pages> $pages
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Importer> $importer
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Actions> $actions
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\Dependabot> $dependabot
     */
    public function __construct(bool $verifiable_password_authentication, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeyFingerprints $ssh_key_fingerprints, array $ssh_keys, array $hooks, array $web, array $api, array $git, array $packages, array $pages, array $importer, array $actions, array $dependabot)
    {
        $this->verifiable_password_authentication = $verifiable_password_authentication;
        $this->ssh_key_fingerprints = $ssh_key_fingerprints;
        $this->ssh_keys = $ssh_keys;
        $this->hooks = $hooks;
        $this->web = $web;
        $this->api = $api;
        $this->git = $git;
        $this->packages = $packages;
        $this->pages = $pages;
        $this->importer = $importer;
        $this->actions = $actions;
        $this->dependabot = $dependabot;
    }
}
