<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class NpmMetadata
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["object","null"]},"bugs":{"type":["object","null"]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["object","null"]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["object","null"]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"object"}},"contributors":{"type":"array","items":{"type":"object"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["object","null"]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","version":"generated_version_null","npm_user":"generated_npm_user_null","author":null,"bugs":null,"dependencies":null,"dev_dependencies":null,"peer_dependencies":null,"optional_dependencies":null,"description":"generated_description_null","dist":null,"git_head":"generated_git_head_null","homepage":"generated_homepage_null","license":"generated_license_null","main":"generated_main_null","repository":null,"scripts":null,"id":"generated_id_null","node_version":"generated_node_version_null","npm_version":"generated_npm_version_null","has_shrinkwrap":false,"maintainers":null,"contributors":null,"engines":null,"keywords":["generated_keywords_null"],"files":["generated_files_null"],"bin":null,"man":null,"directories":null,"os":["generated_os_null"],"cpu":["generated_cpu_null"],"readme":"generated_readme_null","installation_command":"generated_installation_command_null","release_id":13,"commit_oid":"generated_commit_oid_null","published_via_actions":false,"deleted_by_id":13}';
    /**
     * @param ?array<string> $keywords
     * @param ?array<string> $files
     * @param ?array<string> $os
     * @param ?array<string> $cpu
     */
    public function __construct(public ?string $name, public ?string $version, public ?string $npm_user, public mixed $author, public mixed $bugs, public mixed $dependencies, public mixed $dev_dependencies, public mixed $peer_dependencies, public mixed $optional_dependencies, public ?string $description, public mixed $dist, public ?string $git_head, public ?string $homepage, public ?string $license, public ?string $main, public mixed $repository, public mixed $scripts, public ?string $id, public ?string $node_version, public ?string $npm_version, public ?bool $has_shrinkwrap, public mixed $maintainers, public mixed $contributors, public mixed $engines, public ?array $keywords, public ?array $files, public mixed $bin, public mixed $man, public mixed $directories, public ?array $os, public ?array $cpu, public ?string $readme, public ?string $installation_command, public ?int $release_id, public ?string $commit_oid, public ?bool $published_via_actions, public ?int $deleted_by_id)
    {
    }
}
