<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Schema\CopilotSeatDetails;

use ApiClients\Client\GitHub\Schema;
use Attribute;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertyCaster;
use Throwable;

use function array_keys;
use function array_unique;
use function implode;
use function is_array;
use function sort;

#[Attribute(Attribute::TARGET_PARAMETER)]
final class Assignee implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'name|email|login|id|node_id|avatar_url|gravatar_id|url|html_url|followers_url|following_url|gists_url|starred_url|subscriptions_url|organizations_url|repos_url|events_url|received_events_url|type|site_admin|starred_at') {
                try {
                    return $hydrator->hydrateObject(Schema\SimpleUser::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'id|node_id|name|slug|description|privacy|notification_setting|permission|permissions|url|html_url|members_url|repositories_url|parent') {
                try {
                    return $hydrator->hydrateObject(Schema\Team::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'login|url|id|node_id|repos_url|events_url|hooks_url|issues_url|members_url|public_members_url|avatar_url|description|blog|html_url|name|company|location|email|has_organization_projects|has_repository_projects|is_verified|public_repos|public_gists|followers|following|type|created_at|updated_at|plan') {
                try {
                    return $hydrator->hydrateObject(Schema\Organization::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
