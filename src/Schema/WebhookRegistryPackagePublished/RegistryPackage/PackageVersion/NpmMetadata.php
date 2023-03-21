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
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","version":"generated_version_null","npm_user":"generated_npm_user_null","author":"generated_author_null","bugs":"generated_bugs_null","dependencies":null,"dev_dependencies":null,"peer_dependencies":null,"optional_dependencies":null,"description":"generated_description_null","dist":"generated_dist_null","git_head":"generated_git_head_null","homepage":"generated_homepage_null","license":"generated_license_null","main":"generated_main_null","repository":"generated_repository_null","scripts":null,"id":"generated_id_null","node_version":"generated_node_version_null","npm_version":"generated_npm_version_null","has_shrinkwrap":false,"maintainers":["generated_maintainers_null"],"contributors":["generated_contributors_null"],"engines":null,"keywords":["generated_keywords_null"],"files":["generated_files_null"],"bin":null,"man":null,"directories":"generated_directories_null","os":["generated_os_null"],"cpu":["generated_cpu_null"],"readme":"generated_readme_null","installation_command":"generated_installation_command_null","release_id":13,"commit_oid":"generated_commit_oid_null","published_via_actions":false,"deleted_by_id":13}';
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
