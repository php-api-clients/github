<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion;

final readonly class NpmMetadata
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["object","null"]},"bugs":{"type":["object","null"]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["object","null"]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["object","null"]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"object"}},"contributors":{"type":"array","items":{"type":"object"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["object","null"]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $name;
    public ?string $version;
    public ?string $npm_user;
    public ?\ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted\ActionsMeta $author;
    public ?\ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted\ActionsMeta $bugs;
    public ?\ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $dependencies;
    public ?\ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $dev_dependencies;
    public ?\ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $peer_dependencies;
    public ?\ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $optional_dependencies;
    public ?string $description;
    public ?\ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted\ActionsMeta $dist;
    public ?string $git_head;
    public ?string $homepage;
    public ?string $license;
    public ?string $main;
    public ?\ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted\ActionsMeta $repository;
    public ?\ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $scripts;
    public ?string $id;
    public ?string $node_version;
    public ?string $npm_version;
    public ?bool $has_shrinkwrap;
    public ?array $maintainers;
    public ?array $contributors;
    public ?\ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $engines;
    public ?array $keywords;
    public ?array $files;
    public ?\ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $bin;
    public ?\ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $man;
    public ?\ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted\ActionsMeta $directories;
    public ?array $os;
    public ?array $cpu;
    public ?string $readme;
    public ?string $installation_command;
    public ?int $release_id;
    public ?string $commit_oid;
    public ?bool $published_via_actions;
    public ?int $deleted_by_id;
    public function __construct(string $name, string $version, string $npm_user, \ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted\ActionsMeta $author, \ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted\ActionsMeta $bugs, \ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $dependencies, \ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $dev_dependencies, \ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $peer_dependencies, \ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $optional_dependencies, string $description, \ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted\ActionsMeta $dist, string $git_head, string $homepage, string $license, string $main, \ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted\ActionsMeta $repository, \ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $scripts, string $id, string $node_version, string $npm_version, bool $has_shrinkwrap, array $maintainers, array $contributors, \ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $engines, array $keywords, array $files, \ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $bin, \ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $man, \ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted\ActionsMeta $directories, array $os, array $cpu, string $readme, string $installation_command, int $release_id, string $commit_oid, bool $published_via_actions, int $deleted_by_id)
    {
        $this->name = $name;
        $this->version = $version;
        $this->npm_user = $npm_user;
        $this->author = $author;
        $this->bugs = $bugs;
        $this->dependencies = $dependencies;
        $this->dev_dependencies = $dev_dependencies;
        $this->peer_dependencies = $peer_dependencies;
        $this->optional_dependencies = $optional_dependencies;
        $this->description = $description;
        $this->dist = $dist;
        $this->git_head = $git_head;
        $this->homepage = $homepage;
        $this->license = $license;
        $this->main = $main;
        $this->repository = $repository;
        $this->scripts = $scripts;
        $this->id = $id;
        $this->node_version = $node_version;
        $this->npm_version = $npm_version;
        $this->has_shrinkwrap = $has_shrinkwrap;
        $this->maintainers = $maintainers;
        $this->contributors = $contributors;
        $this->engines = $engines;
        $this->keywords = $keywords;
        $this->files = $files;
        $this->bin = $bin;
        $this->man = $man;
        $this->directories = $directories;
        $this->os = $os;
        $this->cpu = $cpu;
        $this->readme = $readme;
        $this->installation_command = $installation_command;
        $this->release_id = $release_id;
        $this->commit_oid = $commit_oid;
        $this->published_via_actions = $published_via_actions;
        $this->deleted_by_id = $deleted_by_id;
    }
}
