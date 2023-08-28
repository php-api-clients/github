<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Schema\Installation;

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
final class Account implements PropertyCaster
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

            if ($signature === 'description|html_url|website_url|id|node_id|name|slug|created_at|updated_at|avatar_url') {
                try {
                    return $hydrator->hydrateObject(Schema\Enterprise::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
