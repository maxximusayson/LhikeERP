<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReleaseSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'releasenote_name'   => 'Release 2.4.0',
                'description'        => 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.',
                'note_release_date'  => '2024-06-06',
                'link'               => 'https://www.youtube.com/watch?v=46_3SXve4Po'
            ],
            [
                'releasenote_name'   => 'Release 2.4.1',
                'description'        => 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.',
                'note_release_date'  => '2024-06-25',
                'link'               => 'https://www.youtube.com/watch?si=gsfOkBbWbm05f-Bj&v=sFEaeZI8J8Y&feature=youtu.be'
            ],
            [
                'releasenote_name'   => 'Release 2.4.2',
                'description'        => 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.',
                'note_release_date'  => '2024-07-10',
                'link'               => 'https://www.youtube.com/watch?v=K2G2zYuFHvw'
            ],
            [
                'releasenote_name'   => 'Release 2.4.3',
                'description'        => 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.',
                'note_release_date'  => '2024-07-24',
                'link'               => 'https://www.youtube.com/watch?v=XZPuOizmNQc'
            ],
            [
                'releasenote_name'   => 'Release 2.4.4',
                'description'        => 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.',
                'note_release_date'  => '2024-08-07',
                'link'               => 'https://www.youtube.com/watch?v=EdkyCK5Q7BM'
            ],
            [
                'releasenote_name'   => 'Release 2.4.5',
                'description'        => 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.',
                'note_release_date'  => '2024-08-21',
                'link'               => 'https://www.youtube.com/watch?v=s6qNpefDD9Y'
            ],
            [
                'releasenote_name'   => 'Release 2.4.6',
                'description'        => 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.',
                'note_release_date'  => '2024-10-09',
                'link'               => 'https://www.youtube.com/watch?v=3f4wNpyliQw'
            ],
            [
                'releasenote_name'   => 'Release 2.4.7',
                'description'        => 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.',
                'note_release_date'  => '2024-11-04',
                'link'               => 'https://www.youtube.com/watch?v=Pe_6TkEWmJU'
            ],
            [
                'releasenote_name'   => 'Release 2.4.8',
                'description'        => 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.',
                'note_release_date'  => '2024-09-18',
                'link'               => 'https://www.youtube.com/watch?v=ZsyDyOtKPUQ'
            ],
            [
                'releasenote_name'   => 'Release 2.4.9',
                'description'        => 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.',
                'note_release_date'  => '2024-11-27',
                'link'               => 'https://www.youtube.com/watch?v=CHN3YP8ILTQ'
            ]
        ];

        // Insert batch data into the releaseNotes table
        $this->db->table('releaseNotes')->insertBatch($data);
    }
}