<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\GenerateReleaseNotes\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["tag_name"],"type":"object","properties":{"tag_name":{"type":"string","description":"The tag name for the release. This can be an existing tag or a new one."},"target_commitish":{"type":"string","description":"Specifies the commitish value that will be the target for the release\'s tag. Required if the supplied tag_name does not reference an existing tag. Ignored if the tag_name already exists."},"previous_tag_name":{"type":"string","description":"The name of the previous tag to use as the starting point for the release notes. Use to manually specify the range for the set of changes considered as part this release."},"configuration_file_path":{"type":"string","description":"Specifies a path to a file in the repository containing configuration settings used for generating the release notes. If unspecified, the configuration file located in the repository at \'.github\\/release.yml\' or \'.github\\/release.yaml\' will be used. If that is not present, the default configuration will be used."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The tag name for the release. This can be an existing tag or a new one.
     */
    public ?string $tag_name;
    /**
     * Specifies the commitish value that will be the target for the release's tag. Required if the supplied tag_name does not reference an existing tag. Ignored if the tag_name already exists.
     */
    public string $target_commitish;
    /**
     * The name of the previous tag to use as the starting point for the release notes. Use to manually specify the range for the set of changes considered as part this release.
     */
    public string $previous_tag_name;
    /**
     * Specifies a path to a file in the repository containing configuration settings used for generating the release notes. If unspecified, the configuration file located in the repository at '.github/release.yml' or '.github/release.yaml' will be used. If that is not present, the default configuration will be used.
     */
    public string $configuration_file_path;
    public function __construct(string $tag_name, string $target_commitish, string $previous_tag_name, string $configuration_file_path)
    {
        $this->tag_name = $tag_name;
        $this->target_commitish = $target_commitish;
        $this->previous_tag_name = $previous_tag_name;
        $this->configuration_file_path = $configuration_file_path;
    }
}
