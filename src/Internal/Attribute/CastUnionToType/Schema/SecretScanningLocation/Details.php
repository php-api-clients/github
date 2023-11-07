<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Schema\SecretScanningLocation;

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
final class Details implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'blob_sha|blob_url|commit_sha|commit_url|end_column|end_line|path|start_column|start_line') {
                try {
                    return $hydrator->hydrateObject(Schema\SecretScanningLocationCommit::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'issue_title_url') {
                try {
                    return $hydrator->hydrateObject(Schema\SecretScanningLocationIssueTitle::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'issue_body_url') {
                try {
                    return $hydrator->hydrateObject(Schema\SecretScanningLocationIssueBody::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'issue_comment_url') {
                try {
                    return $hydrator->hydrateObject(Schema\SecretScanningLocationIssueComment::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
