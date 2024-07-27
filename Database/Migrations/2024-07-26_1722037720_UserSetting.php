<?php
namespace Database\Migrations;
use Database\SchemaMigration;

class CreateUserSettingTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE IF NOT EXISTS UserSetting (
                entryID INT PRIMARY KEY AUTO_INCREMENT,
                userID INT,
                metakey VARCHAR(255),
                metavalue VARCHAR(255)
            );"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE IF EXISTS UserSetting;"
        ];
    }
}