<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\GenerateReleaseNotes\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["tag_name"],"type":"object","properties":{"tag_name":{"type":"string","description":"The tag name for the release. This can be an existing tag or a new one."},"target_commitish":{"type":"string","description":"Specifies the commitish value that will be the target for the release\'s tag. Required if the supplied tag_name does not reference an existing tag. Ignored if the tag_name already exists."},"previous_tag_name":{"type":"string","description":"The name of the previous tag to use as the starting point for the release notes. Use to manually specify the range for the set of changes considered as part this release."},"configuration_file_path":{"type":"string","description":"Specifies a path to a file in the repository containing configuration settings used for generating the release notes. If unspecified, the configuration file located in the repository at \'.github\\/release.yml\' or \'.github\\/release.yaml\' will be used. If that is not present, the default configuration will be used."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag_name":"generated","target_commitish":"generated","previous_tag_name":"generated","configuration_file_path":"generated"}';

    /**
     * tagName: The tag name for the release. This can be an existing tag or a new one.
     * targetCommitish: Specifies the commitish value that will be the target for the release's tag. Required if the supplied tag_name does not reference an existing tag. Ignored if the tag_name already exists.
     * previousTagName: The name of the previous tag to use as the starting point for the release notes. Use to manually specify the range for the set of changes considered as part this release.
     * configurationFilePath: Specifies a path to a file in the repository containing configuration settings used for generating the release notes. If unspecified, the configuration file located in the repository at '.github/release.yml' or '.github/release.yaml' will be used. If that is not present, the default configuration will be used.
     */
    public function __construct(#[MapFrom('tag_name')]
    public string $tagName, #[MapFrom('target_commitish')]
    public string|null $targetCommitish, #[MapFrom('previous_tag_name')]
    public string|null $previousTagName, #[MapFrom('configuration_file_path')]
    public string|null $configurationFilePath,)
    {
    }
}
