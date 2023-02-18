<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ApiOverview
{
    public const SCHEMA_JSON = '{"title":"Api Overview","required":["verifiable_password_authentication"],"type":"object","properties":{"verifiable_password_authentication":{"type":"boolean","examples":[true]},"ssh_key_fingerprints":{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}},"ssh_keys":{"type":"array","items":{"type":"string"},"examples":["ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIOMqqnkVzrm0SdG6UOoqKLsabgH5C9okWi0dh2l9GKJl"]},"hooks":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"web":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"api":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"git":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"packages":{"type":"array","items":{"type":"string"},"examples":["13.65.0.0\\/16","157.55.204.33\\/32","2a01:111:f403:f90c::\\/62"]},"pages":{"type":"array","items":{"type":"string"},"examples":["192.30.252.153\\/32","192.30.252.154\\/32"]},"importer":{"type":"array","items":{"type":"string"},"examples":["54.158.161.132","54.226.70.38"]},"actions":{"type":"array","items":{"type":"string"},"examples":["13.64.0.0\\/16","13.65.0.0\\/16"]},"dependabot":{"type":"array","items":{"type":"string"},"examples":["192.168.7.15\\/32","192.168.7.16\\/32"]}},"description":"Api Overview"}';
    public const SCHEMA_TITLE = 'Api Overview';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    public ?bool $verifiable_password_authentication;
    public \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeyFingerprints $ssh_key_fingerprints;
    public array $ssh_keys;
    public array $hooks;
    public array $web;
    public array $api;
    public array $git;
    public array $packages;
    public array $pages;
    public array $importer;
    public array $actions;
    public array $dependabot;
    public function __construct(bool $verifiable_password_authentication, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview\SshKeyFingerprints $ssh_key_fingerprints, array $ssh_keys, array $hooks, array $web, array $api, array $git, array $packages, array $pages, array $importer, array $actions, array $dependabot)
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
