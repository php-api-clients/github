<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GenerateReleaseNotes\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["tag_name"],"type":"object","properties":{"tag_name":{"type":"string","description":"The tag name for the release. This can be an existing tag or a new one."},"target_commitish":{"type":"string","description":"Specifies the commitish value that will be the target for the release\'s tag. Required if the supplied tag_name does not reference an existing tag. Ignored if the tag_name already exists."},"previous_tag_name":{"type":"string","description":"The name of the previous tag to use as the starting point for the release notes. Use to manually specify the range for the set of changes considered as part this release."},"configuration_file_path":{"type":"string","description":"Specifies a path to a file in the repository containing configuration settings used for generating the release notes. If unspecified, the configuration file located in the repository at \'.github\\/release.yml\' or \'.github\\/release.yaml\' will be used. If that is not present, the default configuration will be used."}}}';
    public const SCHEMA_TITLE = 'GenerateReleaseNotes\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The tag name for the release. This can be an existing tag or a new one.
     */
    private string $tag_name;
    /**
     * Specifies the commitish value that will be the target for the release's tag. Required if the supplied tag_name does not reference an existing tag. Ignored if the tag_name already exists.
     */
    private ?string $target_commitish = null;
    /**
     * The name of the previous tag to use as the starting point for the release notes. Use to manually specify the range for the set of changes considered as part this release.
     */
    private ?string $previous_tag_name = null;
    /**
     * Specifies a path to a file in the repository containing configuration settings used for generating the release notes. If unspecified, the configuration file located in the repository at '.github/release.yml' or '.github/release.yaml' will be used. If that is not present, the default configuration will be used.
     */
    private ?string $configuration_file_path = null;
    /**
     * The tag name for the release. This can be an existing tag or a new one.
     */
    public function tag_name() : string
    {
        return $this->tag_name;
    }
    /**
     * Specifies the commitish value that will be the target for the release's tag. Required if the supplied tag_name does not reference an existing tag. Ignored if the tag_name already exists.
     */
    public function target_commitish() : ?string
    {
        return $this->target_commitish;
    }
    /**
     * The name of the previous tag to use as the starting point for the release notes. Use to manually specify the range for the set of changes considered as part this release.
     */
    public function previous_tag_name() : ?string
    {
        return $this->previous_tag_name;
    }
    /**
     * Specifies a path to a file in the repository containing configuration settings used for generating the release notes. If unspecified, the configuration file located in the repository at '.github/release.yml' or '.github/release.yaml' will be used. If that is not present, the default configuration will be used.
     */
    public function configuration_file_path() : ?string
    {
        return $this->configuration_file_path;
    }
}
