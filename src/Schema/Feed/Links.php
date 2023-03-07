<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Feed;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["timeline","user"],"type":"object","properties":{"timeline":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"security_advisories":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_public":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_actor":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organization":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organizations":{"type":"array","items":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}},"repository_discussions":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"repository_discussions_category":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"timeline":{"href":"generated_href","type":"generated_type"},"user":{"href":"generated_href","type":"generated_type"},"security_advisories":{"href":"generated_href","type":"generated_type"},"current_user":{"href":"generated_href","type":"generated_type"},"current_user_public":{"href":"generated_href","type":"generated_type"},"current_user_actor":{"href":"generated_href","type":"generated_type"},"current_user_organization":{"href":"generated_href","type":"generated_type"},"current_user_organizations":[{"href":"generated_href","type":"generated_type"}],"repository_discussions":{"href":"generated_href","type":"generated_type"},"repository_discussions_category":{"href":"generated_href","type":"generated_type"}}';
    /**
     * timeline: Hypermedia Link with Type
     * user: Hypermedia Link with Type
     * security_advisories: Hypermedia Link with Type
     * current_user: Hypermedia Link with Type
     * current_user_public: Hypermedia Link with Type
     * current_user_actor: Hypermedia Link with Type
     * current_user_organization: Hypermedia Link with Type
     * @param array<\ApiClients\Client\GitHub\Schema\LinkWithType> $current_user_organizations
     * repository_discussions: Hypermedia Link with Type
     * repository_discussions_category: Hypermedia Link with Type
     */
    public function __construct(public ?Schema\LinkWithType $timeline, public ?Schema\LinkWithType $user, public Schema\LinkWithType $security_advisories, public Schema\LinkWithType $current_user, public Schema\LinkWithType $current_user_public, public Schema\LinkWithType $current_user_actor, public Schema\LinkWithType $current_user_organization, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\LinkWithType::class)] public array $current_user_organizations, public Schema\LinkWithType $repository_discussions, public Schema\LinkWithType $repository_discussions_category)
    {
    }
}
