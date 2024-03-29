<?php

/*
 * Ce fichier fait partie du Studoo.
 *
 * (c) Benoit Foujols <Benoit.Foujols@ac-creteil.fr>
 *
 * Pour les informations complètes sur les droits d'auteur et la licence,
 * veuillez consulter le fichier LICENSE qui a été distribué avec ce code source.
 */

namespace Studoo\Entity;

use Studoo\Exception\InvalideArgumentException;


class Repository
{
    private string $id;
    private string $name;
    private \DateTime $dateCreated;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Repository
     */
    public function setId(string $id): Repository
    {
        $this->id = hash("sha1", $id);
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Repository
     */
    public function setName(string $name): Repository
    {
        if ($name === "") {
            throw new InvalideArgumentException("le format du nom est incorrect (Repository::setName)");
        }
        $this->name = $name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated(): \DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @return Repository
     */
    public function setDateCreated(\DateTime $dateTime): Repository
    {
        $this->dateCreated = $dateTime;
        return $this;
    }
}