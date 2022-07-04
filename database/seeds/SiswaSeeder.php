<?php

use Illuminate\Database\Seeder;
use App\Model\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'nis' => '0084604092',
            'nama' => 'Amandha Shafa Nabila',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Magelang',
            'tgl_lahir' => ' 2010-01-06',
            'email' => 'shafa@gmail.com',
            'nama_ortu' => 'Susi Bintoro',
            'alamat' => 'Grabag',
            'phone_number' => '08579876545',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0085604872',
            'nama' => 'Venia Almira',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Magelang',
            'tgl_lahir' => '2010-05-28',
            'email' => 'venia@gmail.com',
            'nama_ortu' => 'Eko Marsono',
            'alamat' => 'Pancaarga',
            'phone_number' => '085674231908',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0089564534',
            'nama' => 'Nebula Bulan',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Tangerang',
            'tgl_lahir' => '2011-02-10',
            'email' => 'bula@gmail.com',
            'nama_ortu' => 'Reyhan Adiwongso',
            'alamat' => 'Mertoyudan',
            'phone_number' => '089678900345',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0089067235',
            'nama' => 'Galaksi Muneer',
            'gender' => 'laki-laki',
            'tempat_lahir' => 'Bekasi',
            'tgl_lahir' => '2010-10-23',
            'email' => 'galaksi@gmail.com',
            'nama_ortu' => 'Adi Suseno',
            'alamat' => 'Pakelan',
            'phone_number' => '085421765411',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0087654334',
            'nama' => 'Kaivan Pratama',
            'gender' => 'laki-laki',
            'tempat_lahir' => 'Magelang',
            'tgl_lahir' => '2011-04-23',
            'email' => 'kaivanp@gmail.com',
            'nama_ortu' => 'Pangestu',
            'alamat' => 'Secang',
            'phone_number' => '089756890788',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0078902345',
            'nama' => 'Allesya Adinda',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Magelang',
            'tgl_lahir' => '2010-02-26',
            'email' => 'Alles@gmail.com',
            'nama_ortu' => 'Prabu Aji',
            'alamat' => 'Menowo',
            'phone_number' => '087456890146',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0089673452',
            'nama' => 'Kevin Digo',
            'gender' => 'laki-laki',
            'tempat_lahir' => 'Bandung',
            'tgl_lahir' => '2010-06-13',
            'email' => 'kvndg@gmail.com',
            'nama_ortu' => 'Pandu Putra',
            'alamat' => 'Potrobangsan',
            'phone_number' => '086742331890',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0087564521',
            'nama' => 'Clarissa Ardhita',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Bandung',
            'tgl_lahir' => '2009-12-04',
            'email' => 'claar@gmail.com',
            'nama_ortu' => 'Rudi Hartono',
            'alamat' => 'Pakelan',
            'phone_number' => '082234567012',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0086567823',
            'nama' => 'Ghea Ananda',
            'gender' => 'laki-laki',
            'tempat_lahir' => 'Bandung',
            'tgl_lahir' => '2010-08-17',
            'email' => 'ghenda@gmail.com',
            'nama_ortu' => 'Adi Diraja',
            'alamat' => 'Mertoyudan',
            'phone_number' => '086256789140',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0067802347',
            'nama' => 'Viona Ledy',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Bekasi',
            'tgl_lahir' => '2010-05-03',
            'email' => 'onah@gmail.com',
            'nama_ortu' => 'Adiraja Adiguna',
            'alamat' => 'JurangOmbo',
            'phone_number' => '082568901445',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0076891245',
            'nama' => 'Anggun Citrasari',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Cimahi',
            'tgl_lahir' => '2009-09-07',
            'email' => 'ngguncit@gmail.com',
            'nama_ortu' => 'Ari Pamungkas',
            'alamat' => 'Bandongan',
            'phone_number' => '086789153777',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0067891245',
            'nama' => 'Belinda Ajeng',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Bekasi',
            'tgl_lahir' => '2010-08-05',
            'email' => 'bel123@gmail.com',
            'nama_ortu' => 'Magdalena',
            'alamat' => 'PancaArga',
            'phone_number' => '086788900245',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0067865423',
            'nama' => 'Alvi Sabila',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Cikarang',
            'tgl_lahir' => '2009-12-12',
            'email' => 'alvi@gmail.com',
            'nama_ortu' => 'Suripto',
            'alamat' => 'Mertoyudan',
            'phone_number' => '087233411560',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0089902012',
            'nama' => 'Citra Aulidya',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Bekasi',
            'tgl_lahir' => '2010-09-12',
            'email' => 'citra@gmail.com',
            'nama_ortu' => 'Rudi Budiantoro',
            'alamat' => 'Pakelan',
            'phone_number' => '087654233888',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0076892345',
            'nama' => 'Griselda Hanum',
            'gender' => 'perempuan',
            'tempat_lahir' => 'Tangerang',
            'tgl_lahir' => '2010-03-12',
            'email' => 'griselda@gmail.com',
            'nama_ortu' => 'Panji Aldama',
            'alamat' => 'Kaligoro',
            'phone_number' => '082321345766',
            'kelas_id' => '1'
        ]);
        Siswa::create([
            'nis' => '0076677889',
            'nama' => 'Andika Wahyu Nugroho',
            'gender' => 'laki-laki',
            'tempat_lahir' => 'Magelang',
            'tgl_lahir' => '2010-01-25',
            'email' => 'diko@gmail.com',
            'nama_ortu' => 'Firdaus Aditama',
            'alamat' => 'Secang',
            'phone_number' => '089776554689',
            'kelas_id' => '2'
        ]);
        Siswa::create([
                    'nis' => '0098896554',
                    'nama' => 'Brillian Oktavia',
                    'gender' => 'laki-laki',
                    'tempat_lahir' => 'Surabaya',
                    'tgl_lahir' => '2011-08-07',
                    'email' => 'brilioktavia@gmail.com',
                    'nama_ortu' => 'Aditya Pramono',
                    'alamat' => 'Muntilan',
                    'phone_number' => '085677432213',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0076553478',
                    'nama' => ' jihan Nuari',
                    'gender' => 'perempuan',
                    'tempat_lahir' => 'Padang',
                    'tgl_lahir' => '2009-12-10',
                    'email' => 'jeje@gmail.com',
                    'nama_ortu' => 'Adi Suprapto',
                    'alamat' => 'Mertoyudan',
                    'phone_number' => '089566432212',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0076543345',
                    'nama' => 'Cantika Aprilia Putri',
                    'gender' => 'perempuan',
                    'tempat_lahir' => 'Semarang',
                    'tgl_lahir' => '2010-09-22',
                    'email' => 'cantikaputri@gmail.com',
                    'nama_ortu' => 'Ardian Niko',
                    'alamat' => 'Bandongan',
                    'phone_number' => '08577895543',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0075543367',
                    'nama' => 'Rangga Dwiki Ernando',
                    'gender' => 'laki-laki',
                    'tempat_lahir' => 'Magelang',
                    'tgl_lahir' => '2010-02-03',
                    'email' => 'dwikiernan@gmail.com',
                    'nama_ortu' => 'Kevin Atmaja',
                    'alamat' => 'Salamkanci',
                    'phone_number' => '089766541232',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0098768943',
                    'nama' => 'Asgar Ryamizard',
                    'gender' => 'laki-laki',
                    'tempat_lahir' => 'Jogja',
                    'tgl_lahir' => '2010-09-08',
                    'email' => 'ryamizardasgar@gmail.com',
                    'nama_ortu' => 'Chandra Ryamizard',
                    'alamat' => 'Panca Arga',
                    'phone_number' => '081392005584',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0087453387',
                    'nama' => 'Cinta Elvira',
                    'gender' => 'perempuan',
                    'tempat_lahir' => 'Surabaya',
                    'tgl_lahir' => '2010-10-05',
                    'email' => 'elviracinta@gmail.com',
                    'nama_ortu' => 'Raden Kartika',
                    'alamat' => 'Secang',
                    'phone_number' => '085674356623',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0010453323',
                    'nama' => 'Ernando Putra Raditya',
                    'gender' => 'laki-laki',
                    'tempat_lahir' => 'Magelang',
                    'tgl_lahir' => '2011-08-01',
                    'email' => 'radityaputra@gmail.com',
                    'nama_ortu' => 'Resa Wongso',
                    'alamat' => 'Mertoyudan',
                    'phone_number' => '085543887678',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0085546784',
                    'nama' => 'Al Teranou',
                    'gender' => 'laki-laki',
                    'tempat_lahir' => 'Surabaya',
                    'tgl_lahir' => '2010-11-03',
                    'email' => 'teranou@gmail.com',
                    'nama_ortu' => 'Citra Persada',
                    'alamat' => 'Mertoyudan',
                    'phone_number' => '0856789945',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0010453328',
                    'nama' => 'Adriana Pramesti',
                    'gender' => 'perempuan',
                    'tempat_lahir' => 'Bandung',
                    'tgl_lahir' => '2011-09-21',
                    'email' => 'pramesti@gmail.com',
                    'nama_ortu' => 'Chandra Adiguna',
                    'alamat' => 'KulonProgo',
                    'phone_number' => '089544328798',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '00967541123',
                    'nama' => 'Dwiki Atmajaya',
                    'gender' => 'laki-laki',
                    'tempat_lahir' => 'Madiun',
                    'tgl_lahir' => '2010-05-25',
                    'email' => 'diwikijaya@gmail.com',
                    'nama_ortu' => 'Diki Atmajaya',
                    'alamat' => 'Rindam',
                    'phone_number' => '0813458876',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0076548896',
                    'nama' => 'Dea Ananta Fitriani',
                    'gender' => 'perempuan',
                    'tempat_lahir' => 'Medan',
                    'tgl_lahir' => '2010-12-20',
                    'email' => 'defitriani@gmail.com',
                    'nama_ortu' => 'Aryo Adiguno',
                    'alamat' => 'Klaiangkrik',
                    'phone_number' => '085733210089',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0076554876',
                    'nama' => 'Kayla Kusuma',
                    'gender' => 'perempuan',
                    'tempat_lahir' => 'Jakarta',
                    'tgl_lahir' => '2010-01-02',
                    'email' => 'kayla@gmail.com',
                    'nama_ortu' => 'Arya Kuncoro',
                    'alamat' => 'Secang',
                    'phone_number' => '0813456654',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0098843212',
                    'nama' => 'Navya Navista Sri Ramadhani',
                    'gender' => 'perempuan',
                    'tempat_lahir' => 'Magelang',
                    'tgl_lahir' => '2010-05-13',
                    'email' => 'navista@gmmail.com',
                    'nama_ortu' => 'Derlys',
                    'alamat' => 'Panca Arga',
                    'phone_number' => '0875541238',
                    'kelas_id' => '2'
                ]);
        Siswa::create([
                    'nis' => '0076598743',
                    'nama' => 'Denallie Elee Ramadhani',
                    'gender' => 'perempuan',
                    'tempat_lahir' => 'Jogja',
                    'tgl_lahir' => '2010-06-19',
                    'email' => 'denallie@gmail.com',
                    'nama_ortu' => 'Pradipta',
                    'alamat' => 'Mertoyudan',
                    'phone_number' => '08133456678',
                    'kelas_id' => '2'
            ]);
    }
}