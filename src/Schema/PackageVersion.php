<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PackageVersion
{
    public const SCHEMA_JSON = '{"title":"Package Version","required":["id","name","url","package_html_url","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the package version.","examples":[1]},"name":{"type":"string","description":"The name of the package version.","examples":["latest"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/packages\\/container\\/super-linter\\/versions\\/786068"]},"package_html_url":{"type":"string","examples":["https:\\/\\/github.com\\/orgs\\/github\\/packages\\/container\\/package\\/super-linter"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/orgs\\/github\\/packages\\/container\\/super-linter\\/786068"]},"license":{"type":"string","examples":["MIT"]},"description":{"type":"string"},"created_at":{"type":"string","format":"date-time","examples":["2011-04-10T20:09:31Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2014-03-03T18:58:10Z"]},"deleted_at":{"type":"string","format":"date-time","examples":["2014-03-03T18:58:10Z"]},"metadata":{"title":"Package Version Metadata","required":["package_type"],"type":"object","properties":{"package_type":{"enum":["npm","maven","rubygems","docker","nuget","container"],"type":"string","examples":["docker"]},"container":{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}},"docker":{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}}}},"description":"A version of a software package"}';
    public const SCHEMA_TITLE = 'Package Version';
    public const SCHEMA_DESCRIPTION = 'A version of a software package';
    public const SCHEMA_EXAMPLE_DATA = '{"id":1,"name":"latest","url":"https:\\/\\/api.github.com\\/orgs\\/github\\/packages\\/container\\/super-linter\\/versions\\/786068","packageHtmlUrl":"https:\\/\\/github.com\\/orgs\\/github\\/packages\\/container\\/package\\/super-linter","htmlUrl":"https:\\/\\/github.com\\/orgs\\/github\\/packages\\/container\\/super-linter\\/786068","license":"MIT","description":"generated_description_null","createdAt":"2011-04-10T20:09:31Z","updatedAt":"2014-03-03T18:58:10Z","deletedAt":"2014-03-03T18:58:10Z","metadata":{"packageType":"docker","container":{"tags":["generated_tags_null"]},"docker":{"tag":["generated_tag_null"]}}}';
    /**
     * id: Unique identifier of the package version.
     * name: The name of the package version.
     */
    public function __construct(public int $id, public string $name, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('package_html_url')] public string $packageHtmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?string $license, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, #[\EventSauce\ObjectHydrator\MapFrom('deleted_at')] public ?string $deletedAt, public ?Schema\PackageVersion\Metadata $metadata)
    {
    }
}
