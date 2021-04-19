<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210419210019 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Create department and employee tables';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE TABLE department (id CHAR(36) NOT NULL COMMENT \'(DC2Type:uuid)\', name VARCHAR(255) NOT NULL, bonus_type VARCHAR(255) NOT NULL, bonus_value INT NOT NULL, bonus_currency VARCHAR(3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee (id CHAR(36) NOT NULL COMMENT \'(DC2Type:uuid)\', name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, salary INT NOT NULL, salary_currency VARCHAR(3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP TABLE department');
        $this->addSql('DROP TABLE employee');
    }
}
