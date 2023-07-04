<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\Repos\CreateOrgRuleset\Request\ApplicationJson;

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
final class Conditions implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'ref_name') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRulesetConditions::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'ref_name') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRulesetConditions::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
