<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250419132332 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE employee_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employee ALTER countrycode TYPE VARCHAR(2)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employee ALTER birthdate TYPE VARCHAR(10)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE employee_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employee ALTER countrycode TYPE CHAR(2)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employee ALTER birthdate TYPE CHAR(10)
        SQL);
    }
}
