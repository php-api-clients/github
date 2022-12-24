<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PackageVersion
{
    public const SCHEMA_JSON = '{"title":"Package Version","required":["id","name","url","package_html_url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the package version.","examples":[1]},"name":{"type":"string","description":"The name of the package version.","examples":["latest"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/packages\\/container\\/super-linter\\/versions\\/786068"]},"package_html_url":{"type":"string","examples":["https:\\/\\/github.com\\/orgs\\/github\\/packages\\/container\\/package\\/super-linter"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/orgs\\/github\\/packages\\/container\\/super-linter\\/786068"]},"license":{"type":"string","examples":["MIT"]},"description":{"type":"string"},"created_at":{"type":"string","format":"date-time","examples":["2011-04-10T20:09:31Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2014-03-03T18:58:10Z"]},"deleted_at":{"type":"string","format":"date-time","examples":["2014-03-03T18:58:10Z"]},"metadata":{"title":"Package Version Metadata","required":["package_type"],"type":"object","properties":{"package_type":{"enum":["npm","maven","rubygems","docker","nuget","container"],"type":"string","examples":["docker"]},"container":{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}},"docker":{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}}}},"description":"A version of a software package"}';
    public const SCHEMA_TITLE = 'Package Version';
    public const SCHEMA_DESCRIPTION = 'A version of a software package';
    /**
     * Unique identifier of the package version.
     */
    private int $id;
    /**
     * The name of the package version.
     */
    private string $name;
    private string $url;
    private string $package_html_url;
    private ?string $html_url = null;
    private ?string $license = null;
    private ?string $description = null;
    private string $created_at;
    private string $updated_at;
    private ?string $deleted_at = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5F0E57890D8735D644Ecc5997705B22A::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5F0E57890D8735D644Ecc5997705B22A $metadata = null;
    /**
     * Unique identifier of the package version.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The name of the package version.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function package_html_url() : string
    {
        return $this->package_html_url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function license() : ?string
    {
        return $this->license;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function deleted_at() : ?string
    {
        return $this->deleted_at;
    }
    public function metadata() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5F0E57890D8735D644Ecc5997705B22A
    {
        return $this->metadata;
    }
}
