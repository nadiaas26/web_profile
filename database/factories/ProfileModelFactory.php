<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProfileModel;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfileModel>
 */
class ProfileModelFactory extends Factory
{
    protected $model = ProfileModel::class;

    public function definition(): array
    {
        return [
            'nama' => 'Edy Atthoillah',
            'ttl' => 'Lumajang, 20 Oktober 2002',
            'alamat' => 'Jl.Nangka No.113 Kepuharjo Lumajang',
            'Agama' => 'Islam',
            'Kewarganegaraan' => 'Indonesia',
            'no_hp' => ' 087774931731',
            'email' => 'edyatthoillah123@gmail.com',
        ];
    }
}
