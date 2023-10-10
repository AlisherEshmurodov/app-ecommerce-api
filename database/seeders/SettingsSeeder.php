<?php

namespace Database\Seeders;

use App\Enums\SettingType;
use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{

    public function run(): void
    {
      $setting1 = Settings::create([
         "name" => [
             "en" => "Language",
             "ru" => "Язык",
         ],
          "type" => SettingType::SELECT
      ]);

      $setting1->values()->create([
         "name" => [
             "en" => "English",
             "ru" => "Английский",
         ]
      ]);

        $setting1->values()->create([
            "name" => [
                "en" => "Russian",
                "ru" => "Русский",
            ]
        ]);





        $setting2 = Settings::create([
            "name" => [
                "en" => "Currency",
                "ru" => "Валюта",
            ],
            "type" => SettingType::SELECT
        ]);

        $setting2->values()->create([
            "name" => [
                "en" => "Dollar",
                "ru" => "Доллар",
            ]
        ]);

        $setting2->values()->create([
            "name" => [
                "en" => "RUBL",
                "ru" => "РУБЛЬ",
            ]
        ]);






        Settings::create([
            "name" => [
                "en" => "Dark mode",
                "ru" => "Ночной режим",
            ],
            "type" => SettingType::SWITCH
        ]);

        Settings::create([
            "name" => [
                "en" => "Notifications",
                "ru" => "Уведомления",
            ],
            "type" => SettingType::SWITCH
        ]);



    }
}
