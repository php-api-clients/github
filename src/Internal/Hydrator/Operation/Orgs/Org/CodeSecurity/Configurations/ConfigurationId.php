<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration;
use ApiClients\Client\GitHub\Schema\ScimError;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function assert;
use function count;
use function is_a;

class ConfigurationId implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeSecurityConfiguration($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeSecurityConfiguration(array $payload): CodeSecurityConfiguration
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['target_type'] ?? null;

            if ($value === null) {
                $properties['targetType'] = null;
                goto after_targetType;
            }

            $properties['targetType'] = $value;

            after_targetType:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['advanced_security'] ?? null;

            if ($value === null) {
                $properties['advancedSecurity'] = null;
                goto after_advancedSecurity;
            }

            $properties['advancedSecurity'] = $value;

            after_advancedSecurity:

            $value = $payload['dependency_graph'] ?? null;

            if ($value === null) {
                $properties['dependencyGraph'] = null;
                goto after_dependencyGraph;
            }

            $properties['dependencyGraph'] = $value;

            after_dependencyGraph:

            $value = $payload['dependabot_alerts'] ?? null;

            if ($value === null) {
                $properties['dependabotAlerts'] = null;
                goto after_dependabotAlerts;
            }

            $properties['dependabotAlerts'] = $value;

            after_dependabotAlerts:

            $value = $payload['dependabot_security_updates'] ?? null;

            if ($value === null) {
                $properties['dependabotSecurityUpdates'] = null;
                goto after_dependabotSecurityUpdates;
            }

            $properties['dependabotSecurityUpdates'] = $value;

            after_dependabotSecurityUpdates:

            $value = $payload['code_scanning_default_setup'] ?? null;

            if ($value === null) {
                $properties['codeScanningDefaultSetup'] = null;
                goto after_codeScanningDefaultSetup;
            }

            $properties['codeScanningDefaultSetup'] = $value;

            after_codeScanningDefaultSetup:

            $value = $payload['secret_scanning'] ?? null;

            if ($value === null) {
                $properties['secretScanning'] = null;
                goto after_secretScanning;
            }

            $properties['secretScanning'] = $value;

            after_secretScanning:

            $value = $payload['secret_scanning_push_protection'] ?? null;

            if ($value === null) {
                $properties['secretScanningPushProtection'] = null;
                goto after_secretScanningPushProtection;
            }

            $properties['secretScanningPushProtection'] = $value;

            after_secretScanningPushProtection:

            $value = $payload['secret_scanning_validity_checks'] ?? null;

            if ($value === null) {
                $properties['secretScanningValidityChecks'] = null;
                goto after_secretScanningValidityChecks;
            }

            $properties['secretScanningValidityChecks'] = $value;

            after_secretScanningValidityChecks:

            $value = $payload['private_vulnerability_reporting'] ?? null;

            if ($value === null) {
                $properties['privateVulnerabilityReporting'] = null;
                goto after_privateVulnerabilityReporting;
            }

            $properties['privateVulnerabilityReporting'] = $value;

            after_privateVulnerabilityReporting:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeSecurityConfiguration::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeSecurityConfiguration(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError(array $payload): ScimError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['detail'] ?? null;

            if ($value === null) {
                $properties['detail'] = null;
                goto after_detail;
            }

            $properties['detail'] = $value;

            after_detail:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['scim_type'] ?? null;

            if ($value === null) {
                $properties['scimType'] = null;
                goto after_scimType;
            }

            $properties['scimType'] = $value;

            after_scimType:

            $value = $payload['schemas'] ?? null;

            if ($value === null) {
                $properties['schemas'] = null;
                goto after_schemas;
            }

            $properties['schemas'] = $value;

            after_schemas:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ScimError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ScimError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeSecurityConfiguration($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError($object),
                default => throw new LogicException('No serialization defined for $className'),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeSecurityConfiguration(mixed $object): mixed
    {
        assert($object instanceof CodeSecurityConfiguration);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $targetType = $object->targetType;

        if ($targetType === null) {
            goto after_targetType;
        }

        after_targetType:        $result['target_type'] = $targetType;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $advancedSecurity = $object->advancedSecurity;

        if ($advancedSecurity === null) {
            goto after_advancedSecurity;
        }

        after_advancedSecurity:        $result['advanced_security'] = $advancedSecurity;

        $dependencyGraph = $object->dependencyGraph;

        if ($dependencyGraph === null) {
            goto after_dependencyGraph;
        }

        after_dependencyGraph:        $result['dependency_graph'] = $dependencyGraph;

        $dependabotAlerts = $object->dependabotAlerts;

        if ($dependabotAlerts === null) {
            goto after_dependabotAlerts;
        }

        after_dependabotAlerts:        $result['dependabot_alerts'] = $dependabotAlerts;

        $dependabotSecurityUpdates = $object->dependabotSecurityUpdates;

        if ($dependabotSecurityUpdates === null) {
            goto after_dependabotSecurityUpdates;
        }

        after_dependabotSecurityUpdates:        $result['dependabot_security_updates'] = $dependabotSecurityUpdates;

        $codeScanningDefaultSetup = $object->codeScanningDefaultSetup;

        if ($codeScanningDefaultSetup === null) {
            goto after_codeScanningDefaultSetup;
        }

        after_codeScanningDefaultSetup:        $result['code_scanning_default_setup'] = $codeScanningDefaultSetup;

        $secretScanning = $object->secretScanning;

        if ($secretScanning === null) {
            goto after_secretScanning;
        }

        after_secretScanning:        $result['secret_scanning'] = $secretScanning;

        $secretScanningPushProtection = $object->secretScanningPushProtection;

        if ($secretScanningPushProtection === null) {
            goto after_secretScanningPushProtection;
        }

        after_secretScanningPushProtection:        $result['secret_scanning_push_protection'] = $secretScanningPushProtection;

        $secretScanningValidityChecks = $object->secretScanningValidityChecks;

        if ($secretScanningValidityChecks === null) {
            goto after_secretScanningValidityChecks;
        }

        after_secretScanningValidityChecks:        $result['secret_scanning_validity_checks'] = $secretScanningValidityChecks;

        $privateVulnerabilityReporting = $object->privateVulnerabilityReporting;

        if ($privateVulnerabilityReporting === null) {
            goto after_privateVulnerabilityReporting;
        }

        after_privateVulnerabilityReporting:        $result['private_vulnerability_reporting'] = $privateVulnerabilityReporting;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError(mixed $object): mixed
    {
        assert($object instanceof ScimError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $detail = $object->detail;

        if ($detail === null) {
            goto after_detail;
        }

        after_detail:        $result['detail'] = $detail;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $scimType = $object->scimType;

        if ($scimType === null) {
            goto after_scimType;
        }

        after_scimType:        $result['scim_type'] = $scimType;

        $schemas = $object->schemas;

        if ($schemas === null) {
            goto after_schemas;
        }

        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new SerializeArrayItems(...[]);
        }

        $schemas                                 = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
