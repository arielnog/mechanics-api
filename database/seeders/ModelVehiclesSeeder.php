<?php

namespace Database\Seeders;

use App\Models\VehicleModel;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ModelVehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modelVehicles = [
            [
                "id" => 1,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "1 M",
                "brand_id" => 1
            ],
            [
                "id" => 2,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "116i",
                "brand_id" => 1
            ],
            [
                "id" => 3,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "118i",
                "brand_id" => 1
            ],
            [
                "id" => 4,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "120i",
                "brand_id" => 1
            ],
            [
                "id" => 5,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "125i",
                "brand_id" => 1
            ],
            [
                "id" => 6,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "130i",
                "brand_id" => 1
            ],
            [
                "id" => 7,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "135i",
                "brand_id" => 1
            ],
            [
                "id" => 8,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "2002",
                "brand_id" => 1
            ],
            [
                "id" => 9,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "218i",
                "brand_id" => 1
            ],
            [
                "id" => 10,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "220i",
                "brand_id" => 1
            ],
            [
                "id" => 11,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "225i",
                "brand_id" => 1
            ],
            [
                "id" => 12,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "2800",
                "brand_id" => 1
            ],
            [
                "id" => 13,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "316i",
                "brand_id" => 1
            ],
            [
                "id" => 14,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "318i",
                "brand_id" => 1
            ],
            [
                "id" => 15,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "318iS",
                "brand_id" => 1
            ],
            [
                "id" => 16,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "318Ti",
                "brand_id" => 1
            ],
            [
                "id" => 17,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "320i",
                "brand_id" => 1
            ],
            [
                "id" => 18,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "323i",
                "brand_id" => 1
            ],
            [
                "id" => 19,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "323Ti",
                "brand_id" => 1
            ],
            [
                "id" => 20,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "325Ci",
                "brand_id" => 1
            ],
            [
                "id" => 21,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "325i",
                "brand_id" => 1
            ],
            [
                "id" => 22,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "328i",
                "brand_id" => 1
            ],
            [
                "id" => 23,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "330Ci",
                "brand_id" => 1
            ],
            [
                "id" => 24,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "330e",
                "brand_id" => 1
            ],
            [
                "id" => 25,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "330i",
                "brand_id" => 1
            ],
            [
                "id" => 26,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "335i",
                "brand_id" => 1
            ],
            [
                "id" => 27,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "420i",
                "brand_id" => 1
            ],
            [
                "id" => 28,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "428i",
                "brand_id" => 1
            ],
            [
                "id" => 29,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "430i",
                "brand_id" => 1
            ],
            [
                "id" => 30,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "435i",
                "brand_id" => 1
            ],
            [
                "id" => 31,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "523i",
                "brand_id" => 1
            ],
            [
                "id" => 32,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "525i",
                "brand_id" => 1
            ],
            [
                "id" => 33,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "528i",
                "brand_id" => 1
            ],
            [
                "id" => 34,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "530e",
                "brand_id" => 1
            ],
            [
                "id" => 35,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "530i",
                "brand_id" => 1
            ],
            [
                "id" => 36,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "535i",
                "brand_id" => 1
            ],
            [
                "id" => 37,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "540i",
                "brand_id" => 1
            ],
            [
                "id" => 38,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "545i",
                "brand_id" => 1
            ],
            [
                "id" => 39,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "550i",
                "brand_id" => 1
            ],
            [
                "id" => 40,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "633CSI",
                "brand_id" => 1
            ],
            [
                "id" => 41,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "640i",
                "brand_id" => 1
            ],
            [
                "id" => 42,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "645CI",
                "brand_id" => 1
            ],
            [
                "id" => 43,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "650i",
                "brand_id" => 1
            ],
            [
                "id" => 44,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "740i",
                "brand_id" => 1
            ],
            [
                "id" => 45,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "740Li",
                "brand_id" => 1
            ],
            [
                "id" => 46,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "745i",
                "brand_id" => 1
            ],
            [
                "id" => 47,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "745Le",
                "brand_id" => 1
            ],
            [
                "id" => 48,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "750i",
                "brand_id" => 1
            ],
            [
                "id" => 49,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "750Li",
                "brand_id" => 1
            ],
            [
                "id" => 50,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "760Li",
                "brand_id" => 1
            ],
            [
                "id" => 51,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "850Ci",
                "brand_id" => 1
            ],
            [
                "id" => 52,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "850i",
                "brand_id" => 1
            ],
            [
                "id" => 53,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "i3",
                "brand_id" => 1
            ],
            [
                "id" => 54,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "i8",
                "brand_id" => 1
            ],
            [
                "id" => 55,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M 135i",
                "brand_id" => 1
            ],
            [
                "id" => 56,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M 140i",
                "brand_id" => 1
            ],
            [
                "id" => 57,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M 235i",
                "brand_id" => 1
            ],
            [
                "id" => 58,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M 240i",
                "brand_id" => 1
            ],
            [
                "id" => 59,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M 340i",
                "brand_id" => 1
            ],
            [
                "id" => 60,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M 440i",
                "brand_id" => 1
            ],
            [
                "id" => 61,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M 760Li",
                "brand_id" => 1
            ],
            [
                "id" => 62,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M 850i",
                "brand_id" => 1
            ],
            [
                "id" => 63,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M2",
                "brand_id" => 1
            ],
            [
                "id" => 64,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M3",
                "brand_id" => 1
            ],
            [
                "id" => 65,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M4",
                "brand_id" => 1
            ],
            [
                "id" => 66,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M5",
                "brand_id" => 1
            ],
            [
                "id" => 67,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M6",
                "brand_id" => 1
            ],
            [
                "id" => 68,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "M8",
                "brand_id" => 1
            ],
            [
                "id" => 69,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "X1",
                "brand_id" => 1
            ],
            [
                "id" => 70,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "X2",
                "brand_id" => 1
            ],
            [
                "id" => 71,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "X3",
                "brand_id" => 1
            ],
            [
                "id" => 72,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "X4",
                "brand_id" => 1
            ],
            [
                "id" => 73,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "X5",
                "brand_id" => 1
            ],
            [
                "id" => 74,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "X6",
                "brand_id" => 1
            ],
            [
                "id" => 75,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "X7",
                "brand_id" => 1
            ],
            [
                "id" => 76,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Z3",
                "brand_id" => 1
            ],
            [
                "id" => 77,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "Z4",
                "brand_id" => 1
            ],
            [
                "id" => 78,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ARRIZO 5",
                "brand_id" => 2
            ],
            [
                "id" => 79,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ARRIZO 6",
                "brand_id" => 2
            ],
            [
                "id" => 80,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CELER",
                "brand_id" => 2
            ],
            [
                "id" => 81,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CIELO",
                "brand_id" => 2
            ],
            [
                "id" => 82,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FACE",
                "brand_id" => 2
            ],
            [
                "id" => 83,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "QQ",
                "brand_id" => 2
            ],
            [
                "id" => 84,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S-18",
                "brand_id" => 2
            ],
            [
                "id" => 85,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIGGO",
                "brand_id" => 2
            ],
            [
                "id" => 86,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIGGO 2",
                "brand_id" => 2
            ],
            [
                "id" => 87,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIGGO 3X",
                "brand_id" => 2
            ],
            [
                "id" => 88,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIGGO 5x",
                "brand_id" => 2
            ],
            [
                "id" => 89,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIGGO 7",
                "brand_id" => 2
            ],
            [
                "id" => 90,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIGGO 8",
                "brand_id" => 2
            ],
            [
                "id" => 91,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "3100",
                "brand_id" => 3
            ],
            [
                "id" => 92,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "A10",
                "brand_id" => 3
            ],
            [
                "id" => 93,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "A20",
                "brand_id" => 3
            ],
            [
                "id" => 94,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "AGILE",
                "brand_id" => 3
            ],
            [
                "id" => 95,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ASTRA",
                "brand_id" => 3
            ],
            [
                "id" => 96,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BEL AIR",
                "brand_id" => 3
            ],
            [
                "id" => 97,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BLAZER",
                "brand_id" => 3
            ],
            [
                "id" => 98,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BOLT",
                "brand_id" => 3
            ],
            [
                "id" => 99,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BONANZA",
                "brand_id" => 3
            ],
            [
                "id" => 100,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BRASIL",
                "brand_id" => 3
            ],
            [
                "id" => 101,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BRASINCA",
                "brand_id" => 3
            ],
            [
                "id" => 102,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C10",
                "brand_id" => 3
            ],
            [
                "id" => 103,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C14",
                "brand_id" => 3
            ],
            [
                "id" => 104,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C15",
                "brand_id" => 3
            ],
            [
                "id" => 105,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C20",
                "brand_id" => 3
            ],
            [
                "id" => 106,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CALIBRA",
                "brand_id" => 3
            ],
            [
                "id" => 107,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CAMARO",
                "brand_id" => 3
            ],
            [
                "id" => 108,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CAPRICE",
                "brand_id" => 3
            ],
            [
                "id" => 109,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CAPTIVA",
                "brand_id" => 3
            ],
            [
                "id" => 110,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CARAVAN",
                "brand_id" => 3
            ],
            [
                "id" => 111,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CELTA",
                "brand_id" => 3
            ],
            [
                "id" => 112,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CHEVELLE",
                "brand_id" => 3
            ],
            [
                "id" => 113,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CHEVETTE",
                "brand_id" => 3
            ],
            [
                "id" => 114,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CHEVY 500",
                "brand_id" => 3
            ],
            [
                "id" => 115,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLASSIC",
                "brand_id" => 3
            ],
            [
                "id" => 116,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "COBALT",
                "brand_id" => 3
            ],
            [
                "id" => 117,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CORSA",
                "brand_id" => 3
            ],
            [
                "id" => 118,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CORVETTE",
                "brand_id" => 3
            ],
            [
                "id" => 119,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CORVETTE GRAND SPORT",
                "brand_id" => 3
            ],
            [
                "id" => 120,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CRUZE",
                "brand_id" => 3
            ],
            [
                "id" => 121,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "D10",
                "brand_id" => 3
            ],
            [
                "id" => 122,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "D20",
                "brand_id" => 3
            ],
            [
                "id" => 123,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "D40",
                "brand_id" => 3
            ],
            [
                "id" => 124,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DE LUXE",
                "brand_id" => 3
            ],
            [
                "id" => 125,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "EL CAMINO",
                "brand_id" => 3
            ],
            [
                "id" => 126,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "EQUINOX",
                "brand_id" => 3
            ],
            [
                "id" => 127,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FLEETLINE",
                "brand_id" => 3
            ],
            [
                "id" => 128,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FLEETMASTER",
                "brand_id" => 3
            ],
            [
                "id" => 129,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GRAND BLAZER",
                "brand_id" => 3
            ],
            [
                "id" => 130,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "IMPALA",
                "brand_id" => 3
            ],
            [
                "id" => 131,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "IPANEMA",
                "brand_id" => 3
            ],
            [
                "id" => 132,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "JOY",
                "brand_id" => 3
            ],
            [
                "id" => 133,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "KADETT",
                "brand_id" => 3
            ],
            [
                "id" => 134,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MALIBU",
                "brand_id" => 3
            ],
            [
                "id" => 135,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MARAJÓ",
                "brand_id" => 3
            ],
            [
                "id" => 136,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MASTER",
                "brand_id" => 3
            ],
            [
                "id" => 137,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MERIVA",
                "brand_id" => 3
            ],
            [
                "id" => 138,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MONTANA",
                "brand_id" => 3
            ],
            [
                "id" => 139,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MONZA",
                "brand_id" => 3
            ],
            [
                "id" => 140,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "NOVA",
                "brand_id" => 3
            ],
            [
                "id" => 141,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "OMEGA",
                "brand_id" => 3
            ],
            [
                "id" => 142,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ONIX",
                "brand_id" => 3
            ],
            [
                "id" => 143,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "OPALA",
                "brand_id" => 3
            ],
            [
                "id" => 144,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PICKUP",
                "brand_id" => 3
            ],
            [
                "id" => 145,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PRISMA",
                "brand_id" => 3
            ],
            [
                "id" => 146,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RAMONA",
                "brand_id" => 3
            ],
            [
                "id" => 147,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S10",
                "brand_id" => 3
            ],
            [
                "id" => 148,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SILVERADO",
                "brand_id" => 3
            ],
            [
                "id" => 149,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SONIC",
                "brand_id" => 3
            ],
            [
                "id" => 150,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SPACE VAN",
                "brand_id" => 3
            ],
            [
                "id" => 151,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SPIN",
                "brand_id" => 3
            ],
            [
                "id" => 152,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SS",
                "brand_id" => 3
            ],
            [
                "id" => 153,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SSR",
                "brand_id" => 3
            ],
            [
                "id" => 154,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "STYLELINE",
                "brand_id" => 3
            ],
            [
                "id" => 155,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "STYLEMASTER",
                "brand_id" => 3
            ],
            [
                "id" => 156,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SUBURBAN",
                "brand_id" => 3
            ],
            [
                "id" => 157,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SUPREMA",
                "brand_id" => 3
            ],
            [
                "id" => 158,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TAHOE",
                "brand_id" => 3
            ],
            [
                "id" => 159,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIGRA",
                "brand_id" => 3
            ],
            [
                "id" => 160,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TRACKER",
                "brand_id" => 3
            ],
            [
                "id" => 161,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TRAILBLAZER",
                "brand_id" => 3
            ],
            [
                "id" => 162,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VECTRA",
                "brand_id" => 3
            ],
            [
                "id" => 163,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VEGA",
                "brand_id" => 3
            ],
            [
                "id" => 164,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VERANEIO",
                "brand_id" => 3
            ],
            [
                "id" => 165,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ZAFIRA",
                "brand_id" => 3
            ],
            [
                "id" => 166,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "AIRCROSS",
                "brand_id" => 4
            ],
            [
                "id" => 167,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "AX",
                "brand_id" => 4
            ],
            [
                "id" => 168,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BERLINGO",
                "brand_id" => 4
            ],
            [
                "id" => 169,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C3",
                "brand_id" => 4
            ],
            [
                "id" => 170,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C3 PICASSO",
                "brand_id" => 4
            ],
            [
                "id" => 171,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C3 SONORA",
                "brand_id" => 4
            ],
            [
                "id" => 172,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C4",
                "brand_id" => 4
            ],
            [
                "id" => 173,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C4 CACTUS",
                "brand_id" => 4
            ],
            [
                "id" => 174,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C4 GRAND PICASSO",
                "brand_id" => 4
            ],
            [
                "id" => 175,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C4 LOUNGE",
                "brand_id" => 4
            ],
            [
                "id" => 176,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C4 PICASSO",
                "brand_id" => 4
            ],
            [
                "id" => 177,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C5",
                "brand_id" => 4
            ],
            [
                "id" => 178,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C8",
                "brand_id" => 4
            ],
            [
                "id" => 179,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DS3",
                "brand_id" => 4
            ],
            [
                "id" => 180,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DS4",
                "brand_id" => 4
            ],
            [
                "id" => 181,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DS5",
                "brand_id" => 4
            ],
            [
                "id" => 182,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GRAND C4",
                "brand_id" => 4
            ],
            [
                "id" => 183,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "JUMPER",
                "brand_id" => 4
            ],
            [
                "id" => 184,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "JUMPY",
                "brand_id" => 4
            ],
            [
                "id" => 185,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "XANTIA",
                "brand_id" => 4
            ],
            [
                "id" => 186,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "XSARA",
                "brand_id" => 4
            ],
            [
                "id" => 187,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "XSARA PICASSO",
                "brand_id" => 4
            ],
            [
                "id" => 188,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ZX",
                "brand_id" => 4
            ],
            [
                "id" => 189,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "128",
                "brand_id" => 5
            ],
            [
                "id" => 190,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "147",
                "brand_id" => 5
            ],
            [
                "id" => 191,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "500",
                "brand_id" => 5
            ],
            [
                "id" => 192,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "500e",
                "brand_id" => 5
            ],
            [
                "id" => 193,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "600",
                "brand_id" => 5
            ],
            [
                "id" => 194,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ARGO",
                "brand_id" => 5
            ],
            [
                "id" => 195,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BRAVA",
                "brand_id" => 5
            ],
            [
                "id" => 196,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BRAVO",
                "brand_id" => 5
            ],
            [
                "id" => 197,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CINQUECENTO",
                "brand_id" => 5
            ],
            [
                "id" => 198,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "COUPÉ",
                "brand_id" => 5
            ],
            [
                "id" => 199,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CRONOS",
                "brand_id" => 5
            ],
            [
                "id" => 200,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DOBLÒ",
                "brand_id" => 5
            ],
            [
                "id" => 201,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DUCATO",
                "brand_id" => 5
            ],
            [
                "id" => 202,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ELBA",
                "brand_id" => 5
            ],
            [
                "id" => 203,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FIORINO",
                "brand_id" => 5
            ],
            [
                "id" => 204,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FREEMONT",
                "brand_id" => 5
            ],
            [
                "id" => 205,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GRAND SIENA",
                "brand_id" => 5
            ],
            [
                "id" => 206,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "IDEA",
                "brand_id" => 5
            ],
            [
                "id" => 207,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LINEA",
                "brand_id" => 5
            ],
            [
                "id" => 208,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MAREA",
                "brand_id" => 5
            ],
            [
                "id" => 209,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MOBI",
                "brand_id" => 5
            ],
            [
                "id" => 210,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "OGGI",
                "brand_id" => 5
            ],
            [
                "id" => 211,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PALIO",
                "brand_id" => 5
            ],
            [
                "id" => 212,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PREMIO",
                "brand_id" => 5
            ],
            [
                "id" => 213,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PUNTO",
                "brand_id" => 5
            ],
            [
                "id" => 214,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SIENA",
                "brand_id" => 5
            ],
            [
                "id" => 215,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SPAZIO",
                "brand_id" => 5
            ],
            [
                "id" => 216,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "STILO",
                "brand_id" => 5
            ],
            [
                "id" => 217,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "STRADA",
                "brand_id" => 5
            ],
            [
                "id" => 218,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TEMPRA",
                "brand_id" => 5
            ],
            [
                "id" => 219,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIPO",
                "brand_id" => 5
            ],
            [
                "id" => 220,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TORO",
                "brand_id" => 5
            ],
            [
                "id" => 221,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "UNO",
                "brand_id" => 5
            ],
            [
                "id" => 222,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "A",
                "brand_id" => 6
            ],
            [
                "id" => 223,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BELINA",
                "brand_id" => 6
            ],
            [
                "id" => 224,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BRONCO SPORT",
                "brand_id" => 6
            ],
            [
                "id" => 225,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CONSUL",
                "brand_id" => 6
            ],
            [
                "id" => 226,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CONTOUR",
                "brand_id" => 6
            ],
            [
                "id" => 227,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CORCEL",
                "brand_id" => 6
            ],
            [
                "id" => 228,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CORCEL II",
                "brand_id" => 6
            ],
            [
                "id" => 229,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "COURIER",
                "brand_id" => 6
            ],
            [
                "id" => 230,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CUPÊ",
                "brand_id" => 6
            ],
            [
                "id" => 231,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DEL REY",
                "brand_id" => 6
            ],
            [
                "id" => 232,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ECONOLINE",
                "brand_id" => 6
            ],
            [
                "id" => 233,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ECOSPORT",
                "brand_id" => 6
            ],
            [
                "id" => 234,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "EDGE",
                "brand_id" => 6
            ],
            [
                "id" => 235,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ESCORT",
                "brand_id" => 6
            ],
            [
                "id" => 236,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "EXPEDITION",
                "brand_id" => 6
            ],
            [
                "id" => 237,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "EXPLORER",
                "brand_id" => 6
            ],
            [
                "id" => 238,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "F-1",
                "brand_id" => 6
            ],
            [
                "id" => 239,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "F-100",
                "brand_id" => 6
            ],
            [
                "id" => 240,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "F-1000",
                "brand_id" => 6
            ],
            [
                "id" => 241,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "F-150",
                "brand_id" => 6
            ],
            [
                "id" => 242,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "F-250",
                "brand_id" => 6
            ],
            [
                "id" => 243,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "F-350",
                "brand_id" => 6
            ],
            [
                "id" => 244,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "F-4000",
                "brand_id" => 6
            ],
            [
                "id" => 245,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "F-75",
                "brand_id" => 6
            ],
            [
                "id" => 246,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "F-MAXX",
                "brand_id" => 6
            ],
            [
                "id" => 247,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FAIRLANE",
                "brand_id" => 6
            ],
            [
                "id" => 248,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FIESTA",
                "brand_id" => 6
            ],
            [
                "id" => 249,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FOCUS",
                "brand_id" => 6
            ],
            [
                "id" => 250,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FUSION",
                "brand_id" => 6
            ],
            [
                "id" => 251,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GALAXIE",
                "brand_id" => 6
            ],
            [
                "id" => 252,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "JEEP",
                "brand_id" => 6
            ],
            [
                "id" => 253,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "KA",
                "brand_id" => 6
            ],
            [
                "id" => 254,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "KA +",
                "brand_id" => 6
            ],
            [
                "id" => 255,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LANDAU",
                "brand_id" => 6
            ],
            [
                "id" => 256,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MAVERICK",
                "brand_id" => 6
            ],
            [
                "id" => 257,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MONDEO",
                "brand_id" => 6
            ],
            [
                "id" => 258,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MUSTANG",
                "brand_id" => 6
            ],
            [
                "id" => 259,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PAMPA",
                "brand_id" => 6
            ],
            [
                "id" => 260,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PHAETON",
                "brand_id" => 6
            ],
            [
                "id" => 261,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RANCHERO",
                "brand_id" => 6
            ],
            [
                "id" => 262,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RANGER",
                "brand_id" => 6
            ],
            [
                "id" => 263,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ROYALE",
                "brand_id" => 6
            ],
            [
                "id" => 264,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RURAL",
                "brand_id" => 6
            ],
            [
                "id" => 265,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "T",
                "brand_id" => 6
            ],
            [
                "id" => 266,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TAURUS",
                "brand_id" => 6
            ],
            [
                "id" => 267,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TERRITORY",
                "brand_id" => 6
            ],
            [
                "id" => 268,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "THUNDERBIRD",
                "brand_id" => 6
            ],
            [
                "id" => 269,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TORINO",
                "brand_id" => 6
            ],
            [
                "id" => 270,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TRANSIT",
                "brand_id" => 6
            ],
            [
                "id" => 271,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TUDOR",
                "brand_id" => 6
            ],
            [
                "id" => 272,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VAU",
                "brand_id" => 6
            ],
            [
                "id" => 273,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VERONA",
                "brand_id" => 6
            ],
            [
                "id" => 274,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VERSAILLES",
                "brand_id" => 6
            ],
            [
                "id" => 275,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VICTORIA",
                "brand_id" => 6
            ],
            [
                "id" => 276,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ACCORD",
                "brand_id" => 7
            ],
            [
                "id" => 277,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CITY",
                "brand_id" => 7
            ],
            [
                "id" => 278,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CIVIC",
                "brand_id" => 7
            ],
            [
                "id" => 279,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CRV",
                "brand_id" => 7
            ],
            [
                "id" => 280,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FIT",
                "brand_id" => 7
            ],
            [
                "id" => 281,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "HR-V",
                "brand_id" => 7
            ],
            [
                "id" => 282,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LEGEND",
                "brand_id" => 7
            ],
            [
                "id" => 283,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ODYSSEY",
                "brand_id" => 7
            ],
            [
                "id" => 284,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PRELUDE",
                "brand_id" => 7
            ],
            [
                "id" => 285,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "WR-V",
                "brand_id" => 7
            ],
            [
                "id" => 286,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ACCENT",
                "brand_id" => 8
            ],
            [
                "id" => 287,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ATOS",
                "brand_id" => 8
            ],
            [
                "id" => 288,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "AZERA",
                "brand_id" => 8
            ],
            [
                "id" => 289,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "COUPÊ",
                "brand_id" => 8
            ],
            [
                "id" => 290,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CRETA",
                "brand_id" => 8
            ],
            [
                "id" => 291,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ELANTRA",
                "brand_id" => 8
            ],
            [
                "id" => 292,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "EQUUS",
                "brand_id" => 8
            ],
            [
                "id" => 293,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GALLOPER",
                "brand_id" => 8
            ],
            [
                "id" => 294,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GENESIS",
                "brand_id" => 8
            ],
            [
                "id" => 295,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GRAND SANTA FÉ",
                "brand_id" => 8
            ],
            [
                "id" => 296,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "H100",
                "brand_id" => 8
            ],
            [
                "id" => 297,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "HB20",
                "brand_id" => 8
            ],
            [
                "id" => 298,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "HB20S",
                "brand_id" => 8
            ],
            [
                "id" => 299,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "HB20X",
                "brand_id" => 8
            ],
            [
                "id" => 300,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "HR",
                "brand_id" => 8
            ],
            [
                "id" => 301,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "I30",
                "brand_id" => 8
            ],
            [
                "id" => 302,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "I30 CW",
                "brand_id" => 8
            ],
            [
                "id" => 303,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "IX35",
                "brand_id" => 8
            ],
            [
                "id" => 304,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SANTA FÉ",
                "brand_id" => 8
            ],
            [
                "id" => 305,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SONATA",
                "brand_id" => 8
            ],
            [
                "id" => 306,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TERRACAN",
                "brand_id" => 8
            ],
            [
                "id" => 307,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIBURON",
                "brand_id" => 8
            ],
            [
                "id" => 308,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TUCSON",
                "brand_id" => 8
            ],
            [
                "id" => 309,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VELOSTER",
                "brand_id" => 8
            ],
            [
                "id" => 310,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VERACRUZ",
                "brand_id" => 8
            ],
            [
                "id" => 311,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CHEROKEE",
                "brand_id" => 9
            ],
            [
                "id" => 312,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CJ 5",
                "brand_id" => 9
            ],
            [
                "id" => 313,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CJ 6",
                "brand_id" => 9
            ],
            [
                "id" => 314,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "COMMANDER",
                "brand_id" => 9
            ],
            [
                "id" => 315,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "COMPASS",
                "brand_id" => 9
            ],
            [
                "id" => 316,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GRAND CHEROKEE",
                "brand_id" => 9
            ],
            [
                "id" => 317,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LIBERTY",
                "brand_id" => 9
            ],
            [
                "id" => 318,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RENEGADE",
                "brand_id" => 9
            ],
            [
                "id" => 319,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "WRANGLER",
                "brand_id" => 9
            ],
            [
                "id" => 320,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BESTA",
                "brand_id" => 10
            ],
            [
                "id" => 321,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BONGO",
                "brand_id" => 10
            ],
            [
                "id" => 322,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CADENZA",
                "brand_id" => 10
            ],
            [
                "id" => 323,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CARENS",
                "brand_id" => 10
            ],
            [
                "id" => 324,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CARNIVAL",
                "brand_id" => 10
            ],
            [
                "id" => 325,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CERATO",
                "brand_id" => 10
            ],
            [
                "id" => 326,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLARUS",
                "brand_id" => 10
            ],
            [
                "id" => 327,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MAGENTIS",
                "brand_id" => 10
            ],
            [
                "id" => 328,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MOHAVE",
                "brand_id" => 10
            ],
            [
                "id" => 329,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "OPIRUS",
                "brand_id" => 10
            ],
            [
                "id" => 330,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "OPTIMA",
                "brand_id" => 10
            ],
            [
                "id" => 331,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PICANTO",
                "brand_id" => 10
            ],
            [
                "id" => 332,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "QUORIS",
                "brand_id" => 10
            ],
            [
                "id" => 333,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RIO",
                "brand_id" => 10
            ],
            [
                "id" => 334,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SORENTO",
                "brand_id" => 10
            ],
            [
                "id" => 335,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SOUL",
                "brand_id" => 10
            ],
            [
                "id" => 336,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SPORTAGE",
                "brand_id" => 10
            ],
            [
                "id" => 337,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "STINGER",
                "brand_id" => 10
            ],
            [
                "id" => 338,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DEFENDER",
                "brand_id" => 11
            ],
            [
                "id" => 339,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DISCOVERY",
                "brand_id" => 11
            ],
            [
                "id" => 340,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DISCOVERY 2",
                "brand_id" => 11
            ],
            [
                "id" => 341,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DISCOVERY 3",
                "brand_id" => 11
            ],
            [
                "id" => 342,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DISCOVERY 4",
                "brand_id" => 11
            ],
            [
                "id" => 343,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DISCOVERY SPORT",
                "brand_id" => 11
            ],
            [
                "id" => 344,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FREELANDER",
                "brand_id" => 11
            ],
            [
                "id" => 345,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FREELANDER 2",
                "brand_id" => 11
            ],
            [
                "id" => 346,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RANGE ROVER",
                "brand_id" => 11
            ],
            [
                "id" => 347,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RANGE ROVER EVOQUE",
                "brand_id" => 11
            ],
            [
                "id" => 348,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RANGE ROVER SPORT",
                "brand_id" => 11
            ],
            [
                "id" => 349,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RANGE ROVER VELAR",
                "brand_id" => 11
            ],
            [
                "id" => 350,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RANGE ROVER VOGUE",
                "brand_id" => 11
            ],
            [
                "id" => 351,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SERIES I",
                "brand_id" => 11
            ],
            [
                "id" => 352,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "170 S",
                "brand_id" => 12
            ],
            [
                "id" => 353,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "190 E",
                "brand_id" => 12
            ],
            [
                "id" => 354,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "200",
                "brand_id" => 12
            ],
            [
                "id" => 355,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "200 D",
                "brand_id" => 12
            ],
            [
                "id" => 356,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "220",
                "brand_id" => 12
            ],
            [
                "id" => 357,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "220 D",
                "brand_id" => 12
            ],
            [
                "id" => 358,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "220 S",
                "brand_id" => 12
            ],
            [
                "id" => 359,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "230",
                "brand_id" => 12
            ],
            [
                "id" => 360,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "230 E",
                "brand_id" => 12
            ],
            [
                "id" => 361,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "230 S",
                "brand_id" => 12
            ],
            [
                "id" => 362,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "240 D",
                "brand_id" => 12
            ],
            [
                "id" => 363,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "250",
                "brand_id" => 12
            ],
            [
                "id" => 364,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "250 C",
                "brand_id" => 12
            ],
            [
                "id" => 365,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "250 SE",
                "brand_id" => 12
            ],
            [
                "id" => 366,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "260 E",
                "brand_id" => 12
            ],
            [
                "id" => 367,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "260 SE",
                "brand_id" => 12
            ],
            [
                "id" => 368,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "280 CE",
                "brand_id" => 12
            ],
            [
                "id" => 369,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "280 S",
                "brand_id" => 12
            ],
            [
                "id" => 370,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "280 SE",
                "brand_id" => 12
            ],
            [
                "id" => 371,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "280 SL",
                "brand_id" => 12
            ],
            [
                "id" => 372,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "280 SLC",
                "brand_id" => 12
            ],
            [
                "id" => 373,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "300 D",
                "brand_id" => 12
            ],
            [
                "id" => 374,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "300 E",
                "brand_id" => 12
            ],
            [
                "id" => 375,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "300 SE",
                "brand_id" => 12
            ],
            [
                "id" => 376,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "300 SEL",
                "brand_id" => 12
            ],
            [
                "id" => 377,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "320 E",
                "brand_id" => 12
            ],
            [
                "id" => 378,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "350 SL",
                "brand_id" => 12
            ],
            [
                "id" => 379,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "350 SLC",
                "brand_id" => 12
            ],
            [
                "id" => 380,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "380 SL",
                "brand_id" => 12
            ],
            [
                "id" => 381,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "450 SL",
                "brand_id" => 12
            ],
            [
                "id" => 382,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "500 SE",
                "brand_id" => 12
            ],
            [
                "id" => 383,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "500 SEC",
                "brand_id" => 12
            ],
            [
                "id" => 384,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "500 SEL",
                "brand_id" => 12
            ],
            [
                "id" => 385,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "500 SL",
                "brand_id" => 12
            ],
            [
                "id" => 386,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "560 SL",
                "brand_id" => 12
            ],
            [
                "id" => 387,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "A 160",
                "brand_id" => 12
            ],
            [
                "id" => 388,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "A 190",
                "brand_id" => 12
            ],
            [
                "id" => 389,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "A 200",
                "brand_id" => 12
            ],
            [
                "id" => 390,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "A 250",
                "brand_id" => 12
            ],
            [
                "id" => 391,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "A 35 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 392,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "A 45 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 393,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "AMG GT",
                "brand_id" => 12
            ],
            [
                "id" => 394,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "AMG GT 43",
                "brand_id" => 12
            ],
            [
                "id" => 395,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "AMG GT 63",
                "brand_id" => 12
            ],
            [
                "id" => 396,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "B 170",
                "brand_id" => 12
            ],
            [
                "id" => 397,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "B 180",
                "brand_id" => 12
            ],
            [
                "id" => 398,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "B 200",
                "brand_id" => 12
            ],
            [
                "id" => 399,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 180",
                "brand_id" => 12
            ],
            [
                "id" => 400,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 180 K",
                "brand_id" => 12
            ],
            [
                "id" => 401,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 200",
                "brand_id" => 12
            ],
            [
                "id" => 402,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 200 K",
                "brand_id" => 12
            ],
            [
                "id" => 403,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 220",
                "brand_id" => 12
            ],
            [
                "id" => 404,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 230",
                "brand_id" => 12
            ],
            [
                "id" => 405,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 230 K",
                "brand_id" => 12
            ],
            [
                "id" => 406,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 240",
                "brand_id" => 12
            ],
            [
                "id" => 407,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 250",
                "brand_id" => 12
            ],
            [
                "id" => 408,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 280",
                "brand_id" => 12
            ],
            [
                "id" => 409,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 300",
                "brand_id" => 12
            ],
            [
                "id" => 410,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 320",
                "brand_id" => 12
            ],
            [
                "id" => 411,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 350",
                "brand_id" => 12
            ],
            [
                "id" => 412,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 43 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 413,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 450",
                "brand_id" => 12
            ],
            [
                "id" => 414,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 415,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CL 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 416,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLA 180",
                "brand_id" => 12
            ],
            [
                "id" => 417,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLA 200",
                "brand_id" => 12
            ],
            [
                "id" => 418,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLA 250",
                "brand_id" => 12
            ],
            [
                "id" => 419,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLA 35 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 420,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLA 45 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 421,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLASSE A",
                "brand_id" => 12
            ],
            [
                "id" => 422,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLC 200",
                "brand_id" => 12
            ],
            [
                "id" => 423,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLC 200 K",
                "brand_id" => 12
            ],
            [
                "id" => 424,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLK 230",
                "brand_id" => 12
            ],
            [
                "id" => 425,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLK 320",
                "brand_id" => 12
            ],
            [
                "id" => 426,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLK 430",
                "brand_id" => 12
            ],
            [
                "id" => 427,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLK 500",
                "brand_id" => 12
            ],
            [
                "id" => 428,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLS 350",
                "brand_id" => 12
            ],
            [
                "id" => 429,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLS 400",
                "brand_id" => 12
            ],
            [
                "id" => 430,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLS 450",
                "brand_id" => 12
            ],
            [
                "id" => 431,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLS 500",
                "brand_id" => 12
            ],
            [
                "id" => 432,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLS 53 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 433,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLS 55 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 434,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLS 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 435,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 220",
                "brand_id" => 12
            ],
            [
                "id" => 436,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 240",
                "brand_id" => 12
            ],
            [
                "id" => 437,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 250",
                "brand_id" => 12
            ],
            [
                "id" => 438,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 300",
                "brand_id" => 12
            ],
            [
                "id" => 439,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 320",
                "brand_id" => 12
            ],
            [
                "id" => 440,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 350",
                "brand_id" => 12
            ],
            [
                "id" => 441,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 400",
                "brand_id" => 12
            ],
            [
                "id" => 442,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 420",
                "brand_id" => 12
            ],
            [
                "id" => 443,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 43 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 444,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 430",
                "brand_id" => 12
            ],
            [
                "id" => 445,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 500",
                "brand_id" => 12
            ],
            [
                "id" => 446,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 53 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 447,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 55 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 448,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 550",
                "brand_id" => 12
            ],
            [
                "id" => 449,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "E 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 450,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "EQC 400",
                "brand_id" => 12
            ],
            [
                "id" => 451,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "G 55 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 452,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "G 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 453,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GL 350",
                "brand_id" => 12
            ],
            [
                "id" => 454,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GL 500",
                "brand_id" => 12
            ],
            [
                "id" => 455,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GL 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 456,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLA 200",
                "brand_id" => 12
            ],
            [
                "id" => 457,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLA 250",
                "brand_id" => 12
            ],
            [
                "id" => 458,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLA 45 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 459,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLB 200",
                "brand_id" => 12
            ],
            [
                "id" => 460,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLC 220d",
                "brand_id" => 12
            ],
            [
                "id" => 461,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLC 250",
                "brand_id" => 12
            ],
            [
                "id" => 462,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLC 300",
                "brand_id" => 12
            ],
            [
                "id" => 463,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLC 43 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 464,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLC 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 465,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLE 350",
                "brand_id" => 12
            ],
            [
                "id" => 466,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLE 400",
                "brand_id" => 12
            ],
            [
                "id" => 467,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLE 400d",
                "brand_id" => 12
            ],
            [
                "id" => 468,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLE 43 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 469,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLE 450",
                "brand_id" => 12
            ],
            [
                "id" => 470,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLE 53 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 471,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLE 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 472,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLK 220",
                "brand_id" => 12
            ],
            [
                "id" => 473,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLK 280",
                "brand_id" => 12
            ],
            [
                "id" => 474,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLK 300",
                "brand_id" => 12
            ],
            [
                "id" => 475,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLS 350",
                "brand_id" => 12
            ],
            [
                "id" => 476,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLS 450",
                "brand_id" => 12
            ],
            [
                "id" => 477,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GLS 500",
                "brand_id" => 12
            ],
            [
                "id" => 478,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MICROÔNIBUS",
                "brand_id" => 12
            ],
            [
                "id" => 479,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ML 320",
                "brand_id" => 12
            ],
            [
                "id" => 480,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ML 350",
                "brand_id" => 12
            ],
            [
                "id" => 481,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ML 430",
                "brand_id" => 12
            ],
            [
                "id" => 482,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ML 500",
                "brand_id" => 12
            ],
            [
                "id" => 483,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ML 55 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 484,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ML 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 485,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "R 500",
                "brand_id" => 12
            ],
            [
                "id" => 486,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S 320",
                "brand_id" => 12
            ],
            [
                "id" => 487,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S 400",
                "brand_id" => 12
            ],
            [
                "id" => 488,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S 500",
                "brand_id" => 12
            ],
            [
                "id" => 489,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S 500 L",
                "brand_id" => 12
            ],
            [
                "id" => 490,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S 560",
                "brand_id" => 12
            ],
            [
                "id" => 491,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S 600",
                "brand_id" => 12
            ],
            [
                "id" => 492,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 493,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S 65 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 494,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SL 320",
                "brand_id" => 12
            ],
            [
                "id" => 495,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SL 350",
                "brand_id" => 12
            ],
            [
                "id" => 496,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SL 400",
                "brand_id" => 12
            ],
            [
                "id" => 497,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SL 500",
                "brand_id" => 12
            ],
            [
                "id" => 498,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SL 55 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 499,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SL 600",
                "brand_id" => 12
            ],
            [
                "id" => 500,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SL 63 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 501,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SLC 300",
                "brand_id" => 12
            ],
            [
                "id" => 502,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SLC 43 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 503,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SLK 200",
                "brand_id" => 12
            ],
            [
                "id" => 504,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SLK 230",
                "brand_id" => 12
            ],
            [
                "id" => 505,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SLK 250",
                "brand_id" => 12
            ],
            [
                "id" => 506,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SLK 300",
                "brand_id" => 12
            ],
            [
                "id" => 507,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SLK 320",
                "brand_id" => 12
            ],
            [
                "id" => 508,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SLK 350",
                "brand_id" => 12
            ],
            [
                "id" => 509,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SLK 55 AMG",
                "brand_id" => 12
            ],
            [
                "id" => 510,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SLS AMG",
                "brand_id" => 12
            ],
            [
                "id" => 511,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SPRINTER",
                "brand_id" => 12
            ],
            [
                "id" => 512,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VITO",
                "brand_id" => 12
            ],
            [
                "id" => 513,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "3000 GT",
                "brand_id" => 13
            ],
            [
                "id" => 514,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "AIRTREK",
                "brand_id" => 13
            ],
            [
                "id" => 515,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ASX",
                "brand_id" => 13
            ],
            [
                "id" => 516,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "COLT",
                "brand_id" => 13
            ],
            [
                "id" => 517,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ECLIPSE",
                "brand_id" => 13
            ],
            [
                "id" => 518,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ECLIPSE CROSS",
                "brand_id" => 13
            ],
            [
                "id" => 519,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GALANT",
                "brand_id" => 13
            ],
            [
                "id" => 520,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GRANDIS",
                "brand_id" => 13
            ],
            [
                "id" => 521,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "L200",
                "brand_id" => 13
            ],
            [
                "id" => 522,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "L200 OUTDOOR",
                "brand_id" => 13
            ],
            [
                "id" => 523,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "L200 SAVANA",
                "brand_id" => 13
            ],
            [
                "id" => 524,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "L200 TRITON",
                "brand_id" => 13
            ],
            [
                "id" => 525,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "L300",
                "brand_id" => 13
            ],
            [
                "id" => 526,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LANCER",
                "brand_id" => 13
            ],
            [
                "id" => 527,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "OUTLANDER",
                "brand_id" => 13
            ],
            [
                "id" => 528,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "OUTLANDER SPORT",
                "brand_id" => 13
            ],
            [
                "id" => 529,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PAJERO",
                "brand_id" => 13
            ],
            [
                "id" => 530,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PAJERO DAKAR",
                "brand_id" => 13
            ],
            [
                "id" => 531,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PAJERO FULL",
                "brand_id" => 13
            ],
            [
                "id" => 532,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PAJERO IO",
                "brand_id" => 13
            ],
            [
                "id" => 533,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PAJERO SPORT",
                "brand_id" => 13
            ],
            [
                "id" => 534,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PAJERO TR4",
                "brand_id" => 13
            ],
            [
                "id" => 535,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SPACE WAGON",
                "brand_id" => 13
            ],
            [
                "id" => 536,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SAGA",
                "brand_id" => 14
            ],
            [
                "id" => 537,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SPORT",
                "brand_id" => 14
            ],
            [
                "id" => 538,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "300 ZX",
                "brand_id" => 15
            ],
            [
                "id" => 539,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "350Z",
                "brand_id" => 15
            ],
            [
                "id" => 540,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "370Z",
                "brand_id" => 15
            ],
            [
                "id" => 541,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ALTIMA",
                "brand_id" => 15
            ],
            [
                "id" => 542,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ARMADA",
                "brand_id" => 15
            ],
            [
                "id" => 543,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FRONTIER",
                "brand_id" => 15
            ],
            [
                "id" => 544,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GRAND LIVINA",
                "brand_id" => 15
            ],
            [
                "id" => 545,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GT-R",
                "brand_id" => 15
            ],
            [
                "id" => 546,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "INFINITI",
                "brand_id" => 15
            ],
            [
                "id" => 547,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "JUKE",
                "brand_id" => 15
            ],
            [
                "id" => 548,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "KICKS",
                "brand_id" => 15
            ],
            [
                "id" => 549,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LEAF",
                "brand_id" => 15
            ],
            [
                "id" => 550,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LIVINA",
                "brand_id" => 15
            ],
            [
                "id" => 551,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MARCH",
                "brand_id" => 15
            ],
            [
                "id" => 552,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MAXIMA",
                "brand_id" => 15
            ],
            [
                "id" => 553,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MURANO",
                "brand_id" => 15
            ],
            [
                "id" => 554,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PATHFINDER",
                "brand_id" => 15
            ],
            [
                "id" => 555,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PICK-UP",
                "brand_id" => 15
            ],
            [
                "id" => 556,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "QUEST",
                "brand_id" => 15
            ],
            [
                "id" => 557,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SENTRA",
                "brand_id" => 15
            ],
            [
                "id" => 558,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIIDA",
                "brand_id" => 15
            ],
            [
                "id" => 559,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VERSA",
                "brand_id" => 15
            ],
            [
                "id" => 560,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "X-TRAIL",
                "brand_id" => 15
            ],
            [
                "id" => 561,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "XTERRA",
                "brand_id" => 15
            ],
            [
                "id" => 562,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "2008",
                "brand_id" => 16
            ],
            [
                "id" => 563,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "206",
                "brand_id" => 16
            ],
            [
                "id" => 564,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "207",
                "brand_id" => 16
            ],
            [
                "id" => 565,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "208",
                "brand_id" => 16
            ],
            [
                "id" => 566,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "3008",
                "brand_id" => 16
            ],
            [
                "id" => 567,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "306",
                "brand_id" => 16
            ],
            [
                "id" => 568,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "307",
                "brand_id" => 16
            ],
            [
                "id" => 569,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "308",
                "brand_id" => 16
            ],
            [
                "id" => 570,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "308cc",
                "brand_id" => 16
            ],
            [
                "id" => 571,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "406",
                "brand_id" => 16
            ],
            [
                "id" => 572,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "407",
                "brand_id" => 16
            ],
            [
                "id" => 573,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "408",
                "brand_id" => 16
            ],
            [
                "id" => 574,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "5008",
                "brand_id" => 16
            ],
            [
                "id" => 575,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "508",
                "brand_id" => 16
            ],
            [
                "id" => 576,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BOXER",
                "brand_id" => 16
            ],
            [
                "id" => 577,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "EXPERT",
                "brand_id" => 16
            ],
            [
                "id" => 578,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "HOGGAR",
                "brand_id" => 16
            ],
            [
                "id" => 579,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PARTNER",
                "brand_id" => 16
            ],
            [
                "id" => 580,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RCZ",
                "brand_id" => 16
            ],
            [
                "id" => 581,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "19",
                "brand_id" => 17
            ],
            [
                "id" => 582,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CAPTUR",
                "brand_id" => 17
            ],
            [
                "id" => 583,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CLIO",
                "brand_id" => 17
            ],
            [
                "id" => 584,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DUSTER",
                "brand_id" => 17
            ],
            [
                "id" => 585,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "DUSTER OROCH",
                "brand_id" => 17
            ],
            [
                "id" => 586,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FLUENCE",
                "brand_id" => 17
            ],
            [
                "id" => 587,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GRAND SCÉNIC",
                "brand_id" => 17
            ],
            [
                "id" => 588,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "JUVAQUATRE",
                "brand_id" => 17
            ],
            [
                "id" => 589,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "KANGOO",
                "brand_id" => 17
            ],
            [
                "id" => 590,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "KWID",
                "brand_id" => 17
            ],
            [
                "id" => 591,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LAGUNA",
                "brand_id" => 17
            ],
            [
                "id" => 592,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LOGAN",
                "brand_id" => 17
            ],
            [
                "id" => 593,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MASTER",
                "brand_id" => 17
            ],
            [
                "id" => 594,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "MÉGANE",
                "brand_id" => 17
            ],
            [
                "id" => 595,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SANDERO",
                "brand_id" => 17
            ],
            [
                "id" => 596,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SCÉNIC",
                "brand_id" => 17
            ],
            [
                "id" => 597,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SYMBOL",
                "brand_id" => 17
            ],
            [
                "id" => 598,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TRAFIC",
                "brand_id" => 17
            ],
            [
                "id" => 599,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TWINGO",
                "brand_id" => 17
            ],
            [
                "id" => 600,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ZOE",
                "brand_id" => 17
            ],
            [
                "id" => 601,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GRAND VITARA",
                "brand_id" => 18
            ],
            [
                "id" => 602,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "JIMNY",
                "brand_id" => 18
            ],
            [
                "id" => 603,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S-CROSS",
                "brand_id" => 18
            ],
            [
                "id" => 604,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SAMURAI",
                "brand_id" => 18
            ],
            [
                "id" => 605,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SIDEKICK",
                "brand_id" => 18
            ],
            [
                "id" => 606,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SWIFT",
                "brand_id" => 18
            ],
            [
                "id" => 607,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SX4",
                "brand_id" => 18
            ],
            [
                "id" => 608,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VITARA",
                "brand_id" => 18
            ],
            [
                "id" => 609,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BANDEIRANTE",
                "brand_id" => 19
            ],
            [
                "id" => 610,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CAMRY",
                "brand_id" => 19
            ],
            [
                "id" => 611,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "COROLLA",
                "brand_id" => 19
            ],
            [
                "id" => 612,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "COROLLA CROSS",
                "brand_id" => 19
            ],
            [
                "id" => 613,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CORONA",
                "brand_id" => 19
            ],
            [
                "id" => 614,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ETIOS",
                "brand_id" => 19
            ],
            [
                "id" => 615,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "ETIOS CROSS",
                "brand_id" => 19
            ],
            [
                "id" => 616,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FIELDER",
                "brand_id" => 19
            ],
            [
                "id" => 617,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FJ CRUISER",
                "brand_id" => 19
            ],
            [
                "id" => 618,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "HIGHLANDER",
                "brand_id" => 19
            ],
            [
                "id" => 619,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "HILUX",
                "brand_id" => 19
            ],
            [
                "id" => 620,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "HILUX SW4",
                "brand_id" => 19
            ],
            [
                "id" => 621,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LAND CRUISER PRADO",
                "brand_id" => 19
            ],
            [
                "id" => 622,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PASEO",
                "brand_id" => 19
            ],
            [
                "id" => 623,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PRIUS",
                "brand_id" => 19
            ],
            [
                "id" => 624,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "RAV4",
                "brand_id" => 19
            ],
            [
                "id" => 625,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SIENNA",
                "brand_id" => 19
            ],
            [
                "id" => 626,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SUPRA",
                "brand_id" => 19
            ],
            [
                "id" => 627,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TUNDRA",
                "brand_id" => 19
            ],
            [
                "id" => 628,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VENZA",
                "brand_id" => 19
            ],
            [
                "id" => 629,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "YARIS",
                "brand_id" => 19
            ],
            [
                "id" => 630,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "1300",
                "brand_id" => 20
            ],
            [
                "id" => 631,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "1600",
                "brand_id" => 20
            ],
            [
                "id" => 632,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "AMAROK",
                "brand_id" => 20
            ],
            [
                "id" => 633,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "APOLLO",
                "brand_id" => 20
            ],
            [
                "id" => 634,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BORA",
                "brand_id" => 20
            ],
            [
                "id" => 635,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BRASILIA",
                "brand_id" => 20
            ],
            [
                "id" => 636,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "BUGGY",
                "brand_id" => 20
            ],
            [
                "id" => 637,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CROSS UP",
                "brand_id" => 20
            ],
            [
                "id" => 638,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "CROSSFOX",
                "brand_id" => 20
            ],
            [
                "id" => 639,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "EOS",
                "brand_id" => 20
            ],
            [
                "id" => 640,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "EUROVAN",
                "brand_id" => 20
            ],
            [
                "id" => 641,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FOX",
                "brand_id" => 20
            ],
            [
                "id" => 642,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "FUSCA",
                "brand_id" => 20
            ],
            [
                "id" => 643,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GOL",
                "brand_id" => 20
            ],
            [
                "id" => 644,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "GOLF",
                "brand_id" => 20
            ],
            [
                "id" => 645,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "JETTA",
                "brand_id" => 20
            ],
            [
                "id" => 646,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "KARMANN-GHIA",
                "brand_id" => 20
            ],
            [
                "id" => 647,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "KOMBI",
                "brand_id" => 20
            ],
            [
                "id" => 648,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "LOGUS",
                "brand_id" => 20
            ],
            [
                "id" => 649,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "NEW BEETLE",
                "brand_id" => 20
            ],
            [
                "id" => 650,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "NIVUS",
                "brand_id" => 20
            ],
            [
                "id" => 651,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PARATI",
                "brand_id" => 20
            ],
            [
                "id" => 652,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PASSAT",
                "brand_id" => 20
            ],
            [
                "id" => 653,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "PASSAT VARIANT",
                "brand_id" => 20
            ],
            [
                "id" => 654,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "POINTER",
                "brand_id" => 20
            ],
            [
                "id" => 655,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "POLO",
                "brand_id" => 20
            ],
            [
                "id" => 656,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "POLO SEDAN",
                "brand_id" => 20
            ],
            [
                "id" => 657,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "QUANTUM",
                "brand_id" => 20
            ],
            [
                "id" => 658,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SANTANA",
                "brand_id" => 20
            ],
            [
                "id" => 659,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SAVEIRO",
                "brand_id" => 20
            ],
            [
                "id" => 660,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SP2",
                "brand_id" => 20
            ],
            [
                "id" => 661,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SPACE CROSS",
                "brand_id" => 20
            ],
            [
                "id" => 662,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "SPACEFOX",
                "brand_id" => 20
            ],
            [
                "id" => 663,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "T-CROSS",
                "brand_id" => 20
            ],
            [
                "id" => 664,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TAOS",
                "brand_id" => 20
            ],
            [
                "id" => 665,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TIGUAN",
                "brand_id" => 20
            ],
            [
                "id" => 666,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TL",
                "brand_id" => 20
            ],
            [
                "id" => 667,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "TOUAREG",
                "brand_id" => 20
            ],
            [
                "id" => 668,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "UP",
                "brand_id" => 20
            ],
            [
                "id" => 669,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VARIANT",
                "brand_id" => 20
            ],
            [
                "id" => 670,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VARIANT II",
                "brand_id" => 20
            ],
            [
                "id" => 671,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VIRTUS",
                "brand_id" => 20
            ],
            [
                "id" => 672,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "VOYAGE",
                "brand_id" => 20
            ],
            [
                "id" => 673,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "850",
                "brand_id" => 21
            ],
            [
                "id" => 674,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "940",
                "brand_id" => 21
            ],
            [
                "id" => 675,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "960",
                "brand_id" => 21
            ],
            [
                "id" => 676,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C30",
                "brand_id" => 21
            ],
            [
                "id" => 677,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "C70",
                "brand_id" => 21
            ],
            [
                "id" => 678,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S40",
                "brand_id" => 21
            ],
            [
                "id" => 679,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S60",
                "brand_id" => 21
            ],
            [
                "id" => 680,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S70",
                "brand_id" => 21
            ],
            [
                "id" => 681,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S80",
                "brand_id" => 21
            ],
            [
                "id" => 682,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "S90",
                "brand_id" => 21
            ],
            [
                "id" => 683,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "V40",
                "brand_id" => 21
            ],
            [
                "id" => 684,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "V50",
                "brand_id" => 21
            ],
            [
                "id" => 685,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "V60",
                "brand_id" => 21
            ],
            [
                "id" => 686,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "V70",
                "brand_id" => 21
            ],
            [
                "id" => 687,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "XC40",
                "brand_id" => 21
            ],
            [
                "id" => 688,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "XC60",
                "brand_id" => 21
            ],
            [
                "id" => 689,
                "uuid" => Uuid::getFactory()->uuid4(),
                "name" => "XC90",
                "brand_id" => 21
            ]
        ];

        foreach ($modelVehicles as $modelVehicle) {
            VehicleModel::insert($modelVehicle);
        }
    }
}
