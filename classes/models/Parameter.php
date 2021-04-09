<?php


class Parameter
{
    private int $id;
    private int $parameter;
    private string $timestamp;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getParameter(): int
    {
        return $this->parameter;
    }

    /**
     * @param int $parameter
     */
    public function setParameter(int $parameter): void
    {
        $this->parameter = $parameter;
    }

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     */
    public function setTimestamp(string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }


}