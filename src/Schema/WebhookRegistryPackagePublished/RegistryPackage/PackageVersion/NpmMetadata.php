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
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","version":"generated_version_null","npmUser":"generated_npm_user_null","author":"generated_author_null","bugs":"generated_bugs_null","dependencies":null,"devDependencies":null,"peerDependencies":null,"optionalDependencies":null,"description":"generated_description_null","dist":"generated_dist_null","gitHead":"generated_git_head_null","homepage":"generated_homepage_null","license":"generated_license_null","main":"generated_main_null","repository":"generated_repository_null","scripts":null,"id":"generated_id_null","nodeVersion":"generated_node_version_null","npmVersion":"generated_npm_version_null","hasShrinkwrap":false,"maintainers":["generated_maintainers_null"],"contributors":["generated_contributors_null"],"engines":null,"keywords":["generated_keywords_null"],"files":["generated_files_null"],"bin":null,"man":null,"directories":"generated_directories_null","os":["generated_os_null"],"cpu":["generated_cpu_null"],"readme":"generated_readme_null","installationCommand":"generated_installation_command_null","releaseId":13,"commitOid":"generated_commit_oid_null","publishedViaActions":false,"deletedById":13}';
    /**
     * @param ?array<string> $maintainers
     * @param ?array<string> $contributors
     * @param ?array<string> $keywords
     * @param ?array<string> $files
     * @param ?array<string> $os
     * @param ?array<string> $cpu
     */
    public function __construct(public ?string $name, public ?string $version, #[\EventSauce\ObjectHydrator\MapFrom('npm_user')] public ?string $npmUser, public ?string $author, public ?string $bugs, public mixed $dependencies, #[\EventSauce\ObjectHydrator\MapFrom('dev_dependencies')] public mixed $devDependencies, #[\EventSauce\ObjectHydrator\MapFrom('peer_dependencies')] public mixed $peerDependencies, #[\EventSauce\ObjectHydrator\MapFrom('optional_dependencies')] public mixed $optionalDependencies, public ?string $description, public ?string $dist, #[\EventSauce\ObjectHydrator\MapFrom('git_head')] public ?string $gitHead, public ?string $homepage, public ?string $license, public ?string $main, public ?string $repository, public mixed $scripts, public ?string $id, #[\EventSauce\ObjectHydrator\MapFrom('node_version')] public ?string $nodeVersion, #[\EventSauce\ObjectHydrator\MapFrom('npm_version')] public ?string $npmVersion, #[\EventSauce\ObjectHydrator\MapFrom('has_shrinkwrap')] public ?bool $hasShrinkwrap, public ?array $maintainers, public ?array $contributors, public mixed $engines, public ?array $keywords, public ?array $files, public mixed $bin, public mixed $man, public ?string $directories, public ?array $os, public ?array $cpu, public ?string $readme, #[\EventSauce\ObjectHydrator\MapFrom('installation_command')] public ?string $installationCommand, #[\EventSauce\ObjectHydrator\MapFrom('release_id')] public ?int $releaseId, #[\EventSauce\ObjectHydrator\MapFrom('commit_oid')] public ?string $commitOid, #[\EventSauce\ObjectHydrator\MapFrom('published_via_actions')] public ?bool $publishedViaActions, #[\EventSauce\ObjectHydrator\MapFrom('deleted_by_id')] public ?int $deletedById)
    {
    }
}
