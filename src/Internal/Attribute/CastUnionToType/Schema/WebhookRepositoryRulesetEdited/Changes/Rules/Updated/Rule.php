<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated;

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
final class Rule implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'type' && $value['type'] === 'creation') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleCreation::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'update') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleUpdate::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type' && $value['type'] === 'deletion') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleDeletion::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type' && $value['type'] === 'required_linear_history') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleRequiredLinearHistory::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'required_deployments') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleRequiredDeployments::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type' && $value['type'] === 'required_signatures') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleRequiredSignatures::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'pull_request') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRulePullRequest::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'required_status_checks') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleRequiredStatusChecks::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type' && $value['type'] === 'non_fast_forward') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleNonFastForward::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'commit_message_pattern') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleCommitMessagePattern::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'commit_author_email_pattern') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleCommitAuthorEmailPattern::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'committer_email_pattern') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleCommitterEmailPattern::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'branch_name_pattern') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleBranchNamePattern::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'tag_name_pattern') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleTagNamePattern::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'file_path_restriction') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleset\Rules\Fourteen::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'max_file_path_length') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleset\Rules\Fifteen::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'file_extension_restriction') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleset\Rules\Sixteen::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'max_file_size') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleset\Rules\Seventeen::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'workflows') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleWorkflows::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type' && $value['type'] === 'code_scanning') {
                try {
                    return $hydrator->hydrateObject(Schema\RepositoryRuleCodeScanning::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
