<?php
/**
 * @file
 * Contains \Drupal\export\Controller\CSVController.
 */
namespace Drupal\export\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class CSVController extends ControllerBase
{

    public function downloadData()
    {

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

        $delimiter = ' ';
        $header = array('ID', 'Name', 'Email');
        $file_name = 'export_' . date('Y-m-d_H-i') . '.csv';
        $rows[] = implode($delimiter, $header);
        if (!empty($data)) {
            foreach ($data as $record) {
                $fields = [
                    $record['id'],
                    $record['nom'],
                    $record['email']
                ];
                $rows[] = implode($delimiter, $fields);
            }
        }

        $content = implode("\n", $rows);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename=' . $file_name);

        return $response;
    }
}