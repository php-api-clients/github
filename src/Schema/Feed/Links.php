<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Feed;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["timeline","user"],"type":"object","properties":{"timeline":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"security_advisories":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_public":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_actor":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organization":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"current_user_organizations":{"type":"array","items":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}},"repository_discussions":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"},"repository_discussions_category":{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"timeline":{"href":"generated_href_null","type":"generated_type_null"},"user":{"href":"generated_href_null","type":"generated_type_null"},"security_advisories":{"href":"generated_href_null","type":"generated_type_null"},"current_user":{"href":"generated_href_null","type":"generated_type_null"},"current_user_public":{"href":"generated_href_null","type":"generated_type_null"},"current_user_actor":{"href":"generated_href_null","type":"generated_type_null"},"current_user_organization":{"href":"generated_href_null","type":"generated_type_null"},"current_user_organizations":[{"href":"generated_href_null","type":"generated_type_null"}],"repository_discussions":{"href":"generated_href_null","type":"generated_type_null"},"repository_discussions_category":{"href":"generated_href_null","type":"generated_type_null"}}';
    /**
     * timeline: Hypermedia Link with Type
     * user: Hypermedia Link with Type
     * securityAdvisories: Hypermedia Link with Type
     * currentUser: Hypermedia Link with Type
     * currentUserPublic: Hypermedia Link with Type
     * currentUserActor: Hypermedia Link with Type
     * currentUserOrganization: Hypermedia Link with Type
     * @param ?array<\ApiClients\Client\Github\Schema\LinkWithType> $currentUserOrganizations
     * repositoryDiscussions: Hypermedia Link with Type
     * repositoryDiscussionsCategory: Hypermedia Link with Type
     */
    public function __construct(public Schema\LinkWithType $timeline, public Schema\LinkWithType $user, #[\EventSauce\ObjectHydrator\MapFrom('security_advisories')] public ?Schema\LinkWithType $securityAdvisories, #[\EventSauce\ObjectHydrator\MapFrom('current_user')] public ?Schema\LinkWithType $currentUser, #[\EventSauce\ObjectHydrator\MapFrom('current_user_public')] public ?Schema\LinkWithType $currentUserPublic, #[\EventSauce\ObjectHydrator\MapFrom('current_user_actor')] public ?Schema\LinkWithType $currentUserActor, #[\EventSauce\ObjectHydrator\MapFrom('current_user_organization')] public ?Schema\LinkWithType $currentUserOrganization, #[\EventSauce\ObjectHydrator\MapFrom('current_user_organizations')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\LinkWithType::class)] public ?array $currentUserOrganizations, #[\EventSauce\ObjectHydrator\MapFrom('repository_discussions')] public ?Schema\LinkWithType $repositoryDiscussions, #[\EventSauce\ObjectHydrator\MapFrom('repository_discussions_category')] public ?Schema\LinkWithType $repositoryDiscussionsCategory)
    {
    }
}
