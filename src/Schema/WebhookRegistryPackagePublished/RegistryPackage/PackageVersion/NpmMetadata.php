<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class NpmMetadata
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"bugs":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"string"}},"contributors":{"type":"array","items":{"type":"string"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","version":"generated_version","npm_user":"generated_npm_user","author":"generated_author","bugs":"generated_bugs","dependencies":null,"dev_dependencies":null,"peer_dependencies":null,"optional_dependencies":null,"description":"generated_description","dist":"generated_dist","git_head":"generated_git_head","homepage":"generated_homepage","license":"generated_license","main":"generated_main","repository":"generated_repository","scripts":null,"id":"generated_id","node_version":"generated_node_version","npm_version":"generated_npm_version","has_shrinkwrap":false,"maintainers":["generated_maintainers"],"contributors":["generated_contributors"],"engines":null,"keywords":["generated_keywords"],"files":["generated_files"],"bin":null,"man":null,"directories":"generated_directories","os":["generated_os"],"cpu":["generated_cpu"],"readme":"generated_readme","installation_command":"generated_installation_command","release_id":13,"commit_oid":"generated_commit_oid","published_via_actions":false,"deleted_by_id":13}';
    /**
     * @param ?array<string> $maintainers
     * @param ?array<string> $contributors
     * @param ?array<string> $keywords
     * @param ?array<string> $files
     * @param ?array<string> $os
     * @param ?array<string> $cpu
     */
    public function __construct(public ?string $name, public ?string $version, public ?string $npm_user, public ?string $author, public ?string $bugs, public mixed $dependencies, public mixed $dev_dependencies, public mixed $peer_dependencies, public mixed $optional_dependencies, public ?string $description, public ?string $dist, public ?string $git_head, public ?string $homepage, public ?string $license, public ?string $main, public ?string $repository, public mixed $scripts, public ?string $id, public ?string $node_version, public ?string $npm_version, public ?bool $has_shrinkwrap, public ?array $maintainers, public ?array $contributors, public mixed $engines, public ?array $keywords, public ?array $files, public mixed $bin, public mixed $man, public ?string $directories, public ?array $os, public ?array $cpu, public ?string $readme, public ?string $installation_command, public ?int $release_id, public ?string $commit_oid, public ?bool $published_via_actions, public ?int $deleted_by_id)
    {
    }
}
