<?php
/**
 * @file
 * Contains \Drupal\export\Controller\CSVReportsController.
 */

namespace Drupal\export\Controller;

use Drupal\Core\Controller\ControllerBase;


class CSVReportsController extends ControllerBase
{

    public function reports()
    {

        $headers = ['ID ', 'Nom', 'Email'];
        $data = [
            [
                'id' => 1,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 2,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 3,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 4,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 5,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 6,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 7,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 8,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 9,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 10,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 11,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
            [
                'id' => 12,
                'nom' => 'ridha',
                'email' => 'email@test.com'
            ],
        ];
        if (!empty($data)) {
            $game_data = [];
            foreach ($data as $record) {
                $game_data[] = [
                    'id' => $record['id'],
                    'nom' => $record['nom'],
                    'email' => $record['email']
                ];
            }

            $output[] = [
                '#theme' => 'hello_export_reports',
                '#header_data' => $headers,
                '#record_data' => $game_data,
            ];
            //kint($output);
            return $output;
        }
    }
}