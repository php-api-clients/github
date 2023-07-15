<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\CopilotSeatDetails;

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
final class AssigningTeam implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'id|node_id|name|slug|description|privacy|notification_setting|permission|permissions|url|html_url|members_url|repositories_url|parent') {
                try {
                    return $hydrator->hydrateObject(Schema\Team::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
