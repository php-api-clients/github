<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion;

final class NpmMetadata
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"bugs":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"string"}},"contributors":{"type":"array","items":{"type":"string"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'PackageVersion\\NpmMetadata';
    public const SCHEMA_DESCRIPTION = '';
    private string $name;
    private string $version;
    private string $npm_user;
    private $author;
    private $bugs;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Dependencies::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Dependencies $dependencies;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\DevDependencies::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\DevDependencies $dev_dependencies;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\PeerDependencies::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\PeerDependencies $peer_dependencies;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\OptionalDependencies::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\OptionalDependencies $optional_dependencies;
    private string $description;
    private $dist;
    private string $git_head;
    private string $homepage;
    private string $license;
    private string $main;
    private $repository;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Scripts::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Scripts $scripts;
    private string $id;
    private string $node_version;
    private string $npm_version;
    private bool $has_shrinkwrap;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Maintainers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Maintainers::class)
     */
    private array $maintainers = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Contributors>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Contributors::class)
     */
    private array $contributors = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Engines::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Engines $engines;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Keywords>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Keywords::class)
     */
    private array $keywords = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Files>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Files::class)
     */
    private array $files = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Bin::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Bin $bin;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Man::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Man $man;
    private $directories;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Os>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Os::class)
     */
    private array $os = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Cpu>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Cpu::class)
     */
    private array $cpu = array();
    private string $readme;
    private string $installation_command;
    private int $release_id;
    private string $commit_oid;
    private bool $published_via_actions;
    private int $deleted_by_id;
    public function name() : string
    {
        return $this->name;
    }
    public function version() : string
    {
        return $this->version;
    }
    public function npm_user() : string
    {
        return $this->npm_user;
    }
    public function author()
    {
        return $this->author;
    }
    public function bugs()
    {
        return $this->bugs;
    }
    public function dependencies() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Dependencies
    {
        return $this->dependencies;
    }
    public function dev_dependencies() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\DevDependencies
    {
        return $this->dev_dependencies;
    }
    public function peer_dependencies() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\PeerDependencies
    {
        return $this->peer_dependencies;
    }
    public function optional_dependencies() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\OptionalDependencies
    {
        return $this->optional_dependencies;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function dist()
    {
        return $this->dist;
    }
    public function git_head() : string
    {
        return $this->git_head;
    }
    public function homepage() : string
    {
        return $this->homepage;
    }
    public function license() : string
    {
        return $this->license;
    }
    public function main() : string
    {
        return $this->main;
    }
    public function repository()
    {
        return $this->repository;
    }
    public function scripts() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Scripts
    {
        return $this->scripts;
    }
    public function id() : string
    {
        return $this->id;
    }
    public function node_version() : string
    {
        return $this->node_version;
    }
    public function npm_version() : string
    {
        return $this->npm_version;
    }
    public function has_shrinkwrap() : bool
    {
        return $this->has_shrinkwrap;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Maintainers>
     */
    public function maintainers() : array
    {
        return $this->maintainers;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Contributors>
     */
    public function contributors() : array
    {
        return $this->contributors;
    }
    public function engines() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Engines
    {
        return $this->engines;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Keywords>
     */
    public function keywords() : array
    {
        return $this->keywords;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Files>
     */
    public function files() : array
    {
        return $this->files;
    }
    public function bin() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Bin
    {
        return $this->bin;
    }
    public function man() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Man
    {
        return $this->man;
    }
    public function directories()
    {
        return $this->directories;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Os>
     */
    public function os() : array
    {
        return $this->os;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NpmMetadata\Cpu>
     */
    public function cpu() : array
    {
        return $this->cpu;
    }
    public function readme() : string
    {
        return $this->readme;
    }
    public function installation_command() : string
    {
        return $this->installation_command;
    }
    public function release_id() : int
    {
        return $this->release_id;
    }
    public function commit_oid() : string
    {
        return $this->commit_oid;
    }
    public function published_via_actions() : bool
    {
        return $this->published_via_actions;
    }
    public function deleted_by_id() : int
    {
        return $this->deleted_by_id;
    }
}
