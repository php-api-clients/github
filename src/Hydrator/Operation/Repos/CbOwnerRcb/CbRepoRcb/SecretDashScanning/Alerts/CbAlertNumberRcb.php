<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbAlertNumberRcb implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHub\Schema\SecretScanningAlert' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecretScanningAlert($payload),
                'ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecretScanningAlert(array $payload): \ApiClients\Client\GitHub\Schema\SecretScanningAlert
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['locations_url'] ?? null;
    
                if ($value === null) {
                    $properties['locations_url'] = null;
                    goto after_locations_url;
                }

                $properties['locations_url'] = $value;
    
                after_locations_url:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['resolution'] ?? null;
    
                if ($value === null) {
                    $properties['resolution'] = null;
                    goto after_resolution;
                }

                $properties['resolution'] = $value;
    
                after_resolution:

                $value = $payload['resolved_at'] ?? null;
    
                if ($value === null) {
                    $properties['resolved_at'] = null;
                    goto after_resolved_at;
                }

                $properties['resolved_at'] = $value;
    
                after_resolved_at:

                $value = $payload['resolved_by'] ?? null;
    
                if ($value === null) {
                    $properties['resolved_by'] = null;
                    goto after_resolved_by;
                }

                $properties['resolved_by'] = $value;
    
                after_resolved_by:

                $value = $payload['resolution_comment'] ?? null;
    
                if ($value === null) {
                    $properties['resolution_comment'] = null;
                    goto after_resolution_comment;
                }

                $properties['resolution_comment'] = $value;
    
                after_resolution_comment:

                $value = $payload['secret_type'] ?? null;
    
                if ($value === null) {
                    $properties['secret_type'] = null;
                    goto after_secret_type;
                }

                $properties['secret_type'] = $value;
    
                after_secret_type:

                $value = $payload['secret_type_display_name'] ?? null;
    
                if ($value === null) {
                    $properties['secret_type_display_name'] = null;
                    goto after_secret_type_display_name;
                }

                $properties['secret_type_display_name'] = $value;
    
                after_secret_type_display_name:

                $value = $payload['secret'] ?? null;
    
                if ($value === null) {
                    $properties['secret'] = null;
                    goto after_secret;
                }

                $properties['secret'] = $value;
    
                after_secret:

                $value = $payload['push_protection_bypassed'] ?? null;
    
                if ($value === null) {
                    $properties['push_protection_bypassed'] = null;
                    goto after_push_protection_bypassed;
                }

                $properties['push_protection_bypassed'] = $value;
    
                after_push_protection_bypassed:

                $value = $payload['push_protection_bypassed_by'] ?? null;
    
                if ($value === null) {
                    $properties['push_protection_bypassed_by'] = null;
                    goto after_push_protection_bypassed_by;
                }

                $properties['push_protection_bypassed_by'] = $value;
    
                after_push_protection_bypassed_by:

                $value = $payload['push_protection_bypassed_at'] ?? null;
    
                if ($value === null) {
                    $properties['push_protection_bypassed_at'] = null;
                    goto after_push_protection_bypassed_at;
                }

                $properties['push_protection_bypassed_at'] = $value;
    
                after_push_protection_bypassed_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SecretScanningAlert', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SecretScanningAlert::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\SecretScanningAlert(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SecretScanningAlert', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['code'] ?? null;
    
                if ($value === null) {
                    $properties['code'] = null;
                    goto after_code;
                }

                $properties['code'] = $value;
    
                after_code:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\SecretScanningAlert' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecretScanningAlert($object),
                'ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SecretScanningAlert(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SecretScanningAlert);
        $result = [];
        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $locations_url = $object->locations_url;

        if ($locations_url === null) {
            goto after_locations_url;
        }
        after_locations_url:        $result['locations_url'] = $locations_url;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $resolution = $object->resolution;

        if ($resolution === null) {
            goto after_resolution;
        }
        after_resolution:        $result['resolution'] = $resolution;

        
        $resolved_at = $object->resolved_at;

        if ($resolved_at === null) {
            goto after_resolved_at;
        }
        after_resolved_at:        $result['resolved_at'] = $resolved_at;

        
        $resolved_by = $object->resolved_by;

        if ($resolved_by === null) {
            goto after_resolved_by;
        }
        after_resolved_by:        $result['resolved_by'] = $resolved_by;

        
        $resolution_comment = $object->resolution_comment;

        if ($resolution_comment === null) {
            goto after_resolution_comment;
        }
        after_resolution_comment:        $result['resolution_comment'] = $resolution_comment;

        
        $secret_type = $object->secret_type;

        if ($secret_type === null) {
            goto after_secret_type;
        }
        after_secret_type:        $result['secret_type'] = $secret_type;

        
        $secret_type_display_name = $object->secret_type_display_name;

        if ($secret_type_display_name === null) {
            goto after_secret_type_display_name;
        }
        after_secret_type_display_name:        $result['secret_type_display_name'] = $secret_type_display_name;

        
        $secret = $object->secret;

        if ($secret === null) {
            goto after_secret;
        }
        after_secret:        $result['secret'] = $secret;

        
        $push_protection_bypassed = $object->push_protection_bypassed;

        if ($push_protection_bypassed === null) {
            goto after_push_protection_bypassed;
        }
        after_push_protection_bypassed:        $result['push_protection_bypassed'] = $push_protection_bypassed;

        
        $push_protection_bypassed_by = $object->push_protection_bypassed_by;

        if ($push_protection_bypassed_by === null) {
            goto after_push_protection_bypassed_by;
        }
        after_push_protection_bypassed_by:        $result['push_protection_bypassed_by'] = $push_protection_bypassed_by;

        
        $push_protection_bypassed_at = $object->push_protection_bypassed_at;

        if ($push_protection_bypassed_at === null) {
            goto after_push_protection_bypassed_at;
        }
        after_push_protection_bypassed_at:        $result['push_protection_bypassed_at'] = $push_protection_bypassed_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503);
        $result = [];
        
        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
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
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
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
