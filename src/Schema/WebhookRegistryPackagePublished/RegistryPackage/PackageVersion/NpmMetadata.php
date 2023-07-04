<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Author;
use ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bugs;
use ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Directories;
use ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Dist;
use ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Repository;
use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class NpmMetadata
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"bugs":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"string"}},"contributors":{"type":"array","items":{"type":"string"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","version":"generated","npm_user":"generated","author":null,"bugs":null,"dependencies":[],"dev_dependencies":[],"peer_dependencies":[],"optional_dependencies":[],"description":"generated","dist":null,"git_head":"generated","homepage":"generated","license":"generated","main":"generated","repository":null,"scripts":[],"id":"generated","node_version":"generated","npm_version":"generated","has_shrinkwrap":false,"maintainers":["generated","generated"],"contributors":["generated","generated"],"engines":[],"keywords":["generated","generated"],"files":["generated","generated"],"bin":[],"man":[],"directories":null,"os":["generated","generated"],"cpu":["generated","generated"],"readme":"generated","installation_command":"generated","release_id":10,"commit_oid":"generated","published_via_actions":false,"deleted_by_id":13}';

    public function __construct(public string|null $name, public string|null $version, #[MapFrom('npm_user')]
    public string|null $npmUser, #[Author]
    public string|Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Author\One|null $author, #[Bugs]
    public string|Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bugs\One|null $bugs, public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Dependencies|null $dependencies, #[MapFrom('dev_dependencies')]
    public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\DevDependencies|null $devDependencies, #[MapFrom('peer_dependencies')]
    public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\PeerDependencies|null $peerDependencies, #[MapFrom('optional_dependencies')]
    public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\OptionalDependencies|null $optionalDependencies, public string|null $description, #[Dist]
    public string|Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Dist\One|null $dist, #[MapFrom('git_head')]
    public string|null $gitHead, public string|null $homepage, public string|null $license, public string|null $main, #[Repository]
    public string|Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Repository\One|null $repository, public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Scripts|null $scripts, public string|null $id, #[MapFrom('node_version')]
    public string|null $nodeVersion, #[MapFrom('npm_version')]
    public string|null $npmVersion, #[MapFrom('has_shrinkwrap')]
    public bool|null $hasShrinkwrap, public array|null $maintainers, public array|null $contributors, public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Engines|null $engines, public array|null $keywords, public array|null $files, public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bin|null $bin, public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Man|null $man, #[Directories]
    public string|Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Directories\One|null $directories, public array|null $os, public array|null $cpu, public string|null $readme, #[MapFrom('installation_command')]
    public string|null $installationCommand, #[MapFrom('release_id')]
    public int|null $releaseId, #[MapFrom('commit_oid')]
    public string|null $commitOid, #[MapFrom('published_via_actions')]
    public bool|null $publishedViaActions, #[MapFrom('deleted_by_id')]
    public int|null $deletedById,)
    {
    }
}
