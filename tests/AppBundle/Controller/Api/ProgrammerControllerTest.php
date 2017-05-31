<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 19:14
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace tests\AppBundle\Controller\Api;

use PHPUnit\Framework\TestCase;

class ProgrammerControllerTest extends TestCase
{
    public function testControllerResponse()
    {
        $client = new \GuzzleHttp\Client([
            'base_url' => 'http://loc.wateruprestapi/api/programmer',
            'defaults' => [
                'exceptions' => false
            ]
        ]);

        $response = $client->post('/api/programmers');

        $this->assertEquals(200, $response->getStatusCode() );
    }
}
