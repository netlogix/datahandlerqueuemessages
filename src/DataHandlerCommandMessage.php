<?php

declare(strict_types=1);

namespace Netlogix\DataHandlerQueueMessages;

final class DataHandlerCommandMessage
{
    protected string $tableName;
    protected string $uid;
    protected string $command;
    /**
     * @var mixed
     */
    protected $value;

    public function __construct(
        string $tableName,
        string $uid,
        string $command,
        $value
    ) {
        $this->tableName = $tableName;
        $this->uid = $uid;
        $this->command = $command;
        $this->value = $value;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function getUid(): string
    {
        return $this->uid;
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
