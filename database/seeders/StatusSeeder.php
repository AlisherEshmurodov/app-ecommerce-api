<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        Status::create([
           "name" => [
               "eng" => "New",
               "ru" => "Новый"
           ],
            "code" => "new",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Confirmed",
                "ru" => "Подтвержденный"
            ],
            "code" => "confirmed",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Processing",
                "ru" => "Обработка"
            ],
            "code" => "processing",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Shipping",
                "ru" => "Перевозки"
            ],
            "code" => "shipping",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Delivered",
                "ru" => "Доставленный"
            ],
            "code" => "delivered",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Completed",
                "ru" => "Завершенный"
            ],
            "code" => "completed",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Closed",
                "ru" => "Закрыто"
            ],
            "code" => "closed",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Canceled",
                "ru" => "Отменено"
            ],
            "code" => "canceled",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Refunded",
                "ru" => "Возвращено"
            ],
            "code" => "refunded",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Waiting payment",
                "ru" => "Ожидание платежа"
            ],
            "code" => "waiting_payment",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Paid",
                "ru" => "Оплаченный"
            ],
            "code" => "paid",
            "for" => "order"
        ]);

        Status::create([
            "name" => [
                "eng" => "Payment error",
                "ru" => "Ошибка Ошибка оплаты"
            ],
            "code" => "payment_error",
            "for" => "order"
        ]);

    }
}
